<?php namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use adminsel\Http\Controllers\Controller;

use adminsel\Models\Marca;
use adminsel\Models\Gama;
use adminsel\Models\Modelo;
use adminsel\Models\Accesorio;
use adminsel\Models\FallaGenerica;
use adminsel\Models\Servicio;
use adminsel\Models\ServEquipo;
use adminsel\Models\SelConfig;
use adminsel\Models\Repuesto;
use adminsel\Models\ServGama;
use adminsel\Models\Equipo;
use adminsel\Models\OrdenReparacion;
use adminsel\Models\EquipoAccesorio;
use adminsel\Models\EquipoFalla;
use adminsel\Models\Historial; 
use adminsel\Models\EquipoRepuesto;


class AtPublicoController extends Controller
{
	//------------------------------------------
	//------------------------------------------
	//------------------------------------------ 
    public function index()
    {
        $idSEL = 1;
    	$marcas = Marca::all()->toArray();
        $gamas = Gama::all()->toArray();
        $accesorios = Accesorio::all()->toArray();
        $fallasGen = FallaGenerica::all()->toArray();
        $servicios = SelConfig::find($idSEL)->servicios;
    	
    	return response()->json([
    			"msg"=>"Succes",
    			"marcas"=>$marcas,
                "gamas"=>$gamas,
                "fallas"=>$fallasGen,
                "accesorios"=>$accesorios,
                "servicios"=>$servicios->toArray()
    			], 200);    	
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getModelos(Request $request)
    {
        $idMarca = $request->idMarca;     

        $modelos = Marca::find($idMarca)->modelos;                 

        return response()->json([
                "msg"=>"Succes",
                "modelos"=>$modelos->toArray()
                ],200);
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getRepuestos(Request $request)
    {
        $idModelo = $request->idModelo;     

        $repuestos = Modelo::find($idModelo)->repuestos;                 

        return response()->json([
                "msg"=>"Succes",
                "repuestos"=>$repuestos->toArray()
                ],200);
    }
    //--------------------------------------------------------
    //--------------------------------------------------------
    //--------------------------------------------------------
    public function calcularFechaEntrega()
    {
        $hoy = getdate();
        $i = 0;
        $B = 0;
        $selconfig = SelConfig::find(1);
        $cupo = $selconfig->cupoReparacion;
        while ($i <= 14 and $B == 0) 
        {
            $fechaCosulta = date_create($hoy['year'].'-'.$hoy['mon'].'-'.$hoy['mday']);         
            date_add($fechaCosulta,date_interval_create_from_date_string( $i." days"));         
            $cantEquipo = Equipo::where('fechaEntrega', '=', $fechaCosulta)->count();                                   
            if ($cantEquipo < $cupo)
            {
                $B = 1;             
            }           
            $i++;
        }
        return date_format($fechaCosulta,"Y-m-d");
        //return date_format($fechaCosulta,"d-m-Y");
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function  getPresupuesto(Request $request)
    {

        $idGama = $request->idGama;  //Input::get('idGama');        
        $vectorRep = $request->vectorRep; //Input::get('vectorRep');
        $vectorServ = $request->vectorServ; // Input::get('vectorServ');
        $totalRep = 0; 
        $totalServ = 0;
        if ( sizeof($vectorRep) != 0) 
        {
            foreach ($vectorRep as $idRep) {
                $idRep = (int) $idRep;
                $rep = Repuesto::find($idRep); //rep id:2=>120----rep id:3=>40
                $totalRep = $totalRep + $rep->precioVenta; // totalRep = 160
            }
            
        }
        if ( sizeof($vectorServ) != 0) 
        {
            foreach ($vectorServ as $idServ) {
                $idServ = (int) $idServ;
                $idGama = (int) $idGama; // ser:2 gama:3 =>80 --- serv:3 gama:3 =>80
                $Servgama = ServGama::where('servgama_idserv_foreign', '=', $idServ)
                                    ->where('servgama_idgam_foreign', '=', $idGama)
                                    ->first();
                
                $totalServ = $totalServ + $Servgama->costoserv; // totalServ = 160            
            }           
        }   
        $costoMO = Gama::find($idGama)->costoManoObra;  
        //--- funcion q calcula la fecha de entrega---
        $fechaPres = AtPublicoController::calcularFechaEntrega();
        
        return response()->json([
                "msg"=>"Succes",
                "costoMO"=>$costoMO,
                "totalRep"=>$totalRep,
                "totalServ"=>$totalServ,
                "fechaPres"=>$fechaPres
                ],200);        
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getGuardarPresupuesto(Request $request)
    {
        // se deben validar los datos de la orden 
        $datosOrden = $request->datosOrden;// datos de la orden a guardar
        $arrayEq = $request->arrayEq;// validar los datos del equipo
       
        //var_dump($arrayEq);        

        $orden = new OrdenReparacion;
        $orden->apeNom = $datosOrden['apenom'];
        $orden->telefono = $datosOrden['telefono'];
        $orden->anticipo = $datosOrden['anticipo'];
        $orden->observacion = $datosOrden['observacion'];
        $orden->save();        
        // guardar cada equipo del arrayEq 
        if ( sizeof($arrayEq) != 0) 
        {
            foreach ($arrayEq as $eq)
            {                
                $equipo = new Equipo;                               
                $equipo->imei = $eq['imei'];
                $equipo->fechaEntrega = $eq['fechaEst'];
                $equipo->estadoReparacion = 'PENDIENTE';// listo..   CON DEMORA
                $equipo->estadoGarantia = 'PENDIENTE';// SI ...NO..
                $equipo->estadoPago = 'PENDIENTE'; // PAGADO.. PENDIENTE
                $equipo->presupEstimado = (int) $eq['presupEst'];
                $equipo->presupFinal = 0;
                $equipo->save();                
                //----guardamos la relacion con la orden de reparacion----                              
                $orden = OrdenReparacion::find($orden->id);                
                $equipo = $orden->equipos()->save($equipo);
                 //----guardamos la relacion con gama----
                $idGama = $eq['idGama']; //Input::get('valorIdGama');
                if ($idGama != 0) 
                {
                    $gama = Gama::find($idGama);
                    $equipo = $gama->equipos()->save($equipo);
                }
                 //----guardamos la relacion con modelo----
                $idMod = $eq['idModelo'];// Input::get('valorIdMod');
                if ($idMod != 0)
                {
                    $modelo = Modelo::find($idMod);
                    $equipo = $modelo->equipos()->save($equipo);
                }         
                //--------creamos y guardamos empleadoequipo-------
                /*$idEmpleado = Auth::user()->get()->id;              
                $empl = Empleado::find($idEmpleado);                
                $empEq = new EmpleadoEquipo;
                $empEq->save();             
                $empEq = $empl->equipos()->save($empEq);            
                $empEq = $equipo->empleados()->save($empEq);     */

                //--------creamos y guardamos equipohistorial-------                
                $hist = new Historial;
                $hist->evento = 'ENTRADA NORMAL';// ENTRADA GARANTIA.. SALIDA LISTO.. SALIDA SIN REPARAR                                
                $hist->descripcionFalla = $eq['descripFalla']; //Input::get('descripFalla');
                $hist->save();
                $hist = $equipo->historiales()->save($hist);                
                //-------guardar las fallas genericas---------------
                $vectorFG = $eq['vectorFalla'];
                //var_dump($vectorFG);
                if ( sizeof($vectorFG) != 0) // si tiene fallas declaradas 
                {
                    foreach ($vectorFG as $idFG) {
                        //var_dump('dentro del foreach de fallas');     
                        $FG = FallaGenerica::find($idFG);
                        $eqFalla = new EquipoFalla;
                        $eqFalla->save();
                        $eqFalla = $equipo->fallas()->save($eqFalla);
                        $eqFalla = $FG->equipos()->save($eqFalla);                  
                    }               
                }
                //-------guardar los servicios----------------------
                $vectorS = $eq['vectorServ'];
                //var_dump($vectorS);
                if ( sizeof($vectorS) != 0) // si tiene servicios declarados
                {
                    foreach ($vectorS as $idS) {
                        //var_dump('dentro del foreach de servicios');                          
                        $S = Servicio::find($idS);
                        $serveq = new ServEquipo;
                        $serveq->save();
                        $serveq = $equipo->servicios()->save($serveq);
                        $serveq = $S->equipos()->save($serveq);                 
                    }               
                }
                //---------guardar accesorios--------------------
                $vectorAcc = $eq['vectorAcc'];
                //var_dump($vectorAcc);
                if ( sizeof($vectorAcc) != 0) // si tiene servicios declarados
                {
                    foreach ($vectorAcc as $idAcc) {
                        //var_dump('dentro del foreach de accesorios');     
                        $A = Accesorio::find($idAcc);
                        $eqAcc = new EquipoAccesorio;
                        $eqAcc->save();
                        $eqAcc = $equipo->accesorios()->save($eqAcc);
                        $eqAcc = $A->equipos()->save($eqAcc);                   
                    }               
                }
                //----------guardar repuestos--------------------
                $vectorRep = $eq['vectorRep'];
                //var_dump($vectorRep);
                if ( sizeof($vectorRep) != 0) // si tiene fallas declaradas
                {
                    foreach ($vectorRep as $Rep) {
                        //var_dump('dentro del foreach de repuestos');  
                        //var_dump($Rep['id']);    
                        $rep = Repuesto::find($Rep['id']);  
                        //var_dump($rep);
                        $eqRep = new EquipoRepuesto;
                        $eqRep->save();                    
                        $eqRep = $rep->equipos()->save($eqRep); 
                        $eqRep = $equipo->repuestos()->save($eqRep);                                            
                    }               
                }

            }           
        }  
        
        return response()->json(["msg"=>"Succes",'ultimoIdOrden'=>$orden->id],200);  
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function recepcion()
    {
        return \View::make('AtPublico.recepcion');                  
    }
    //-------------------------------------------------------------------------------
    //----------------------------ENTREGA--------------------------------------------
    //-------------------------------------------------------------------------------
    public function entrega()
    {
        return \View::make('AtPublico.entrega');                
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getOrdenApeNom(Request $request)
    {
        $term = $request->term;
        //$term = 'ru';
        $ordenes = OrdenReparacion::where('apeNom', 'LIKE', "%$term%")->get();   

        return response()->json([
                "msg"=>"Succes",
                "ordenes"=>$ordenes                
                ],200);           
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getOrdenNumero(Request $request)
    {
        $term = $request->term;
        //$term = 1;
        $ordenes = OrdenReparacion::where('id', 'LIKE', "%$term%")->get();

        return response()->json([
                "msg"=>"Succes",
                "ordenes"=>$ordenes
                ],200); 
    }
    //------------------------------------------
    //------------------------------------------
    //------------------------------------------
    public function getTraerOrden(Request $request)
    {
        $idOrden = $request->idOrden;        
       // $idOrden = 7;
        // buscar orden primero, para la orden buscar todos los telefonos
        $orden = OrdenReparacion::find($idOrden);
        $equipos = OrdenReparacion::find($idOrden)->equipos;
        // para cada equipo se recupera la marca, modelo y gama e insertar en formato json
        foreach ($equipos as $equipo)
        {
            $idEq = $equipo->id;
            $gama = Gama::find($equipo->equipo_idGama_foreign);
            $modelo = Modelo::find($equipo->equipo_idMod_foreign);
            $marca = Marca::find($modelo->modelo_idmarca_foreign);       
            $equipo['gama'] = $gama->nombreGama;
            $equipo['modelo'] = $modelo->nombreModelo;
            $equipo['marca'] = $marca->nombreMarca;
            //traer datos de falla, accesorios, repuesto
            $eqAcc = EquipoAccesorio::where('equipoaccesorio_ideq_foreign','=',$idEq)->get();           
            $vectorAcc = array();
            if (sizeof($eqAcc) != 0)
            {               
                foreach ($eqAcc as $eqa)
                {                   
                    $accesorio = Accesorio::find($eqa->equipoaccesorio_idacc_foreign);
                    $vectorAcc[] = $accesorio->nombreAccesorio;
                }
            }
            else
            {
                $vectorAcc[] = 'No se declararon';
            };
            $equipo['vectorAcc'] = $vectorAcc;

            //--------------------------------

            $eqFalla = EquipoFalla::where('equipofalla_ideq_foreign','=',$idEq)->get();           
            $vectorFalla = array();
            if (sizeof($eqFalla) != 0)
            {               
                foreach ($eqFalla as $eqfa)
                {                   
                    $fallasgen = FallaGenerica::find($eqfa->equipofalla_idfallaGen_foreign); 
                    $vectorFalla[] = $fallasgen->descripcionFallaGen;
                }
            }
            else
            {
                $vectorFalla[] = 'No se declararon';
            };
            $equipo['vectorFalla'] = $vectorFalla;

        }
        
        return response()->json([
                "msg"=>"Succes",
                "orden"=>$orden,
                "equipos"=>$equipos,
                //"eqAcc"=>$eqAcc,
                //"vectorAcc"=>$vectorAcc
                ],200);                
    }
    /*{
        $idOrden = $request->idOrden;
        //$idOrden = 7;
        // buscar orden primero, para la orden buscar todos los telefonos
        $orden = OrdenReparacion::find($idOrden);
        $equipos = OrdenReparacion::find($idOrden)->equipos;
        // para cada equipo se recupera la marca, modelo y gama e insertar en formato json
        foreach ($equipos as $equipo)
        {
            $gama = Gama::find($equipo->equipo_idGama_foreign);
            $modelo = Modelo::find($equipo->equipo_idMod_foreign);
            $marca = Marca::find($modelo->modelo_idmarca_foreign);       
            $equipo['gama'] = $gama->nombreGama;
            $equipo['modelo'] = $modelo->nombreModelo;
            $equipo['marca'] = $marca->nombreMarca;
            // traer los demas datos del equipo, fallas, servicios, accesorios, repuestos
            
        }

        return response()->json([
                "msg"=>"Succes",
                "orden"=>$orden,
                "equipos"=>$equipos
                ],200);                
    }*/

}

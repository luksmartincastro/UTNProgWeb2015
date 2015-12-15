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
use adminsel\Models\SelConfig;
use adminsel\Models\Repuesto;
use adminsel\Models\ServGama;
use adminsel\Models\Equipo;
use adminsel\Models\OrdenReparacion;

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
    }

}

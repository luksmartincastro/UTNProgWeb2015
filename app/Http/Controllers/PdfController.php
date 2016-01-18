<?php namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades;

use adminsel\Http\Controllers\Controller;
use \PDF;

use adminsel\Models\SelConfig;
use adminsel\Models\OrdenReparacion;
use adminsel\Models\Equipo;
use adminsel\Models\Marca;
use adminsel\Models\Modelo;
use adminsel\Models\FallaGenerica;
use adminsel\Models\EquipoFalla;
use adminsel\Models\Servicio;
use adminsel\Models\ServEquipo;
use adminsel\Models\EquipoAccesorio;
use adminsel\Models\Accesorio;
use adminsel\Models\EquipoRepuesto; 
use adminsel\Models\Repuesto; 


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imprimirOrdenRep(Request $request)
    {
        //require_once(base_path()."/vendor/dompdf/dompdf/dompdf_config.inc.php"); 

        $idOrden = (int)$request->idOrden;        
        
        $vectorEq = Equipo::where('equipo_idOrden_foreign', '=', $idOrden)->get();
        $cantEq = sizeof($vectorEq);
        foreach ($vectorEq as $eq)
        {             
            $parameter = array();  
            $parameter['cantEq'] = $cantEq; 
            //---- recuperar datos del negocio ----
            $sel = SELConfig::find(1);
            $parameter['cuit'] = $sel->cuit;
            $parameter['direc'] = $sel->direccion;
            $parameter['tel'] = $sel->telefono;
            $parameter['fecha'] = date('d-m-Y');
            $parameter['numOr'] = '000'.$idOrden;
            // --- recuperamos datos del cliente
            $orden = OrdenReparacion::find($idOrden);
            $parameter['apenom'] = $orden->apeNom;
            $parameter['anticipo'] = $orden->anticipo;
            $parameter['telefono'] = $orden->telefono;
            $parameter['domicilio'] = $orden->domicilio;
            //-----RECUPERAR DATOS DEL EQUIPO-----
            $mod = Modelo::find($eq->equipo_idMod_foreign);     
            $mar = Marca::find($mod->modelo_idmarca_foreign);
            $parameter['marca'] = $mar->nombreMarca;
            $parameter['modelo'] = $mod->nombreModelo;
            $parameter['imei'] = $eq->imei;   

            $parameter['presupEst'] = $eq->presupEstimado;
            $parameter['fechaEntrega'] = $eq->fechaEntrega;
            //-----RECUPERAR DATOS DE LAS FALLAS-----
            $vectorFallaEq = EquipoFalla::where('equipofalla_ideq_foreign', '=', $eq->id)->get();
            $parameter['descripFalla'] = '';
            if (sizeof($vectorFallaEq) != 0)
            {                
                foreach ($vectorFallaEq as $fEq)
                { 
                    $f = FallaGenerica::find($fEq->equipofalla_idfallaGen_foreign);                
                    $parameter['descripFalla'] = $parameter['descripFalla'].' - '.$f->descripcionFallaGen;
                }                
            } else {
                $parameter['descripFalla'] = 'NO SE DECLARARON FALLAS';
            }

            //-----RECUPERAR DATOS DE LOS SERVICIOS-----
            $vectorServ = ServEquipo::where('servequipo_ideq_foreign', '=', $eq->id)->get();
            $parameter['servicio'] = '';
            if (sizeof($vectorServ) != 0)
            {                
                foreach ($vectorServ as $eqServ)
                { 
                    $serv = Servicio::find($eqServ->servequipo_idserv_foreign);         
                    $parameter['servicio'] = $parameter['servicio'].' - '.$serv->nombreServicio;
                }                
            } else {
                $parameter['servicio'] = 'NO SE DECLARARON SERVICIOS';
            }

            //-----RECUPERAR DATOS DE LOS ACCESORIOS-----            
            $vectorAcc = EquipoAccesorio::where('equipoaccesorio_ideq_foreign', '=', $eq->id)->get();
            $parameter['accesorio'] = '';
            if (sizeof($vectorAcc) != 0)
            {                
                foreach ($vectorAcc as $eqAcc)
                { 
                    $acc = Accesorio::find($eqAcc->equipoaccesorio_idacc_foreign);          
                    $parameter['accesorio'] = $parameter['accesorio'].' - '.$acc->nombreAccesorio;
                }
                
            } else {
                $parameter['accesorio'] = 'NO SE DECLARARON ACCESORIOS';
            }            
            //-----RECUPERAR DATOS DE LOS REPUESTOS-----            
            $parameter['repuesto'] = '';
            $vectorRep = EquipoRepuesto::where('equiporepuesto_ideq_foreign', '=', $eq->id)->get();

            if (sizeof($vectorRep) != 0)
            {                
                foreach ($vectorRep as $eqRep)
                { 
                    $rep = Repuesto::find($eqRep->equiporepuesto_idrep_foreign);          
                    $parameter['repuesto'] = $parameter['repuesto'].' - '.$rep->nombreRep;
                }
            } else {
                $parameter['repuesto'] = 'NO SE USARON REPUESTOS';
            }
            
            //-------------------------------------------
            $parametro[] = $parameter;
        }

        
        $pdf = PDF::loadView('Reportes.reporte2', ['parameters'=>$parametro])->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream('reporte2');               
    }
    //-----------------------------------------
    public function imprimirOrdenRep2()
    {
                
        $pdf = PDF::loadView('Reportes.ReporteOrdenRep',$parameter)->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }

    
}

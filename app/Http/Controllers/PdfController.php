<?php namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades;

//use adminsel\Http\Requests;
use adminsel\Http\Controllers\Controller;
use \PDF;
//use \App;

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

        $idOrden = $request->idOrden; 
        $parameter['apenom'] = 'Lucas Martin castro';  
        $parameter['telContac'] = '3816408757';      
        $pdf = PDF::loadView('Reportes.reporte2',$parameter)->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream('reporte2');

        //$invoice = "2222";
        /*$apenom = 'Lucas Martin castro';
        $telContac = '3816408757';
        $view =  \View::make('Reportes.reporte2', compact('apenom', 'telContac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reporte2');*/        
    }
    //-----------------------------------------
    public function imprimirOrdenRep2()
    {
                
        $pdf = PDF::loadView('Reportes.ReporteOrdenRep',$parameter)->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }

    
}

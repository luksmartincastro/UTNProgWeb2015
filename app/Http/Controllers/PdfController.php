<?php namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades;

use adminsel\Http\Requests;
use adminsel\Http\Controllers\Controller;
use \PDF;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imprimirOrdenRep(Requests $request)
    {
        $idOrden = $request->idOrden;
        $parameter['apenom'] = 'Lucas Martin castro';        
        $pdf = PDF::loadView('Reportes.reporte2',$parameter)->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }
    //-----------------------------------------
    public function imprimirOrdenRep2()
    {
                
        $pdf = PDF::loadView('Reportes.ReporteOrdenRep',$parameter)->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }

    
}

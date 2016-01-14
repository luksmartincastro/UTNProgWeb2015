<?php

namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;
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
    public function imprimirOrdenRep()
    {
                
        $pdf = PDF::loadView('Reportes.reporte2')->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }
    //-----------------------------------------
    public function imprimirOrdenRep2()
    {
                
        $pdf = PDF::loadView('Reportes.ReporteOrdenRep')->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();        
    }

    
}

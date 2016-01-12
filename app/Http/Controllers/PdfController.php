<?php

namespace adminsel\Http\Controllers;

use Illuminate\Http\Request;

//use adminsel\Http\Requests;
use adminsel\Http\Controllers\Controller;
use PDF;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imprimirOrdenRep()
    {
        require_once(base_path()."/vendor/dompdf/dompdf/dompdf_config.inc.php"); 
        //-------------
        $pdf = PDF::loadView('Reportes.ordenReparacion')->setPaper('a4')->setOrientation('landscape');              
        return $pdf->stream();

        /*$view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');*/
    }

    
}

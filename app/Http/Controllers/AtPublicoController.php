<?php

namespace adminsel\Http\Controllers;

class AtPublicoController extends Controller
{
	//------------------------------------------
	//------------------------------------------
	//------------------------------------------
    public function index()
    {
        return \View::make('layout1');   
        //return "AtPublicoControlador Index";
    }
}

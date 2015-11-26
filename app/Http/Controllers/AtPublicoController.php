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
    //------------------------------------------
	//------------------------------------------
	//------------------------------------------
    public function recepcion()
    {
        return \View::make('AtPublico.recepcion');   		        
    }
    //------------------------------------------
	//------------------------------------------
	//------------------------------------------
    public function entrega()
    {
        return \View::make('AtPublico.entrega');   		        
    }
}

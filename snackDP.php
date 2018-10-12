<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class snackDP extends Controller
{
	function sugerir($opcion)
	{
		switch ($opcion) {
			case 1 : $listado = array(
								array("nombre"=>"Platanitos", "precio"=> 1.5),
								array("nombre"=>"Panchitos", "precio"=> 1),
								array("nombre"=>"Papitas", "precio"=> 2)
							);
				break;
			case 2 : $listado = array(
								array("nombre"=>"Suspiros", "precio"=> 3.5),
								array("nombre"=>"Gomitas", "precio"=> 2.75),
								array("nombre"=>"Chocolate", "precio"=> 4.5)
							);
				break;
				case 3 : $listado = array(
									array("nombre"=>"Almendras", "precio"=> 4.75),
									array("nombre"=>"Habas", "precio"=> 3),
									array("nombre"=>"Tostado", "precio"=> 2.25)
								);
					break;
			default:
			$listado = array();
				break;
					 }
	return view('lista',['listado' =>$listado]);
	}
}

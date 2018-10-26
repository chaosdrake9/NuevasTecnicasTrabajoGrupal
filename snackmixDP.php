<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class snackmixDP extends Controller
{
	function sugerir($opcion)
	{
		switch ($opcion) {
			case 1 : $listado = array(
								array("nombre"=>"Papas y Chifles", "precio"=> 1.5),
								array("nombre"=>"Platanitos y Papas", "precio"=> 1),
								array("nombre"=>"Canguil y Tostado", "precio"=> 2)
							);
				break;
			case 2 : $listado = array(
								array("nombre"=>"Suspiros y chocolates", "precio"=> 3.5),
								array("nombre"=>"Gomitas y chupetes", "precio"=> 2.75),
								array("nombre"=>"Chocolate y almendras", "precio"=> 4.5)
							);
				break;
				case 3 : $listado = array(
									array("nombre"=>"Almendras y tostado", "precio"=> 4.75),
									array("nombre"=>"Habas y queso", "precio"=> 3),
									array("nombre"=>"Tostado con chocho", "precio"=> 2.25)
								);
					break;
			default:
			$listado = array();
				break;
					 }
	return view('lista',['listado' =>$listado]);
	}
}

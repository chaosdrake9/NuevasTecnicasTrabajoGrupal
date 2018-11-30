<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class snackDP extends Controller
{
	function sugerir($opcion)
	{
		switch ($opcion) {
			case s1 : $listado = array(
								array("nombre"=>"Platanitos", "precio"=> 1.5),
								array("nombre"=>"Panchitos", "precio"=> 1),
								array("nombre"=>"Papitas", "precio"=> 2),
								array("nombre"=>"Chifles", "precio"=> 1.75)
							);
				break;
			case s2 : $listado = array(
								array("nombre"=>"Suspiros", "precio"=> 3.5),
								array("nombre"=>"Gomitas", "precio"=> 2.75),
								array("nombre"=>"Chocolate", "precio"=> 4.5),
								array("nombre"=>"Besitos", "precio"=> 2.15)
							);
				break;
				case s3 : $listado = array(
									array("nombre"=>"Almendras", "precio"=> 4.75),
									array("nombre"=>"Habas", "precio"=> 3),
									array("nombre"=>"Tostado", "precio"=> 2.25),
									array("nombre"=>"Cueritos", "precio"=> 3.25)
								);
					break;
			default:
			$listado = array();
				break;
					 }
					 case m1 : $listado = array(
								array("nombre"=>"Papas y Chifles", "precio"=> 1.5),
								array("nombre"=>"Platanitos y Papas", "precio"=> 1),
								array("nombre"=>"Canguil y Tostado", "precio"=> 2),
								array("nombre"=>"Habas y Queso", "precio"=> 2.3)
							);
				break;
				case m2 : $listado = array(
								array("nombre"=>"Suspiros y chocolates", "precio"=> 3.5),
								array("nombre"=>"Gomitas y chupetes", "precio"=> 2.75),
								array("nombre"=>"Chocolate y almendras", "precio"=> 4.5),
								array("nombre"=>"Caramelos y Besitos", "precio"=> 4.15)
							);
				break;
				case m3 : $listado = array(
									array("nombre"=>"Almendras y tostado", "precio"=> 4.75),
									array("nombre"=>"Habas y queso", "precio"=> 3),
									array("nombre"=>"Tostado con chocho", "precio"=> 2.25),
									array("nombre"=>"Tostado con chicharron", "precio"=> 3.75)
								);
					break;
			default:
			$listado = array();
				break;
					 }
	return view('lista',['listado' =>$listado]);
	}
}
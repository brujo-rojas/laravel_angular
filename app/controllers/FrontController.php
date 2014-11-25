<?php

class FrontController extends BaseController {

	public function clase()
	{
		$data["saludos"] = "hola";
 		return View::make('clase.clase', $data);
	}

	public function exp1()
	{
		$data["saludos"] = "hola";
 		return View::make('exp.uno', $data);
	}

	public function mostrar()
	{
		$datos = [
			["titulo" => "un titulo", "texto" => "un texto"],
			["titulo" => "un titulo", "texto" => "un texto"],
			["titulo" => "un titulo", "texto" => "un texto grande"]
		];
		return Response::json($datos);

	}

}

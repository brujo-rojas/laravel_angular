<?php

class FrontController extends BaseController {

	public function clase()
	{
		$data["saludos"] = "hola";
 		return View::make('clase.clase', $data);
	}

}

<?php

class CrudController extends BaseController {

	public function getIndex()
	{
		return View::make("exp.dos.dos");
	}

	public function getTemplate()
	{
		return View::make("exp.dos.lista");
	}

	public function getLista()
	{
		$all = Texto::all();

		$data = ["status" => "ok", "lista"=> $all->toArray()];
		return Response::json($data);
	}

	public function deleteItem($id){
		$t = Texto::find($id);
		$t->delete();


		$all = Texto::all();

		$data = ["status" => "ok", "lista"=> $all->toArray()];
		return Response::json($data);
	}


	public function addItem(){
		$t = new Texto;
		$t->titulo = Input::get("titulo");
		$t->descripcion = Input::get("descripcion");
		$t->save();

		$all = Texto::all();

		$data = ["status" => "ok", "lista"=> $all->toArray()];
		return Response::json($data);

	}
}

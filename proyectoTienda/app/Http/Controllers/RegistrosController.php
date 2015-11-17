<?php namespace App\Http\Controllers;

class RegistrosController extends Controller {

	
	

	public function vistaRegistros(){
		return view ('Registros/paginaRegistro');
	}

	public function postCreate()
	{
		//Validamos reglas
		$rules = array(
			'nombre' => 'required|max:100',
			'correo' => 'required|max:100',
		);

		$validation = Validator::make(Input::all(),$rules);
		if($validation -> fails()){
			return Redirect::back()->whit_input() -> whith_errors($validation);
		}

		//Si todo esta bien entonces guardamos 
		
	}

}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    
	public $table = "productos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "tipoproducto",
		"CLAVE",
		"Fechaingreso",
		"cantidad",
		"descripcion",
		"costocompra",
		"costoventa",
		"imagen"
	];

	public static $rules = [
	    "tipoproducto" => "required",
		"CLAVE" => "required",
		"Fechaingreso" => "",
		"cantidad" => "required",
		"descripcion" => "",
		"costocompra" => "required",
		"costoventa" => "required",
		"imagen" => ""
	];

}

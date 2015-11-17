<?php

namespace App\Libraries\Repositories;


use App\Models\productos;
use Illuminate\Support\Facades\Schema;

class productosRepository
{

	/**
	 * Returns all productos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return productos::all();
	}

	public function search($input)
    {
        $query = productos::query();

        $columns = Schema::getColumnListing('productos');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores productos into database
	 *
	 * @param array $input
	 *
	 * @return productos
	 */
	public function store($input)
	{
		return productos::create($input);
	}

	/**
	 * Find productos by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|productos
	 */
	public function findproductosById($id)
	{
		return productos::find($id);
	}

	/**
	 * Updates productos into database
	 *
	 * @param productos $productos
	 * @param array $input
	 *
	 * @return productos
	 */
	public function update($productos, $input)
	{
		$productos->fill($input);
		$productos->save();

		return $productos;
	}
}
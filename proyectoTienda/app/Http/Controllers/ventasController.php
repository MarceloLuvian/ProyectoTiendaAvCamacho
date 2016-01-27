<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

            if(isset($_GET["name"]))
            {
                $buscar=htmlspecialchars(trim($request->get("name")));

                $productos = \DB::
                            table('productos')
                            ->where('Tipoproducto','like', '%'.$buscar.'%')
                            ->orwhere('CLAVE', 'like', '%'.$buscar.'%')
                            ->orwhere('descripcion', 'like', '%'.$buscar.'%')
                            ->orwhere('cantidad','like', '%'.$buscar.'%')
                            ->orwhere('fechaingreso', 'like', '%'.$buscar.'%')
                            ->orwhere('costoventa', 'like', '%'.$buscar.'%')                            
                            ->paginate(5);
                            return view('ventas.index', ['productos' => $productos]);

            }else{


     $productos = \DB::table('productos')->select('id','CLAVE', 'descripcion','costoventa','cantidad')->paginate(5);


      return view('ventas.index', ['productos' => $productos]);
}
              
    }

public function consulta($id){
    $carrito = \DB::table('productos')->select('id','CLAVE', 'descripcion','costoventa')
    ->where('id', '=', $id)
    ->paginate();
        return Response::json($carrito);
        return view("ventas.index");
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array = \DB::table('productos')->where('clave','descripcion','=', $id)->get();
        return $array;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

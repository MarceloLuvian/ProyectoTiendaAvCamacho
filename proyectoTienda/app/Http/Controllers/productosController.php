<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateproductosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\productosRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class productosController extends AppBaseController
{

	/** @var  productosRepository */
	private $productosRepository;

	function __construct(productosRepository $productosRepo)
	{
		$this->productosRepository = $productosRepo;
	}

	/**
	 * Display a listing of the productos.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->productosRepository->search($input);

		$productos = $result[0];

		$attributes = $result[1];

		return view('productos.index')
		    ->with('productos', $productos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new productos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.create');
	}

	/**
	 * Store a newly created productos in storage.
	 *
	 * @param CreateproductosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateproductosRequest $request)
	{
        $input = $request->all();

		$productos = $this->productosRepository->store($input);

		Flash::message('El producto se guardo correctamente.');

		return redirect(route('productos.index'));
	}

	/**
	 * Display the specified productos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productos = $this->productosRepository->findproductosById($id);

		if(empty($productos))
		{
			Flash::error('productos not found');
			return redirect(route('productos.index'));
		}

		return view('productos.show')->with('productos', $productos);
	}

	/**
	 * Show the form for editing the specified productos.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productos = $this->productosRepository->findproductosById($id);

		if(empty($productos))
		{
			Flash::error('productos not found');
			return redirect(route('productos.index'));
		}

		return view('productos.edit')->with('productos', $productos);
	}

	/**
	 * Update the specified productos in storage.
	 *
	 * @param  int    $id
	 * @param CreateproductosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateproductosRequest $request)
	{
		$productos = $this->productosRepository->findproductosById($id);

		if(empty($productos))
		{
			Flash::error('productos not found');
			return redirect(route('productos.index'));
		}

		$productos = $this->productosRepository->update($productos, $request->all());

		Flash::message('producto actualizado correctamente.');

		return redirect(route('productos.index'));
	}

	/**
	 * Remove the specified productos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$productos = $this->productosRepository->findproductosById($id);

		if(empty($productos))
		{
			Flash::error('productos not found');
			return redirect(route('productos.index'));
		}

		$productos->delete();

		Flash::message('producto eliminado correctamente.');

		return redirect(route('productos.index'));
	}

}

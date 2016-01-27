<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateproductosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\productosRepository;
use Mitul\Controller\AppBaseController;
use Illuminate\Database\Eloquent\Model;
use Response;
use Flash;
use App\Services\Pagination;
use Illuminate\Support\Facades\Paginator;

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
                            ->paginate(8);
                           
                            return view('productos.index', ['productos' => $productos]);


	    	}else 
	    	{
	    		$productos =  \DB::table('productos')->select('id','tipoproducto','CLAVE','Fechaingreso', 'cantidad', 'descripcion', 'costocompra','costoventa')->paginate(7);
	    	
	    		return view('productos.index', ['productos' => $productos]);

	    	}
		
		 
		
	}


	public function guardar(Request $request)
{ 
       
       $file = $request->file('imagen');
 
     
       $nombre = $file->getClientOriginalName();
 
     
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       return "archivo guardado";
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

	public function getNombre($id)
	{
		$nproducto = \DB::select('select Tipoproducto from productos where id = :id', ['id' => $id]);

		foreach ($nproducto as $o) {
				return $o->Tipoproducto;
				
			}
		
	}

	public function show($id)
	{
		$productos = $this->productosRepository->findproductosById($id);
				
		if(empty($productos))
		{
			Flash::error('producto no encontrado');
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
			Flash::error('producto no encontrado');
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

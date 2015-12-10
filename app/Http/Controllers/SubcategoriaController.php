<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Equipamento;
use App\Subcategoria;
use DB;

class SubcategoriaController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	

		/* query comum
		$usuarios = DB::select('select * from usuarios');
		return view('equipamento', ['usuarios' => $usuarios]);
		foreach ($usuarios as $usuario) {
    		echo $usuario->nome;
		}
		*/
		
	}


	
	public function porCategoria($id) {
		$subcategorias = Subcategoria::where('categoria_id', '=', $id)->get()->toArray();
		//$subcategorias_lists = $subcategorias::lists('descricao', 'id');
		
		return Response()->json($subcategorias)
		->header('Access-Control-Allow-Origin', "*");
		//return Response()->make($subcategorias);
	}
	
	

}
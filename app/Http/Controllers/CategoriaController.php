<?php
namespace App\Http\Controllers;
use App\Equipamento;
use App\Http\Controllers\Controller;
use DB;

class EquipamentoController extends Controller {


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
	
		if(DB::connection()->getDatabaseName())
		{
		   echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
		}
		
		$equipamentos = Equipamento::all();
		return view('equipamento.equipamento', ['equipamentos' => $equipamentos]);
		
		/* query comum
		$usuarios = DB::select('select * from usuarios');
		return view('equipamento', ['usuarios' => $usuarios]);
		foreach ($usuarios as $usuario) {
    		echo $usuario->nome;
		}
		*/
		
	}

	public function validar() {
		return view('equipamento.equipamento', ['equipamentos' => $equipamentos]);
	}

	
	public function cadastrar() {
		$categorias = Categoria::all();
		//$categorias = DB::select('select id, descricao from categorias order by descricao');
		//$categorias_lists  = Users::lists('username','id');
		return view('equipamento.cadastrar', ['categorias' => $categorias]);
	}
	
	

}
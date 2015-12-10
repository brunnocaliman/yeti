<?php
namespace App\Http\Controllers;
use App\Equipamento;
use App\Categoria;
use App\Subcategoria;
use App\Gerencia;
use App\Subgerencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class EquipamentoController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
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

	public function salvar(Request $request) {
    
    $this->validate($request, [
        'categoria' => 'required|integer|min:23',
        'subcategoria' => 'required|integer|min:1',
        'serie' => 'required|alpha_num',
        'patrimonioProdest' => 'required_without:patrimonioEs1,patrimonioEs2,patrimonioEs3|integer',
        'patrimonioEs1' => 'required_without:patrimonioProdest|integer',
        'patrimonioEs2' => 'required_without:patrimonioProdest|integer',
        'patrimonioEs3' => 'required_without:patrimonioProdest|integer',
        'gerencia' => 'required|integer|min:1',
        'subGerencia' => 'integer|min:1',
    ]);	
		
		$categoria = $request->input('categoria');
		$subcategoria = $request->input('subcategoria');
		$serie = $request->input('serie');
		$patrimonioProdest = $request->input('patrimonioProdest');
		$patrimonioEs1 = $request->input('patrimonioEs1');
		$patrimonioEs2 = $request->input('patrimonioEs2');
		$patrimonioEs3 = $request->input('patrimonioEs3');
		$gerencia = $request->input('gerencia');
		$subGerencia = $request->input('subGerencia');
		$observacao = $request->input('observacao');
		
		
		return view('resultado', ['dados' => $request]);
	}

	
	public function cadastrar() {
		$categorias_lists = Categoria::lists('descricao', 'id');
		$subcategorias_lists = Subcategoria::lists('descricao', 'id');
		$gerencias_lists = Gerencia::lists('descricao', 'id');
		$subgerencias_lists = Subgerencia::lists('descricao', 'id');
		
		//$categorias = Categoria::all();
		//$categorias = DB::select('select id, descricao from categorias order by descricao');
		return view('equipamento.cadastrar', ['categorias' => $categorias_lists, 'subcategorias' => $subcategorias_lists, 'gerencias' => $gerencias_lists, 'subgerencias' => $subgerencias_lists]);
	}
	
	

}
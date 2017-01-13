<?php


namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{
	public function __construct()
    {
        $this->middleware('auth', ['only' => ['adiciona', 'remove', 'alterar']]);
    }
	public function Lista(){		

		$produtos = Produto::all();		
		return view('produto.listagem')->with('produtos', $produtos);
	}
	public function mostra($id){
		
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->with('p', $produto);
	}
	public function remove($id){
		
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@Lista');
	}
	public function formulario(){		
		return view('produto.formulario')->with('categorias', Categoria::all());
	}
	public function adiciona(ProdutoRequest $request){

		Produto::create($request->all());
		return redirect()->action('ProdutoController@Lista')->withInput(Request::only('nome'));
	}
	public function listaJson(){
    	$produtos = Produto::all();
   	return response()->json($produtos);
	}
	public function alterar($id){
		
		$produto = Produto::find($id);
		$categorias = Categoria::all();		
		return view('produto.alterar')->with('p', $produto)->with('categorias', $categorias);

	}
	public function alterado(ProdutoRequest $request, $id){

		$produto = Produto::find($id);
		$params = $request->all();
		$produto->update($params);

		return redirect()->action('ProdutoController@Lista');

	}
	
}
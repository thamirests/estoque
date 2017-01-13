@extends('layout.principal')

@section('conteudo')
<!--@if(count($errors) > 0))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>	
	</div>
@endif-->
	<h1>Alterar produto {{$p->nome}}</h1>
	<form action="/produtos/alterado/{{$p->id}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="" name="nome" value="{{$p->nome}}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" type="" name="valor" value="{{$p->valor}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="number" name="quantidade" value="{{$p->quantidade}}">
	</div>
	<div class="form-group">
		<label>Tamanho</label>
		<input class="form-control" type="" name="tamanho" value="{{$p->tamanho}}">
	</div>
	<div class="form-group">
    <label>Categoria</label>
    <select name="categoria_id" class="form-control" >
	      	@foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->nome}}</option>
			@endforeach
    </select>
  </div>
	<div class="form-group">
		<label>Descrição</label>
		<input class="form-control" name="descricao" value="{{$p->descricao}}">
	</div>
	<button class="btn btn-primary btn-block" type="submit">Adicionar</button>	
	</form>
@stop

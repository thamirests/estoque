@extends('layout.principal')

@section('conteudo')
@if(count($errors) > 0))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>	
	</div>
@endif
	<h1>Novo produto</h1>
	<form action="/produtos/adiciona" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="" name="nome" value="{{ old('nome') }}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" type="" name="valor" value="{{ old('valor') }}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="number" name="quantidade" value="{{ old('quantidade') }}">
	</div>
	<div class="form-group">
		<label>Tamanho</label>
		<input class="form-control" type="" name="tamanho" value="{{ old('tamanho') }}">
	</div>
	<div class="form-group">
		<label>Categorias</label>
		<select class="form-control" type="" name="categoria_id">
		@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<textarea class="form-control" name="descricao" value="{{ old('descricao') }}"></textarea>
	</div>
	<button class="btn btn-primary btn-block" type="submit">Adicionar</button>	
	</form>
@stop

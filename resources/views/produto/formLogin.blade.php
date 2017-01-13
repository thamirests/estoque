@extends('layout.principal')

@section('conteudo')
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>	
	</div>
@endif
	<h1>Login</h1>
	<form action="/login" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label>E-mail</label>
			<input class="form-control" type="" name="email" value="{{ old('nome') }}">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input class="form-control" type="password" name="password" value="{{ old('valor') }}">
		</div>	
		<button class="btn btn-primary btn-block" type="submit">Entrar</button>	
	</form>
@stop

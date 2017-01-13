<?php

namespace estoque\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
    	return view('produto.formLogin');
    }
    public function login(){
		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais, true)){
			return 'Usuário logado';
		}

    	return 'Usuário não existe';
    }
    public function register(){
    	return view('auth.login');
    }
}
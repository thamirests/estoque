<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/app.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Control de estoque</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">      
      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    </div>
  <div class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">
      <li><a href="{{action('ProdutoController@formulario')}}">Formulario</a></li>
        <li><a href="{{action('ProdutoController@Lista')}}">Listagem</a></li>
      </ul>
      <ul class="nav navbar-nav">
          @if(auth()->guest())
            @if(!Request::is('/login'))
              <li><a href="{{ url('/login') }}">Login</a></li>
            @endif
            @if(!Request::is('/register'))
              <li><a href="{{ url('/register') }}">Registrar</a></li>
            @endif
          @else
            <li class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/login') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
              <!--<ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
              </ul>-->
            </li>
          @endif
        </ul>
        </div>
		</div>
	</nav>
@yield('conteudo')
	<footer class="footer">
      <p>© Livro de Laravel do Alura.</p>
  </footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>
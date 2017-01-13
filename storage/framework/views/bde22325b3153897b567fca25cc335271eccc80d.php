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
      <li><a href="<?php echo e(action('ProdutoController@formulario')); ?>">Formulario</a></li>
        <li><a href="<?php echo e(action('ProdutoController@Lista')); ?>">Listagem</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <?php if(auth()->guest()): ?>
            <?php if(!Request::is('/login')): ?>
              <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
            <?php endif; ?>
            <?php if(!Request::is('/register')): ?>
              <li><a href="<?php echo e(url('/register')); ?>">Registrar</a></li>
            <?php endif; ?>
          <?php else: ?>
            <li class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(auth()->user()->name); ?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/login')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
              <!--<ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('/auth/logout')); ?>">Logout</a></li>
              </ul>-->
            </li>
          <?php endif; ?>
        </ul>
        </div>
		</div>
	</nav>
<?php echo $__env->yieldContent('conteudo'); ?>
	<footer class="footer">
      <p>© Livro de Laravel do Alura.</p>
  </footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>
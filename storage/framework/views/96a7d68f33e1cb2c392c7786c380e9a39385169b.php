<?php $__env->startSection('conteudo'); ?>
<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</ul>	
	</div>
<?php endif; ?>
	<h1>Login</h1>
	<form action="/login" method="post">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<div class="form-group">
			<label>E-mail</label>
			<input class="form-control" type="" name="email" value="<?php echo e(old('nome')); ?>">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input class="form-control" type="password" name="password" value="<?php echo e(old('valor')); ?>">
		</div>	
		<button class="btn btn-primary btn-block" type="submit">Entrar</button>	
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
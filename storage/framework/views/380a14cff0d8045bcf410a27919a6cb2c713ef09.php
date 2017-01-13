<?php $__env->startSection('conteudo'); ?>
<?php if(count($errors) > 0): ?>)
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</ul>	
	</div>
<?php endif; ?>
	<h1>Novo produto</h1>
	<form action="/produtos/adiciona" method="post">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="" name="nome" value="<?php echo e(old('nome')); ?>">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" type="" name="valor" value="<?php echo e(old('valor')); ?>">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="number" name="quantidade" value="<?php echo e(old('quantidade')); ?>">
	</div>
	<div class="form-group">
		<label>Tamanho</label>
		<input class="form-control" type="" name="tamanho" value="<?php echo e(old('tamanho')); ?>">
	</div>
	<div class="form-group">
		<label>Categorias</label>
		<select class="form-control" type="" name="categoria_id">
		<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<option value="<?php echo e($c->id); ?>"><?php echo e($c->nome); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<textarea class="form-control" name="descricao" value="<?php echo e(old('descricao')); ?>"></textarea>
	</div>
	<button class="btn btn-primary btn-block" type="submit">Adicionar</button>	
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
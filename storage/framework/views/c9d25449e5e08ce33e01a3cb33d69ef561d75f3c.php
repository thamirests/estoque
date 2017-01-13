<?php $__env->startSection('conteudo'); ?>
	<div class="alert alert-success">
		Produto <?php echo e($nome); ?> adicionado com sucesso!
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
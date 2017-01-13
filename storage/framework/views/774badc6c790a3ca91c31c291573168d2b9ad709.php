	;
	<?php $__env->startSection('conteudo'); ?>;
	<h1>Detalhes do produtos <?php echo e($p->nome); ?></h1>
	<ul>
		<li>
			<b>Valor:</b> <?php echo e($p->valor); ?>

		</li>
		<li>
			<b>Descrição</b> <?php echo e($p->descricao); ?>

		</li>
		<li>
			<b>Quantidade em estoque:</b> <?php echo e($p->quantidade); ?>

		</li>
	</ul>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	

	<?php $__env->startSection('conteudo'); ?>
	<?php if(empty($produtos)): ?>

	<div class="alert alert-danger">
		Você não tem nenhum produto cadastrados!
	</div>

	<?php else: ?>

	<h1>Listagem de produtos</h1>	
	<table class=" table table-striped table-bordered table-hover">
		
		<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>		
			<tr class="<?php echo e($p->quantidade <=1 ? 'danger' : ''); ?>">
				<td> <?php echo e($p->nome); ?>  </td>
				<td> <?php echo e($p->valor); ?> </td>
				<td> <?php echo e($p->descricao); ?>  </td>
				<td> <?php echo e($p->quantidade); ?> </td>
				<td> <?php echo e($p->tamanho); ?> </td>
				<td> <?php echo e($p->categoria->nome); ?> </td>
				<!-- <td><?php echo e(dd($p)); ?></td> -->
				<td>
					<a href="<?php echo e(action('ProdutoController@mostra', $p->id)); ?>">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="<?php echo e(action('ProdutoController@remove', $p->id)); ?>">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
				<td>
					<a href="<?php echo e(action('ProdutoController@alterar', $p->id)); ?>">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		<?php endif; ?>
	</table>	
	<h4>
		<span class="label label-danger pull-right">
			Um ou menos itens no estoque.
		</span>
	</h4><br>
		<?php if(old('nome')): ?>
			<div class="alert alert-success">
				Produto <?php echo e(old('nome')); ?> adicionado com sucesso!
			</div>
		<?php endif; ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
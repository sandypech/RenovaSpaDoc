<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('New Sesione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('controller' => 'opiniones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opinione'), array('controller' => 'opiniones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('controller' => 'terapeutas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terapeuta'), array('controller' => 'terapeutas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="row placeholders">
		   <div>
			   <img src="http://loscolibries.mx/wp-content/uploads/2015/01/Spa-y-masaje-Puerto-Morelos-Los-Colibries.png" width="100%" height="5%">
		</div>
	</div>
	
<div class="table-responsive">
	<h1 class="page-header"><?php echo __('Sesiones'); ?></h1>
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('opinion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terapeuta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sesiones as $sesione): ?>
	<tr>
		<td><?php echo h($sesione['Sesione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sesione['Opinione']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $sesione['Sesione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, Mostrando {:current} filas de {:count} en total.')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

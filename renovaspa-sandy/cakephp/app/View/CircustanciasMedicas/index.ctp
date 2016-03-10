<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
		<li  class="active"><?php echo $this->Html->link(__('New Circustancias Medica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
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
	<h1><?php echo __('Circustancias Medicas'); ?></h1>
		<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($circustanciasMedicas as $circustanciasMedica): ?>
	<tr>
		<td><?php echo h($circustanciasMedica['CircustanciasMedica']['id']); ?>&nbsp;</td>
		<td><?php echo h($circustanciasMedica['CircustanciasMedica']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $circustanciasMedica['CircustanciasMedica']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $circustanciasMedica['CircustanciasMedica']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
		
		<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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

	


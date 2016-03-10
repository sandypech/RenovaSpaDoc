<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paise'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Idiomas'), array('controller' => 'idiomas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idioma'), array('controller' => 'idiomas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('controller' => 'hoteles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotele'), array('controller' => 'hoteles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agencias'), array('controller' => 'agencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agencia'), array('controller' => 'agencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Circustancias Medicas'), array('controller' => 'circustancias_medicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Circustancias Medica'), array('controller' => 'circustancias_medicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
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
		<h1 class="page-header"><?php echo __('Lista de Clientes'); ?></h1>
		<table class="table table-striped">
	<thead>
	<tr>
			<!--<th><?php// echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
			<th><?php echo $this->Paginator->sort('idioma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agencia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('circustancias_medica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_alta'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th><?php echo $this->Paginator->sort('habitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('firma'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<!--<td><?php// echo h($cliente['Cliente']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($cliente['Paise']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Paise']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Hotele']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotele']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['fecha_alta']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['edad']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['correo_electronico']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['habitacion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['firma']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-xs btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-xs btn-default'));
	?>
	</div>
</div>
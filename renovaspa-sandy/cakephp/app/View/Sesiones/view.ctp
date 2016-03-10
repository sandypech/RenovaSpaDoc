<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('Edit Sesione'), array('action' => 'edit', $sesione['Sesione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sesione'), array('action' => 'delete', $sesione['Sesione']['id']), array(), __('Are you sure you want to delete # %s?', $sesione['Sesione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('action' => 'add')); ?> </li>
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
<div class="agencias view">
<h1 class="page-header"><?php echo __('Sesione'); ?></h1>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sesione['Sesione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opinione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Opinione']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terapeuta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
	</ul>
</div>
</div>

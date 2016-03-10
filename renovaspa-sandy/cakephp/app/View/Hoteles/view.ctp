<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('Edit Hotele'), array('action' => 'edit', $hotele['Hotele']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotele'), array('action' => 'delete', $hotele['Hotele']['id']), array(), __('Are you sure you want to delete # %s?', $hotele['Hotele']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotele'), array('action' => 'add')); ?> </li>
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
<h1 class="page-header"><?php echo __('Hoteles'); ?></h1>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['ubicacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
	</div>

<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('Edit Paise'), array('action' => 'edit', $paise['Paise']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paise'), array('action' => 'delete', $paise['Paise']['id']), array(), __('Are you sure you want to delete # %s?', $paise['Paise']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paise'), array('action' => 'add')); ?> </li>
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
<h1 class="page-header"><?php echo __('Paise'); ?></h1>
<div class="paises view">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paise['Paise']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paise['Paise']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

</div>

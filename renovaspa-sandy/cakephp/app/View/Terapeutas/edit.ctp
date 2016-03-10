<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Terapeuta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Terapeuta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('action' => 'index')); ?></li>
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
	<h1 class="page-header"><?php echo __('Edit Terapeuta'); ?></h1>
<?php echo $this->Form->create('Terapeuta'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		
	</ul>
</div>
</div>

<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
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
	<h1 class="page-header"> <?php echo __('Agregar Cliente'); ?></h1>
	<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		
	<?php
		echo $this->Form->input('pais_id');
		echo $this->Form->input('idioma_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('agencia_id');
		echo $this->Form->input('circustancias_medica_id');
		echo $this->Form->input('fecha_alta');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('edad');
		echo $this->Form->input('correo_electronico');
		echo $this->Form->input('habitacion');
		echo $this->Form->input('firma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>

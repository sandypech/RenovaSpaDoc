<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
		<li class="active"><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
 		<li class="divider"></li>

 		<li><?php echo $this->Html->link(__('New Paise'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
 		<li><?php echo $this->Html->link(__('New Idioma'), array('controller' => 'idiomas', 'action' => 'add')); ?> </li>
 		<li><?php echo $this->Html->link(__('New Hotele'), array('controller' => 'hoteles', 'action' => 'add')); ?> </li>
 		<li><?php echo $this->Html->link(__('New Agencia'), array('controller' => 'agencias', 'action' => 'add')); ?> </li>
 		<li><?php echo $this->Html->link(__('New Circustancias Medica'), array('controller' => 'circustancias_medicas', 'action' => 'add')); ?> </li>
 		<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
				
				<li><?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $cliente['Cliente']['id'], 'ext' => 'pdf')); ?> </li>
		<li ><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?> </li>
				
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
	<h1 class="page-header"><?php echo __('Cliente'); ?></h1>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Paise']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Paise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotele'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Hotele']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotele']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Circustancias Medica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fecha_alta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['correo_electronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitacion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['habitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firma'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['firma']); ?>
			&nbsp;
		</dd>
	</dl>
</div>



<div class="related">
	<h3><?php echo __('Related Sesiones'); ?></h3>
	<?php if (!empty($cliente['Sesione'])): ?>
	<table>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Sesione'] as $sesione): ?>
		<tr>
			<td><?php echo $sesione['id']; ?></td>
			<td><?php echo $sesione['opinion_id']; ?></td>
			<td><?php echo $sesione['cliente_id']; ?></td>
			<td><?php echo $sesione['terapeuta_id']; ?></td>
			<td><?php echo $sesione['tratamiento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sesiones', 'action' => 'view', $sesione['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sesiones', 'action' => 'edit', $sesione['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sesiones', 'action' => 'delete', $sesione['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $sesione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
<?php endif; ?>

<!--Imprecion de hoja--><?php echo $this->Html->link(__('Imprimir hoja'), array('action' => 'view', $cliente['Cliente']['id'], 'ext' => 'pdf'), array('class' => 'label label-danger')); ?><!--Imprecion de hoja-->
</div>

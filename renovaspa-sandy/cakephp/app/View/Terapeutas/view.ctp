<img src="http://www.infospa.org/images/reference/logo%20Renova%20Spa%20Viva%20Wyndham%20Maya.jpg"  class="featurette-image pull-right" alt="Logo RenovaSpa" width="17%"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<h3><?php echo __('Acciones'); ?></h3>
				<li class="active"><?php echo $this->Html->link(__('Edit Terapeuta'), array('action' => 'edit', $terapeuta['Terapeuta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terapeuta'), array('action' => 'delete', $terapeuta['Terapeuta']['id']), array(), __('Are you sure you want to delete # %s?', $terapeuta['Terapeuta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terapeuta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
				
				<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div class="terapeutas view">
<h2><?php echo __('Terapeuta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terapeuta['Terapeuta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($terapeuta['Terapeuta']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="row placeholders">
		   <div>
			   <img src="http://loscolibries.mx/wp-content/uploads/2015/01/Spa-y-masaje-Puerto-Morelos-Los-Colibries.png" width="100%" height="5%">
		</div>
	</div>
	
<div class="table-responsive">

<div class="agencias view">
<h1 class="page-header"><?php echo __('Related Sesiones'); ?></h1>
	<?php if (!empty($terapeuta['Sesione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($terapeuta['Sesione'] as $sesione): ?>
		<tr>
			<td><?php echo $sesione['id']; ?></td>
			<td><?php echo $sesione['opinion_id']; ?></td>
			<td><?php echo $sesione['cliente_id']; ?></td>
			<td><?php echo $sesione['terapeuta_id']; ?></td>
			<td><?php echo $sesione['tratamiento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sesiones', 'action' => 'view', $sesione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sesiones', 'action' => 'edit', $sesione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sesiones', 'action' => 'delete', $sesione['id']), array(), __('Are you sure you want to delete # %s?', $sesione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
	</div>

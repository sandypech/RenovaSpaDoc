<div class="tratamientos view">
<h2><?php echo __('Tratamiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tratamiento'), array('action' => 'edit', $tratamiento['Tratamiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tratamiento'), array('action' => 'delete', $tratamiento['Tratamiento']['id']), array(), __('Are you sure you want to delete # %s?', $tratamiento['Tratamiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sesiones'); ?></h3>
	<?php if (!empty($tratamiento['Sesione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tratamiento['Sesione'] as $sesione): ?>
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sesione'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

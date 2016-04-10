<div class="vehicles index">
	<h2><?php echo __('Vehicles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('registration_number'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_volume'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_model'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_engine'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_chassis'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_type'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_status'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_color'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_manufacturer'); ?></th>
			<th><?php echo $this->Paginator->sort('max_passenger'); ?></th>
			<th><?php echo $this->Paginator->sort('other_info'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_pic'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicles as $vehicle): ?>
	<tr>
		<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['registration_number']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_name']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_volume']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_model']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_engine']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_chassis']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_type']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_status']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_color']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['purchase_date']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['purchase_amount']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['purchase_manufacturer']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['max_passenger']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['other_info']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['vehicle_pic']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['note']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['created']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Insurances'), array('controller' => 'vehicle_insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Insurance'), array('controller' => 'vehicle_insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Maintains'), array('controller' => 'vehicle_maintains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('controller' => 'vehicle_maintains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
	</ul>
</div>










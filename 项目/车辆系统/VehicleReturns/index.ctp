<div class="vehicleReturns index">
	<h2><?php echo __('Vehicle Returns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_usage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('end_mileage'); ?></th>
			<th><?php echo $this->Paginator->sort('return_time'); ?></th>
			<th><?php echo $this->Paginator->sort('return_note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicleReturns as $vehicleReturn): ?>
	<tr>
		<td><?php echo h($vehicleReturn['VehicleReturn']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicleReturn['VehicleUsage']['vehicle_id'], array('controller' => 'vehicle_usages', 'action' => 'view', $vehicleReturn['VehicleUsage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vehicleReturn['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleReturn['Employee']['id'])); ?>
		</td>
		<td><?php echo h($vehicleReturn['VehicleReturn']['end_mileage']); ?>&nbsp;</td>
		<td><?php echo h($vehicleReturn['VehicleReturn']['return_time']); ?>&nbsp;</td>
		<td><?php echo h($vehicleReturn['VehicleReturn']['return_note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicleReturn['VehicleReturn']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicleReturn['VehicleReturn']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicleReturn['VehicleReturn']['id']), null, __('Are you sure you want to delete # %s?', $vehicleReturn['VehicleReturn']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehicle Return'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

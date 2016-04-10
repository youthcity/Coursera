<div class="vehicleMaintains index">
	<h2><?php echo __('Vehicle Maintains'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('maintain_time'); ?></th>
			<th><?php echo $this->Paginator->sort('maintain_type'); ?></th>
			<th><?php echo $this->Paginator->sort('maintain_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('maintain_reason'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicleMaintains as $vehicleMaintain): ?>
	<tr>
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicleMaintain['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleMaintain['Vehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vehicleMaintain['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleMaintain['Employee']['id'])); ?>
		</td>
		
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['maintain_time']); ?>&nbsp;</td>
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['maintain_type']); ?>&nbsp;</td>
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['maintain_cost']); ?>&nbsp;</td>
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['maintain_reason']); ?>&nbsp;</td>
		<td><?php echo h($vehicleMaintain['VehicleMaintain']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicleMaintain['VehicleMaintain']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicleMaintain['VehicleMaintain']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicleMaintain['VehicleMaintain']['id']), null, __('Are you sure you want to delete # %s?', $vehicleMaintain['VehicleMaintain']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>


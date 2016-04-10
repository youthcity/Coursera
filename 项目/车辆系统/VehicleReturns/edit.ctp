<div class="vehicleReturns form">
<?php echo $this->Form->create('VehicleReturn'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle Return'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vehicle_usage_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('end_mileage');
		echo $this->Form->input('return_time');
		echo $this->Form->input('return_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VehicleReturn.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VehicleReturn.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Returns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

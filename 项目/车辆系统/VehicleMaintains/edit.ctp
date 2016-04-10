<div class="vehicleMaintains form">
<?php echo $this->Form->create('VehicleMaintain'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle Maintain'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('maintain_time');
		echo $this->Form->input('maintain_type');
		echo $this->Form->input('maintain_cost');
		echo $this->Form->input('maintain_reason');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VehicleMaintain.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VehicleMaintain.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Maintains'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>

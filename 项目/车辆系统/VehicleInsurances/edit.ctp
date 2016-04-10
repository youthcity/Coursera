<div class="vehicleInsurances form">
<?php echo $this->Form->create('VehicleInsurance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle Insurance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('insurance_tel');
		echo $this->Form->input('insurance_type');
		echo $this->Form->input('insurance_company');
		echo $this->Form->input('insurance_cost');
		echo $this->Form->input('insurance_start_date');
		echo $this->Form->input('insurance_end_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VehicleInsurance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VehicleInsurance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Insurances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

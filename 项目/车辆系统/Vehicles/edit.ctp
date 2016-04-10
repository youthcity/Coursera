<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('registration_number');
		echo $this->Form->input('vehicle_name');
		echo $this->Form->input('vehicle_volume');
		echo $this->Form->input('vehicle_model');
		echo $this->Form->input('vehicle_engine');
		echo $this->Form->input('vehicle_chassis');
		echo $this->Form->input('vehicle_type');
		echo $this->Form->input('vehicle_status');
		echo $this->Form->input('vehicle_color');
		echo $this->Form->input('purchase_date');
		echo $this->Form->input('purchase_amount');
		echo $this->Form->input('purchase_manufacturer');
		echo $this->Form->input('max_passenger');
		echo $this->Form->input('other_info');
		echo $this->Form->input('vehicle_pic');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Insurances'), array('controller' => 'vehicle_insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Insurance'), array('controller' => 'vehicle_insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Maintains'), array('controller' => 'vehicle_maintains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('controller' => 'vehicle_maintains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
	</ul>
</div>

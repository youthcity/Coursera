<div class="vehicleReturns view">
<h2><?php  echo __('Vehicle Return'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicleReturn['VehicleReturn']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Usage'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleReturn['VehicleUsage']['vehicle_id'], array('controller' => 'vehicle_usages', 'action' => 'view', $vehicleReturn['VehicleUsage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleReturn['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleReturn['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Mileage'); ?></dt>
		<dd>
			<?php echo h($vehicleReturn['VehicleReturn']['end_mileage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Time'); ?></dt>
		<dd>
			<?php echo h($vehicleReturn['VehicleReturn']['return_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Note'); ?></dt>
		<dd>
			<?php echo h($vehicleReturn['VehicleReturn']['return_note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle Return'), array('action' => 'edit', $vehicleReturn['VehicleReturn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle Return'), array('action' => 'delete', $vehicleReturn['VehicleReturn']['id']), null, __('Are you sure you want to delete # %s?', $vehicleReturn['VehicleReturn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Returns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Return'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

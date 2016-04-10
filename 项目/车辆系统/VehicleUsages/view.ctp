<div class="vehicleUsages view">
<h2><?php  echo __('Vehicle Usage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleUsage['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleUsage['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Usage Type'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['vehicle_usage_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleUsage['Driver']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleUsage['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispatch Time'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['dispatch_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['destination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mileage'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['mileage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['purpose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle Usage'), array('action' => 'edit', $vehicleUsage['VehicleUsage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle Usage'), array('action' => 'delete', $vehicleUsage['VehicleUsage']['id']), null, __('Are you sure you want to delete # %s?', $vehicleUsage['VehicleUsage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

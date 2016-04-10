<div class="vehicleInsurances view">
<h2><?php  echo __('Vehicle Insurance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleInsurance['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleInsurance['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleInsurance['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleInsurance['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Tel'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Type'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Company'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Cost'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Start Date'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance End Date'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicleInsurance['VehicleInsurance']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle Insurance'), array('action' => 'edit', $vehicleInsurance['VehicleInsurance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle Insurance'), array('action' => 'delete', $vehicleInsurance['VehicleInsurance']['id']), null, __('Are you sure you want to delete # %s?', $vehicleInsurance['VehicleInsurance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Insurances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Insurance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

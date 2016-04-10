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
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleUsage['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleUsage['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Comfirm Status'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['vehicle_comfirm_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Application'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['vehicle_application']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispatch Date'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['dispatch_date']); ?>
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
		<dt><?php echo __('Return Time'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['return_time']); ?>
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
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($vehicleUsage['VehicleUsage']['note']); ?>
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

<div class="col-md-4 col-md-offset-4">
	<button type="button" class="btn btn-purple ">
				<span class="glyphicon  glyphicon-ok" aria-hidden="true"></span>
				通&nbsp;&nbsp;过
			</button>
			<button type="button" class="btn btn-info">
				<span class="glyphicon glyphicon-remove"></span>
				不通过
			</button>
	</div>
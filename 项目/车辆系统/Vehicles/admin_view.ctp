<div class="vehicles view">
<h2><?php  echo __('Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Number'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['registration_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Name'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Volume'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Model'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Engine'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_engine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Chassis'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_chassis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Type'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Status'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Color'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Amount'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['purchase_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Manufacturer'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['purchase_manufacturer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Passenger'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['max_passenger']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Info'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['other_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Pic'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_pic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Insurances'), array('controller' => 'vehicle_insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Insurance'), array('controller' => 'vehicle_insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Maintains'), array('controller' => 'vehicle_maintains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('controller' => 'vehicle_maintains', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicle Insurances'); ?></h3>
	<?php if (!empty($vehicle['VehicleInsurance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Insurance People'); ?></th>
		<th><?php echo __('Insurance Tel'); ?></th>
		<th><?php echo __('Insurance Type'); ?></th>
		<th><?php echo __('Insurance Company'); ?></th>
		<th><?php echo __('Insurance Sale'); ?></th>
		<th><?php echo __('Insurance Start Date'); ?></th>
		<th><?php echo __('Insurance End Date'); ?></th>
		<th><?php echo __('Insurance Remind'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['VehicleInsurance'] as $vehicleInsurance): ?>
		<tr>
			<td><?php echo $vehicleInsurance['id']; ?></td>
			<td><?php echo $vehicleInsurance['vehicle_id']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_people']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_tel']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_type']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_company']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_sale']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_start_date']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_end_date']; ?></td>
			<td><?php echo $vehicleInsurance['insurance_remind']; ?></td>
			<td><?php echo $vehicleInsurance['created']; ?></td>
			<td><?php echo $vehicleInsurance['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicle_insurances', 'action' => 'view', $vehicleInsurance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicle_insurances', 'action' => 'edit', $vehicleInsurance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicle_insurances', 'action' => 'delete', $vehicleInsurance['id']), null, __('Are you sure you want to delete # %s?', $vehicleInsurance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle Insurance'), array('controller' => 'vehicle_insurances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicle Maintains'); ?></h3>
	<?php if (!empty($vehicle['VehicleMaintain'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Maintain People'); ?></th>
		<th><?php echo __('Maintain Time'); ?></th>
		<th><?php echo __('Maintain Type'); ?></th>
		<th><?php echo __('Maintain Cost'); ?></th>
		<th><?php echo __('Maintain Reason'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['VehicleMaintain'] as $vehicleMaintain): ?>
		<tr>
			<td><?php echo $vehicleMaintain['id']; ?></td>
			<td><?php echo $vehicleMaintain['vehicle_id']; ?></td>
			<td><?php echo $vehicleMaintain['maintain_people']; ?></td>
			<td><?php echo $vehicleMaintain['maintain_time']; ?></td>
			<td><?php echo $vehicleMaintain['maintain_type']; ?></td>
			<td><?php echo $vehicleMaintain['maintain_cost']; ?></td>
			<td><?php echo $vehicleMaintain['maintain_reason']; ?></td>
			<td><?php echo $vehicleMaintain['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicle_maintains', 'action' => 'view', $vehicleMaintain['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicle_maintains', 'action' => 'edit', $vehicleMaintain['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicle_maintains', 'action' => 'delete', $vehicleMaintain['id']), null, __('Are you sure you want to delete # %s?', $vehicleMaintain['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('controller' => 'vehicle_maintains', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicle Usages'); ?></h3>
	<?php if (!empty($vehicle['VehicleUsage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Vehicle Comfirm Status'); ?></th>
		<th><?php echo __('Vehicle Application'); ?></th>
		<th><?php echo __('Dispatch Date'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Return Time'); ?></th>
		<th><?php echo __('Destination'); ?></th>
		<th><?php echo __('Mileage'); ?></th>
		<th><?php echo __('Purpose'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['VehicleUsage'] as $vehicleUsage): ?>
		<tr>
			<td><?php echo $vehicleUsage['id']; ?></td>
			<td><?php echo $vehicleUsage['vehicle_id']; ?></td>
			<td><?php echo $vehicleUsage['employee_id']; ?></td>
			<td><?php echo $vehicleUsage['vehicle_comfirm_status']; ?></td>
			<td><?php echo $vehicleUsage['vehicle_application']; ?></td>
			<td><?php echo $vehicleUsage['dispatch_date']; ?></td>
			<td><?php echo $vehicleUsage['start_time']; ?></td>
			<td><?php echo $vehicleUsage['end_time']; ?></td>
			<td><?php echo $vehicleUsage['return_time']; ?></td>
			<td><?php echo $vehicleUsage['destination']; ?></td>
			<td><?php echo $vehicleUsage['mileage']; ?></td>
			<td><?php echo $vehicleUsage['purpose']; ?></td>
			<td><?php echo $vehicleUsage['note']; ?></td>
			<td><?php echo $vehicleUsage['created']; ?></td>
			<td><?php echo $vehicleUsage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicle_usages', 'action' => 'view', $vehicleUsage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicle_usages', 'action' => 'edit', $vehicleUsage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicle_usages', 'action' => 'delete', $vehicleUsage['id']), null, __('Are you sure you want to delete # %s?', $vehicleUsage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

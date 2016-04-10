<div class="vehicleMaintains view">
<h2><?php  echo __('Vehicle Maintain'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleMaintain['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleMaintain['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('employee_id'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['employee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintain Time'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintain Type'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintain Cost'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintain Reason'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($vehicleMaintain['VehicleMaintain']['note']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle Maintain'), array('action' => 'edit', $vehicleMaintain['VehicleMaintain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle Maintain'), array('action' => 'delete', $vehicleMaintain['VehicleMaintain']['id']), null, __('Are you sure you want to delete # %s?', $vehicleMaintain['VehicleMaintain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Maintains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>

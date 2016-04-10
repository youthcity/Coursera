<div class="vehicleUsages form">
<?php echo $this->Form->create('VehicleUsage'); ?>
  <fieldset>
    <legend><?php echo __('Add Vehicle Usage'); ?></legend>
  <?php
    echo $this->Form->input('vehicle_id');
    echo $this->Form->input('employee_id');
    echo $this->Form->input('vehicle_comfirm_status');
    echo $this->Form->input('vehicle_application');
    echo $this->Form->input('dispatch_time');
    echo $this->Form->input('start_time');
    echo $this->Form->input('end_time');
    echo $this->Form->input('return_time');
    echo $this->Form->input('destination');
    echo $this->Form->input('mileage');
    echo $this->Form->input('purpose');
    echo $this->Form->input('note');
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Html->link(__('List Vehicle Usages'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
  </ul>
</div>

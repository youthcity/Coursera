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


<?php echo $this->
Html->css('bootstrap-datetimepicker.css');
      echo $this->Html->script('moment.min.js');
      echo $this->Html->script('bootstrap-datetimepicker.min.js');
 ?>
<style type="text/css">
 .required {
  content: ' *';
  color: #FF0000;
  font-size: 150%;
}
</style>

<div class="well well-lg">
  <fieldset>
    <legend>返还车表</legend>
  </fieldset>
</div>
<form class="form-horizontal" role="form">

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label" >返还人员</label>
    <div class="col-sm-2">
      <select class="form-control ">
        <option>甲</option>
        <option>乙</option>
        <option>丙</option>
        <option>丁</option>
      </select>
    </div>
    <span class="required">*</span>
  </div>

<div class="form-group">
  <label for="lastname" class="col-sm-2 control-label">返还时间</label>
  <div class="col-sm-10">
    <div class="input-append date form_datetime" id="datetimepicker"  >
      <input class="span2" size="16" type="text" value="2015-12-25 00:00"></div>

    <script type="text/javascript">
               $('.span2').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                 });
               </script>
  </div>
</div>

<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">备注</label>
<div class="col-sm-10">
  <textarea class="form-control" rows="3"></textarea>
</div>
</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default">返还</button>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $this->Html->link("取消",array("action"=>"return_confirm")) ?>
</div>
</div>

</form>
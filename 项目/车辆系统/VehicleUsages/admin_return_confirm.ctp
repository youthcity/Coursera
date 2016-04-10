<style type="text/css">
 .star {
  content: '*';
  color: #FF0000;
  font-size:150%;
}
</style>
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

<!-- 还车表单 -->

<?php echo $this->
Html->css('bootstrap-datetimepicker.css');
      echo $this->Html->script('moment.min.js');
      echo $this->Html->script('bootstrap-datetimepicker.min.js');
 ?>
<style type="text/css">
 .star {
  content: ' *';
  color: #FF0000;
  font-size: 150%;
}
</style>


<fieldset><legend><?php echo __('Edit Vehicle Return'); ?></legend></fieldset>


<!-- 无法导入employee_id   -->
<!-- 此行代码提交表单有问题  无法正常提交表单 action应提交到这里  'action'=>"/intranet_vehicles/admin/VehicleReturns/add"-->


<div class="vehicleReturns">

<?php echo $this->Form->create('VehicleReturn',array('class'=>'form-horizontal','role'=>'form')); ?>
<!-- hidden 默认 -->

<input type="hidden" name="data[VehicleReturn][id]" id="VehicleId">

<?php 
echo $this->Form->input('vehicle_usage_id',array('label'=>false,'hidden','type'=>'text','value'=> $vehicleUsage['VehicleUsage']['id']));
?>


<div class="form-group">
    <label for="" class="col-sm-2 control-label" >返还人员</label>
    
    <?php echo $this->Form->input('employee_id',array('label'=>false,'div'=>'col-sm-2','default'=> $currentEmployees['Employee']['id'])); ?>
   
    <span class="star">*</span>
</div>


<div class="form-group">
	<label for="" class="col-sm-2 control-label" >返还里程数</label>

	<?php echo $this->Form->input('end_mileage',array('label'=>false,'div'=>'col-sm-2','type'=>'text','placeholder'=>'请输入里程数')); ?>

	<span class="star">*</span>
</div>








<!-- s -->

<div class="form-group">
  <label for="lastname" class="col-sm-2 control-label">开始时间</label>
    <div class="col-sm-2">
    <div class='input-group date' id='datetimepicker1'>
      <?php  echo $this->            
      Form->input('dispatch_time',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入返还时间')); ?>
       <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>     
      <script type="text/javascript">
        $(function () {
          $('#datetimepicker1').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm'
                });
        });
      </script>
</div>
<span class="star">*</span>

</div>


<div class="form-group">
  <label for="lastname" class="col-sm-2 control-label">返还时间</label>
    <div class="col-sm-2">
    <div class='input-group date' id='datetimepicker2'>
      <?php  echo $this->            
      Form->input('return_time',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入返还时间')); ?>
       <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>     
      <script type="text/javascript">
        $(function () {
          $('#datetimepicker2').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm'
                });
        });
      </script>
</div>
<span class="star">*</span>

</div>





<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">备注</label>

  <?php echo $this->Form->input('return_note',array('div'=>'col-sm-10','class'=>'form-control','rows'=>'3','label'=>false)); ?>

</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">		
<button type="submit" class="btn btn-info">返还</button>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="<?php echo __("Cancel") ?>" class="btn btn-link">

</div>
</div>
	
</form>

</div>
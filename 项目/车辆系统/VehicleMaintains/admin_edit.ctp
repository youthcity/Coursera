<?php echo $this->Html->css('bootstrap-datetimepicker.css');
      echo $this->Html->script('moment.min.js');
      echo $this->Html->script('bootstrap-datetimepicker.min.js');

 ?>

<fieldset><legend><?php echo __('Edit Vehicle Maintain'); ?></legend></fieldset>
<?php echo $this->Form->create('VehicleMaintain',array('class'=>'form-horizontal')); ?>

<div class="form-group">
<label for="VehicleMaintainVehicleId" class="col-sm-2 control-label" >车牌号</label>
<?php 
echo $this->Form->input('vehicle_id',array('div'=>'col-sm-2','label'=>false,'class'=>'input-lg form-control'));
?>

</div>

 <div class="form-group">
<label for="lastname" class="col-sm-2 control-label">经办人员</label>
<?php 
echo $this->Form->input('employee_id',array('div'=>'col-sm-2','label'=>false,'class'=>'input-lg form-control'));
 ?>
 </div>

 <div class="form-group">
 <label for="" class="col-sm-2 control-label" >维护类型</label>
<?php 
echo $this->Form->input('maintain_type',array('div'=>'col-sm-3','label'=>false,'class'=>'input-lg form-control'));
 ?>
 </div>

<div class="form-group">
<label for="lastname" class="col-sm-2 control-label" name="data[VehicleMaintain][maintain_cost]">维护经费</label>
<?php 
echo $this->Form->input('maintain_cost',array('div'=>'col-sm-2','label'=>false,'placeholder'=>'请输入金额','type'=>'text','class'=>'input-lg form-control'));
?>
</div>

<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">维护时间</label>
  <div class="col-sm-2">
     <div class='input-group date' id='datetimepicker4'>
    <?php  echo $this->            
    Form->input('maintain_time',array('label'=>false,'type'=>'text','class'=>'form-control input-lg','placeholder'=>'请输入维护时间')); ?>
     <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>     
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker4').datetimepicker({
                  format: 'YYYY/MM/DD HH:mm'
              });
      });
    </script>
</div>
</div>

<div class="form-group">
  <label for="lastname" class="col-sm-2 control-label">维护原因</label>
  
  <?php  echo $this->Form->input('maintain_reason',array('div'=>'col-sm-6 control-label','label'=>false,'placeholder'=>'请输入维护原因','class'=>'form-control input-lg')); ?>   
  
</div>

<div class="form-group">
  <label for="" class="col-sm-2 control-label">备注</label>
     <?php echo $this->Form->input('note',array('div'=>'col-sm-6 ','label'=>false,'class'=>'form-control input-lg')); ?>
</div>


<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-info">提交</button>
       &nbsp;&nbsp;&nbsp;&nbsp;
  <!--   <?php echo $this->Html->link('取消',array('action'=>'add')) ?>  -->
   <input type="reset" value="<?php echo __("Cancel") ?>" class="btn btn-link">
  </div>
</div>

<?php echo $this->Html->css('bootstrap-datetimepicker.css');
      echo $this->Html->script('moment.min.js');
      echo $this->Html->script('bootstrap-datetimepicker.min.js');

 ?>
<style type="text/css">
 .star {
  content: '*';
  color: #FF0000;
  font-size:150%;
}
</style>

<fieldset><legend><?php echo __("Vehicle Maintain") ?></legend></fieldset>
<?php echo $this->Form->create('VehicleMaintain',array('class'=>'form-horizontal')); ?>

<div class="form-group">
<label for="VehicleMaintainVehicleId" class="col-xs-2 control-label" >车牌号</label>
<?php 
echo $this->Form->input('vehicle_id',array('div'=>'col-xs-3','label'=>false,'class'=>' form-control'));
?>

</div>

 <div class="form-group">
<label for="lastname" class="col-xs-2 control-label">经办人员</label>
<?php 
echo $this->Form->input('employee_id',array('div'=>'col-xs-3','label'=>false,'class'=>' form-control'));
 ?>
 </div>

 <div class="form-group">
 <label for="" class="col-xs-2 control-label" >维护类型</label>
<?php 
echo $this->Form->input('maintain_type',array('div'=>'col-xs-3','label'=>false,'class'=>' form-control'));
 ?>
 </div>

<div class="form-group">
<label class="col-xs-2 control-label" name="data[VehicleMaintain][maintain_cost]">维护经费</label>
<?php 
echo $this->Form->input('maintain_cost',array('div'=>'col-xs-3','label'=>false,'placeholder'=>'请输入金额','type'=>'text','class'=>' form-control'));
?>
</div>


<div class="form-group">
<label for="lastname" class="col-xs-2 control-label">维护时间</label>
  <div class="col-xs-3">
     <div class='input-group date' id='datetimepicker4'>
    <?php  echo $this->            
    Form->input('maintain_time',array('label'=>false,'type'=>'text','class'=>'form-control ','placeholder'=>'请输入维护时间')); ?>
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
<span class="star">*</span>
</div>


<div class="form-group">
  <label for="lastname" class="col-xs-2 control-label">维护原因</label>
  
  <?php  echo $this->Form->input('maintain_reason',array('div'=>'col-xs-6 control-label','label'=>false,'placeholder'=>'请输入维护原因','class'=>'form-control ')); ?>   
  
</div>

<div class="form-group">
  <label for="" class="col-xs-2 control-label">备注</label>
     <?php echo $this->Form->input('note',array('div'=>'col-xs-6 ','label'=>false,'class'=>'form-control ')); ?>
</div>


<div class="form-group">
  <div class="col-xs-offset-2 col-xs-10">
   <input type="reset" value="<?php echo __("Cancel") ?>" class="btn btn-link">
       &nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-info">提交</button>
  </div>
</div>

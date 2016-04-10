<?php echo $this->Html->css('bootstrap-datetimepicker.css');
      echo $this->Html->script('moment.min.js');
      echo $this->Html->script('bootstrap-datetimepicker.min.js');

 ?>
 
 <style type="text/css">
 .star {
  content: ' *';
  color: #FF0000;
  font-size:150%;
}
</style>

<fieldset><legend><?php echo __('Edit Vehicle Insurance'); ?></legend></fieldset> 
<?php echo $this->Form->create('VehicleInsurance',array('class'=>'form-horizontal')); ?>
<?php echo $this->Form->input('id'); ?>

<div class="form-group">
  <label for="" class="col-sm-2 control-label" >车牌号</label>

  <?php 
  echo $this->Form->input('vehicle_id',array('div'=>'col-sm-2','label'=>false));
 ?>
 <span class="star">*</span>
</div>
   
<div class="form-group">
  <label for="name" class="col-sm-2 control-label" >保险经办人</label>
  <?php 
  echo $this->Form->input('employee_id',array('div'=>'col-sm-2','label'=>false));
 ?>
 <span class="star">*</span>
</div> 

<!-- 此处新增 'type'=>'text' 可以防止表单默认显示0  缺点 不能防止用户误输字符串  -->
<div class="form-group">
  <label for="name" class="col-sm-2 control-label" >电话号码</label>
   <div class="col-sm-2">
    <span class="input-icon input-icon-right">
  <?php 
  echo $this->Form->input('insurance_tel',array('div'=>false,'label'=>false,'placeholder'=>"请输入电话号码",'type'=>'text'));
 ?>
  <i class="ace-icon fa fa-phone"></i>
      </span>
   </div>
 <span class="star">*</span>
</div>
   
<div class="form-group">
  <label for="name" class="col-sm-2 control-label" >保险公司</label>
  <?php 
  echo $this->Form->input('insurance_company',array('div'=>'col-sm-2','label'=>false));
 ?>
 <span class="star">*</span>
</div>

<div class="form-group">
  <label for="name" class="col-sm-2 control-label" >保险种类</label>
  <?php 
  echo $this->Form->input('insurance_type',array('div'=>'col-sm-2','label'=>false,'placeholder'=>"请输入保险种类",));
 ?>
 <span class="star">*</span>
</div>

<div class="form-group">
  <label for="name" class="col-sm-2 control-label" >保险金额</label>
  <?php 
  echo $this->Form->input('insurance_cost',array('div'=>'col-sm-2','label'=>false,'placeholder'=>"请输入保险金额",'type'=>'text'));
 ?>
 <span class="star">*</span>
</div>

<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">保险开始时间</label>
  <div class="col-sm-2">
     <div class='input-group date' id='datetimepicker1'>
    <?php  echo $this->            
    Form->input('insurance_start_date',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入保险开始时间')); ?>
     <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>     
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker1').datetimepicker({
                  format: 'YYYY-MM-DD'
              });
      });
    </script>
</div>
</div>

<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">保险结束时间</label>
  <div class="col-sm-2">
     <div class='input-group date' id='datetimepicker2'>
    <?php  echo $this->            
    Form->input('insurance_end_date',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入保险结束时间')); ?>
     <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>   
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker2').datetimepicker({
                  format: 'YYYY-MM-DD'
              });
      });
    </script>
</div>
</div>

<div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">备注</label>
    <div class="col-sm-10">
    <?php echo $this->Form->input('note',array('class'=>'form-control','row'=>'3','label'=>false)); ?>
    </div>
 </div>

<!-- 是否可以直接用cakephp代码 替换input   代码如下
          echo $this->Form->input('***',array('class'=>'form-control ace ace-switch ace-switch-6','type'=>'checkbox','checked'));   -->

 <div class="form-group">
    <label for="" class="col-sm-2 control-label">保险到期提醒</label>
    <div class="col-sm-2">
      
<label>
<input name="" class="form-control ace ace-switch ace-switch-6" type="checkbox" checked />
<span class="lbl"></span>
</label>

    </div>
 </div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-info">提交</button>
       &nbsp;&nbsp;&nbsp;&nbsp;
  <!--   <?php echo $this->Html->link('取消',array('action'=>'add')) ?>  -->
   <input type="reset" value="<?php echo __("Cancel") ?>" class="btn btn-link">
  </div>
</div>

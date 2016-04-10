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
.sbt{
  width: 100%;
}
</style>

  <fieldset>
    <legend><?php echo __('Edit Vehicle Usage'); ?></legend>
  </fieldset>

   <?php echo $this->Form->create('VehicleUsage',array('class'=>'form-horizontal')); ?>
   <?php echo $this->Form->input('id'); ?>
  
    <div class="rows">
        <div class="form-group">
        <label for="" class="col-sm-2 control-label" >车牌号</label>
        <?php echo $this->Form->input('vehicle_id',array('div'=>'col-sm-3','label'=>false));?>
        <span class="star">*</span>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label" >司机</label>
        <?php 
        echo $this->Form->input('employee_id',array('style'=>'width:100%','div'=>'col-sm-3','label'=>false));
        ?>
        <span class="star">*</span>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label" >用车性质</label>
        <?php 
        echo $this->Form->input('vehicle_application',array('style'=>'width:100%','div'=>'col-sm-3','label'=>false));
        ?>
        <span class="star">*</span>
        </div>

        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">开始时间</label>
            <div class="col-sm-3">
                <div class='input-group date' id='datetimepicker1'>
              <?php  echo $this->            
              Form->input('start_time',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入开始时间')); ?>
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
          <label for="lastname" class="col-sm-2 control-label">结束时间</label>
            <div class="col-sm-3">
              <div class='input-group date' id='datetimepicker2'>
              <?php  echo $this->            
              Form->input('end_time',array('label'=>false,'type'=>'text','class'=>'form-control','placeholder'=>'请输入结束时间')); ?>
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
          <label for="" class="col-sm-2 control-label" >目的地</label>
          <?php 
          echo $this->Form->input('destination',array('div'=>'col-sm-3','type'=>'text','style'=>'width:100%','label'=>false,'placeholder'=>'请输入目的地'));
         ?>
         <span class="star">*</span>
        </div>
           
          <div class="form-group">
          <label for="" class="col-sm-2 control-label" >里程</label>
          <?php 
          echo $this->Form->input('mileage',array('div'=>'col-sm-3','type'=>'text','style'=>'width:100%','label'=>false,'placeholder'=>'请输入里程数'));
         ?>
         <span class="star">*</span>
        </div>
           

        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">事由</label>
         <!--  <div class="col-sm-10"> -->
            <?php  echo $this->Form->input('purpose',array('class'=>'form-control','rows'=>'3','div'=>'col-sm-6','label'=>false)); ?>
          <!-- </div> -->
       </div>

        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">备注</label>
         <!--  <div class="col-sm-10"> -->
            <?php  echo $this->Form->input('note',array('class'=>'form-control','rows'=>'3','div'=>'col-sm-6','label'=>false)); ?>
          <!-- </div> -->
       </div>
    </div><!-- .rows  -->
    
   <!--    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="reset" value="<?php echo __("Cancel") ?>      
          " class="btn btn-link">
       &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-info">
            <?php echo __("Submit") ?></button>
        </div>
      </div>
 -->

  <div >
    <button type="submit" class="btn btn-info sbt"> <?php echo __("Submit") ?></button>
  </div>
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
.submit{
    width: 100%;
    text-align: center;
}
</style>

<fieldset>
    <legend><?php echo __('Edit Vehicle'); ?></legend>
</fieldset>
   <?php echo $this->Form->create('Vehicle',array('class'=>'form-horizontal')); ?>
    <?php   echo $this->Form->input('id'); ?>
    <div class="rows">
        <!-- 右侧列 -->
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label " ><?php echo __('Registration Number') ?></label>
                <?php 
                echo $this->Form->input('registration_number',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车牌号'));
                ?>
                <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Name') ?></label>
            <?php 
            echo $this->Form->input('vehicle_name',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆名称'));
            ?>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Volume') ?></label>
            <?php 
            echo $this->Form->input('vehicle_volume',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆排量'));
            ?>
            <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Model') ?></label>
            <?php 
            echo $this->Form->input('vehicle_model',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆型号'));
            ?>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Engine') ?></label>
            <?php 
            echo $this->Form->input('vehicle_engine',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入引擎编号'));
            ?>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Chassis') ?></label>
            <?php 
            echo $this->Form->input('vehicle_chassis',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入底盘号'));
            ?>
            </div>
            
            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Type') ?></label>
            <?php 
            echo $this->Form->input('vehicle_type',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆类型'));
            ?>
            <span class="star">*</span>
            </div>

             <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Other Info') ?></label>
            <?php 
            echo $this->Form->input('other_info',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control input-lg'));
            ?>
            </div>  

        </div>

        <!-- 右侧列 -->
        <div class="col-xs-6 no-padding-left">
            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Status') ?></label>
            <?php 
            echo $this->Form->input('vehicle_status',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆状态'));
            ?>
            <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Color') ?></label>
            <?php 
            echo $this->Form->input('vehicle_color',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入车辆颜色'));
            ?>
            </div>


            <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label"><?php echo __('Purchase Date') ?></label>
              <div class="col-sm-8">
                 <div class='input-group date' id='datetimepicker1'>
                <?php  echo $this->            
                Form->input('purchase_date',array('label'=>false,'type'=>'text','class'=>'form-control ','placeholder'=>'请输入购买日期')); ?>
                 <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>     
                <script type="text/javascript">
                  $(function () {
                    $('#datetimepicker1').datetimepicker({
                              format: 'YYYY/MM/DD'
                          });
                  });
                </script>
            </div>
            <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Purchase Amount') ?></label>
            <?php 
            echo $this->Form->input('purchase_amount',array('type'=>'text','div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入购买金额'));
            ?>
            <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Purchase Manufacturer') ?></label>
            <?php 
            echo $this->Form->input('purchase_manufacturer',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入购买厂商'));
            ?>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Max Passenger') ?></label>
            <?php 
            echo $this->Form->input('max_passenger',array('type'=>'text','div'=>'col-sm-8','label'=>false,'class'=>'form-control','placeholder'=>'请输入最大载客数'));
            ?>
            <span class="star">*</span>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label" ><?php echo __('Vehicle Pic') ?></label>
            <?php 
            echo $this->Form->input('vehicle_pic',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control'));
            ?>
            </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label"><?php echo __('Note') ?></label>
               <?php echo $this->Form->input('note',array('div'=>'col-sm-8','label'=>false,'class'=>'form-control input-lg')); ?>
            </div>

        </div>

    </div>
     
  <center>
         <button type="submit" class="btn btn-info submit"><?php echo __("Submit") ?></button>
  </center>
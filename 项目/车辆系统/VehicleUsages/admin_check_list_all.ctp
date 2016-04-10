<?php 
      echo $this->Html->script('jquery.dataTables.min.js');
      echo $this->Html->script('jquery.dataTables.bootstrap.js');
 ?>
 <style type="text/css">
.btn-width {
	width: 100%;
	font-size: 1.3em;
	font-weight: bold; 
}
.btn-main div.col-xs-4{
	padding: 0;
	margin:0;
}

 </style>


<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">
			<?php echo __("Vehicle Usage Checked") ?></h3>

<!-- 全部、未审核、已审核按钮 -->


		<div class="btn-group btn-group-lg btn-main" role="group">
			<div class="col-xs-4">
					<button id="select_all"  class="btn btn-purple  btn-width"> <i class="fa fa-th-list"></i>&nbsp;<?php echo __("All") ?></button>
			</div>

			<div class="col-xs-4">
				<button id="select_unchecked" class="btn btn btn-info  btn-width"> <i class="ace-icon fa fa-undo"></i><?php echo __("Unchecked") ?></button>
			</div>
			<div class="col-xs-4">
				<button  id="select_checked" class="btn btn btn-success btn-width"><i class="ace-icon fa fa-trash-o"></i>&nbsp;<?php echo __("Checked") ?></button>
			</div>
	
	<div class="clearfix"></div>
	<!-- <br> -->


		<div class="table-header"><?php echo __("List Vehicle Usage Checked") ?></div>
			<!-- <div class="table-responsive">
		-->
		<!-- <div class="dataTables_borderWrap">
		-->

		<table id="vehicle_check_list" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="sample-table-2_info">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
						<label class="position-relative">
							<input type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</th>
					<th>
						<?php echo $this->Paginator->sort('id'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('vehicle_id'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('employee_id'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('vehicle_comfirm_status'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('vehicle_application'); ?></th>
				<!-- 	<th>
						<?php echo $this->Paginator->sort('dispatch_date'); ?></th> -->
					<th>
						<?php echo $this->Paginator->sort('start_time'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('end_time'); ?></th>
					<!-- <th>
						<?php echo $this->Paginator->sort('return_time'); ?></th> -->
					<th>
						<?php echo $this->Paginator->sort('destination'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('mileage'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('purpose'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('note'); ?></th>
					<!-- <th>
						<?php echo $this->Paginator->sort('created'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('modified'); ?></th> -->
					<th class="actions">
						<?php echo __('Actions'); ?></th>
					<!-- <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
				-->
			</tr>
		</thead>

		<tbody>

			<tr role="row" class="odd">

				<?php foreach ($vehicleUsages as $vehicleUsage): ?>
				<tr data-is-checked="<?php echo $vehicleUsage['VehicleUsage']['vehicle_comfirm_status'];?>">
					<td class="center">
						<label class="position-relative">
							<input type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->							
						Html->link($vehicleUsage['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleUsage['Vehicle']['id'])); ?>
					</td>
					<td>
						<?php echo $this->							
						Html->link($vehicleUsage['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleUsage['Employee']['id'])); ?>
					</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['vehicle_comfirm_status']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['vehicle_application']); ?>&nbsp;</td>
					<!-- <td>
						<?php echo h($vehicleUsage['VehicleUsage']['dispatch_date']); ?>&nbsp;</td> -->
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['start_time']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['end_time']); ?>&nbsp;</td> 
					<!-- <td>
						<?php echo h($vehicleUsage['VehicleUsage']['return_time']); ?>&nbsp;</td> -->
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['destination']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['mileage']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['purpose']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['note']); ?>&nbsp;</td>
					<!-- <td>
						<?php echo h($vehicleUsage['VehicleUsage']['created']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleUsage['VehicleUsage']['modified']); ?>&nbsp;</td> -->
					<td>
						<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-check-circle-o bigger-130 purple'))." ". __('Check'), 
						array('action' => 'check',$vehicleUsage['VehicleUsage']['id']), 
						array('escape'=>false)); ?>

						<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-pencil bigger-130 green'))." ". __('Edit'), 
						array('action' => 'admin_edit',$vehicleUsage['VehicleUsage']['id']), 
						array('escape'=>false)); ?>

						<?php echo $this->Form->postLink($this->Html->tag('i', '', 
						array('class' => 'ace-icon fa fa-trash-o bigger-130 red'))." ".__('Delete'), 
						array('action' => 'admin_delete', $vehicleUsage['VehicleUsage']['id']), 
						array('escape'=>false), __('Are you sure you want to delete # %s?',$vehicleUsage['VehicleUsage']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?></tr>
		</tbody>
	</table>



<script>
	$(document).ready(function(){
		$('#select_all').click(function(){
			$("#vehicle_check_list tr").show();
		});

		$("#select_checked").click(function(){
			$("#vehicle_check_list tr").show();
			$("#vehicle_check_list tr[data-is-checked=pending]").hide();
			$("#vehicle_check_list tr[data-is-checked=reject]").hide();

		});
		$("#select_unchecked").click(function(){
			$("#vehicle_check_list tr").show();
			$("#vehicle_check_list tr[data-is-checked=approved]").hide();
		});
	});
</script>

<script type="text/javascript">
	var myTable = 
 $('#vehicle_check_list')
 .dataTable({
    /**
    sScrollY: "200px",//enable vertical scrolling
    sScrollX: "100%",
    sScrollXInner: "120%",//enable horizintal scrolling with its content 120% of its container
    bScrollCollapse: true,
    */

    bAutoWidth: false,//for better responsiveness
    "columnDefs": [{
    "defaultContent": "-",
    "targets": "_all"
  }]

 });
</script>
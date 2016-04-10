<?php 
      echo $this->Html->script('jquery.dataTables.min.js');
      echo $this->Html->script('jquery.dataTables.bootstrap.js');
 ?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue"><?php echo __("Vehicle Usages") ?></h3>
		<div class="table-header"><?php echo __("List Vehicle Usages") ?></div>

		<!-- <div class="table-responsive">
		-->
		<!-- <div class="dataTables_borderWrap">
		-->

		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
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
								<?php echo $this->Paginator->sort('dispatch_time'); ?></th> -->
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
							
					</tr>
				</thead>

				<tbody>

<?php foreach ($vehicleUsages as $vehicleUsage): ?>

        <tr role="row" class="odd">
	        	<tr>
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

								<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-search-plus bigger-130 blue'))." ". __('View'), 
								array('action' => 'admin_view',$vehicleUsage['VehicleUsage']['id']), 
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
		<?php endforeach; ?>
		</tr>
	</tbody>
</table>

<script type="text/javascript">
	var myTable = 
 $('#sample-table-2')
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
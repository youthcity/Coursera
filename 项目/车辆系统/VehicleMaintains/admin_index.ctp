<?php 
      echo $this->Html->script('jquery.dataTables.min.js');
      echo $this->Html->script('jquery.dataTables.bootstrap.js');
 ?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue"><?php echo __("Vehicle Maintains") ?></h3>
		<div class="table-header"><?php echo __("List Vehicle Maintains"); ?></div>

		<!-- <div class="table-responsive">
		-->
		<!-- <div class="dataTables_borderWrap">
		-->
		<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="sample-table-2_info">
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
						<?php echo $this->Paginator->sort('maintain_time'); ?> </th>
					<th>
						<?php echo $this->Paginator->sort('maintain_type'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('maintain_cost'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('maintain_reason'); ?></th>
					<th>
						<?php echo $this->Paginator->sort('note'); ?></th>
					<th class="actions">
						<?php echo __('Actions'); ?></th>
					<!-- <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
				-->
			</tr>
		</thead>

		<tbody>

			<tr role="row" class="odd">

				<?php foreach ($vehicleMaintains as $vehicleMaintain): ?>
				<tr>
					<td class="center">
						<label class="position-relative">
							<input type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</td>
					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->
						Html->link($vehicleMaintain['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleMaintain['Vehicle']['id'])); ?>
					</td>
					<td>
						<?php echo $this->
						Html->link($vehicleMaintain['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleMaintain['Employee']['id'])); ?>
					</td>

					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_time']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_type']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_cost']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['maintain_reason']); ?>&nbsp;</td>
					<td>
						<?php echo h($vehicleMaintain['VehicleMaintain']['note']); ?>&nbsp;</td>
					<td class="hidden-sm hidden-xs action-buttons">
					<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-search-plus bigger-130 blue'))." ". __('View'), 
					array('action' => 'admin_view',$vehicleMaintain['VehicleMaintain']['id']), 
					array('escape'=>false)); ?>

					<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-pencil bigger-130 green'))." ". __('Edit'), 
					array('action' => 'admin_edit',$vehicleMaintain['VehicleMaintain']['id']), 
					array('escape'=>false)); ?>

					<?php echo $this->	
					Form->postLink($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-trash-o bigger-130 red'))." ".__('Delete'), 
					array('action' => 'admin_delete',$vehicleMaintain['VehicleMaintain']['id']), 
					array('escape'=>false), 
					__('Are you sure you want to delete # %s?',
					$vehicleMaintain['VehicleMaintain']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?></tr>
		</tbody>
	</table>
			

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle Maintain'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

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

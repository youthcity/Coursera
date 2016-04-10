<?php 
      echo $this->Html->script('jquery.dataTables.min.js');
      echo $this->Html->script('jquery.dataTables.bootstrap.js');
 ?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue"><?php echo __("Vehicle Insurances") ?></h3>
		<div class="table-header"><?php echo __("List Vehicle Insurance") ?></div>

			<table id="sample-table-2" class="table table-striped table-bordered table-hover">	
    		<thead>
				<tr role="row">
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
						<label class="position-relative">
							<input type="checkbox" class="ace">		
							<span class="lbl"></span>
						</label>
					</th>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
					<th><?php echo $this->Paginator->sort('employee_id'); ?></th>					
					<th><?php echo $this->Paginator->sort('insurance_company'); ?></th>
					<th><?php echo $this->Paginator->sort('insurance_type'); ?></th>
					<th><?php echo $this->Paginator->sort('insurance_cost'); ?></th>
					<th > <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i><?php echo __('Remain_time'); ?></th>
					<th class="sorting" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">modified</th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>

			<tbody>

	<?php foreach ($vehicleInsurances as $vehicleInsurance): ?>
				<tr role="row" class="odd">
					<td class="center">
						<label class="position-relative">
							<input type="checkbox" class="ace">		
							<span class="lbl"></span>
						</label>
					</td>
					<td>
						<?php echo h($vehicleInsurance['VehicleInsurance']['id']); ?>
					</td>

					<td>
						<?php echo $this->Html->link($vehicleInsurance['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicleInsurance['Vehicle']['id'])); ?>
					</td>
					<td class="hidden-480">
						<?php echo $this->Html->link($vehicleInsurance['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleInsurance['Employee']['id'])); ?>
					</td>
					<td>
						<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_company']); ?>
					</td>
					<td>
						<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_type']); ?>
					</td>
					<td>
						<?php echo h($vehicleInsurance['VehicleInsurance']['insurance_cost']); ?>
					</td>

					<td>
						<?php echo (floor((strtotime($vehicleInsurance['VehicleInsurance']['insurance_end_date'])-time())/60/60/24)); ?>
					</td>
					
					<td>
						<?php echo h($vehicleInsurance['VehicleInsurance']['modified']); ?>
					</td>

					<td>
						<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-search-plus bigger-130 blue'))." ". __('View'), 
							array('action' => 'admin_view',$vehicleInsurance['VehicleInsurance']['id']), 
							array('escape'=>false)); ?>

							<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-pencil bigger-130 green'))." ". __('Edit'), 
							array('action' => 'admin_edit',$vehicleInsurance['VehicleInsurance']['id']), 
							array('escape'=>false)); ?>

							<?php echo $this->Form->postLink($this->Html->tag('i', '', 
							array('class' => 'ace-icon fa fa-trash-o bigger-130 red'))." ".__('Delete'), 
							array('action' => 'admin_delete', $vehicleInsurance['VehicleInsurance']['id']), 
							array('escape'=>false), __('Are you sure you want to delete # %s?',$vehicleInsurance['VehicleInsurance']['id'])); ?>
					</td>
				</tr>
          <?php endforeach; ?>
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
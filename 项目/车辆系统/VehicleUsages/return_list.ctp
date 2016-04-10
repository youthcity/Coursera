<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Vehicle Usages</h3>




<!-- 中间按钮 带修改大小 加链接 -->
<div class="row">

	<!-- 	<div class="table-header">Results for "Vehicle Usages"</div> -->

		<!-- <div class="table-responsive">
		-->
		<!-- <div class="dataTables_borderWrap">
		-->
	

<div class="table-header">Results for "Vehicle Return List"</div>

		<div>
			<div id="sample-table-2_wrapper" class="dataTables_wrapper form-inline no-footer">
				<div class="row">
					<div class="col-xs-6">
						<div class="dataTables_length" id="sample-table-2_length">
							<label>
								Display
								<select name="sample-table-2_length" aria-controls="sample-table-2" class="form-control input-sm">
									<option value="10">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
								records
							</label>
						</div>
					</div>
					<div class="col-xs-6">
						<div id="sample-table-2_filter" class="dataTables_filter">
							<label>
								Search:
								<input type="search" class="form-control input-sm" aria-controls="sample-table-2"></label>
						</div>
					</div>
				</div>

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
								<?php echo $this->Paginator->sort('vehicle_comfirm_status'); ?></th>
							<th>
								<?php echo $this->Paginator->sort('vehicle_application'); ?></th>
						<!-- 	<th>
								<?php echo $this->Paginator->sort('dispatch_date'); ?></th> -->
							<th>
								<?php echo $this->Paginator->sort('start_time'); ?></th>
							<!-- <th>
								<?php echo $this->Paginator->sort('end_time'); ?></th> -->
							<th>
								<?php echo $this->Paginator->sort('return_time'); ?></th>
							<th>
								<?php echo $this->Paginator->sort('destination'); ?></th>
							<th>
								<?php echo $this->Paginator->sort('mileage'); ?></th>
							<th>
								<?php echo $this->Paginator->sort('purpose'); ?></th>
							<!-- <th>
								<?php echo $this->Paginator->sort('note'); ?></th> -->
							<!-- <th>
								<?php echo $this->Paginator->sort('created'); ?></th>
							<th>
								<?php echo $this->Paginator->sort('modified'); ?></th> -->
							
							<!-- <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
						-->
					</tr>
				</thead>

				<tbody>

					<tr role="row" class="odd">

						<?php foreach ($vehicleUsages as $vehicleUsage): ?>
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
							<!-- <td>
								<?php echo h($vehicleUsage['VehicleUsage']['end_time']); ?>&nbsp;</td> -->
							<td>
								<?php echo h($vehicleUsage['VehicleUsage']['return_time']); ?>&nbsp;</td>
							<td>
								<?php echo h($vehicleUsage['VehicleUsage']['destination']); ?>&nbsp;</td>
							<td>
								<?php echo h($vehicleUsage['VehicleUsage']['mileage']); ?>&nbsp;</td>
							<td>
								<?php echo h($vehicleUsage['VehicleUsage']['purpose']); ?>&nbsp;</td>
							<!-- <td>
								<?php echo h($vehicleUsage['VehicleUsage']['note']); ?>&nbsp;</td> -->
							<!-- <td>
								<?php echo h($vehicleUsage['VehicleUsage']['created']); ?>&nbsp;</td>
							<td>
								<?php echo h($vehicleUsage['VehicleUsage']['modified']); ?>&nbsp;</td> -->

						</tr>
						<?php endforeach; ?></tr>
				</tbody>
			</table>
			
			<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
					?>	
			</p>
					<div class="paging">
						<?php
						echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
						?>
					</div>

		</div>
	</div>
</div>
</div>


	<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>


<!--留着有用 -->
<!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->


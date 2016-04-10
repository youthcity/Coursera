
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Vehicle Return</h3>
		<div class="table-header">Results for "Vehicle Return"</div>

		<!-- <div class="table-responsive">
		-->
		<!-- <div class="dataTables_borderWrap">
		-->
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
											<?php echo $this->Paginator->sort('vehicle_usage_id'); ?></th>
										<th>
											<?php echo $this->Paginator->sort('employee_id'); ?></th>
										<th>
											<?php echo $this->Paginator->sort('return_time'); ?></th>
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

						<?php foreach ($vehicleReturns as $vehicleReturn): ?>
						<tr>
							<td class="center">
								<label class="position-relative">
									<input type="checkbox" class="ace">
									<span class="lbl"></span>
								</label>
							</td>
							<td>
								<?php echo h($vehicleReturn['VehicleReturn']['id']); ?>&nbsp;</td>
							<td>
								<?php echo $this->							
								Html->link($vehicleReturn['VehicleUsage']['vehicle_id'], array('controller' => 'vehicle_usages', 'action' => 'view', $vehicleReturn['VehicleUsage']['id'])); ?>
							</td>
							<td>
								<?php echo $this->							
								Html->link($vehicleReturn['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $vehicleReturn['Employee']['id'])); ?>
							</td>
							<td>
								<?php echo h($vehicleReturn['VehicleReturn']['return_time']); ?>&nbsp;</td>
							<td>
								<?php echo h($vehicleReturn['VehicleReturn']['note']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->							
								Html->link(__('View'), array('action' => 'view', $vehicleReturn['VehicleReturn']['id'])); ?>
								<?php echo $this->							
								Html->link(__('Edit'), array('action' => 'edit', $vehicleReturn['VehicleReturn']['id'])); ?>
								<?php echo $this->							
								Form->postLink(__('Delete'), array('action' => 'delete', $vehicleReturn['VehicleReturn']['id']), null, __('Are you sure you want to delete # %s?', $vehicleReturn['VehicleReturn']['id'])); ?>
							</td>
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
		<li><?php echo $this->Html->link(__('New Vehicle Return'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicle Usages'), array('controller' => 'vehicle_usages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Usage'), array('controller' => 'vehicle_usages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>


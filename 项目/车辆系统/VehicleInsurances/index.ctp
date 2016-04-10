<!-- /**
 * admin_index view
 * @author Zhang Baoye
 * @return void
 */ -->
 <h3 class="header smaller lighter blue"><?php echo __('Vehicle Insurances'); ?></h3>

<div class="table-header">
	List Vehicle Insurance
</div>

<div>
	<div id="simple-table-2 wrapper" class="dataTables_wrapper form-inline no-footer">
		
		<!-- Display and Search-->
		<div class="row">
			<div class="col-xs-6">
                <div class="dataTables_length" id="sample-table-2_length">
                	<label for="">
                		Display
                		<select name="sample-table-2_length" aria-controls="sample-table-2" class="form-control input-sm">
                			<option value="10">10</option>
                			<option value="25">25</option>
                			<option value="50">50</option>
                			<option value="100">100</option>
                		</select>
                		Records
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



		<!-- tbody -->

		<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="sample-table-2_info">
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
					<th > <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Remain_time</th>
					<th class="sorting" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">modified</th>

					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
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
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="blue" href="#"> <i class="ace-icon fa fa-search-plus bigger-130"></i>
							<?php echo $this->Html->link(__('V'), array('action' => 'view', $vehicleInsurance['VehicleInsurance']['id'])); ?></a>

							<a class="green" href="#">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>
							<?php echo $this->Html->link(__('E'), array('action' => 'edit', $vehicleInsurance['VehicleInsurance']['id'])); ?>
							<a class="red" href="#">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
							<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $vehicleInsurance['VehicleInsurance']['id']), null, __('Are you sure you want to delete # %s?', $vehicleInsurance['VehicleInsurance']['id'])); ?>
						</div>

						<div class="hidden-md hidden-lg">
							<div class="inline position-relative">
								<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
									<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
								</button>

								<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
									<li>
										<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
											<span class="blue">
												<i class="ace-icon fa fa-search-plus bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
											<span class="green">
												<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
											<span class="red">
												<i class="ace-icon fa fa-trash-o bigger-120"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
<?php endforeach; ?>
				
			


			</tbody>



		</table>
		
		<p>
	<?php
	echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
	?>	
		</p>
		<div class="paging pull-right">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>


</div>





<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = 
				$('#sample-table-2')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				/**
				var tableTools = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "../../copy_csv_xls_pdf.swf",
			        "buttons": [
			            "copy",
			            "csv",
			            "xls",
						"pdf",
			            "print"
			        ]
			    } );
			    $( tableTools.fnContainer() ).insertBefore('#sample-table-2');
				*/
			
			
				$(document).on('click', 'th input:checkbox' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
</script>


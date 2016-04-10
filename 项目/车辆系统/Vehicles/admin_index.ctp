<?php 
      echo $this->Html->script('jquery.dataTables.min.js');
      echo $this->Html->script('jquery.dataTables.bootstrap.js');
 ?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue"><?php echo __("Vehicles") ?></h3>
		<div class="table-header"><?php echo __("List Vehicles") ?></div>

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
			          <th><?php echo $this->Paginator->sort('id'); ?></th>
			          <th><?php echo $this->Paginator->sort('registration_number'); ?></th>
			          <th><?php echo $this->Paginator->sort('vehicle_volume'); ?></th>
			          <th><?php echo $this->Paginator->sort('vehicle_model'); ?></th>
			          <th><?php echo $this->Paginator->sort('vehicle_type'); ?></th>
			          <th><?php echo $this->Paginator->sort('vehicle_status'); ?></th>
			          <th><?php echo $this->Paginator->sort('max_passenger'); ?></th>
			          <th class="sorting" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">modified</th>
			          <th class="actions"> <?php echo __('Actions'); ?></th>
     		   </tr>
				</thead>

				<tbody>

<?php foreach ($vehicles as $vehicle): ?>
        <tr role="row" class="odd">
        	<td class="center">
        		<label class="position-relative">
        			<input type="checkbox" class="ace">        
        			<span class="lbl"></span>
        		</label>
        	</td>
        	<td>
        		<?php echo h($vehicle['Vehicle']['id']); ?></td>
        	<td>
        		<?php echo $this->        
        		Html->link($vehicle['Vehicle']['registration_number'], array('controller' => 'vehicles', 'action' => 'view', $vehicle['Vehicle']['id'])); ?>
        	</td>
        	<td>
        		<?php echo h($vehicle['Vehicle']['vehicle_volume']); ?></td>
        	<td>
        		<?php echo h($vehicle['Vehicle']['vehicle_model']); ?></td>
        	<td>
        		<?php echo h($vehicle['Vehicle']['vehicle_type']); ?></td>
        	<td>
        		<?php echo h($vehicle['Vehicle']['vehicle_status']); ?></td>

        	<td>
        		<?php echo h($vehicle['Vehicle']['max_passenger']); ?></td>

        	<td>
        		<?php echo h($vehicle['Vehicle']['modified']); ?></td>

        	<td>
              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-search-plus bigger-130 blue'))." ". __('View'), 
              array('action' => 'admin_view',$vehicle['Vehicle']['id']), 
              array('escape'=>false)); ?>

              <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-pencil bigger-130 green'))." ". __('Edit'), 
              array('action' => 'admin_edit',$vehicle['Vehicle']['id']), 
              array('escape'=>false)); ?>

              <?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'ace-icon fa fa-trash-o bigger-130 red'))." ".__('Delete'), 
              array('action' => 'admin_delete', $vehicle['Vehicle']['id']), 
              array('escape'=>false), 
              __('Are you sure you want to delete # %s?',
              $vehicle['Vehicle']['id'])); ?>
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
    
 });
</script>
<?php $__env->startSection('title'); ?>
  <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('theme_js'); ?>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/media/fancybox.min.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/notifications/bootbox.min.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
  
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/forms/selects/select2.min.js"></script>

  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/pages/datatables_data_sources.js"></script>
	<script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/core/app.js"></script>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/update.js"></script>
  <script type="text/javascript" src="<?php echo e(base_url()); ?>assets/js/delete.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
  <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="panel panel-flat">
		<div class="panel-heading">
			<h6 class="panel-title">Management Item</h6>
			<div class="heading-elements">
				<ul class="icons-list">
      		<li><a data-action="collapse"></a></li>
      		<li><a data-action="reload"></a></li>
      		<li><a data-action="close"></a></li>
      	</ul>
    	</div>
		</div>

		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-solid nav-justified">
					<li class="active"><a href="#manage" data-toggle="tab" id="load_item">Manage Items</a></li>
					<li><a href="#create" data-toggle="tab">Add Item</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="manage">
            <table class="table datatable-item datatable-html">
							<thead>
								<tr>
									<th>Code</th>
									<th>Name</th>
									<th>Type</th>
									<th>Color</th>
									<th>Status</th>
									<th>Price</th>
                  <th>Action</th>
								</tr>
							</thead>
						</table>
            <?php echo $__env->make('admin.modal.modal_view_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.modal.modal_edit_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>

					<div class="tab-pane" id="create">
            <?php echo $__env->make('admin.form.form_create_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.modal.modal_create_ctg_color', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.modal.modal_create_ctg_type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
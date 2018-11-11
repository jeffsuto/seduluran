<?php $__env->startSection('title'); ?>
  <?php echo e(ucwords($title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>
  <script src="<?php echo e(base_url()); ?>assets/js/custom.js"></script>
  <script src="<?php echo e(base_url()); ?>assets/js/ajax_view.js"></script>
  <script src="<?php echo e(base_url()); ?>assets/js/cart.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  	<section class="page-header">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo e(base_url()); ?>">Home</a></li>
				<li class="ctg"><a href="<?php echo e(base_url('id/c/'.strtolower($cat->ctg_type_name))); ?>"><?php echo e(strtolower($cat->ctg_type_name)); ?></a></li>
				<?php if(isset($sub)): ?>
					<li class="active sub"><?php echo e(ucwords($sub)); ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="toolbar mb-none">
					<div class="sorter">
						<div class="sort-by">
							<label>Sort by:</label>
							<select>
								<option value="Position">Position</option>
								<option value="Name">Name</option>
								<option value="Price">Price</option>
							</select>
						</div>

						<ul class="pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
						</ul>

						<div class="limiter">
							<label>Show:</label>
							<select>
								<option value="12">12</option>
								<option value="24">24</option>
								<option value="36">36</option>
							</select>
						</div>
					</div>
				</div>

				<ul class="products-grid columns4 item-view">

				</ul>

			</div>

			<aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
									Categories
								</a>
							</h4>
						</div>
						<div id="panel-filter-category" class="accordion-body collapse in">
							<div class="panel-body">
								<ul class="panel-<?php echo e($cat->ctg_type_name); ?>">

								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-price">
									Price
								</a>
							</h4>
						</div>
						<div id="panel-filter-price" class="accordion-body collapse in">
							<div class="panel-body">
								<div class="filter-price">
									<div id="price-slider"></div>
									<div class="filter-price-details">
										<span>from</span>
										<input type="text" id="price-range-low" class="form-control" placeholder="Min">
										<span>to</span>
										<input type="text" id="price-range-high" class="form-control" placeholder="Max">
										<a href="#" class="btn btn-primary">FILTER</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
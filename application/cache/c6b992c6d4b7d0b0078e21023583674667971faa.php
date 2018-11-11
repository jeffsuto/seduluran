<?php $__env->startSection('title'); ?>
  <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
        <ul class="products-grid columns4 item-home">
  
        </ul>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center" style="background: #053070">

     <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
             <img src="<?php echo e(url('assets')); ?>/assets/img/logo.png" alt="">
             <span class="d-none d-lg-block" style="color: white">P3M</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn" style="color: white"></i>
     </div><!-- End Logo -->
     
     <?php if (isset($component)) { $__componentOriginaldf1c34944440b08e683c87b0d74f8199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf1c34944440b08e683c87b0d74f8199 = $attributes; } ?>
<?php $component = App\View\Components\Template\Profile::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Template\Profile::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf1c34944440b08e683c87b0d74f8199)): ?>
<?php $attributes = $__attributesOriginaldf1c34944440b08e683c87b0d74f8199; ?>
<?php unset($__attributesOriginaldf1c34944440b08e683c87b0d74f8199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf1c34944440b08e683c87b0d74f8199)): ?>
<?php $component = $__componentOriginaldf1c34944440b08e683c87b0d74f8199; ?>
<?php unset($__componentOriginaldf1c34944440b08e683c87b0d74f8199); ?>
<?php endif; ?>
 </header><!-- End Header -->
<?php /**PATH C:\laragon\www\P3M\resources\views/components/template/header.blade.php ENDPATH**/ ?>
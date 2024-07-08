 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center" style="background: #053070">

     <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
             <div class="margin-right: 20px;">
                 <img src="<?php echo e(url('assets')); ?>/assets/img/logo-7.png" style="scale: 1.8">
             </div>
             <span class="d-none d-lg-block" style="color: white">P3KM</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn" style="color: white"></i>
     </div><!-- End Logo -->
     
     <?php if (isset($component)) { $__componentOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.dosen_layouts.profile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.dosen_layouts.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b)): ?>
<?php $attributes = $__attributesOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b; ?>
<?php unset($__attributesOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b)): ?>
<?php $component = $__componentOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b; ?>
<?php unset($__componentOriginal1d6f9a601516b7d78ecf3ffe4f0ef28b); ?>
<?php endif; ?>
 </header><!-- End Header -->
<?php /**PATH C:\laragon\www\P3M\resources\views/components/layouts/dosen_layouts/navbar.blade.php ENDPATH**/ ?>
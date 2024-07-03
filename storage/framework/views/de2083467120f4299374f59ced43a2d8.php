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
     
     <?php if (isset($component)) { $__componentOriginal0616645615ea9d8d257cab7342afc5be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0616645615ea9d8d257cab7342afc5be = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templating.profile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templating.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0616645615ea9d8d257cab7342afc5be)): ?>
<?php $attributes = $__attributesOriginal0616645615ea9d8d257cab7342afc5be; ?>
<?php unset($__attributesOriginal0616645615ea9d8d257cab7342afc5be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0616645615ea9d8d257cab7342afc5be)): ?>
<?php $component = $__componentOriginal0616645615ea9d8d257cab7342afc5be; ?>
<?php unset($__componentOriginal0616645615ea9d8d257cab7342afc5be); ?>
<?php endif; ?>
 </header><!-- End Header -->
<?php /**PATH C:\laragon\www\P3M\resources\views/components/layouts/dosen_layouts/navbar.blade.php ENDPATH**/ ?>
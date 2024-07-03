<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charts / ApexCharts - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(url('assets')); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo e(url('assets')); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo e(url('assets')); ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(url('assets')); ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>

    <?php if (isset($component)) { $__componentOriginalc593a32c60ebd32ceffd2b3ccf5e35c8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc593a32c60ebd32ceffd2b3ccf5e35c8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.dosen_layouts.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.dosen_layouts.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc593a32c60ebd32ceffd2b3ccf5e35c8)): ?>
<?php $attributes = $__attributesOriginalc593a32c60ebd32ceffd2b3ccf5e35c8; ?>
<?php unset($__attributesOriginalc593a32c60ebd32ceffd2b3ccf5e35c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc593a32c60ebd32ceffd2b3ccf5e35c8)): ?>
<?php $component = $__componentOriginalc593a32c60ebd32ceffd2b3ccf5e35c8; ?>
<?php unset($__componentOriginalc593a32c60ebd32ceffd2b3ccf5e35c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal619cc5bfbfb818579c1265f45925c55a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal619cc5bfbfb818579c1265f45925c55a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.dosen_layouts.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.dosen_layouts.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal619cc5bfbfb818579c1265f45925c55a)): ?>
<?php $attributes = $__attributesOriginal619cc5bfbfb818579c1265f45925c55a; ?>
<?php unset($__attributesOriginal619cc5bfbfb818579c1265f45925c55a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal619cc5bfbfb818579c1265f45925c55a)): ?>
<?php $component = $__componentOriginal619cc5bfbfb818579c1265f45925c55a; ?>
<?php unset($__componentOriginal619cc5bfbfb818579c1265f45925c55a); ?>
<?php endif; ?>

    <main id="main" class="main">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid pt-2">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
        </section>
    </main><!-- End #main -->
    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/quill/quill.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo e(url('assets')); ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(url('assets')); ?>/assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/layouts/dosen_layouts/app.blade.php ENDPATH**/ ?>
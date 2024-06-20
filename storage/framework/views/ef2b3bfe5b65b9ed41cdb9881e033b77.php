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

    <?php if (isset($component)) { $__componentOriginal2ac578a025578ca88b0bd1d66062f300 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ac578a025578ca88b0bd1d66062f300 = $attributes; } ?>
<?php $component = App\View\Components\Template\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Template\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ac578a025578ca88b0bd1d66062f300)): ?>
<?php $attributes = $__attributesOriginal2ac578a025578ca88b0bd1d66062f300; ?>
<?php unset($__attributesOriginal2ac578a025578ca88b0bd1d66062f300); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ac578a025578ca88b0bd1d66062f300)): ?>
<?php $component = $__componentOriginal2ac578a025578ca88b0bd1d66062f300; ?>
<?php unset($__componentOriginal2ac578a025578ca88b0bd1d66062f300); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginaldd2dbf5cb5f734d47aa648d359709f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd2dbf5cb5f734d47aa648d359709f28 = $attributes; } ?>
<?php $component = App\View\Components\Template\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Template\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd2dbf5cb5f734d47aa648d359709f28)): ?>
<?php $attributes = $__attributesOriginaldd2dbf5cb5f734d47aa648d359709f28; ?>
<?php unset($__attributesOriginaldd2dbf5cb5f734d47aa648d359709f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd2dbf5cb5f734d47aa648d359709f28)): ?>
<?php $component = $__componentOriginaldd2dbf5cb5f734d47aa648d359709f28; ?>
<?php unset($__componentOriginaldd2dbf5cb5f734d47aa648d359709f28); ?>
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
    <?php if (isset($component)) { $__componentOriginal40796613eed5d5b325e8ca0a6cec65df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40796613eed5d5b325e8ca0a6cec65df = $attributes; } ?>
<?php $component = App\View\Components\Template\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Template\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40796613eed5d5b325e8ca0a6cec65df)): ?>
<?php $attributes = $__attributesOriginal40796613eed5d5b325e8ca0a6cec65df; ?>
<?php unset($__attributesOriginal40796613eed5d5b325e8ca0a6cec65df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40796613eed5d5b325e8ca0a6cec65df)): ?>
<?php $component = $__componentOriginal40796613eed5d5b325e8ca0a6cec65df; ?>
<?php unset($__componentOriginal40796613eed5d5b325e8ca0a6cec65df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale9283109fe725d9b601c92d293e04460 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9283109fe725d9b601c92d293e04460 = $attributes; } ?>
<?php $component = App\View\Components\Utils\Notif::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('utils.notif'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Utils\Notif::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9283109fe725d9b601c92d293e04460)): ?>
<?php $attributes = $__attributesOriginale9283109fe725d9b601c92d293e04460; ?>
<?php unset($__attributesOriginale9283109fe725d9b601c92d293e04460); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9283109fe725d9b601c92d293e04460)): ?>
<?php $component = $__componentOriginale9283109fe725d9b601c92d293e04460; ?>
<?php unset($__componentOriginale9283109fe725d9b601c92d293e04460); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalbd10e2144c3e368a5dd8cccc91b516bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd10e2144c3e368a5dd8cccc91b516bd = $attributes; } ?>
<?php $component = App\View\Components\Utils\Notif2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('utils.notif2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Utils\Notif2::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd10e2144c3e368a5dd8cccc91b516bd)): ?>
<?php $attributes = $__attributesOriginalbd10e2144c3e368a5dd8cccc91b516bd; ?>
<?php unset($__attributesOriginalbd10e2144c3e368a5dd8cccc91b516bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd10e2144c3e368a5dd8cccc91b516bd)): ?>
<?php $component = $__componentOriginalbd10e2144c3e368a5dd8cccc91b516bd; ?>
<?php unset($__componentOriginalbd10e2144c3e368a5dd8cccc91b516bd); ?>
<?php endif; ?>
    

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
<?php /**PATH C:\laragon\www\P3M\resources\views/components/app.blade.php ENDPATH**/ ?>
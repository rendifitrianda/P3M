<a href="<?php echo e(url('layout/dashboard')); ?>" class="btn btn-info">
    <i class="ri-file-info-line"></i>
</a>

<?php $__env->startPush('script'); ?>
    <?php if (! $__env->hasRenderedOnce('4bf75c59-64ff-4a1f-80cd-95f75aca2bcd')): $__env->markAsRenderedOnce('4bf75c59-64ff-4a1f-80cd-95f75aca2bcd'); ?>
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/button/create.blade.php ENDPATH**/ ?>
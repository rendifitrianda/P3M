<?php $__env->startPush('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php if(session('success')): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '<?php echo e(session('success')); ?>',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    <?php endif; ?>

    <!-- Form Anda di sini -->
    <?php echo csrf_field(); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/utils/notif.blade.php ENDPATH**/ ?>
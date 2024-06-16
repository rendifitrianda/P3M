<?php $__currentLoopData = ['create', 'update', 'delete', 'error']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(session()->has($status)): ?>
        <?php $__env->startPush('script'); ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                $(document).ready(function() {
                    var message;

                    switch ('<?php echo e($status); ?>') {
                        case 'create':
                            message = 'Data Berhasil DiSimpan!';
                            break;
                        case 'update':
                            message = 'Data Berhasil Diupdate!';
                            break;
                        case 'delete':
                            message = 'Data Berhasil Dihapus!';
                            break;
                        case 'error':
                            message = 'error!';
                            break;
                    }

                    Swal.fire({
                        title: '<?php echo e(ucfirst($status)); ?>', // Capitalize the status for better readability
                        text: message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                });

                console.log('<?php echo e($status); ?>');
            </script>
        <?php $__env->stopPush(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/button/simpan.blade.php ENDPATH**/ ?>
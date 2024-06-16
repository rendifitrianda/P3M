<a href="<?php echo e(url('layout/dashboard/create')); ?>" class="btn btn-primary"
    onclick="tambahData('<?php echo e($id); ?>',  '<?php echo e($path); ?>')">
    <i class="fas fa-info">Tambah Data</i>
</a>



<?php $__env->startPush('script'); ?>
    <?php if (! $__env->hasRenderedOnce('0752d374-1909-47ba-a7d4-0afb81428a95')): $__env->markAsRenderedOnce('0752d374-1909-47ba-a7d4-0afb81428a95'); ?>
        <script>
            const tambahData = (id, path) => {
                const base_url = '<?php echo e(url('/')); ?>'
                const current_url = '<?php echo e(url()->current()); ?>'
                const url = path ? `${base_url}/${path}/${id}` : `${current_url}/${id}`

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/button/tambah_data.blade.php ENDPATH**/ ?>
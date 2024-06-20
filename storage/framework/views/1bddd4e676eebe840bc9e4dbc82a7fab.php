<body>
    <div class="container mt-0">
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
        <!-- Form fields here -->
    </div>
</body>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/utils/notif.blade.php ENDPATH**/ ?>
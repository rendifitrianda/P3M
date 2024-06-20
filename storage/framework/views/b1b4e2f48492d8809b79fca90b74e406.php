<body>
    <div class="container mt-0">
        <?php if(session('success1')): ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "Data Berhasil Di Edit",
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            </script>
        <?php endif; ?>

        <!-- Form Anda di sini -->
        <?php echo csrf_field(); ?>
        <!-- Form fields here -->
    </div>
</body>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/utils/notif2.blade.php ENDPATH**/ ?>
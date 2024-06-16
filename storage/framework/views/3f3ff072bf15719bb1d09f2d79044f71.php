<button class="btn btn-danger" type="button" onclick="deleteData('<?php echo e($id); ?>',  '<?php echo e($path); ?>')">
    <i class="ri-chat-delete-line"></i></button>

<?php $__env->startPush('script'); ?>
    <?php if (! $__env->hasRenderedOnce('601230f1-2dcf-4f47-8a31-e15e6296ec1e')): $__env->markAsRenderedOnce('601230f1-2dcf-4f47-8a31-e15e6296ec1e'); ?>
        <script>
            const deleteData = (id, path) => {
                const base_url = '<?php echo e(url('/')); ?>'
                const current_url = '<?php echo e(url()->current()); ?>'
                const url = path ? `${base_url}/${path}/${id}` : `${current_url}/${id}`
                Swal.fire({
                    title: 'Yakin akan menghapus?',
                    text: "Data yang dihapus tidak bisa dikembalikan",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const csrf_token = `<?php echo e(csrf_token()); ?>`
                        const template = `
                                <form method="post" action="${url}">
                                    <input type="hidden" name="_token" value="${csrf_token}"/>
                                    <input type="hidden" name="_method" value="delete"/>
                                </form>
                                `

                        const parser = new DOMParser();
                        const doc = parser.parseFromString(template, 'text/html');
                        const form = doc.querySelector('form');

                        // Append the form to the body and submit it
                        document.body.appendChild(form);
                        form.submit();
                    }
                })

            }
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/button/delete.blade.php ENDPATH**/ ?>
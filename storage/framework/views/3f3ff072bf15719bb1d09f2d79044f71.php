<button class="btn btn-danger" type="button" id="delete" data-id="<?php echo e($url ?? ''); ?>">

    <i class="ri-chat-delete-line"></i></button>

<?php $__env->startPush('script'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // var Button = $('.button').attr('url');

            $('#delete').on('click', function() {

                console.log($(this).data('id'))
            })
        })

        // Swal.fire({
        //     title: 'Yakin akan menghapus?',
        //     text: "Data yang dihapus tidak bisa dikembalikan",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Lanjutkan'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         const csrf_token = `<?php echo e(csrf_token()); ?>`
        //         const template = `
    //         <form method="post" action="${url}">
    //             <input type="hidden" name="_token" value="${csrf_token}"/>
    //             <input type="hidden" name="_method" value="delete"/>
    //         </form>
    //         `

        //         const parser = new DOMParser();
        //         const doc = parser.parseFromString(template, 'text/html');
        //         const form = doc.querySelector('form');

        //         // Append the form to the body and submit it
        //         document.body.appendChild(form);
        //         form.submit();
        //     }
        // })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/components/button/delete.blade.php ENDPATH**/ ?>
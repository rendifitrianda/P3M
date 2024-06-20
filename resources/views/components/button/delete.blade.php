<button class="btn btn-danger" type="button" onclick="deleteData('{{ $id }}',  '{{ $path }}')">
    <i class="ri-chat-delete-line"></i></button>

@push('script')
    @once
        <script>
            const deleteData = (id, path) => {
                const base_url = '{{ url('/') }}'
                const current_url = '{{ url()->current() }}'
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
                        const csrf_token = `{{ csrf_token() }}`
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
    @endonce
@endpush
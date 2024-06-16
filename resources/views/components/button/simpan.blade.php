@foreach (['create', 'update', 'delete', 'error'] as $status)
    @if (session()->has($status))
        @push('script')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                $(document).ready(function() {
                    var message;

                    switch ('{{ $status }}') {
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
                        title: '{{ ucfirst($status) }}', // Capitalize the status for better readability
                        text: message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                });

                console.log('{{ $status }}');
            </script>
        @endpush
    @endif
@endforeach

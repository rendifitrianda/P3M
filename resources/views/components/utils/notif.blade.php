<body>
    <div class="container mt-0">
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
        @endif

        <!-- Form Anda di sini -->
        @csrf
        <!-- Form fields here -->
    </div>
</body>

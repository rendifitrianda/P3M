<body>
    <div class="container mt-0">
        @if (session('success1'))
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
        @endif

        <!-- Form Anda di sini -->
        @csrf
        <!-- Form fields here -->
    </div>
</body>

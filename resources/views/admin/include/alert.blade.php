@if (session('success') || session('error'))
    <script>
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "{{ session('success') ? 'success' : 'error' }}",
                title: "{{ session('success') ?: session('error') }}"
            });
        })
    </script>
@endif


@if (session()->has('success'))
    <script>
        Swal.fire({
        title: 'Success!',
        text: '{{session()->get('success')}}',
        type: 'success',
        confirmButtonText: 'OK'
        })
    </script>

@endif

@if (session()->has('error'))
    <script>
        Swal.fire({
            title: 'Oh No!',
            text: '{{ session()->get('error') }}',
            type: 'error',
            confirmButtonText: 'OK'
        })
    </script>


@endif



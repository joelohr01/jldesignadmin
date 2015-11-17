@if(session()->has('flash_message'))
    <script>
        swal({   title: "{{ session('flash_message.title') }}",   text: "{{ session('flash_message.message') }}",   type: "info",   timer: 1700, showConfirmButton: false });
    </script>
@endif
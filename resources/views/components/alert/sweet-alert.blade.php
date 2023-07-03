@push('custom-js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('show-confirm-delete', event => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('deleteConfirmation');
            }
        })
    });

    window.addEventListener('confirmed-deleted', event => {
        Swal.fire(
            'Deleted!',
            event.detail.message,
            'success'
        )
    });
</script>

@endpush
<div>
    Stop trying to control.
</div>

@push('scripts')
    <script>
        window.addEventListener('show-swal', function(e) {
            // Small delay to ensure page is fully loaded
            setTimeout(() => {
                Swal.fire({
                    title: e.detail[0].title,
                    icon: e.detail[0].icon,
                    text: e.detail[0].text,
                    confirmButtonColor: '#435ebe'
                });
            }, 100);
        });
    </script>
@endpush

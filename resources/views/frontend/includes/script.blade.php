<script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.easytabs.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('frontend/assets/js/smooth-scroll.js') }}"></script>
<script src="{{ asset('frontend/assets/js/venobox.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/assets/js/placeholders.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/parallax.js') }}"></script>
<script src="{{ asset('frontend/assets/js/morphext.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/switcher.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

<!-- Favicon -->
<link type="image/x-icon" href="{{ asset('backend/img/settings/favicon/' . $settings->first()->favicon) }}"
    rel="shortcut icon" />
<!-- vendor css -->
<link href="{{ asset('backend/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

{{-- Data Table CSS --}}
<link href="{{ asset('backend/lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">

{{-- Toastr --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<!-- Bracket CSS -->
<link href="{{ asset('backend/css/bracket.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

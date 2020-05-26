<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/fonts/batch-icons/css/batch-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers/hamburgers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datatables/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datatables/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quillpro/quillpro.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>

</head>
<body>
    <div id="app" class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/bootstrap/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap/mdb.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/velocity/velocity.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/velocity/velocity.ui.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery_visible/jquery.visible.min.js') }}" defer></script>
    <script src="{{ asset('js/misc/ie10-viewport-bug-workaround.js') }}" defer></script>
    <script src="{{ asset('js/misc/holder.min.js') }}" defer></script>



    <script src="{{ asset('js/plugins/datatables/js/dataTables.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/datatables/js/dataTables.responsive.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    @stack('dataTable')
</body>
</html>

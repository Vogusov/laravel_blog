<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@section('title') VgAdmin @show</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <x-admin.header></x-admin.header>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <x-admin.sidebar></x-admin.sidebar>
        </div>
        <div id="layoutSidenav_content">
            {{-- <main>
                <div class="container-fluid px-4"> --}}
                    @yield('content')
                {{-- </div>
            </main> --}}
            <x-admin.footer></x-admin>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/js/datatables-simple-demo.js') }} "></script>
    @stack('custom-scripts')
</body>

</html>



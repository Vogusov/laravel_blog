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
</head>

<body>
    <main>
        <h2>Добро пожаловать! {{ Auth::user()->name }}</h2>
        <a href="{{ route('admin') }}">{{ __('menu.admin') }}</a><br>
        <a href="#" id="logout">{{ __('menu.logout') }}</a><br>
        <a href=" {{ route('main') }}">{{ __('home') }}</a>
    </main>


    {{-- @push('custom-scripts') --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#logout').on('click', function(e){
                e.preventDefault()
            if(confirm('Вы хотите выйти из аккаунта?')) {
                $.ajax({
                    type: 'POST',
                    url: '/logout',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(){
                        alert('Вы вышли из аккаунта')
                        location.reload()
                    },
                    error: function(){
                        alert('Ошибка')
                    },
                })
}
})
})
    </script>
    {{-- @endpush --}}
</body>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('main') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('news') }}">{{
                        __('menu.news') }}</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('categories') }}">{{
                        __('menu.categories') }}</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">{{ __('menu.contact')
                        }}</a></li>

                @auth
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('account') }}">{{
                        __('menu.account') }}</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" id="logout" href="!#">{{
                        __('menu.logout') }}</a></li>

                
                @endauth


                @guest
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">{{
                        __('menu.login') }}</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
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
@endpush
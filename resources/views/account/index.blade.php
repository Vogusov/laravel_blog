<h2>Добро пожаловать! {{ Auth::user()->name }}</h2>
<a href="{{ route('admin') }}">В админку</a>
<a href="{{ route('logout') }}">Выход</a>
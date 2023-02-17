@extends('layouts.main')

@section('content')
<!-- Page Header-->
<x-header title="Список всех новостей"></x-header>
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @forelse ($all_news as $i => $news)
                <article class="post-preview">
                    <a href="{{ route('show', ['id' => $news->id]) }}">
                        <h2 class="post-title">{{ $news->title }}</h2>
                        <h3 class="post-subtitle">{{ $news->description }}</h3>
                    </a>
                </article>
                <p class="post-meta">
                    Опубликовал
                    <a href="#!">Админ</a>
                    от {{ now()->format('d-m-Y H:i') }}
                </p>
                <!-- Divider-->
                <hr class="my-4" />
                @empty
                <h2>Нет новостей</h2>
                @endforelse

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="#!">Older Posts→</a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
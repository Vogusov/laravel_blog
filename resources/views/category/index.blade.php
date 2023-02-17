@extends('layouts.main')
@section('title') Новости категории - @parent @stop

@section('content')
<x-header title="Список новостей категории &#34;{{ $category_news['category']->name ?? '' }}&#34;"
    description="{{ $catgory_news['category']['description'] ?? '' }}"></x-header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @if(!empty($category_news['news']))
            @forelse ($category_news['news'] as $i => $news)
            <article class="post-preview">
                <a href="{{ route('show', ['id' => $news->id]) }}">
                    <h2 class="post-title">{{ $news->title }}</h2>
                    <h3 class="post-subtitle">{{ $news->description }}</h3>
                </a>
            </article>
            <p class="post-meta">
                Опубликовал
                <a href="#!">Админ</a>
                от {{ $news->created_at }}
            </p>
            <!-- Divider-->
            <hr class="my-4" />
            @empty
            <h2>Нет новостей</h2>
            @endforelse
            @else
            <h2>Нет новостей</h2>
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary text-uppercase" href="{{ route('news') }}">На главную</a>
            </div>
            @endif

            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary text-uppercase" href="#!">Older Posts→</a>
            </div>
        </div>
    </div>
</div>
{{-- @empty <h2>Нет записей</h2> --}}
{{-- @endforelse --}}

@endsection
@extends('layouts.main')

@section('content')

<x-header title="{{ $one_news_data->title }}" subheading="{{ $one_news_data->description }}"></x-header>
<main class="mb-4">
    @isset($one_news_data)
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <article class="post-preview">
                    {{ $one_news_data->body }}
                </article>
                <p class="post-meta">
                    Опубликовал
                    <a href="#!">Админ</a>
                    от {{ $one_news_data->created_at }}
                </p>
                <p class="post-meta">
                    Обновлено {{ $one_news_data->updated_at }}
                </p>

            </div>
        </div>
    </div>

    @endisset

</main>
@endsection
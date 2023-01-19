@extends('layouts.main')

@section('content')

<x-header title="{{ $one_news_data['title'] }}" description="{{ $one_news_data['description'] }}"></x-header>
@isset($one_news_data)
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <article class="post-preview">
                {{-- <h2 class="post-title">{{ $one_news_data['title'] }}</h2>
                <h3 class="post-subtitle">{{ $one_news_data['description'] }}</h3> --}}
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, id. Laboriosam doloribus rerum
                    dignissimos quisquam, sit aperiam? Possimus, tenetur. Hic ab exercitationem voluptates est
                    necessitatibus nobis impedit sunt maiores quod!</p>
                <h3>Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, temporibus? Sint sunt totam
                    voluptatibus, accusantium aliquid eum nesciunt eos et soluta corporis ut eaque, assumenda alias
                    placeat expedita, facilis ea? Molestias, explicabo placeat. Sequi velit ipsum ut vel, exercitationem
                    aliquid accusamus? Ad architecto distinctio a delectus repellat? Dolore enim, rem non voluptates
                    quia eveniet, et praesentium, repudiandae vel aliquam voluptate quasi beatae alias. Incidunt nihil
                    accusamus iusto architecto officia velit minima corrupti ratione, natus exercitationem illo id
                    nobis, expedita rerum porro impedit nisi perspiciatis reprehenderit voluptatum aspernatur. Harum
                    eum, enim, fugit sequi, odit pariatur at ab nostrum odio inventore autem laudantium in sed minus?
                    Error libero magni ullam ad velit laborum esse? Obcaecati porro quibusdam, exercitationem sunt
                    adipisci ut rerum quod blanditiis voluptatem harum culpa at quisquam laboriosam omnis? Aperiam quae
                    quaerat rerum labore consequuntur, ullam delectus id. Vitae temporibus consequatur atque provident
                    molestias minima esse commodi rem reiciendis delectus est reprehenderit omnis pariatur quos aut
                    maxime, odio fuga eveniet tempore consectetur! Voluptates aliquam ab, cumque quaerat officia
                    repudiandae explicabo molestias rem, accusamus debitis enim itaque. Ipsam ullam aut, non accusantium
                    cumque recusandae architecto ex nemo autem eaque quas magni eos officia placeat saepe eius, dolore
                    quam laboriosam, earum dolor.</p>
            </article>
            <p class="post-meta">
                Опубликовал
                <a href="#!">Админ</a>
                от {{ now()->format('d-m-Y H:i') }}
            </p>

        </div>
    </div>
</div>

@endisset

@endsection
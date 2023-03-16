@extends('layouts.main')

@section('content')
<x-header title="Категории" description="Choose your destiny"></x-header>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7" style="margin-bottom: 8rem">

            @forelse ($categories as $category)
            <div>
                <a href="{{ route('category', ['id' => $category->id]) }}" class="post-subtitle">{{ ucfirst($category->name) }} ({{ count($category->news) }})</a>
            </div>
            @empty
            <h2>Нет записей</h2>
            @endforelse

        </div>
    </div>
</div>

@endsection
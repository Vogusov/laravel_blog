@extends('layouts.main')

@section('content')
<x-header></x-header>
<main>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1>Приветствие!</h1>
                <p>Добро пожаловать на сайт-агрегатор новостей</p>
                <hr class="my-4" />
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="{{ route('categories') }}">Категории→</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
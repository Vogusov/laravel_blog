@extends('layouts.admin')
@section('title') Главная - @parent @stop

@section('content')
<h1>Админка</h1>
<div class="row">
    @forelse ($sections as $section)
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">{{ ucfirst($section['name']) }}</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route($section['route']) }}">Перейти к настройке</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    @empty
    <h3>Нет данных</h3>
    @endforelse()
</div>

@endsection
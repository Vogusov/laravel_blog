@extends('layouts.admin')
@section('title') Создать категорию - @parent @stop
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Создать категорию</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Создать категорию</li>
        </ol>

        {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif --}}
        @include('inc.message')
        <div class="mb-3">
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</main>

@endsection
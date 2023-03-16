@extends('layouts.admin')
@section('title') Редактировать категорию - @parent @stop
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Редактировать категорию</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Редактировать категорию</li>
        </ol>

        @include('inc.message')

        <div class="mb-3">
            <form action="{{ route('admin.categories.update', ['category' => $category]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</main>

@endsection
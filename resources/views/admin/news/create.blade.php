@extends('layouts.admin')
@section('title') Добавить новость - @parent @stop
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Добавить новость</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Добавить новость</li>
        </ol>

        {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif --}}
        @include('inc.message')

        <div class="mb-3">
            <form action="{{ route('admin.news.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Категории</label>
                    <select name="category[]" id="category" class="form-control" size={{ count($categories) }}
                        multiple="">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea name="description" id="description" class="form-control" cols="30"
                        rows="3">{{ old('description') }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="body" class="form-label">Текст</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="3">
                        {{ old('body') }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</main>
@endsection
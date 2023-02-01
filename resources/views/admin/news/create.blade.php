@extends('layouts.admin')
@section('title') Добавить новость - @parent @stop
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Добавить новость</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Добавить новость</li>
        </ol>

        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif

        <div class="mb-3">
            <form action="{{ route('admin.news.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="status" class="form-label">Статус</label>
                    <select name="status" id="status" class="form-control">
                        <option @if(old('status')==='draft' ) selected @endif value="draft">В проекте</option>
                        <option @if(old('status')==='published' ) selected @endif value="published">Опубликована
                        </option>
                        <option @if(old('status')==='blocked' ) selected @endif value="blocked">Заблокирована</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Статус</label>
                    <select name="category" id="category" class="form-control">
                        <option @if(old('category')==='sports' ) selected @endif value="sports">Спорт</option>
                        <option @if(old('category')==='music' ) selected @endif value="musi">Музыка</option>
                        <option @if(old('category')==='science' ) selected @endif value="science">Наука</option>
                        <option @if(old('category')==='art' ) selected @endif value="art">Искусство</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea name="description" id="description" class="form-control" cols="30"
                        rows="3">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</main>
@endsection
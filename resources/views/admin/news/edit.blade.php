@extends('layouts.admin')
@section('title') Редактировать новость - @parent @stop
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Редактировать новость</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Редактировать новость</li>
        </ol>

        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif

        <div class="mb-3">
            <form action="{{ route('admin.news.update', ['news' => $news]) }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                </div>
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Категории</label>
                    <select name="category" id="category" class="form-control" multiple>
                        @foreach ($categories as $category)
                        <option @if(old('category')==={{ $category->name }} ) selected @endif value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea name="description" id="description" class="form-control" cols="30"
                        rows="3">{{ $news->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="body" class="form-label">Текст</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="3">
                        {{ $news->body }}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</main>
@endsection
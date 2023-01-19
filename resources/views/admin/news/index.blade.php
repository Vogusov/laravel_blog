@extends('layouts.admin')
@section('title') Список новостей - @parent @stop

@section('content')
<h1>Администрирование Новостей</h1>
<a href="{{ route('admin.news.create') }}" class="btn btn-primary" style="float: right">Добавить новость</a>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Список новостей</li>
</ol>
{{-- <div>
    <h3><a href="#">{{ $news['title'] }}</a></h3>
    <p>{{ $news['description'] }}</p>
</div> --}}


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Список новостей
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Дата добавления</th>
                    <th>Управление</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($all_news as $i => $news)
                <tr>
                    <td>{{ $loop->index +1}}</td>
                    <td>{{ $news['title'] }}</td>
                    <td>{{ $news['description'] }}</td>
                    <td>{{ now()->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('admin.news.edit', ['news' => $news['id']]) }}"
                            style="font: size 12px;">ред.</a> &nbsp; | &nbsp;
                        <a href="#" style="color:red;font: size 12px">уд.</a>
                    </td>
                </tr>
                @empty
                <h3>Нет записей</h3>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Дата добавления</th>
                    <th>Управление</th>
                </tr>
            </tfoot>

        </table>
    </div>
</div>

@endsection
@extends('layouts.admin')
@section('title') Список категорий - @parent @stop

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Администрирование категорий новостей</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary" style="float: right">Добавить
            категорию</a>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Список категорий</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Список категорий
            </div>
            <div class="card-body">
                @include('inc.success')
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Дата добавления</th>
                            <th>Дата обновления</th>
                            <th>Управление</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $i => $category)
                        <tr>
                            <td>{{ $loop->index +1}}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td><a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
                                    style="font: size 12px;">ред.</a>&nbsp;|&nbsp;<a href="#"
                                    style="color:red;font: size 12px">уд.</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="">Записей не найдено</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Дата добавления</th>
                            <th>Управление</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
</main>
@endsection
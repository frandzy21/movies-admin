@extends('adminlte::page')

@section('title', 'Список альбомів')

@section('header_content')
    <h1>Альбоми</h1>
@stop

@section('content')
    <a href="/albums/create" class="btn btn-primary mb-3">Додати альбом</a>

    <table class="table">
        <thead>
        <th>Дії</th>
        <tr>
            <th>ID</th>
            <th>Назва альбому</th>
            <th>Рік дропу</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{$album->id}}</td>
                <td>{{$album->title}}</td>
                <td>{{$album->release_year}}</td>
                <td>
                    <a href="/albums/{{$album->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>
                    <form action="/albums/{{$album->id}}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning btn-sm">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

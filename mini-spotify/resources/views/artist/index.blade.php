@extends('adminlte::page')

@section('title', 'Список Артистів')

@section('content_header')
    <h1>Артисти</h1>
@stop

@section('content')
    <a href="/artists/create" class="btn btn-success mb-3">Додати артиста</a>
    <table class="table">
    <thead>
    <th>Дії</th>
    <tr>
        <th>ID</th>
        <th>Ім'я</th>
        <th>Жанр</th>
    </tr>
    </thead>
    <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>{{$artist->id}}</td>
                <td>{{$artist->name}}</td>
                <td>{{$artist->genre}}</td>
                <td>
                    <a href="/artists/{{$artist->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>

                    <form action="/artists/{{$artist->id}}" method="POST" style="display: inline-block" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@stop

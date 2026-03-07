@extends('adminlte::page')

@section('title', 'Фільми')

@section('content_header')
    <h1>Список фільмів</h1>
@stop

@section('content')
    <a href="/movies/create" class="btn btn-success mb-3">Додати фільм</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Рік релізу</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->release_year}}</td>
                <td> <a href="/movies/{{$movie->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>

                    <form action="/movies/{{$movie->id}}" method="POST" style="display:inline">
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

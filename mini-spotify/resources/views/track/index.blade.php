@extends('adminlte::page')

@section('title', 'Список треків')

@section('content_header')
    <h1>Треки</h1>
@stop

@section('content')
    <a href="/tracks/create" class="btn btn-primary">Додати трек</a>

    <table class="table">
    <thead>
    <th>Дії</th>
    <tr>
    <th>ID</th>
    <th>Назва трека</th>
    <th>Тривалість треку (в секундах)</th>
    </tr>
    </thead>

        <tbody>
        @foreach($tracks as $track)
            <tr>
                <td>{{$track->id}}</td>
                <td>{{$track->title}}</td>
                <td>{{$track->duration}}</td>
                <td>
                    <a href="/tracks/{{$track->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>
                    <form action="/tracks/{{$track->id}}" method="POST" style="display: inline-block">
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

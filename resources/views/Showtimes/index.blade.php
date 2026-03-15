@extends('adminlte::page')

@section('title', 'Сеанси')

@section('content_header')
    <h1>Список Сеансів</h1>
@stop

@section('content')
    <a href="/showtimes/create" class="btn btn-success mb-3">Створити сеанс</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Дата сеансу</th>
            <th>Час сеансу</th>
            <th>Фільм</th>
        </tr>
        </thead>
        <tbody>
        @foreach($showtimes as $showtime)
            <tr>
                <td>{{$showtime->id}}</td>
                <td>{{$showtime->date}}</td>
                <td>{{$showtime->time}}</td>
                <td>{{$showtime->movie->title}}</td>
                <td> <a href="/tickets/create?showtime_id={{$showtime->id}}" class="btn btn-primary">Купити квиток</a></td>
                <td>
                    <form action="/showtimes/{{$showtime->id}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Видалити сеанс</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

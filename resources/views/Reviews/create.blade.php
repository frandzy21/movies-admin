@extends('adminlte::page')

@section('title', 'Відгуки')

@section('content_header')
    <h1>Створити відгук</h1>
@stop

@section('content')
    <form action="/reviews" method="POST">
        @csrf
        <label>Автор</label>
        <input type="text" name="author" class="form-control"> <br>
        <label>Рейтинг</label>
        <input type="number" name="rating" class="form-control" placeholder="Від 0 до 10"> <br>
        <label>Коммент</label>
        <input type="text" name="comment" class="form-control"> <br>

        <label>Фільм</label>
        <select name="movie_id" class="form-control">
            @foreach($movies as $movie)
                <option value="{{$movie->id}}">
                    {{$movie->title}}
                </option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

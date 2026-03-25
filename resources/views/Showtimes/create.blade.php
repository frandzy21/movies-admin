@extends('adminlte::page')

@section('title', 'Сеанси')

@section('content_header')
    <h1>Створити сеанс</h1>
@stop

@section('content')
    <form action="/showtimes" method="POST">
        @csrf
        <label>Дата сеансу</label>
        <input type="date" name="date" class="form-control"> <br>

        <label>Час сеансу</label>
        <input type="time" name="time" class="form-control"> <br>

        <label>Ціна у грн.</label>
        <input type="number" name="price" class="form-control"> <br>

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

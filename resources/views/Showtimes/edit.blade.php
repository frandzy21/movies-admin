@extends('adminlte::page')

@section('title', 'Редагування')

@section('content_header')
    <h1>Редагувати сеанс</h1>
@stop

@section('content')
    <form action="/showtimes/{{$showtime->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Дата сеансу</label>
        <input type="date" name="date" class="form-control" value="{{$showtime->date}}">

        <label>Час</label>
        <input type="time" name="time" class="form-control" value="{{$showtime->time}}">

        <label>Ціна у грн.</label>
        <input type="number" name="price" class="form-control" value="{{$showtime->price}}">

        <label>Фільм</label> <br>
        <select name="movie_id" class="form-control">
            @foreach($movies as $movie)
                <option value="{{$movie->id}}" @if($movie->id == $showtime->movie_id) selected @endif>
                    {{$movie->title}}
                </option>
            @endforeach
        </select> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

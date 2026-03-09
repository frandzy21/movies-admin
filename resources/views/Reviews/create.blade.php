@extends('adminlte::page')

@section('title', 'Відгуки')

@section('content_header')
    <h1>Створити відгук</h1>
@stop

@section('content')
    <form action="/reviews" method="POST">
        @csrf
        <label>Автор</label>
        <input type="text" name="author" class="form-control" value="{{old('author')}}"> <br>
        @error('author')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Рейтинг</label>
        <input type="number" name="rating" class="form-control" value="{{old('rating')}}" placeholder="Від 1 до 10"> <br>
        @error('rating')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Коммент</label>
        <input type="text" name="comment" class="form-control" value="{{old('comment')}}"> <br>
        @error('comment')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

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

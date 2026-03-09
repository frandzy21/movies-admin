@extends('adminlte::page')

@section('title', 'Редагування')

@section('content_header')
    <h1>Редагувати фільм</h1>
@stop

@section('content')
    <form action="/movies/{{$movie->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Назва</label>
        <input type="text" name="title" class="form-control" value="{{old('title')}}"> <br>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Рік релізу</label>
        <input type="number" name="release_year" class="form-control" value="{{old('release_year')}}" placeholder="Від 2000 до 2026 року"> <br>
        @error('release_year')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Режисер</label>
        <select name="director_id" class="form-control">
            @foreach($directors as $director)
                <option value="{{$director->id}}">
                    {{$director->name}}
                </option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

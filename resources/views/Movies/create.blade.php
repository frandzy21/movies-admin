@extends('adminlte::page')

@section('title', 'Фільми')

@section('content_header')
    <h1>Створити фільм</h1>
@stop

@section('content')
    <form action="/movies" method="POST">
        @csrf
        <label>Назва</label>
        <input type="text" name="title" class="form-control"> <br>
        <label>Рік релізу</label>
        <input type="number" name="release_year" class="form-control" placeholder="Від 1950 до 2026 року"> <br>

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

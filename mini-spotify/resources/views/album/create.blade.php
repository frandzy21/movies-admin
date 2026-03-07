@extends('adminlte::page')

@section('title', 'Додати альбом')

@section('content_header')
    <h1>Новий альбом</h1>
@stop

@section('content')
    <form action="/albums" method="POST">
        @csrf
        <label>Назва</label>
        <input type="text" name="title" class="form-control"> <br>
        <label>Рік</label>
        <input type="date" name="release_year" class="form-control"> <br>

        <select name="artist_id" class="form-control">
            @foreach($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

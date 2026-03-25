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
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Рік</label>
        <input type="number" name="release_year" class="form-control"> <br>
        @error('release_year')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Артист</label>
        <select name="artist_id" class="form-control">
            @foreach($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

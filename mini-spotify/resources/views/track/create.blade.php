@extends('adminlte::page')

@section('title', 'Додати трек')

@section('content_header')
    <h1>Новий трек</h1>
@stop

@section('content')
    <form action="/tracks" method="POST">
        @csrf
        <label>Назва</label>
        <input type="text" name="title" class="form-control"> <br>
        <label>Тривалість треку (у секундах)</label>
        <input type="number" name="duration" class="form-control" placeholder="Наприклад: 215 (для 3хв 35сек)"> <br>

        <select name="album_id" class="form-control">
            @foreach($albums as $album)
                <option value="{{ $album->id }}">{{ $album->title }}</option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
    @stop

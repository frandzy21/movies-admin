@extends('adminlte::page')

@section('title', 'Додати трек')

@section('content_header')
    <h1>Редагувати</h1>
@stop

@section('content')
    <form action="/tracks/{{$track->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Назва треку</label>
        <input type="text" name="title" class="form-control" value="{{$track->title}}"> <br>
        <label>Тривалість треку</label>
        <input type="number" name="duration" class="form-control" placeholder="Наприклад: 215 (для 3хв 35сек)" value="{{$track->duration}}"> <br>
        <label>Альбом</label>
        <select name="album_id" class="form-control">
            @foreach($albums as $album)
                <option value="{{ $album->id }}" @if($album->id == $track->album_id) selected @endif>
                    {{ $album->title }}
                </option>
            @endforeach
        </select> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

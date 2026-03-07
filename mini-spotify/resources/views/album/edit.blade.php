@extends('adminlte::page')

@section('title', 'Додати Альбом')

@section('content_header')
    <h1>Редагувати</h1>
@stop

@section('content')
    <form action="/albums/{{$album->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Назва альбому</label>
        <input type="text" name="title" class="form-control" value="{{$album->title}}"> <br>
        <label>Рік дропу</label>
        <input type="text" name="release_year" class="form-control" value="{{$album->duration}}"> <br>
        <label>Артист</label>
        <select name="artist_id" class="form-control">
            @foreach($artists as $artist)
                <option value="{{ $artist->id }}" @if($artist->id == $album->artist_id) selected @endif>
                    {{ $artist->name }}
                </option>
            @endforeach
        </select> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

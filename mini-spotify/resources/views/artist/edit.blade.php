@extends('adminlte::page')

@section('title', 'Додати артиста')

@section('content_header')
    <h1>Редагувати</h1>
@stop

@section('content')
    <form action="/artists/{{$artist->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Ім'я артиста</label>
        <input type="text" name="name" class="form-control" value="{{$artist->name}}"> <br>
        <label>Жанр</label>
        <input type="text" name="genre" class="form-control" value="{{$artist->genre}}"> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

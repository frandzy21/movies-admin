@extends('adminlte::page')

@section('title', 'Додати артиста')

@section('content_header')
    <h1>Новий артист</h1>
@stop

@section('content')
    <form action="/artists" method="POST">
        @csrf
        <label>Ім'я артиста</label>
        <input type="text" name="name" class="form-control"> <br>
        <label>Жанр</label>
        <input type="text" name="genre" class="form-control"> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

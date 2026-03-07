@extends('adminlte::page')

@section('title', 'Редагування')

@section('content_header')
    <h1>Редагувати режисера</h1>
@stop

@section('content')
    <form action="/directors/{{$director->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Ім'я</label>
        <input type="text" name="name" class="form-control"> <br>
        <label>Рік народження</label>
        <input type="number" name="birth_year" class="form-control" placeholder="Від 1960 до 2026"> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

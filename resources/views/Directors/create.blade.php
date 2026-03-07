@extends('adminlte::page')

@section('title', 'Режисери')

@section('content_header')
    <h1>Створити режисера</h1>
@stop

@section('content')
    <form action="/directors" method="POST">
        @csrf
        <label>Ім'я</label>
        <input type="text" name="name" class="form-control"> <br>
        <label>Рік народження</label>
        <input type="number" name="birth_year" class="form-control" placeholder="Від 1960 до 2026"> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

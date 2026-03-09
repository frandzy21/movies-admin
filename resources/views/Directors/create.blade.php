@extends('adminlte::page')

@section('title', 'Режисери')

@section('content_header')
    <h1>Створити режисера</h1>
@stop

@section('content')
    <form action="/directors" method="POST">
        @csrf
        <label>Ім'я</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}"> <br>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <label>Рік народження</label>
        <input type="number" name="birth_year" class="form-control" value="{{old('birth_year')}}" placeholder="Від 1960 до 2026"> <br>
        @error('birth_year')
        <span class="text-danger">{{$message}}</span>
        @enderror <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

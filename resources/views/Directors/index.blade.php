@extends('adminlte::page')

@section('title', 'Режисери')

@section('content_header')
    <h1>Список режисерів</h1>
@stop

@section('content')
    <a href="/directors/create" class="btn btn-success mb-3">Додати режисера</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Рік народження</th>
        </tr>
        </thead>
        <tbody>
        @foreach($directors as $director)
        <tr>
            <td>{{$director->id}}</td>
            <td>{{$director->name}}</td>
            <td>{{$director->birth_year}}</td>
            <td> <a href="/directors/{{$director->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>

            <form action="/directors/{{$director->id}}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Видалити</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop

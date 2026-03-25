@extends('adminlte::page')

@section('title', 'Концерти')

@section('content_header')
    <h1>Список концертів</h1>
@stop

@section('content')
    <a href="/concerts/create" class="btn btn-success mb-3">Створити концерт</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Місто</th>
            <th>Локація</th>
            <th>Дата</th>
            <th>Час</th>
            <th>Артист</th>
            <th>Ціна у грн.</th>
        </tr>
        </thead>
        <tbody>
        @foreach($concerts as $concert)
            <tr>
                <td>{{$concert->id}}</td>
                <td>{{$concert->city}}</td>
                <td>{{$concert->venue}}</td>
                <td>{{$concert->date}}</td>
                <td>{{$concert->time}}</td>
                <td>{{$concert->artist->name}}</td>
                <td>{{$concert->price}}</td>
                <td> <a href="/tickets/create?concert_id={{$concert->id}}" class="btn btn-primary">Купити квиток</a></td>
                <td>
                    <a href="/concerts/{{$concert->id}}/edit" class="btn btn-warning">Редагувати</a>
                    <form action="/concerts/{{$concert->id}}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Видалити сеанс</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

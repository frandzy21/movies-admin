@extends('adminlte::page')

@section('title', 'Відгуки')

@section('content_header')
    <h1>Список Відгуків</h1>
@stop

@section('content')
    <a href="/reviews/create" class="btn btn-success mb-3">Додати відгук</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Рейтинг</th>
            <th>Коммент</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{$review->id}}</td>
                <td>{{$review->author}}</td>
                <td>{{$review->rating}}</td>
                <td>{{$review->comment}}</td>
                <td> <a href="/reviews/{{$review->id}}/edit" class="btn btn-warning btn-sm">Редагувати</a>

                    <form action="/reviews/{{$review->id}}" method="POST" style="display:inline">
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

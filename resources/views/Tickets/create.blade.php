@extends('adminlte::page')

@section('title', 'Купівля квитка')

@section('content_header')
    <h1>Придбати квиток</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Фільм: <b>{{ $showtime->movie->title }}</b> |
                Дата: {{ $showtime->date }} | Час: {{ $showtime->time }}
            </h3>
        </div>

        <form action="/tickets" method="POST">
            @csrf
            <div class="card-body">
                <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">

                <div class="form-group">
                    <label>Ваш Email (сюди прийде квиток)</label>
                    <input type="string" name="buyer_email" class="form-control" placeholder="Введіть пошту" required>
                </div>

                <div class="form-group">
                    <label>Номер місця</label>
                    <input type="number" name="seat_number" class="form-control" placeholder="Наприклад: 5" required min="1" max="100">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Підтвердити покупку</button>
                <a href="/showtimes" class="btn btn-default">Скасувати</a>
            </div>
        </form>
    </div>
@stop

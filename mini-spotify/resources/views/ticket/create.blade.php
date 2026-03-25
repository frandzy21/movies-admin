@extends('adminlte::page')

@section('title', 'Купівля квитка')

@section('content_header')
    <h1>Купити квиток</h1>
@stop

@section('content')
    <h3 class="card-header">
        Місто:{{$concert->city}} <br>
        Локація:{{$concert->venue}} <br>
        Дата:{{$concert->date}} <br> Час:{{$concert->time}} <br>
        Ціна:{{$concert->price}} грн. <br>
        Артист:{{$concert->artist->name}}
    </h3>

    <form action="/tickets" method="POST">
        @csrf
        <div class="card-body">
            <input type="hidden" name="concert_id" value="{{ $concert->id }}">

            <div class="form-group">
                <label>Ваш email</label>
                <input type="text" name="customer_email" placeholder="Введіть пошту" required>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Підтвердити покупку</button>
            <a href="/concerts" class="btn btn-default">Скасувати</a>
        </div>
    </form>
@stop

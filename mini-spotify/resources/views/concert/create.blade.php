@extends('adminlte::page')

@section('title', 'Концерт')

@section('content_header')
    <h1>Створити концерт</h1>
@endsection

@section('content')
    <form action="/concerts" method="POST">
        @csrf
        <label>Місто</label>
        <input type="text" name="city" class="form-control"> <br>

        <label>Локація</label>
        <input type="text" name="venue" class="form-control"> <br>

        <label>Дата</label>
        <input type="date" name="date" class="form-control"> <br>

        <label>Час</label>
        <input type="time" name="time" class="form-control"> <br>

        <label>Ціна у гривнях</label>
        <input type="number" name="price" class="form-control"> <br>

        <label>Артист</label>
        <select name="artist_id" class="form-control">
            @foreach($artists as $artist)
                <option value="{{$artist->id}}">
                    {{$artist->name}}
                </option>
            @endforeach
        </select> <br>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
    @stop

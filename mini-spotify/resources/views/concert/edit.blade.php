@extends('adminlte::page')

@section('title', 'Редагування')

@section('content_header')
    <h1>Редагувати сеанс</h1>
@stop

@section('content')
    <form action="/concerts/{{$concert->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>Місто</label>
        <input type="text" name="city" class="form-control" value="{{$concert->city}}">

        <label>Локація</label>
        <input type="text" name="venue" class="form-control" value="{{$concert->venue}}">

        <label>Дата</label>
        <input type="date" name="date" class="form-control" value="{{$concert->date}}">

        <label>Час</label>
        <input type="time" name="time" class="form-control" value="{{$concert->time}}">

        <label>Ціна в грн.</label>
        <input type="number" name="price" class="form-control" value="{{$concert->price}}">

        <label>Артист</label> <br>
        <select name="artist_id" class="form-control">
            @foreach($artists as $artist)
                <option value="{{$artist->id}}" @if($artist->id == $concert->artist_id) selected @endif>
                    {{$artist->name}}
                </option>
            @endforeach
        </select> <br>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@stop

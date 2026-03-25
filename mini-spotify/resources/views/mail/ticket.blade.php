<h1>Дякуємо за покупку!</h1>
<p>Ваш квиток на концерт артиста: <strong>{{$ticket->concert->artist->name}}</strong></p>
<p>Місто: {{$ticket->concert->city}}</p>
<p>Локація проведення: {{$ticket->concert->venue}}</p>
<p>Дата: {{$ticket->concert->date}}</p>
<p>Час: {{$ticket->concert->time}}</p>
<p>Ціна у грн.: {{$ticket->concert->price}}</p>
<hr>
<p>Покажість цей квиток при вході.</p>


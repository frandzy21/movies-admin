<h1>Дякуємо за покупку!</h1>
<p>Ваш квиток на фільм: <strong>{{ $ticket->showtime->movie->title }}</strong></p>
<p>Дата: {{ $ticket->showtime->date }}</p>
<p>Час: {{ $ticket->showtime->time }}</p>
<p>Ваше місце: <strong>{{ $ticket->seat_number }}</strong></p>
<hr>
<p>Покажіть цей лист на вході в кінотеатр.</p>

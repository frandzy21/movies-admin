<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Чек на квиток</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .receipt-box { border: 2px dashed #333; padding: 20px; width: 100%; max-width: 500px; margin: 0 auto; }
        .header { text-align: center; border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; }
        .details table { width: 100%; }
        .details td { padding: 5px 0; }
        .price { font-size: 20px; font-weight: bold; text-align: right; color: #28a745; }
    </style>
</head>
<body>

<div class="receipt-box">
    <div class="header">
        <h2>🎟️ Ваш електронний квиток</h2>
        <p>Дякуємо за покупку!</p>
    </div>

    <div class="details">
        <table>
            <tr>
                <td><strong>Фільм:</strong></td>
                <td>{{ $ticket->showtime->movie->title ?? 'Назва фільму' }}</td>
            </tr>
            <tr>
                <td><strong>Дата:</strong></td>
                <td>{{ $ticket->showtime->date }}</td>
            </tr>
            <tr>
                <td><strong>Час:</strong></td>
                <td>{{ $ticket->showtime->time }}</td>
            </tr>
            <tr>
                <td><strong>Email покупця:</strong></td>
                <td>{{ $ticket->customer_email }}</td>
            </tr>
        </table>
    </div>

    <hr>

    <div class="price">
        Сплачено: {{ $ticket->showtime->price }} грн.
    </div>
</div>

</body>
</html>

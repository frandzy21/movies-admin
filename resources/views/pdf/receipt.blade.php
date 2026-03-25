<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Квитанція про оплату</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; color: #333; }
        .receipt-container { width: 100%; max-width: 350px; margin: 0 auto; border: 1px solid #ddd; padding: 20px; background-color: #fafafa; }
        .header { text-align: center; border-bottom: 2px dashed #999; padding-bottom: 15px; margin-bottom: 20px; }
        .store-name { font-size: 20px; font-weight: bold; margin-bottom: 5px; text-transform: uppercase; }
        .receipt-info { font-size: 12px; color: #666; }
        .item-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .item-table th, .item-table td { padding: 8px 0; border-bottom: 1px dotted #ccc; }
        .item-table th { text-align: left; font-size: 12px; text-transform: uppercase; color: #666; }
        .text-right { text-align: right; }
        .totals { border-top: 2px dashed #999; padding-top: 15px; }
        .totals table { width: 100%; }
        .total-row { font-size: 18px; font-weight: bold; }
        .footer { text-align: center; margin-top: 30px; font-size: 12px; color: #777; }
    </style>
</head>
<body>
<div class="receipt-container">
    <div class="header">
        <div class="store-name">Кінотеатр "Cinema"</div>
        <div class="receipt-info">ФОП Твій_Кінотеатр</div>
        <div class="receipt-info">Квитанція № {{ $ticket->id ?? rand(1000, 9999) }}</div>
        <div class="receipt-info">Дата: {{ now()->format('d.m.Y H:i') }}</div>
    </div>

    <table class="item-table">
        <thead>
        <tr>
            <th>Назва послуги</th>
            <th class="text-right">Сума</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Квиток на сеанс<br>
                <small>Фільм: "{{ $ticket->showtime->movie->title ?? 'Назва' }}"</small>
            </td>
            <td class="text-right">{{ $ticket->showtime->price }} грн</td>
        </tr>
        </tbody>
    </table>

    <div class="totals">
        <table>
            <tr class="total-row">
                <td>ДО СПЛАТИ:</td>
                <td class="text-right">{{ $ticket->showtime->price }} грн</td>
            </tr>
            <tr>
                <td style="padding-top: 10px;">Метод оплати:</td>
                <td class="text-right" style="padding-top: 10px;">Картка (Stripe)</td>
            </tr>
            <tr>
                <td>Статус:</td>
                <td class="text-right"><strong>ОПЛАЧЕНО</strong></td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Дякуємо за покупку!<br>
        Цей документ є підтвердженням успішної транзакції.<br>
        Зберігайте чек до кінця сеансу.
    </div>
</div>
</body>
</html>

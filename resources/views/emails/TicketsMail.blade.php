@component('mail::message')
# You've successfully book the ticket!<br>

<b>ID: {{$details['id']}}</b><br>
<b>Title: {{$details['movieName']}}</b><br>
<b>Date: {{$details['bookingDate']}}</b><br>
<b>Time: {{$details['bookingTime']}}</b><br>
<b>Tickets: {{$details['bookingTicket']}}</b><br>
<b>Total Price: ${{ number_format($details['total'],2) }}</b><br>

<small>Please collect the tickets 30mns before the movie start and pay at our counter.</small>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
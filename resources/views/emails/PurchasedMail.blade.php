@component('mail::message')
# You've successfully purchased the ticket!<br>

<b>ID: {{$details['id']}}</b><br>
<b>Title: {{$details['movieName']}}</b><br>
<b>Date: {{$details['bookingDate']}}</b><br>
<b>Time: {{$details['bookingTime']}}</b><br>
<b>Tickets: {{$details['bookingTicket']}}</b><br>
<b>Total Price: ${{ number_format($details['total'],2) }}</b><br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

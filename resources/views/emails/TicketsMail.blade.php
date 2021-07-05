@component('mail::message')
# You've successfully book the ticket!

<li>Title: {{$details['movieName']}}</li>
<li>Date: {{$details['bookingDate']}}</li>
<li>Time: {{$details['bookingTime']}}</li>
<li>Tickets: {{$details['bookingTicket']}}</li>
<b>Please collect the tickets 30mns before the movie start and pay at our counter.</b>

<div align="center">{!! QrCode::size(150)->generate($details['id']); !!}</div>

<!-- @component('mail::button', ['url' => ''])
Hii
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
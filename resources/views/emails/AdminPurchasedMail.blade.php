@component('mail::message')
# Someone successfully purchased a ticket.

<b>ID: {{$details['id']}}</b><br>
<b>Title: {{$details['movieName']}}</b><br>
<b>Date: {{$details['bookingDate']}}</b><br>
<b>Time: {{$details['bookingTime']}}</b><br>
<b>Tickets: {{$details['bookingTicket']}}</b><br>
<b>Total Price: ${{ number_format($details['total'],2) }}</b><br>

@component('mail::button', ['url' => 'http://paragone-cineplex.herokuapp.com/admin/bookings'])
View Booking List
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

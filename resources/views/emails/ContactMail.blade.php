@component('mail::message')
# Someone sent a message to the contact box.

<li>ID: {{$details['id']}}</li>
<li>Name: {{$details['name']}}</li>
<li>Email: {{$details['email']}}</li>
<li>Phone Number: {{$details['phoneNumber']}}</li>
<li>Subject: {{$details['subject']}}</li>
<li>Message: ${{ $details['message'] }}</li>

@component('mail::button', ['url' => 'http://paragone-cineplex.herokuapp.com/admin/contact'])
View Contact List
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

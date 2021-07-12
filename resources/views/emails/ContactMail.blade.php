@component('mail::message')
# Someone sent a message to the contact box.

<li>ID: {{$details['id']}}</li>
<li>Name: {{$details['name']}}</li>
<li>Email: {{$details['email']}}</li>
<li>Phone Number: {{$details['phoneNumber']}}</li>
<li>Subject: {{$details['subject']}}</li>
<li>Message: ${{ $details['message'] }}</li>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/admin/contact'])
View Contact List
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

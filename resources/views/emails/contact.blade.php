@component('mail::message')

Name: {{ $details['first_name'] }} {{ $details['last_name'] }}<br>
E-mail Address: {{ $details['email'] }}<br>
Mobile Number: {{ $details['phone'] }}<br><br>

Message: <br>
{{ $details['comments'] }}
@endcomponent

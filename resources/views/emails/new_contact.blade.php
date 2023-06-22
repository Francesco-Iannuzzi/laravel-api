@component('vendor.mail.html.message')
    # Introduction


    You have received a new message from an user in your portfolio.
    Name: {{ $lead->name }}
    Email: {{ $lead->email }}
    Message: {{ $lead->message }}

    Thanks,
    {{ config('app.name') }}
@endcomponent

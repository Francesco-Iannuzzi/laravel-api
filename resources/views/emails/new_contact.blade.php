<x-mail::message>
    # Introduction


    You have received a new message from a user in your portfolio.
    Name: {{ $lead->name }}
    Email: {{ $lead->email }}
    Message: {{ $lead->message }}

    <x-mail::button url="''">
        Button Text
    </x-mail::button>

    Thanks,
    {{ config('app.name') }}
</x-mail::message>

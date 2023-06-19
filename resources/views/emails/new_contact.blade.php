<x-mail::message>
    # Introduction


    You have received a new message from a user in your portfolio.
    Name: {{ $lead->name }}
    Email: {{ $lead->email }}
    Message: <br>
    <x-mail::panel>
        {{ $lead->message }}
    </x-mail::panel>

    <x-mail::button url="#">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>

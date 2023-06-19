<x-mail::message>
    # Introduction


    <strong>You have received a new message from a user in your portfolio.</strong>
    <strong>Name: </strong> {{ $lead->name }}
    <strong>Email: </strong> {{ $lead->email }}
    <strong>Message: </strong><br>
    <x-mail::panel>
        {{ $lead->message }}
    </x-mail::panel>

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>

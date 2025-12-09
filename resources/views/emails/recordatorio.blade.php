@component('mail::message')
# Recordatorio para tu mascota

{{ $messageText }}

@if($pet)
**Mascota:** {{ $pet->name }}
@endif

@component('mail::button', ['url' => config('app.url')])
Ir a PetCore
@endcomponent

Gracias,<br>
**PetCore Solutions**
@endcomponent

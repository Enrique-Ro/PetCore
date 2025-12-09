@extends('layout')

@section('content')
<div class="container">
    <h2>Recordatorios</h2>

    <form method="POST" action="{{ route('reminders.store') }}">
        @csrf

        <label>Mascota</label>
        <select name="pet_id">
            @foreach ($pets as $pet)
                <option value="{{ $pet->id }}">{{ $pet->name }}</option>
            @endforeach
        </select>

        <input name="title" placeholder="Título" required>
        <textarea name="notes" placeholder="Notas opcionales"></textarea>
        <input type="datetime-local" name="remind_at" required>

        <button>Crear Recordatorio</button>
    </form>

    <hr>

    @foreach($reminders as $reminder)
        <div>
            <h4>{{ $reminder->title }} — {{ $reminder->pet->name }}</h4>
            <p>Recordar en: {{ $reminder->remind_at }}</p>
            <p>{{ $reminder->notes }}</p>
        </div>
    @endforeach

</div>
@endsection

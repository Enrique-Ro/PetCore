@extends('layout')

@section('content')
<div class="container">
    <h2>Citas de {{ $pet->name }}</h2>

    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf

        <input type="hidden" name="pet_id" value="{{ $pet->id }}">

        <label>Veterinario</label>
        <select name="veterinarian_id">
            @foreach ($veterinarians as $vet)
                <option value="{{ $vet->id }}">{{ $vet->name }} — {{ $vet->clinic }}</option>
            @endforeach
        </select>

        <label>Fecha y hora</label>
        <input type="datetime-local" name="scheduled_at">
        <textarea name="notes" placeholder="Notas"></textarea>
        <button>Crear Cita</button>
    </form>

    <hr>

    @foreach($appointments as $cita)
        <div>
            <h4>Cita con {{ $cita->veterinarian->name }}</h4>
            <p>{{ $cita->scheduled_at }}</p>
            <p>Estado: {{ $cita->status }}</p>
        </div>
    @endforeach
</div>
@endsection

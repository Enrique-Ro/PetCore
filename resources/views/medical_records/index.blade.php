@extends('layout')

@section('content')
<div class="container">
    <h2>Historial Médico de {{ $pet->name }}</h2>

    <form method="POST" action="{{ route('medical-records.store') }}">
        @csrf

        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
        <input name="title" placeholder="Título" required>
        <textarea name="description" placeholder="Descripción"></textarea>
        <input type="date" name="date">
        <input name="type" placeholder="Tipo (vacuna, consulta, etc.)">
        <button>Guardar Registro</button>
    </form>

    <hr>

    @foreach($records as $record)
        <div>
            <h4>{{ $record->title }}</h4>
            <p>{{ $record->date }}</p>
            <p>{{ $record->description }}</p>
            <p>Veterinario: {{ $record->veterinarian->name ?? 'N/A' }}</p>
        </div>
    @endforeach
</div>
@endsection

@extends('layout')

@section('content')
<div class="container">
    <h2>Detalles de {{ $pet->name }}</h2>

    <p>Tipo: {{ $pet->type }}</p>
    <p>Raza: {{ $pet->breed }}</p>
    <p>Notas: {{ $pet->notes }}</p>

    <a href="{{ route('medical-records.index', $pet) }}">Historial Médico</a>
    <a href="{{ route('appointments.index', $pet) }}">Citas con Veterinario</a>

</div>
@endsection

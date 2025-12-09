@extends('layout')

@section('content')
<div class="container">
    <h2>Veterinarios Disponibles</h2>

    <form>
        <input name="city" placeholder="Ciudad" value="{{ request('city') }}">
        <button>Buscar</button>
    </form>

    <hr>

    @foreach($veterinarians as $vet)
        <div>
            <h3>{{ $vet->name }}</h3>
            <p>Clínica: {{ $vet->clinic }}</p>
            <p>Ciudad: {{ $vet->city }}</p>
            <p>Especialidades: {{ $vet->specialties }}</p>
        </div>
    @endforeach

</div>
@endsection

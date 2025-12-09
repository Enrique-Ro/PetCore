@extends('layout')

@section('content')
<div class="container">
    <h2>Mis Mascotas</h2>

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf
        <input name="name" placeholder="Nombre" required>
        <input name="type" placeholder="Tipo">
        <input name="breed" placeholder="Raza">
        <input type="date" name="birthdate">
        <input name="gender" placeholder="Género">
        <textarea name="notes" placeholder="Notas"></textarea>
        <button>Guardar Mascota</button>
    </form>

    <hr>

    @foreach($pets as $pet)
        <div>
            <h3>{{ $pet->name }}</h3>
            <p>{{ $pet->type }}</p>
            <a href="{{ route('pets.show', $pet) }}">Ver detalles</a>
        </div>
    @endforeach
</div>
@endsection

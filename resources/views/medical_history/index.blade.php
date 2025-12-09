@extends('layout')

@section('content')
<div class="container">
    <h2>Historial Médico</h2>

    @foreach($pets as $pet)
        <div>
            <h3>{{ $pet->name }}</h3>
            @foreach($pet->medicalRecords as $rec)
                <div>
                    <strong>{{ $rec->title }}</strong> ({{ $rec->date }}) - {{ $rec->type }}
                    <p>{{ $rec->description }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection

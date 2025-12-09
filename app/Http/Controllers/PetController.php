<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('user_id', auth()->id())->get();
        return view('pets.index', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'raza' => 'nullable',
            'peso' => 'nullable|numeric',
            'edad' => 'nullable|numeric',
        ]);

        Pet::create([
            'user_id' => auth()->id(),
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'raza' => $request->raza,
            'peso' => $request->peso,
            'edad' => $request->edad,
        ]);

        return back()->with('success', 'Mascota añadida correctamente.');
    }
}

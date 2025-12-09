<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('user_id', auth()->id())->get();
        return view('appointments.index', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'motivo' => 'required',
            'pet' => 'required'
        ]);

        Appointment::create([
            'user_id' => auth()->id(),
            'fecha' => $request->fecha,
            'motivo' => $request->motivo,
        ]);

        return back()->with('success', 'Cita creada.');
    }
}

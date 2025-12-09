<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::where('user_id', auth()->id())->get();
        return view('reminders.index', compact('reminders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'fecha' => 'required|date'
        ]);

        Reminder::create([
            'user_id' => auth()->id(),
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
        ]);

        return back()->with('success', 'Recordatorio creado.');
    }
}

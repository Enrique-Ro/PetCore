<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Pet;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index(Pet $pet)
    {
        return view('medical_records.index', [
            'pet' => $pet,
            'records' => $pet->medicalRecords()->with('veterinarian')->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pet_id' => 'required|exists:pets,id',
            'veterinarian_id' => 'nullable|exists:veterinarians,id',
            'title' => 'required',
            'description' => 'nullable',
            'date' => 'nullable|date',
            'type' => 'nullable'
        ]);

        MedicalRecord::create($data);

        return back()->with('success', 'Registro médico añadido.');
    }
}

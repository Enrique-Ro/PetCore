<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    public function index()
    {
        $records = MedicalRecord::where('user_id', auth()->id())->get();
        return view('medical.history', compact('records'));
    }
}

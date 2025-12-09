<?php

namespace App\Http\Controllers;

use App\Models\Veterinarian;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    public function index(Request $request)
    {
        $query = Veterinarian::where('verified', true);

        if ($request->city) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        return view('veterinarians.index', [
            'veterinarians' => $query->paginate(12)
        ]);
    }
}

<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $examinations = Examination::where('patient_id', auth()->user()->id)->where('created_at', '>=', now()->subDays(7))->orderBy('created_at', 'desc')->get();
        return view('patient.index', compact('examinations'));
    }
}

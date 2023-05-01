<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $patients = User::where('role', 'patient')->limit(50)->orderBy('created_at', 'desc')->get();
        } else if(auth()->user()->role == 'doctor'){
            $patients = Examination::where('doctor_id', auth()->user()->id)->where('created_at', '>=', now()->subDays(7))->orderBy('created_at', 'desc')->get();
        } else {
            $patients = Examination::where('patient_id', auth()->user()->id)->where('created_at', '>=', now()->subDays(7))->orderBy('created_at', 'desc')->get();
        }
        $patients = $patients ?? [];
        return view('admin.dashboard', compact('patients'));
    }
}

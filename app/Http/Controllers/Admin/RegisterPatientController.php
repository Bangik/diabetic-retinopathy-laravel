<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPatientController extends Controller
{
    public function index()
    {
        return view('admin.register-patient.index');
    }

    public function create()
    {
        return view('admin.register-patient.create');
    }
}

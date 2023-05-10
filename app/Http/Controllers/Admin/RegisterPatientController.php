<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterPatientController extends Controller
{
    public function index()
    {
        $patients = User::where('role', 'patient')->orderBy('id', 'desc')->get();
        return view('admin.register-patient.index', compact('patients'));
    }

    public function create()
    {
        return view('admin.register-patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'age' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
        ]);

        $request->merge([
            'email' => $request->id_number . '@gmail.com',
            'role' => 'patient',
            'status' => 'active',
            'password' => app('hash')->make($request->id_number),
        ]);

        User::create($request->all());

        return redirect()->route('admin.register-patient.index')->with('success', 'Patient registered successfully');
    }

    public function edit($id)
    {
        $patient = User::findOrFail($id);
        return view('admin.register-patient.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255|unique:users,id_number,' . $id,
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $id,
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'age' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        User::where('id', $id)->update($request->except('_token', '_method'));

        return redirect()->route('admin.register-patient.index')->with('success', 'Patient updated successfully');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.register-patient.index')->with('success', 'Patient deleted successfully');
    }
}

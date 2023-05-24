<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->orderBy('id', 'desc')->get();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255|unique:users,id_number',
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'age' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
        ]);
        $email = Str::slug($request->id_number) . '@retinopathy-detection.tech';
        $request->merge([
            'email' => $email,
            'role' => 'doctor',
            'status' => 'active',
            'password' => app('hash')->make($request->id_number),
        ]);

        User::create($request->all());

        return redirect()->route('admin.doctor.index')->with('success', 'Doctor registered successfully. The email is ' . $email . ' and the password is ' . $request->id_number . '.');
    }

    public function edit($id)
    {
        $doctor = User::findOrFail($id);
        return view('admin.doctor.edit', compact('doctor'));
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

        return redirect()->route('admin.doctor.index')->with('success', 'Doctor updated successfully');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.doctor.index')->with('success', 'Doctor deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use App\Models\User;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index()
    {
        $examinations = Examination::where('created_at', '>=', now()->startOfDay())->orderBy('created_at', 'desc')->get();
        return view('admin.examination.index', compact('examinations'));
    }

    public function indexAll()
    {
        $examinations = Examination::orderBy('created_at', 'desc')->get();
        return view('admin.examination.indexAll', compact('examinations'));
    }

    public function create($id = null)
    {
        $patients = User::where('role', 'patient')->get();
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.examination.create', compact('patients', 'doctors', 'id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'room_number' => 'required'
        ]);

        $last_queue = Examination::where('created_at', '>=', now()->startOfDay())->orderBy('created_at', 'desc')->first();
        $last_queue_number = $last_queue->queue_number ?? 'Q0000';
        $last_queue_number = substr($last_queue_number, 1);
        $last_queue_number = (int) $last_queue_number;
        $last_queue_number++;

        $request->merge([
            'status' => 'waiting',
            'queue_number' => 'Q' . $last_queue_number,
        ]);

        Examination::create($request->all());

        return redirect()->route('admin.examination.index');
    }

    public function edit($id)
    {
        $examination = Examination::findOrFail($id);
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.examination.edit', compact('examination', 'doctors'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'room_number' => 'required'
        ]);

        $examination = Examination::findOrFail($id);
        $examination->update($request->all());

        return redirect()->route('admin.examination.index');
    }

    public function destroy($id)
    {
        $examination = Examination::findOrFail($id);
        $examination->delete();

        return redirect()->route('admin.examination.index');
    }
}

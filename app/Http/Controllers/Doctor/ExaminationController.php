<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index()
    {
        $examinations = Examination::where('doctor_id', auth()->user()->id)->where('created_at', '>=', now()->subDays(7))->orderBy('created_at', 'desc')->get();
        return view('doctor.examination.index', compact('examinations'));
    }

    public function edit($id)
    {
        $examination = Examination::findOrFail($id);
        $examination->status = 'be examined';
        $examination->save();
        return view('doctor.examination.edit', compact('examination'));
    }

    public function update(Request $request, $id)
    {
        $examination = Examination::findOrFail($id);
        $request->merge(['status' => 'examined']);
        $examination->update($request->all());

        return redirect()->route('doctor.examination.index');
    }

    public function show($id)
    {
        $examination = Examination::findOrFail($id);
        return view('doctor.examination.show', compact('examination'));
    }
}

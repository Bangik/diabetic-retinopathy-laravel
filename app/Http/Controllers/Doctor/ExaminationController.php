<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExaminationController extends Controller
{
    public function index()
    {
        $examinations = Examination::where('doctor_id', auth()->user()->id)->where('created_at', '>=', now()->startOfDay())->orderBy('created_at', 'desc')->get();
        // dd(now()->startOfDay());
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

        return redirect()->route('doctor.examination.index')->with('success', 'Examination successfully.');
    }

    public function updateImage(Request $request, $id)
    {
        $examination = Examination::findOrFail($id);
        $examination->update($request->all());

        return $examination;
    }

    public function show($id)
    {
        $examination = Examination::findOrFail($id);
        return view('doctor.examination.show', compact('examination'));
    }

    public function exportPDF($id)
    {
        $examination = Examination::findOrFail($id);
        $pdf = Pdf::loadView('report', compact('examination'));
        return $pdf->download('examination.pdf');
    }

    public function print($id)
    {
        $examination = Examination::findOrFail($id);
        return view('report', compact('examination'));
    }
}

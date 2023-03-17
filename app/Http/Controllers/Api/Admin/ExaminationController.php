<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExaminationRequest;
use App\Models\Examination;

class ExaminationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('admin');
    }

    public function index()
    {
        $examination = Examination::all();
        if ($examination->count() > 0) {
            return response()->json([
                'message' => 'success',
                'data' => $examination,
            ], 200);
        } else {
            return response()->json([
                'message' => 'examination not found',
            ], 404);
        }
    }

    public function store(ExaminationRequest $request)
    {
        $examination = Examination::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $examination,
        ], 200);
    }

    public function show($id)
    {
        $examination = Examination::find($id);
        if ($examination) {
            return response()->json([
                'message' => 'success',
                'data' => $examination,
            ], 200);
        } else {
            return response()->json([
                'message' => 'examination not found',
            ], 404);
        }
    }

    public function update(ExaminationRequest $request, $id)
    {
        $examination = Examination::find($id);
        if ($examination) {
            $examination->update($request->all());
            return response()->json([
                'message' => 'success',
                'data' => $examination,
            ], 200);
        } else {
            return response()->json([
                'message' => 'examination not found',
            ], 404);
        }
    }

    public function destroy($id)
    {
        $examination = Examination::find($id);
        if ($examination) {
            $examination->delete();
            return response()->json([
                'message' => 'success',
            ], 200);
        } else {
            return response()->json([
                'message' => 'examination not found',
            ], 404);
        }
    }
}

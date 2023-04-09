<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('admin');
    }

    public function index()
    {
        $user = User::all();
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $user,
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'message' => 'success',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'message' => 'user not found',
            ], 404);
        }
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return response()->json([
                'message' => 'success',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'message' => 'user not found',
            ], 404);
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json([
                'message' => 'success',
            ], 200);
        } else {
            return response()->json([
                'message' => 'user not found',
            ], 404);
        }
    }
}

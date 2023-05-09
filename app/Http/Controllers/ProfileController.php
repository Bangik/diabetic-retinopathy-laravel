<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }

    public function changePassword()
    {
        return view('profile.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::find(auth()->user()->id);
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password does not match!']);
        }

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile.index')->with('success', 'Password updated successfully');
    }
}

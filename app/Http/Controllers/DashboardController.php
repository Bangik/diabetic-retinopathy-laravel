<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $last_queue = Examination::where('status', 'be examined')->orderBy('created_at', 'desc')->first();
        $be_examined_room1 = Examination::where('status', 'be examined')->where('room_number', '1')->first();
        $be_examined_room2 = Examination::where('status', 'be examined')->where('room_number', '2')->first();
        $be_examined_room3 = Examination::where('status', 'be examined')->where('room_number', '3')->first();
        $be_examined_room4 = Examination::where('status', 'be examined')->where('room_number', '4')->first();

        $be_examined_room1 = $be_examined_room1 ?? Examination::where('status', 'examined')->where('room_number', '1')->first();
        $be_examined_room2 = $be_examined_room2 ?? Examination::where('status', 'examined')->where('room_number', '2')->first();
        $be_examined_room3 = $be_examined_room3 ?? Examination::where('status', 'examined')->where('room_number', '3')->first();
        $be_examined_room4 = $be_examined_room4 ?? Examination::where('status', 'examined')->where('room_number', '4')->first();

        $be_examined_rooms12 = [$be_examined_room1, $be_examined_room2];
        $be_examined_rooms34 = [$be_examined_room3, $be_examined_room4];

        if (auth()->user()->role == 'admin') {
            $patients = User::where('role', 'patient')->limit(50)->orderBy('created_at', 'desc')->get();
        } else if(auth()->user()->role == 'doctor'){
            $patients = Examination::where('doctor_id', auth()->user()->id)->where('created_at', '>=', now()->subDays(7))->orderBy('created_at', 'desc')->get();
        } else {
            $patients = Examination::where('patient_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }
        
        $patients = $patients ?? [];
        $last_queue = $last_queue ?? Examination::where('status', 'examined')->orderBy('created_at', 'desc')->first();
        // dd($be_examined_rooms12);
        return view('dashboard', compact('patients', 'last_queue', 'be_examined_rooms12', 'be_examined_rooms34'));
    }
}

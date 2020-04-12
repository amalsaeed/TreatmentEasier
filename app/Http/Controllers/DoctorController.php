<?php

namespace App\Http\Controllers;

use App\Model\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function dashboard() {
        $doctor = Doctor::where('user_id', auth()->user()->id)->get()->first();

        $newReservations = $doctor->reservations()->new()->with('prescription')
        ->get();
        $canceledReservations = $doctor->reservations()->canceled()->get();


        // $pres = $doctor->with('prescriptions')->get();


        // return dd($newReservations);
        return view('doctor.dashboard',compact('newReservations', 'canceledReservations'));
    }
}

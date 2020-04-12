<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Model\User;
use App\Model\Clinic;
use App\Model\Doctor;
use App\Model\Profile;
use App\Model\Reservation;
use App\Model\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function index() {
        $user = User::where('id', auth()->user()->id)->first();
        $reservations = $user->reservations()->orderBy('state', 'desc')->get();
        // return dd($reservations);
        return view('reservations.index',compact('reservations'));
    }

    public function create(Request $request) {


        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $doctors = User::where('user_type', 1)->get();
        $clinics = Clinic::all();

        return view('reservations.create')
            ->with('profile', $profile)
            ->with('doctors', $doctors)
            ->with('clinics', $clinics);
    }

    public function store(Request $request) {
        $validator = \Validator::make($request->all(), [
            'clinic'    => 'required',
            'doctor'    => 'required',
            'date'      => 'required|after:today',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rcount = Reservation::where('doctor_id', request('doctor'))->where('date', Carbon::parse(request('date'))->format('Y-m-d'))->count();


        if($rcount >= 10){
            return redirect()->route('reservations')->with('error', 'Sorry! this doctor have more than 10 appointment in  '  . Carbon::parse(request('date'))->format('Y-m-d') . '   try to make an appointment in another day');
        }else {
            $rev = new Reservation();
            $rev->user_id   =  Auth::user()->id;
            $rev->clinic_id   = request('clinic');
            $rev->doctor_id     = request('doctor');
            $rev->state      = 'new';
            $rev->notes      = request('notes');
            $rev->date       = Carbon::parse(request('date'))->format('Y-m-d');
            $rev->save();

            if ($rev) {
                $pre = new Prescription();
                $pre->reservation_id = $rev->id;
                $pre->user_id   =  Auth::user()->id;
                $pre->doctor_id     = request('doctor');
                $pre->text      = '';
                $pre->save();
            }


            return redirect()->route('reservations')->with('success', 'Your appointment has been scheduled successfully');
        }



    }

    public function edit($id) {
        $user = User::where('id', auth()->user()->id)->first();
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $doctors = User::where('user_type', 1)->get();
        $clinics = Clinic::all();
        $reservation = $user->reservations()->where('id', $id)->first();

        return view('reservations.edit')
            ->with('profile', $profile)
            ->with('doctors', $doctors)
            ->with('clinics', $clinics)
            ->with('reservation', $reservation);
    }

    public function update($id, Request $request) {
        $validator = \Validator::make($request->all(), [
            'clinic'    => 'required',
            'doctor'    => 'required',
            'date'      => 'required|after:today',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('id', auth()->user()->id)->first();

        $reservation = $user->reservations()->where('id', $id)->first();

        $reservation->update([
            'clinic_id'     => request('clinic'),
            'doctor_id'     => request('doctor'),
            'state'         => 'new',
            'notes'         => request('notes'),
            'date'          => Carbon::parse(request('date'))->format('Y-m-d'),
        ]);

        return redirect()->route('reservations')->with('success', 'Your appointment has been updated successfully');
    }

    public function cancel($id) {
        $user = User::where('id', auth()->user()->id)->first();

        $reservation = $user->reservations()->where('id', $id)->first();

        $reservation->update([
            'state'         => 'canceled'
        ]);

        return redirect()->route('reservations')->with('success', 'Your appointment has been canceled successfully');
    }
}

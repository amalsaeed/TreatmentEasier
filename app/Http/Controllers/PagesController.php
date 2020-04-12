<?php

namespace App\Http\Controllers;

use App\Model\Doctor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dentistryClinics() {
    return view('pages.dentistry');
}

    public function OrthopedicClinics() {
        return view('pages.Orthopedic');
    }

    public function ChildrenClinics() {
        return view('pages.Children');
    }
    public function HeartClinics() {
        return view('pages.Heart');
    }
    public function InternistClinics() {
        return view('pages.Internist');
    }

    public function GynecologyClinics() {
        return view('pages.Gynecology');
    }

    public function ThroatClinics() {
        return view('pages.Throat');
    }

    public function OphthalmologyClinics() {
        return view('pages.Ophthalmology');
    }
    public function about() {
        return view('pages.About');
    }

    public function doctors()
    {
        $doctors = Doctor::all();
        return view('doctors',compact('doctors'));
    }



}

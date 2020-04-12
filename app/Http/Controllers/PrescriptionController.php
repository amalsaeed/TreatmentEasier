<?php

namespace App\Http\Controllers;

use App\Model\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Prescription  $Prescription
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pre = Prescription::find($id);
        return view('prescription.show',compact('pre'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Prescription  $Prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'reservation_id'    => 'required',
            'doctor_id'    => 'required',
            'user_id'    => 'required',
        ]);


        $pre = Prescription::find($id);
        $pre->reservation_id = $request->reservation_id;
        $pre->doctor_id = $request->doctor_id;
        $pre->user_id = $request->user_id;
        $pre->text = $request->text;
        $pre->save();
        return redirect()->back()->with('success', 'Prescription has been updated successfully');


    }


}

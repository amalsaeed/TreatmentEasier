<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{


    public function index() {
        $user = User::where('id', auth()->user()->id)->first();

        if(count($user->profile()->get())) {
            $profile = $user->profile()->UpdateOrCreate(
                ['user_id' => auth()->user()->id], [
                'name' => auth()->user()->name
                ]
            );
        } else {
            $profile = $user->profile()->create([
                    'name'              => auth()->user()->name,
                    'mobile'            => '9660000000',
                    'profile_number'    => rand(pow(10, 4-1), pow(10, 4)-1)
                ]
            );
        }

        return view('profile.index')
            ->with('profile', $profile);
    }

    public function update(Request $request) {
        $validator = \Validator::make($request->all(), [
            'mobile'    => 'required|digits:10',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('id', auth()->user()->id)->first();

        $user->profile()->UpdateOrCreate(
            ['user_id'   => auth()->user()->id ], [
                'mobile'    => request('mobile'),
            ]
        );

        return redirect()->back()->with('success', 'Your profile has been updated successfully');
    }
}

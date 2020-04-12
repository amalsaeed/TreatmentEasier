<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        if(auth()->check()) {
            $user = User::where('id', auth()->user()->id)->first();

            if (count($user->profile()->get())) {
                $user->profile()->UpdateOrCreate(
                    ['user_id' => auth()->user()->id], [
                        'name' => auth()->user()->name
                    ]
                );
            } else {
                $user->profile()->create([
                        'name' => auth()->user()->name,
                        'mobile' => '9660000000',
                        'profile_number' => rand(pow(10, 4 - 1), pow(10, 4) - 1)
                    ]
                );
            }
        }

        return view('home');
    }
}

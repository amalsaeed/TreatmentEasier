<?php

namespace App\Model;

use App\Model\Reservation;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'id', 'reservation_id');
    }

//     public function user()
//     {
//         return $this->hasOne(User::class, 'id', 'user_id');
//     }
}

<?php

namespace App\Model;

use App\Model\Doctor;
use App\Model\Reservation;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public $timestamps = true;

    protected $fillable = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'doctor_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'clinic_id');
    }
}

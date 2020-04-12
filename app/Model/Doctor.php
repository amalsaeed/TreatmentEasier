<?php

namespace App\Model;


use App\Model\Clinic;
use App\Model\Reservation;
use App\Model\Prescription;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    public $timestamps = true;

    protected $fillable = ['name', 'mobile', 'id_number', 'clinic_id', 'password', 'email', 'user_id'];

    public function clinic()
    {
        return $this->hasOne(Clinic::class, 'id', 'clinic_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'doctor_id' , 'user_id');
    }

    // public function prescriptions()
    // {
    //     return $this->hasMany(Prescription::class, 'doctor_id', 'user_id');
    // }
}

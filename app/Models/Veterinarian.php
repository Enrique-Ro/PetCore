<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    protected $fillable = [
        'name', 'clinic', 'phone', 'email', 'city', 'specialties', 'verified'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

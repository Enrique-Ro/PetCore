<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'user_id', 'nombre', 'tipo', 'raza', 'peso', 'edad'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

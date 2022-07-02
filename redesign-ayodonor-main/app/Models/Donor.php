<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'schedule_id',
        'name',
        'gender',
        'dob',
        'blood_type',
        'weight',
        'height',
        'address',
        'rt',
        'rw',
        'village',
        'sub_district',
        'phone',
        'disease_history',
        'created_at',
        'updated_at',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}

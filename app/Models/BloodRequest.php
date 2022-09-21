<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'volume',
        'emergency',
        'blood_type',
        'created_at',
        'hospital_id'
    ];

}

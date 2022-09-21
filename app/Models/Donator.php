<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'age',
        'name',
        'gender',
        'approve',
        'blood_type',
        'created_at'
    ];
}

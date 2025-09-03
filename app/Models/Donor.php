<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $table = 'donors';

    protected $fillable = [
        'name',
        'contact_number',
        'email',
        'age',
        'sex',
        'address',
        'blood_type',
        'last_donated',
    ];
}

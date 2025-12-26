<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
     protected $table = 'reservations'; // nama tabel
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_number',
        'guest',
        'date',
        'time',
        'desc'
    ];

}

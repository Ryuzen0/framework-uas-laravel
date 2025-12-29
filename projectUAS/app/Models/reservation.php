<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = 'reservations'; // nama tabel
    protected $fillable = [
    'user_id',
    'name',
    'email',
    'guest',
    'date',
    'time',
    'address',
    'phone_number',
    'desc',
    'payment_status',
    'reservation_status',
];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

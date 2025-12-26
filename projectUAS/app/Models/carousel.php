<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel'; // nama tabel
    protected $fillable = ['id', 'img', 'heading', 'desc']; // sesuaikan dengan kolom di tabelmu
}

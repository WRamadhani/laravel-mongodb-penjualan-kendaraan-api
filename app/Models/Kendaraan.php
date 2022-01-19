<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    // protected $collection = 'kendaraan';
    protected $fillable = ['tahun_keluaran', 'harga'];
    protected $dates = ['tahun_keluaran'];
}

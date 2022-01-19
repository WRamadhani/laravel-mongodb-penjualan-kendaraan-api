<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'kendaraan_id', 'harga', 'jumlah'];
}

<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Kendaraan
{
    use HasFactory;
    protected $fillable = ['mesin', 'kapasitas_penumpang', 'tipe'];
}

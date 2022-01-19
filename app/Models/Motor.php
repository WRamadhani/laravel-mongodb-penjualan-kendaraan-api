<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motor extends Kendaraan
{
    use HasFactory;
    protected $fillable = ['mesin', 'tipe_suspensi', 'tipe_transmisi'];
}

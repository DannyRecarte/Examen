<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos_Asientos extends Model
{
    use HasFactory;
    protected $table = "vuelos_asientos";
    public $timestamps = false;
}

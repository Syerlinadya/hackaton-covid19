<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = 'rsakit';
    protected $fillable = ['nama', 'alamat', 'provinsi_id'];
}

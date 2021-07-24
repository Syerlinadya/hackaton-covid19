<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kotas';
    protected $fillable = ['nama_kota','provinsi_id'];
    
    
    use HasFactory;
}

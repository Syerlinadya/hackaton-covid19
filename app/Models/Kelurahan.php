<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kotas';
    protected $fillable = ['kecamatan_id','nama_kelurahan'];
    
    
    use HasFactory;
}

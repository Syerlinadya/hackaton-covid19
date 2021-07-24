<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienStatus extends Model
{
    protected $table = 'pasien_statuses';
    protected $fillable = ['pasien_id','keterangan_status','tanggal_status','status'];
    
    use HasFactory;
}

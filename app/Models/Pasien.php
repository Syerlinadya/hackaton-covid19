<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = [
        'nama_lengkap','tanggal_lahir','alamat','keterangan','jenis_kelamin',
        'kelurahan_id','kecamatan_id','kota_id','provinsi_id'
    ];
    use HasFactory;
}

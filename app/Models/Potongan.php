<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_potongan',
        'jumlah_potongan',
        'karyawan_id',
    ];

    public function gajis()
    {
        return $this->belongsToMany(Gaji::class, 'detail_gaji_potongan', 'potongan_id', 'gaji_id', 'karyawan_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tunjangan',
        'jumlah_tunjangan',
        'karyawan_id',
    ];

    public function gajis()
    {
        return $this->belongsToMany(Gaji::class, 'detail_gaji_tunjangan', 'tunjangan_id', 'gaji_id', 'karyawan_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}

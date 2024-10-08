<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;

    protected $table = 'aktivitas'; // Nama tabel di database
    protected $primaryKey = 'ID_AKTIVITAS'; // Primary key

    protected $fillable = [
        'ID_PEKERJAAN',
        'DESKRIPSI',
        'TANGGAL',
        'STATUS'
    ];

    // Relasi ke tabel pekerjaan
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'ID_PEKERJAAN');
    }
}
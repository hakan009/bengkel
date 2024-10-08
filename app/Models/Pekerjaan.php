<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan'; // Nama tabel di database
    protected $primaryKey = 'ID_PEKERJAAN'; // Primary key

    protected $fillable = [
        'ID_GRAFIK',
        'ID_PROYEK',
        'NAMA',
        'STATUS',
        'KATEGORI',
        'TANGGAL',
        'JUMLAH'
    ];

    // Relasi ke tabel proyek
    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'ID_PROYEK');
    }

    // Relasi ke tabel grafik
    // public function grafik()
    // {
    //     return $this->belongsTo(Workload::class, 'ID_GRAFIK');
    // }

    public function grafik()
{
    return $this->belongsTo(Workload::class, 'ID_GRAFIK');
}

}

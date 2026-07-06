<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investigasi extends Model
{
    protected $table = 'investigasis';

    protected $fillable = [
        'laporan_id',
        'nama_pemeriksa',
        'tempat_pemeriksaan',
        'tingkat_risiko',
        'kronologi_investigasi',
        'bukti_investigasi',
        'validitas_investigasi',
        'kesimpulan_investigasi',
        'rekomendasi_investigasi',
        'lampiran_investigasi',
        'status_investigasi',
        'catatan_admin',
        'tanggal_investigasi',
    ];

    protected $casts = [
        'tanggal_investigasi' => 'datetime',
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }
}
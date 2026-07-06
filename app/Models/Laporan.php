<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Investigasi;

class Laporan extends Model
{
    protected $table = 'laporans';

    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | DATA LAPORAN
        |--------------------------------------------------------------------------
        */

        'kode_laporan',
        'judul',
        'isi_laporan',
        'jenis_kasus',
        'alasan_pengaduan',
        'kebutuhan_korban',
        'lokasi',
        'waktu_kejadian',
        'deskripsi',
        'bukti',

        /*
        |--------------------------------------------------------------------------
        | STATUS LAPORAN
        |--------------------------------------------------------------------------
        */

        'status',
        'catatan',

        /*
        |--------------------------------------------------------------------------
        | RELASI
        |--------------------------------------------------------------------------
        */

        'user_id',
        'satgas_id',

        /*
        |--------------------------------------------------------------------------
        | VERIFIKASI ADMIN / DISTRIBUSI
        |--------------------------------------------------------------------------
        */

        'dikirim_satgas',

        /*
        |--------------------------------------------------------------------------
        | HASIL AKHIR
        |--------------------------------------------------------------------------
        */

        'sudah_dikirim_pengguna',
    ];

   protected $casts = [
    'waktu_kejadian'         => 'datetime',
    'dikirim_satgas'         => 'boolean',
    'sudah_dikirim_pengguna' => 'boolean',

    // TAMBAHKAN INI
    'bukti' => 'array',
];

    /*
    |--------------------------------------------------------------------------
    | RELASI PELAPOR
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | RELASI SATGAS
    |--------------------------------------------------------------------------
    */

    public function satgas()
    {
        return $this->belongsTo(User::class, 'satgas_id');
    }

    /*
    |--------------------------------------------------------------------------
    | RELASI INVESTIGASI (TABEL TERPISAH)
    |--------------------------------------------------------------------------
    */

    public function investigasi()
    {
        return $this->hasOne(Investigasi::class, 'laporan_id');
    }
}
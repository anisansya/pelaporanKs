<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Investigasi;

class AdminInvestigasiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DAFTAR HASIL INVESTIGASI SATGAS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $laporans = Laporan::with('investigasi')
            ->whereHas('investigasi')
            ->latest()
            ->get();

        return view(
            'admin.investigasi.index',
            compact('laporans')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL HASIL INVESTIGASI
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $laporan = Laporan::with([
            'user',
            'investigasi'
        ])->findOrFail($id);

        return view(
            'admin.investigasi.show',
            compact('laporan')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SETUJUI HASIL INVESTIGASI
    |--------------------------------------------------------------------------
    */

    public function setujui($id)
    {
        $laporan = Laporan::with('investigasi')
            ->findOrFail($id);

        if ($laporan->investigasi) {
            $laporan->investigasi->update([
                'status_investigasi' =>
                    'Disetujui Admin',

                'catatan_admin' =>
                    'Hasil investigasi telah diverifikasi dan disetujui admin.'
            ]);
        }

        $laporan->update([
            'status' => 'Selesai',
            'sudah_dikirim_pengguna' => 1
        ]);

        return redirect()
            ->route('admin.investigasi.index')
            ->with(
                'success',
                'Hasil investigasi berhasil dikirim ke pelapor'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | KEMBALIKAN KE SATGAS
    |--------------------------------------------------------------------------
    */

    public function kembalikan(Request $request, $id)
    {
        $request->validate([
            'catatan_admin' => 'required'
        ]);

        $laporan = Laporan::with('investigasi')
            ->findOrFail($id);

        if ($laporan->investigasi) {
            $laporan->investigasi->update([
                'status_investigasi' =>
                    'Ditolak Admin',

                'catatan_admin' =>
                    $request->catatan_admin
            ]);
        }

        $laporan->update([
            'status' => 'Diproses'
        ]);

        return redirect()
            ->route(
                'admin.investigasi.show',
                $id
            )
            ->with(
                'success',
                'Investigasi dikembalikan ke Satgas'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | CETAK HASIL INVESTIGASI
    |--------------------------------------------------------------------------
    */

    public function cetak($id)
    {
        $laporan = Laporan::with([
            'user',
            'investigasi'
        ])->findOrFail($id);

        return view(
            'admin.investigasi.cetak',
            compact('laporan')
        );
    }
}
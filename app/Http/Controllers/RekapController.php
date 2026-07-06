<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class RekapController extends Controller
{
    public function index(Request $request)
    {
        $jenisRekap = $request->jenis_rekap ?? 'laporan';

        $laporans = Laporan::with('investigasi');

        if ($request->bulan) {
            $laporans->whereMonth('created_at', $request->bulan);
        }

        if ($request->tahun) {
            $laporans->whereYear('created_at', $request->tahun);
        }

        if ($request->jenis_kasus) {
            $laporans->where(
                'jenis_kasus',
                $request->jenis_kasus
            );
        }

        // Jika memilih Rekap Hasil Investigasi
        if ($jenisRekap == 'investigasi') {
            $laporans->whereHas('investigasi');
        }

        $laporans = $laporans->latest()->get();

        return view(
            'admin.cetak_hasilinvestigasi',
            compact(
                'laporans',
                'jenisRekap'
            )
        );
    }
}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan - PPKS</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: #eef2ff; display: flex; }

        /* SIDEBAR */
        .sidebar { width: 280px; height: 100vh; position: fixed; top: 0; left: 0; background: #030b2b; padding: 14px; color: white; }
        .logo { display: flex; align-items: center; gap: 12px; padding: 10px; margin-bottom: 35px; }
        .logo img { width: 48px; height: 48px; object-fit: contain; }
        .logo h2 { font-size: 20px; margin: 0; }
        .logo span { color: #94a3b8; font-size: 13px; }

        .menu { display: flex; flex-direction: column; gap: 8px; }
        .menu a { display: flex; align-items: center; gap: 15px; padding: 16px 18px; text-decoration: none; color: #cbd5e1; border-radius: 18px; font-size: 16px; font-weight: 500; transition: all .3s ease; }
        .menu a i { width: 25px; text-align: center; font-size: 18px; }
        .menu a:hover, .menu a.active { background: linear-gradient(135deg, #2563eb, #3b82f6); color: white; }
        
        /* MAIN */
        .main { margin-left: 280px; width: calc(100% - 280px); padding: 30px; }
        .card { background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }

        /* KOP SURAT */
        .kop-surat { text-align: center; margin-bottom: 25px; }
        .kop-header { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .kop-header img { width: 80px; height: 80px; object-fit: contain; }
        .kop-text { flex: 1; text-align: center; }
        .kop-text h2 { font-size: 18px; margin: 0; font-weight: 600; }
        .kop-text h1 { font-size: 24px; margin-top: 5px; color: #1e40af; font-weight: 700; }
        .garis { border-bottom: 3px solid #000; margin-top: 10px; }
        
        /* FORM */
        .judul-form { text-align: center; font-size: 20px; font-weight: bold; margin: 25px 0; }
        .form-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .form-table td { border: 1px solid #d1d5db; padding: 15px; vertical-align: top; }
        .form-table .label { width: 30%; background: #eaf7df; font-weight: 600; }
        
        .alasan-list { padding-left: 25px; }
        .alasan-list li { margin-bottom: 5px; color: #374151; }
        
        .footer-form { text-align: center; margin-top: 30px; font-style: italic; font-size: 14px; }
        .btn-area { margin-top: 40px; display: flex; justify-content: flex-end; gap: 10px; }
        .btn { border: none; padding: 12px 25px; border-radius: 10px; cursor: pointer; font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 8px; }
        .btn-print { background: #2563eb; color: white; }
        .btn-back { background: #e2e8f0; color: #334155; }

        @media print {

    @page {
        size: A4;
        margin: 5mm;
    }

    body {
        background: white !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    .sidebar,
    .btn-area {
        display: none !important;
    }

    .main {
        margin: 0 !important;
        width: 100% !important;
        padding: 0 !important;
    }

    .card {
        box-shadow: none !important;
        border: none !important;
        padding: 10px !important;
        transform: scale(0.95); /* ini kunci biar 1 halaman */
        transform-origin: top center;
    }

    /* rapatkan jarak biar muat 1 halaman */
    .kop-surat { margin-bottom: 10px !important; }
    .judul-form { margin: 10px 0 !important; }
    .form-table td { padding: 8px !important; font-size: 12px; }

    .footer-form {
        margin-top: 10px !important;
    }

    h3 {
        margin: 10px 0 !important;
    }
}

@media (max-width:900px){
    .sidebar { display:none; }
    .main { margin-left:0; width:100%; }
}
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
        <div><h2>PelaporanKS</h2><span>Admin Panel</span></div>
    </div>
    <div class="menu">
        <a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
        <a href="{{ route('admin.laporan.index') }}" class="active"><i class="fa-solid fa-file-lines"></i> <span>Laporan Masuk</span></a>
        <a href="{{route('admin.investigasi.index')}}"><i class="fa-solid fa-folder-open"></i> <span>Hasil Investigasi</span></a>
        <a href="javascript:void(0)" onclick="window.print()"><i class="fa-solid fa-print"></i> <span>Cetak Laporan</span></a>
        <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a>
    </div>
</div>

<div class="main">
    <div class="card">
        <div class="kop-surat">
            <div class="kop-header">
                <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo Polbeng">
                <div class="kop-text">
                    <h2>SATUAN TUGAS</h2>
                    <h2>PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL</h2>
                    <h1>POLITEKNIK NEGERI BENGKALIS</h1>
                </div>
                <img src="{{ asset('images/logo-ppks.png') }}" alt="Logo PPKS">
            </div>
            <div class="garis"></div>
        </div>

        <div class="judul-form">FORMULIR PENERIMAAN LAPORAN</div>

        <table class="form-table">
            <tr><td class="label">Kode Laporan</td><td>{{ $laporan->kode_laporan }}</td></tr>
            <tr><td class="label">Tanggal Laporan</td><td>{{ $laporan->created_at->format('d F Y H:i') }}</td></tr>
            <tr><td class="label">Jenis Kasus</td><td>{{ $laporan->jenis_kasus }}</td></tr>
            <tr><td class="label">Lokasi Kejadian</td><td>{{ $laporan->lokasi }}</td></tr>
            <tr><td class="label">Waktu Kejadian</td><td>{{ \Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d F Y H:i') }}</td></tr>
            <tr><td class="label">Kronologi Kejadian</td><td style="white-space:pre-line">{{ $laporan->deskripsi }}</td></tr>
            <tr>
                <td class="label">Alasan Pengaduan</td>
                <td>
                    @if($laporan->alasan_pengaduan)
                        <ol class="alasan-list">
                            @foreach(explode(',', $laporan->alasan_pengaduan) as $alasan)
                                <li>{{ trim($alasan) }}</li>
                            @endforeach
                        </ol>
                    @else Tidak ada alasan pengaduan. @endif
                </td>
            </tr>
            <tr>
                <td class="label">Kebutuhan Korban</td>
                <td>
                    @if($laporan->kebutuhan_korban)
                        <ol class="alasan-list">
                            @foreach(explode(',', $laporan->kebutuhan_korban) as $item)
                                <li>{{ trim($item) }}</li>
                            @endforeach
                        </ol>
                    @else Tidak ada data. @endif
                </td>
            </tr>
            <tr>
   <td class="label">Bukti Pendukung</td>
<td>
    @php
        $files = is_array($laporan->bukti)
            ? $laporan->bukti
            : json_decode($laporan->bukti, true);
    @endphp

    @if($files)
        @foreach($files as $file)
            <a href="{{ asset('storage/'.$file) }}" target="_blank">
                Lihat Bukti
            </a><br>
        @endforeach
    @else
        Tidak ada bukti
    @endif
</td>
</tr>
            <tr><td class="label">Status Penanganan</td><td>{{ $laporan->status }}</td></tr>
            <tr><td class="label">Catatan Admin</td><td>{{ $laporan->investigasi->catatan_admin ?? '-' }}</td></tr>
        </table>

        @if($laporan->investigasi)
    <h3 style="margin-bottom:15px;">HASIL INVESTIGASI SATGAS</h3>

    <table class="form-table">
        <tr>
            <td class="label">Status Investigasi</td>
            <td>{{ $laporan->investigasi->status_investigasi }}</td>
        </tr>

        <tr>
            <td class="label">Kesimpulan Akhir (Hasil Sidang)</td>
            <td style="white-space:pre-line">
                {{ $laporan->investigasi->kesimpulan_investigasi }}
            </td>
        </tr>

        <tr>
            <td class="label">Kronologi Investigasi</td>
            <td style="white-space:pre-line">
                {{ $laporan->investigasi->kronologi_investigasi ?? '-' }}
            </td>
        </tr>

        <tr>
            <td class="label">Hasil Pemeriksaan Bukti</td>
            <td style="white-space:pre-line">
                {{ $laporan->investigasi->bukti_investigasi }}
            </td>
        </tr>

        <tr>
            <td class="label">Validitas Investigasi</td>
            <td>{{ $laporan->investigasi->validitas_investigasi }}</td>
        </tr>

        <tr>
            <td class="label">Rekomendasi Tindak Lanjut</td>
            <td style="white-space:pre-line">
                {{ $laporan->investigasi->rekomendasi_investigasi }}
            </td>
        </tr>

        <tr>
            <td class="label">Tanggal Investigasi</td>
            <td>
                @if($laporan->investigasi->tanggal_investigasi)
                    {{ \Carbon\Carbon::parse($laporan->investigasi->tanggal_investigasi)->format('d F Y H:i') }}
                @else
                    -
                @endif
            </td>
        </tr>

        <tr>
            <td class="label">Lampiran Investigasi</td>
            <td>
                @if($laporan->investigasi->lampiran_investigasi)
                    <a href="{{ asset('storage/'.$laporan->investigasi->lampiran_investigasi) }}" target="_blank">
                        Lihat Lampiran
                    </a>
                @else
                    Tidak ada lampiran.
                @endif
            </td>
        </tr>
    </table>
@endif

        <div class="footer-form">- Satgas Pencegahan Anti Kekerasan Seksual Politeknik Negeri Bengkalis -</div>

        <div class="btn-area">
            <button onclick="window.print()" class="btn btn-print"><i class="fa-solid fa-print"></i> Cetak Laporan</button>
            <a href="{{ route('admin.laporan.index') }}" class="btn btn-back">Kembali</a>
        </div>
    </div>
</div>

</body>
</html>
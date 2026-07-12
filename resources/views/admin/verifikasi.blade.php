<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Laporan - PPKS</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }
        body { background: #eef2ff; display: flex; }

        /* SIDEBAR */
        .sidebar { width: 280px; height: 100vh; position: fixed; background: #030b2b; padding: 14px; color: white; }
        .logo { display: flex; align-items: center; gap: 12px; padding: 10px; margin-bottom: 35px; }
        .logo img { width: 48px; height: 48px; object-fit: contain; }
        .logo h2 { font-size: 20px; }
        .logo span { font-size: 13px; color: #94a3b8; }

        /* MENU */
        .menu { display: flex; flex-direction: column; gap: 8px; }
        .menu a { 
            display: flex; align-items: center; gap: 15px; 
            padding: 16px 18px; text-decoration: none; color: #cbd5e1; 
            border-radius: 18px; font-size: 16px; font-weight: 500; transition: all .3s ease; 
        }
        .menu a i { width: 25px; text-align: center; font-size: 18px; }
        .menu a:hover, .menu a.active { background: linear-gradient(135deg, #2563eb, #3b82f6); color: white; }

        /* MAIN */
        .main { margin-left: 280px; width: calc(100% - 280px); padding: 30px; }
        .card { background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }

        /* KOP SURAT */
        .kop-header { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .kop-header img { width: 80px; height: 80px; object-fit: contain; }
        .kop-text { flex: 1; text-align: center; }
        .kop-text h2 { font-size: 18px; margin: 0; font-weight: 600; }
        .kop-text h1 { font-size: 24px; color: #1e40af; font-weight: 700; margin-top: 5px; }
        .garis { border-bottom: 3px solid #000; margin-top: 10px; }
        .judul-form { text-align: center; font-size: 20px; font-weight: bold; margin: 25px 0; }

        /* TABLE & LIST */
        .form-table { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
        .form-table td { border: 1px solid #d1d5db; padding: 15px; vertical-align: top; }
        .label { width: 30%; background: #eaf7df; font-weight: 600; }
        .status { padding: 8px 15px; border-radius: 20px; background: #fef3c7; color: #92400e; font-weight: bold; }
        .alasan-list { padding-left: 25px; }
        .alasan-list li { margin-bottom: 5px; color: #374151; }
        .alasan-list li::marker { color: #16a34a; font-weight: bold; }

        /* INPUTS & BUTTONS */
        select, textarea { width: 100%; padding: 14px; border-radius: 12px; border: 1px solid #ddd; margin-top: 10px; }
        textarea { height: 120px; resize: none; }
        .btn-area { margin-top: 30px; display: flex; justify-content: flex-end; gap: 10px; }
        .btn { border: none; padding: 12px 25px; border-radius: 10px; cursor: pointer; font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 8px; }
        .save { background: #16a34a; color: white; }
        .back { background: #e2e8f0; color: #334155; }
        .footer-form { text-align: center; margin-top: 30px; font-style: italic; font-size: 14px; }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
        <div>
            <h2>PelaporanKS</h2>
            <span>Admin Panel</span>
        </div>
    </div>
    <div class="menu">
        <a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="{{ route('admin.laporan.index') }}" class="active"><i class="fa-solid fa-file-lines"></i> Laporan Masuk</a>
       <a href="{{ route('admin.investigasi.index') }}"><i class="fa-solid fa-folder-open"></i> Hasil Investigasi</a>
       <a href="{{ route('admin.cetak') }}"><i class="fa-solid fa-print"></i> <span>Cetak Laporan</span></a>
        <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>
</div>

<div class="main">
    <div class="card">
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

        <div class="judul-form">FORMULIR VERIFIKASI LAPORAN</div>

        <table class="form-table">
            <tr><td class="label">Kode Laporan</td><td>{{ $laporan->kode_laporan }}</td></tr>
            <tr><td class="label">Judul Laporan</td><td>{{ $laporan->judul }}</td></tr>
            <tr><td class="label">Jenis Kasus</td><td>{{ $laporan->jenis_kasus }}</td></tr>
            <tr><td class="label">Lokasi Kejadian</td><td>{{ $laporan->lokasi }}</td></tr>
            <tr><td class="label">Waktu Kejadian</td><td>{{ \Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d F Y H:i') }}</td></tr>
            <tr><td class="label">Kronologi</td><td>{{ $laporan->isi_laporan }}</td></tr>
            
            <tr>
                <td class="label">Alasan Pengaduan</td>
                <td>
                    @if($laporan->alasan_pengaduan)
                        <ol class="alasan-list">
                            @foreach(explode(',', $laporan->alasan_pengaduan) as $alasan)
                                <li>{{ trim($alasan) }}</li>
                            @endforeach
                        </ol>
                    @else 
                        Tidak ada alasan pengaduan. 
                    @endif
                </td>
            </tr>

            <tr>
                <td class="label">Identifikasi Kebutuhan Korban</td>
                <td>
                    @if($laporan->kebutuhan_korban)
                        <ol class="alasan-list">
                            @foreach(explode(',', $laporan->kebutuhan_korban) as $kebutuhan)
                                <li>{{ trim($kebutuhan) }}</li>
                            @endforeach
                        </ol>
                    @else
                        Tidak ada kebutuhan yang dipilih.
                    @endif
                </td>
            </tr>

           <tr>
    <td class="label">Bukti Pendukung</td>
    <td>
        @if($laporan->bukti)
            <a href="{{ asset('storage/'.$laporan->bukti) }}" target="_blank">
                Lihat Bukti
            </a>
        @else
            Tidak ada bukti.
        @endif
    </td>
</tr>

            <tr><td class="label">Status Saat Ini</td><td><span class="status">{{ $laporan->status }}</span></td></tr>
        </table>

        <form method="POST" action="{{ route('admin.laporan.verifikasi',$laporan->id) }}">
            @csrf
            <table class="form-table">
                <tr>
                    <td class="label">Status Penanganan</td>
                    <td>
                        <select name="status">
                            <option value="Menunggu" @if($laporan->status=="Menunggu") selected @endif>Menunggu</option>
                            <option value="Diproses" @if($laporan->status=="Diproses") selected @endif>Diproses</option>
                            <option value="Selesai" @if($laporan->status=="Selesai") selected @endif>Selesai</option>
                            <option value="Ditolak" @if($laporan->status=="Ditolak") selected @endif>Ditolak</option>
                        </select>
                    </td>
                </tr>
            </table>

            <div class="btn-area">

<button
type="submit"
name="aksi"
value="satgas"
class="btn save">

<i class="fa-solid fa-share"></i>
Teruskan ke Satgas

</button>

<button
type="submit"
name="aksi"
value="pelapor"
class="btn reject">

<i class="fa-solid fa-reply"></i>
Kembalikan ke Pelapor

</button>

<a href="{{ route('admin.laporan.index') }}"
class="btn back">

Kembali

</a>

</div>

</body>
</html>
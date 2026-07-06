<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan & Investigasi - PPKS</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Inter',sans-serif;
        }

        body{
            background:#eef2ff;
            display:flex;
        }

        .sidebar{
            width:280px;
            height:100vh;
            position:fixed;
            top:0;
            left:0;
            background:#030b2b;
            padding:14px;
            color:white;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:12px;
            padding:10px;
            margin-bottom:35px;
        }

        .logo img{
            width:48px;
            height:48px;
            object-fit:contain;
        }

        .logo span{
            color:#94a3b8;
            font-size:13px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:8px;
        }

        .menu a{
            display:flex;
            align-items:center;
            gap:15px;
            padding:16px 18px;
            text-decoration:none;
            color:#cbd5e1;
            border-radius:18px;
            transition:.3s;
        }

        .menu a:hover,
        .menu a.active{
            background:linear-gradient(135deg,#2563eb,#3b82f6);
            color:white;
        }

        .main{
            margin-left:280px;
            width:calc(100% - 280px);
            padding:30px;
        }

        .card{
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 10px 25px rgba(0,0,0,.05);
        }

        .kop-surat{
            text-align:center;
            margin-bottom:25px;
        }

        .kop-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:20px;
        }

        .kop-header img{
            width:80px;
            height:80px;
            object-fit:contain;
        }

        .kop-text{
            flex:1;
            text-align:center;
        }

        .kop-text h2{
            font-size:18px;
        }

        .kop-text h1{
            font-size:24px;
            margin-top:5px;
            color:#1e40af;
        }

        .garis{
            border-bottom:3px solid #000;
            margin-top:10px;
        }

        .judul-form{
            text-align:center;
            font-size:22px;
            font-weight:bold;
            margin:25px 0;
        }

        .subjudul{
            margin-top:30px;
            margin-bottom:15px;
            color:#1e40af;
            font-size:18px;
            font-weight:bold;
        }

        .form-table{
            width:100%;
            border-collapse:collapse;
            margin-bottom:20px;
        }

        .form-table td{
            border:1px solid #d1d5db;
            padding:15px;
            vertical-align:top;
        }

        .label{
            width:30%;
            background:#eaf7df;
            font-weight:600;
        }

        .btn-area{
            margin-top:30px;
            display:flex;
            justify-content:flex-end;
            gap:10px;
            flex-wrap:wrap;
        }

        .btn{
            border:none;
            padding:12px 20px;
            border-radius:10px;
            cursor:pointer;
            text-decoration:none;
            font-weight:600;
        }

        .btn-success{
            background:#16a34a;
            color:white;
        }

        .btn-danger{
            background:#dc2626;
            color:white;
        }

        .btn-print{
            background:#2563eb;
            color:white;
        }

        .btn-back{
            background:#e2e8f0;
            color:#334155;
        }

        textarea{
            width:100%;
            border:1px solid #d1d5db;
            border-radius:10px;
            padding:12px;
            margin-top:10px;
            min-height:100px;
        }

       @page{
    size:A4 portrait;
    margin:10mm;
}

@media print{

    .sidebar,
    .btn-area,
    .admin-action{
        display:none !important;
    }

    body{
        background:#fff;
        margin:0;
        padding:0;
    }

    .main{
        margin:0;
        width:100%;
        padding:0;
    }

    .card{
        box-shadow:none;
        border:none;
        padding:0;
    }

    .kop-header img{
        width:60px;
        height:60px;
    }

    .kop-text h1{
        font-size:20px;
    }

    .kop-text h2{
        font-size:15px;
    }

    .judul-form{
        font-size:18px;
        margin:15px 0;
    }

    .subjudul{
        font-size:15px;
        margin:10px 0;
    }

    .form-table td{
        padding:8px;
        font-size:11px;
        line-height:1.3;
    }

    textarea{
        display:none;
    }

    a{
        text-decoration:none;
        color:#000;
    }
}
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logo-polbeng.png') }}">
        <div>
            <h2>PelaporanKS</h2>
            <span>Admin Panel</span>
        </div>
    </div>

    <div class="menu">
        <a href="{{ route('admin.dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.laporan.index') }}">
            <i class="fa-solid fa-file-lines"></i>
            <span>Laporan Masuk</span>
        </a>

        <a href="{{ route('admin.investigasi.index') }}" class="active">
            <i class="fa-solid fa-folder-open"></i>
            <span>Hasil Investigasi</span>
        </a>

        <a href="{{ route('admin.cetak') }}">
                <i class="fa-solid fa-print"></i> <span>Cetak Laporan</span>
        </a>

        <a href="{{ route('logout') }}">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

<div class="main">
<div class="card">

<div class="kop-surat">
    <div class="kop-header">
        <img src="{{ asset('images/logo-polbeng.png') }}">
        <div class="kop-text">
            <h2>SATUAN TUGAS</h2>
            <h2>PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL</h2>
            <h1>POLITEKNIK NEGERI BENGKALIS</h1>
        </div>
        <img src="{{ asset('images/logo-ppks.png') }}">
    </div>

    <div class="garis"></div>
</div>

<div class="judul-form">
    DETAIL LAPORAN DAN HASIL INVESTIGASI
</div>

<div class="subjudul">
    DATA LAPORAN
</div>

<table class="form-table">
    <tr>
        <td class="label">Kode Laporan</td>
        <td>{{ $laporan->kode_laporan }}</td>
    </tr>

    <tr>
        <td class="label">Tanggal Laporan</td>
        <td>{{ $laporan->created_at->format('d F Y H:i') }}</td>
    </tr>

    <tr>
        <td class="label">Judul</td>
        <td>{{ $laporan->judul }}</td>
    </tr>

    <tr>
        <td class="label">Jenis Kasus</td>
        <td>{{ $laporan->jenis_kasus }}</td>
    </tr>

    <tr>
        <td class="label">Lokasi</td>
        <td>{{ $laporan->lokasi }}</td>
    </tr>

    <tr>
        <td class="label">Waktu Kejadian</td>
        <td>
            {{ \Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d F Y H:i') }}
        </td>
    </tr>

    <tr>
        <td class="label">Kronologi Kejadian</td>
        <td style="white-space:pre-line">
            {{ $laporan->deskripsi }}
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
</table>

<div class="subjudul">
    HASIL INVESTIGASI SATGAS
</div>

<table class="form-table">

    <tr>
        <td class="label">Nama Pemeriksa</td>
        <td>{{ $laporan->investigasi->nama_pemeriksa ?? '-' }}</td>
    </tr>

    <tr>
        <td class="label">Tempat Pemeriksaan</td>
        <td>{{ $laporan->investigasi->tempat_pemeriksaan ?? '-' }}</td>
    </tr>

    <tr>
        <td class="label">Tingkat Risiko</td>
        <td>{{ $laporan->investigasi->tingkat_risiko ?? '-' }}</td>
    </tr>

    <tr>
        <td class="label">Kronologi Investigasi</td>
        <td style="white-space:pre-line">
            {{ $laporan->investigasi->kronologi_investigasi ?? '-' }}
        </td>
    </tr>

    <tr>
        <td class="label">Bukti Investigasi</td>
        <td style="white-space:pre-line">
            {{ $laporan->investigasi->bukti_investigasi ?? '-' }}
        </td>
    </tr>

    <tr>
        <td class="label">Validitas Investigasi</td>
        <td>{{ $laporan->investigasi->validitas_investigasi ?? '-' }}</td>
    </tr>

    <tr>
        <td class="label">Kesimpulan</td>
        <td style="white-space:pre-line">
            {{ $laporan->investigasi->kesimpulan_investigasi ?? '-' }}
        </td>
    </tr>

    <tr>
        <td class="label">Rekomendasi</td>
        <td style="white-space:pre-line">
            {{ $laporan->investigasi->rekomendasi_investigasi ?? '-' }}
        </td>
    </tr>

    <tr>
        <td class="label">Status Investigasi</td>
        <td>{{ $laporan->investigasi->status_investigasi ?? '-' }}</td>
    </tr>

    <tr>
        <td class="label">Catatan Admin</td>
        <td>{{ $laporan->investigasi->catatan_admin ?? '-' }}</td>
    </tr>
</table>

@if($laporan->investigasi &&
$laporan->investigasi->status_investigasi != 'Disetujui Admin')

<div class="admin-action">

<form action="{{ route('admin.investigasi.setujui',$laporan->id) }}" method="POST">
    @csrf
    <button class="btn btn-success">
        Setujui Investigasi
    </button>
</form>

<form action="{{ route('admin.investigasi.kembalikan',$laporan->id) }}" method="POST">
    @csrf

    <textarea
        name="catatan_admin"
        placeholder="Masukkan alasan pengembalian..."
        required></textarea>

    <button class="btn btn-danger" style="margin-top:10px;">
        Kembalikan ke Satgas
    </button>
</form>

</div>
@endif

<div class="btn-area">
    <button onclick="window.print()" class="btn btn-print">
        Cetak
    </button>

    <a href="{{ route('admin.investigasi.index') }}" class="btn btn-back">
        Kembali
    </a>
</div>

</div>
</div>

</body>
</html>
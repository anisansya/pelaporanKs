\<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Investigasi - PPKS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght \ 300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary: #2563eb;
            --accent: #60a5fa;
            --border-glass: rgba(255, 255, 255, 0.08);
            --bg-card: rgba(255, 255, 255, 0.02);
            --sidebar-bg: #111827;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: radial-gradient(circle at top left, #0b1e4f, #020617);
            color: white;
            display: flex;
            position: relative;
            overflow-x: hidden;
        }

        /* BACKGROUND DECORATION GRID */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-image: linear-gradient(rgba(255, 255, 255, 0.01) 1px, transparent 1px), 
                              linear-gradient(90deg, rgba(255, 255, 255, 0.01) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: -1;
            pointer-events: none;
        }

        /* SIDEBAR SYSTEM */
        .sidebar{
    width:260px;
    background:#111827;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    padding:25px;
    border-right:1px solid rgba(255,255,255,.08);
    z-index:10;
}

        .logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:40px;
}


.logo img{
    width:48px;
    height:48px;
    object-fit:contain;
}


.logo-text h2{
    font-size:20px;
    color:white;
    font-weight:700;
    line-height:1.2;
}


.logo-text span{
    font-size:13px;
    color:#94a3b8;
}

        .menu{
    list-style:none;
    padding:0;
    margin:0;
}


.menu li{
    margin-bottom:12px;
}


.menu a{
    display:flex;
    align-items:center;
    gap:12px;
    color:#cbd5e1;
    text-decoration:none;
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
    font-size:14px;
}


.menu a:hover{
    background:#1e3a8a;
    color:white;
}


.menu li.active a{
    background:linear-gradient(135deg,#2563eb,#3b82f6);
    color:white;
}

        /* MAIN CONTENT CONTAINER */
        .container{
    margin-left:260px;
    width:calc(100% - 260px);
    padding:40px;
}

        /* ACTION HEADER STRIP */
        .header-strip {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .header-strip div h1 {
            font-size: 26px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(to right, #fff, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header-strip div p {
            color: #94a3b8;
            font-size: 14px;
            margin-top: 4px;
        }

        /* CONTROL BUTTONS */
        .btn-print {
            background: rgba(255, 255, 255, 0.05);
            color: #cbd5e1;
            border: 1px solid var(--border-glass);
            padding: 10px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: .2s;
        }

        .btn-print:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* MAIN DASHBOARD CARD */
        .card {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--border-glass);
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #10b981);
            border-radius: 24px 24px 0 0;
        }

        /* RESPONSIVE TABLE SYSTEM */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(255, 255, 255, 0.01);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: rgba(37, 99, 235, 0.1);
            color: #93c5fd;
            padding: 16px 20px;
            font-weight: 600;
            border-bottom: 2px solid rgba(255, 255, 255, 0.08);
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 16px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            color: #cbd5e1;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.01);
            color: #fff;
        }

        .code-badge {
            font-family: monospace;
            color: #38bdf8;
            font-weight: 700;
            background: rgba(56, 189, 248, 0.08);
            padding: 4px 8px;
            border-radius: 6px;
            border: 1px solid rgba(56, 189, 248, 0.15);
        }

        /* STATUS BADGES */
        .badge {
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
        }
        .badge-proses { background: rgba(245, 158, 11, 0.12); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.2); }
        .badge-selesai { background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.2); }
        .badge-tolak { background: rgba(239, 68, 68, 0.12); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.2); }

        /* ACTION BUTTON */
        .btn {
            background: rgba(255, 255, 255, 0.04);
            color: #cbd5e1;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: .2s;
        }

        .btn:hover {
            background: rgba(37, 99, 235, 0.15);
            border-color: #3b82f6;
            color: white;
            transform: translateY(-1px);
        }

        /* EMPTY STATE DESIGN */
        .empty-state {
            padding: 50px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 40px;
            color: #475569;
            margin-bottom: 15px;
        }

        .empty-state p {
            color: #94a3b8;
            font-size: 15px;
            font-weight: 500;
        }

        /* MOBILE RESPONSIVE SYSTEM */
      /* MOBILE RESPONSIVE SYSTEM */
@media (max-width:768px){

    .sidebar{
        width:70px;
        padding:15px 5px;
    }


    .sidebar .logo-text{
        display:none;
    }


    .sidebar .menu a span{
        display:none;
    }


    .logo{
        justify-content:center;
    }


    .logo img{
        width:42px;
        height:42px;
    }


    .menu a{
        justify-content:center;
        padding:14px 0;
    }


    .container{
        margin-left:70px;
        width:calc(100% - 70px);
        padding:20px;
    }

}

        @media print {
            .sidebar, .btn-print, .aksi {
                display: none !important;
            }
            .container {
                margin-left: 0;
                width: 100%;
                padding: 0;
            }
            .card {
                background: none;
                border: none;
                box-shadow: none;
                padding: 0;
            }
            th {
                background: #1e3a8a !important;
                color: white !important;
            }
            td {
                color: black !important;
                border-bottom: 1px solid #cbd5e1 !important;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">

    <img src="{{ asset('images/logo-polbeng.png') }}" 
         alt="Logo Polbeng">

    <div class="logo-text">
        <h2>PelaporanKS</h2>
        <span>Satgas Panel</span>
    </div>

</div>

    <ul class="menu">
        <li>
            <a href="{{ route('satgas.dashboard') }}">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('satgas.laporan') }}">
                <i class="fa-solid fa-folder-open"></i>
                <span>Laporan Masuk</span>
            </a>
        </li>
        <li class="active">
            <a href="{{ route('satgas.riwayat') }}">
                    <i class="fa-solid fa-folder-open"></i> Riwayat Investigasi
                </a>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

<div class="container animate__animated animate__fadeInUp">
    
    <div class="header-strip">
        <div>
            <h1><i class="fa-solid fa-clock-rotate-left" style="color: #10b981;"></i> Riwayat Investigasi</h1>
            <p>Daftar seluruh laporan yang telah selesai diproses oleh Satgas.</p>
        </div>
        <a href="javascript:void(0)" onclick="window.print()" class="btn-print">
            <i class="fa-solid fa-print"></i> Cetak Riwayat
        </a>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 7%; text-align: center;"><i class="fa-solid fa-hashtag"></i> No</th>
                        <th><i class="fa-solid fa-key"></i> Kode Token</th>
                        <th><i class="fa-solid fa-paste"></i> Jenis Kasus</th>
                        <th><i class="fa-solid fa-calendar-check"></i> Tanggal Selesai</th>
                        <th><i class="fa-solid fa-spinner"></i> Status Akhir</th>
                        <th class="aksi" style="text-align: center;"><i class="fa-solid fa-sliders"></i> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporans as $no => $l)
                    <tr>
                        <td style="text-align: center; color: #64748b; font-weight: 600;">{{ $no + 1 }}</td>
                        <td>
                            <span class="code-badge">{{ $l->kode_laporan }}</span>
                        </td>
                        <td style="font-weight: 500; color: #f1f5f9;">
                            {{ $l->jenis_kasus }}
                        </td>
                        <td>
                            {{ $l->updated_at ? $l->updated_at->format('d M Y H:i') : '-' }} WIB
                        </td>
                        <td>
                            <span class="badge 
                                @if($l->status == 'Selesai') badge-selesai 
                                @elseif($l->status == 'Ditolak') badge-tolak 
                                @else badge-proses @endif">
                                {{ $l->status }}
                            </span>
                        </td>
                        <td class="aksi" style="text-align: center;">
                            <a class="btn" href="{{ route('satgas.cetak', $l->id) }}" target="_blank">
                                <i class="fa-solid fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <i class="fa-solid fa-folder-open"></i>
                                <p>Belum ada riwayat kasus yang diinvestigasi.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
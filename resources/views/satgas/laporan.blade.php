<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Satgas - Daftar Laporan Masuk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
        .sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px;
            border-right: 1px solid var(--border-glass);
            z-index: 10;
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
    text-decoration:none;
    color:#cbd5e1;
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
    font-size:14px;
    font-weight:500;
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
        .container {
            margin-left: 260px;
            width: calc(100% - 260px);
            padding: 40px;
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
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
            border-radius: 24px 24px 0 0;
        }

        h1 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(to right, #fff, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            color: white;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: .2s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }

        .btn:hover {
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
        }

        /* MOBILE RESPONSIVE SYSTEM */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 15px 5px;
            }
            .sidebar .logo-text,
.sidebar .menu a span{
    display:none;
}
            .sidebar .menu a {
                justify-content: center;
                padding: 14px 0;
            }
            .container {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 20px;
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

<li class="{{ request()->routeIs('satgas.dashboard') ? 'active':'' }}">
    <a href="{{ route('satgas.dashboard') }}">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
    </a>
</li>


<li class="{{ request()->routeIs('satgas.laporan') ? 'active':'' }}">
    <a href="{{ route('satgas.laporan') }}">
        <i class="fa-solid fa-folder-open"></i>
        <span>Laporan Masuk</span>
    </a>
</li>


<li class="{{ request()->routeIs('satgas.riwayat') ? 'active':'' }}">
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
    <div class="card">
        
        <h1><i class="fa-solid fa-folder-shield" style="color: #3b82f6;"></i> Panel Satgas: Laporan Masuk</h1>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><i class="fa-solid fa-hashtag"></i> Kode Token</th>
                        <th><i class="fa-solid fa-paste"></i> Kategori Kasus</th>
                        <th><i class="fa-solid fa-calendar-day"></i> Tanggal Masuk</th>
                        <th><i class="fa-solid fa-spinner"></i> Status</th>
                        <th style="text-align: center;"><i class="fa-solid fa-sliders"></i> Kontrol Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporans as $l)
                    <tr>
                        <td>
                            <span class="code-badge">{{ $l->kode_laporan }}</span>
                        </td>
                        
                        <td style="font-weight: 500; color: #f1f5f9;">
                            {{ $l->jenis_kasus }}
                        </td>

                        <td>
                            {{ $l->created_at ? $l->created_at->format('d M Y H:i') : '-' }} WIB
                        </td>

                        <td>
                            <span class="badge 
                                @if($l->status == 'Selesai') badge-selesai 
                                @elseif($l->status == 'Ditolak') badge-tolak 
                                @else badge-proses @endif">
                                {{ $l->status }}
                            </span>
                        </td>

                        <td style="text-align: center;">
                            <a class="btn" href="{{ route('satgas.show', $l->id) }}">
                                <i class="fa-solid fa-magnifying-glass-chart"></i> Investigasi
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background: linear-gradient(135deg, #020617, #041c4d, #020617);
            color:white;
            overflow-x:hidden;
        }

        /* SIDEBAR */
        .sidebar{
            position:fixed;
            left:0;
            top:0;
            width:280px;
            height:100vh;
            background: linear-gradient(180deg, #020617, #03173f);
            border-right: 1px solid rgba(255,255,255,.08);
            padding:25px;
            z-index:100;
        }

        /* LOGO */
        .logo{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:50px;
        }

        .logo img{
            width:60px;
            height:60px;
            object-fit:contain;
        }

        .logo-text h2{
            font-size:24px;
            font-weight:700;
        }

        .logo-text span{
            font-size:13px;
            color:#94a3b8;
        }

        /* MENU */
        .menu{
            display:flex;
            flex-direction:column;
            gap:10px;
        }

        .menu a{
            display:flex;
            align-items:center;
            gap:15px;
            padding:16px 18px;
            border-radius:18px;
            text-decoration:none;
            color:#cbd5e1;
            transition:.3s;
        }

        .menu a:hover,
        .menu .active{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color:white;
        }

        .menu i{
            width:25px;
        }

        /* HELP CARD */
        .help-card{
            margin-top:40px;
            padding:25px;
            border-radius:25px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255,255,255,.08);
        }

        .help-card i{
            font-size:45px;
            color:#60a5fa;
            margin-bottom:15px;
        }

        .help-card h3{
            margin-bottom:10px;
        }

        .help-card p{
            font-size:14px;
            line-height:1.7;
            color:#cbd5e1;
            margin-bottom:15px;
        }

        .help-btn{
            display:block;
            text-align:center;
            padding:12px;
            border-radius:12px;
            background:#2563eb;
            text-decoration:none;
            color:white;
        }

        /* MAIN */
        .main{
            margin-left:280px;
            padding:30px;
        }

        /* TOPBAR */
        .topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 30px;
    border-radius:25px;
    background:rgba(255,255,255,.05);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,.08);
    margin-bottom:30px;

    position:relative;
    z-index:9999;
    overflow:visible;
}

        .topbar h1{
            font-size:32px;
        }

        .topbar p{
            margin-top:5px;
            color:#cbd5e1;
        }

        .user-box{
    display:flex;
    align-items:center;
    gap:15px;
    padding:12px 18px;
    border-radius:18px;
    background: rgba(255,255,255,.04);
}

/* ==========================
   NOTIFICATION
========================== */

/* ==========================
   NOTIFICATION
========================== */

.notif-wrapper{
    position:relative;
    z-index:10000;
}

.notif-btn{
    width:48px;
    height:48px;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.08);
    color:white;
    cursor:pointer;
    font-size:18px;
    transition:.3s;
    position:relative;
}

.notif-btn:hover{
    background:#2563eb;
}

.notif-badge{
    position:absolute;
    top:-5px;
    right:-5px;
    min-width:20px;
    height:20px;
    border-radius:50%;
    background:#ef4444;
    color:#fff;
    font-size:11px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

.notif-dropdown{
    position:absolute;
    top:60px;
    right:0;
    width:360px;
    max-height:450px;
    overflow-y:auto;
    background:#1e293b;
    border:1px solid rgba(148,163,184,.25);
    border-radius:18px;
    display:none;
    box-shadow:0 15px 40px rgba(0,0,0,.35);
    z-index:99999;
}

.notif-dropdown.show{
    display:block;
}

.notif-title{
    padding:18px;
    font-size:17px;
    font-weight:600;
    color:#f8fafc;
    background:#273449;
    border-bottom:1px solid rgba(255,255,255,.12);
}

.notif-item{
    display:block;
    text-decoration:none;
    color:#e2e8f0;
    padding:15px 18px;
    border-bottom:1px solid rgba(255,255,255,.08);
    transition:.3s;
}

.notif-item strong{
    color:#ffffff;
}

.notif-item small{
    color:#cbd5e1 !important;
}

.notif-item:hover{
    background:rgba(96,165,250,.18);
}

.notif-empty{
    padding:25px;
    text-align:center;
    color:#cbd5e1;
}

.notif-footer{
    display:block;
    text-align:center;
    padding:15px;
    color:#93c5fd;
    background:#1e293b;
    text-decoration:none;
    font-weight:600;
}

.notif-footer:hover{
    background:rgba(96,165,250,.15);
}

/* CONTENT */
.content{
    width:100%;
}
 
        /* ==========================
        STATISTICS
        ========================== */
        .stats{
            display:grid;
            grid-template-columns: repeat(4,1fr);
            gap:25px;
            margin-bottom:30px;
        }

        .stat-card{
            position:relative;
            overflow:hidden;
            padding:30px;
            border-radius:25px;
            border: 1px solid rgba(255,255,255,.08);
            backdrop-filter:blur(15px);
            transition:.4s;
            cursor:pointer;
        }

        .stat-card:hover{
            transform:translateY(-8px);
        }

        .stat-card::before{
            content:'';
            position:absolute;
            width:250px;
            height:250px;
            border-radius:50%;
            top:-120px;
            right:-120px;
            opacity:.2;
        }

        /* BLUE */
        .blue{
            background: linear-gradient(135deg, rgba(37,99,235,.25), rgba(37,99,235,.08));
            box-shadow: 0 0 35px rgba(37,99,235,.15);
        }
        .blue::before{ background:#2563eb; }

        /* PURPLE */
        .purple{
            background: linear-gradient(135deg, rgba(147,51,234,.25), rgba(147,51,234,.08));
            box-shadow: 0 0 35px rgba(147,51,234,.15);
        }
        .purple::before{ background:#9333ea; }

        /* ORANGE */
        .orange{
            background: linear-gradient(135deg, rgba(249,115,22,.25), rgba(249,115,22,.08));
            box-shadow: 0 0 35px rgba(249,115,22,.15);
        }
        .orange::before{ background:#f97316; }

        /* GREEN */
        .green{
            background: linear-gradient(135deg, rgba(16,185,129,.25), rgba(16,185,129,.08));
            box-shadow: 0 0 35px rgba(16,185,129,.15);
        }
        .green::before{ background:#10b981; }

        .stat-top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .stat-icon{
            width:70px;
            height:70px;
            border-radius:20px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:30px;
            color:white;
        }

        .icon-blue{ background:#2563eb; }
        .icon-purple{ background:#9333ea; }
        .icon-orange{ background:#f97316; }
        .icon-green{ background:#10b981; }

        .stat-title{
            font-size:18px;
            color:#cbd5e1;
        }

        .stat-value{
            font-size:45px;
            font-weight:700;
            margin-bottom:10px;
        }

        .stat-desc{
            color:#94a3b8;
            font-size:14px;
        }

        /* EFFECT LINE */
        .wave{
            position:absolute;
            left:0;
            right:0;
            bottom:0;
            height:55px;
            opacity:.4;
        }

        .wave svg{
            width:100%;
            height:100%;
        }

        /* ==========================
        CHART SECTION
        ========================== */
        .charts{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:25px;
            margin-bottom:30px;
        }

        .chart-card{
            background: rgba(255,255,255,.05);
            backdrop-filter:blur(15px);
            border: 1px solid rgba(255,255,255,.08);
            border-radius:30px;
            padding:30px;
            position:relative;
            overflow:hidden;
        }

        .chart-card::before{
            content:'';
            position:absolute;
            width:250px;
            height:250px;
            border-radius:50%;
            background: rgba(37,99,235,.08);
            top:-120px;
            right:-120px;
        }

        .chart-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .chart-header h2{
            font-size:22px;
        }

        .chart-header span{
            padding:10px 15px;
            border-radius:12px;
            background: rgba(255,255,255,.05);
            font-size:13px;
            color:#94a3b8;
        }

        .chart-wrapper{
            height:350px;
        }

        .chart-wrapper-small{
            height:350px;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        /* MINI INFO */
        .mini-info{
            display:grid;
            grid-template-columns:1fr;
            gap:12px;
            margin-top:20px;
        }

        .info-row{
            display:flex;
            justify-content:space-between;
            padding:12px;
            border-radius:12px;
            background: rgba(255,255,255,.03);
        }

        .info-left{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .dot{
            width:12px;
            height:12px;
            border-radius:50%;
        }

        .dot-blue{ background:#2563eb; }
        .dot-green{ background:#10b981; }
        .dot-orange{ background:#f97316; }
        .dot-purple{ background:#9333ea; }

        /* ==========================
        TABLE PREMIUM
        ========================== */
        .table-card{
            background: rgba(255,255,255,.05);
            backdrop-filter:blur(15px);
            border: 1px solid rgba(255,255,255,.08);
            border-radius:30px;
            padding:30px;
            overflow:hidden;
        }

        .table-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .table-header h2{
            font-size:24px;
        }

        .table-header span{
            padding:10px 15px;
            border-radius:12px;
            background: rgba(255,255,255,.05);
            color:#94a3b8;
        }

        .table-responsive{
            overflow-x:auto;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background: rgba(37,99,235,.15);
            padding:18px;
            text-align:left;
            font-size:14px;
            color:#60a5fa;
        }

        td{
            padding:18px;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        tr:hover{
            background: rgba(255,255,255,.03);
        }

        /* STATUS */
        .badge{
            padding:8px 15px;
            border-radius:20px;
            font-size:13px;
            font-weight:600;
        }

        .badge-menunggu{
            background: rgba(245,158,11,.15);
            color:#fbbf24;
        }

        .badge-proses{
            background: rgba(59,130,246,.15);
            color:#60a5fa;
        }

        .badge-selesai{
            background: rgba(16,185,129,.15);
            color:#34d399;
        }

        /* BUTTON */
        .btn-detail{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:10px 16px;
            border-radius:12px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            text-decoration:none;
            color:white;
            font-size:14px;
        }

        /* FOOTER */
        .footer{
            margin-top:25px;
            text-align:center;
            color:#94a3b8;
            font-size:14px;
        }

        /* RESPONSIVE */
        @media(max-width:1200px){
            .stats{ grid-template-columns:repeat(2,1fr); }
            .charts{ grid-template-columns:1fr; }
        }

        @media(max-width:768px){
            .sidebar{ left:-280px; }
            .main{ margin-left:0; padding:20px; }
            .stats{ grid-template-columns:1fr; }
            .topbar{ flex-direction:column; gap:15px; text-align:center; }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo Polbeng">
            <div class="logo-text">
                <h2>PelaporanKS</h2>
                <span>Admin Panel</span>
            </div>
        </div>

        <div class="menu">
            <a href="{{ route('admin.dashboard') }}" class="active">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>
            <a href="{{ route('admin.laporan.index') }}">
                <i class="fa-solid fa-file-lines"></i> Laporan Masuk
            </a>
            <a href="{{ route('admin.investigasi.index') }}">
                <i class="fa-solid fa-folder-open"></i> Hasil Investigasi
            </a>
            <a href="{{ route('admin.cetak') }}">
                <i class="fa-solid fa-print"></i> Cetak Laporan
            </a>
            <a href="{{ route('logout') }}">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div>

        <div class="help-card">
            <i class="fa-solid fa-shield-halved"></i>
            <h3>Sistem Aman</h3>
            <p>Kelola laporan kampus secara cepat, aman, dan profesional.</p>
            <a href="#" class="help-btn">Pelajari Sistem</a>
        </div>
    </div>

    <div class="main">
        
        <div class="topbar">
    <div>
        <h1>Dashboard Admin</h1>
        <p>Monitoring laporan kampus</p>
    </div>

    <div style="display:flex; align-items:center; gap:20px;">

        @php
    $notifications = $laporans
        ->filter(function($item){

            return in_array(
                strtolower(trim($item->status)),
                ['baru','menunggu','tunggu']
            )
            && $item->created_at->format('Y-m-d') >= now()->subDays(2)->format('Y-m-d');

        })
        ->sortByDesc('created_at');

    $notifCount = $notifications->count();
@endphp

        <!-- NOTIFIKASI -->
        <div class="notif-wrapper">

            <button class="notif-btn" id="notifBtn">
                <i class="fa-solid fa-bell"></i>

                @if($notifCount > 0)
                    <span class="notif-badge">
                        {{ $notifCount }}
                    </span>
                @endif
            </button>

            <div class="notif-dropdown" id="notifDropdown">

                <div class="notif-title">
                    🔔 Notifikasi
                </div>

                @forelse($notifications as $notif)

<a href="{{ route('admin.laporan.show', $notif->id) }}" class="notif-item">

    <strong>
        {{ $notif->judul }}
    </strong>

    <br>

    <small>
        Laporan baru masuk
    </small>

    <br>

    <small style="color:#94a3b8;">
        {{ 
            $notif->created_at->isToday() 
                ? 'Hari ini' 
                : ($notif->created_at->isYesterday() 
                    ? 'Kemarin' 
                    : $notif->created_at->format('d M Y')) 
        }}
    </small>

</a>

@empty

    <div class="notif-empty">
        Tidak ada notifikasi.
    </div>

@endforelse

                <a href="{{ route('admin.laporan.index') }}" class="notif-footer">
                    Lihat Semua Laporan →
                </a>

            </div>

        </div>

        <!-- USER -->
        <div class="user-box">
            <div class="avatar">
                <i class="fa-solid fa-user"></i>
            </div>

            <div>
                <b>{{ auth()->user()->name }}</b><br>
                <small>Administrator</small>
            </div>
        </div>

    </div>
</div>

        <div class="content"> 
            
            <div class="stats">
                <div class="stat-card blue">
                    <div class="stat-top">
                        <div>
                            <div class="stat-title">Total Laporan</div>
                            <div class="stat-value">{{ $laporans->count() }}</div>
                            <div class="stat-desc">Semua laporan masuk</div>
                        </div>
                        <div class="stat-icon icon-blue">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                    </div>
                    <div class="wave">
                        <svg viewBox="0 0 500 100" preserveAspectRatio="none">
                            <path d="M0,70 C150,10 350,100 500,50 L500,100 L0,100 Z" fill="#2563eb"></path>
                        </svg>
                    </div>
                </div>

                <div class="stat-card purple">
                    <div class="stat-top">
                        <div>
                            <div class="stat-title">Laporan Menunggu</div>
                            <div class="stat-value">
                                {{ $laporans->filter(fn($item)=>in_array(strtolower($item->status),['baru','menunggu','tunggu']))->count() }}
                            </div>
                            <div class="stat-desc">Menunggu verifikasi</div>
                        </div>
                        <div class="stat-icon icon-purple">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>
                    <div class="wave">
                        <svg viewBox="0 0 500 100">
                            <path d="M0,60 C120,20 250,90 500,40 L500,100 L0,100 Z" fill="#9333ea"></path>
                        </svg>
                    </div>
                </div>

                <div class="stat-card orange">
                    <div class="stat-top">
                        <div>
                            <div class="stat-title">Diproses Satgas</div>
                            <div class="stat-value">
                                {{ $laporans->filter(fn($item)=>in_array(strtolower($item->status),['diproses','diproses_satgas','proses']))->count() }}
                            </div>
                            <div class="stat-desc">Dalam penanganan</div>
                        </div>
                        <div class="stat-icon icon-orange">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                    <div class="wave">
                        <svg viewBox="0 0 500 100">
                            <path d="M0,80 C150,0 350,100 500,40 L500,100 L0,100 Z" fill="#f97316"></path>
                        </svg>
                    </div>
                </div>

                <div class="stat-card green">
                    <div class="stat-top">
                        <div>
                            <div class="stat-title">Selesai</div>
                            <div class="stat-value">
                                {{ $laporans->filter(fn($item)=>strtolower($item->status)=='selesai')->count() }}
                            </div>
                            <div class="stat-desc">Laporan ditangani</div>
                        </div>
                        <div class="stat-icon icon-green">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <div class="wave">
                        <svg viewBox="0 0 500 100">
                            <path d="M0,60 C150,20 350,90 500,40 L500,100 L0,100 Z" fill="#10b981"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="charts">
                <div class="chart-card">
                    <div class="chart-header">
                        <h2>Grafik Status Laporan</h2>
                        <span>2026</span>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="chartBar"></canvas>
                    </div>
                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h2>Jenis Kasus</h2>
                        <span>Statistik</span>
                    </div>
                    <div class="chart-wrapper-small">
                        <canvas id="chartPie"></canvas>
                    </div>
                    <div class="mini-info">
                        <div class="info-row">
                            <div class="info-left">
                                <div class="dot dot-blue"></div> Verbal
                            </div>
                            <div>
                                {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='verbal')->count() }}
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-left">
                                <div class="dot dot-green"></div> Fisik
                            </div>
                            <div>
                                {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='fisik')->count() }}
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-left">
                                <div class="dot dot-orange"></div> KBGO
                            </div>
                            <div>
                                {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='kbgo')->count() }}
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-left">
                                <div class="dot dot-purple"></div> Relasi Kuasa
                            </div>
                            <div>
                                {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='relasi kuasa')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-card">
                <div class="table-header">
                    <h2>Laporan Terbaru</h2>
                    <span>{{ $laporans->count() }} Data</span>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporans as $l)
                            <tr>
                                <td>#{{ $l->id }}</td>
                                <td>{{ $l->judul }}</td>
                                <td>
                                    @if(in_array(strtolower($l->status), ['baru','menunggu','tunggu']))
                                        <span class="badge badge-menunggu">{{ $l->status }}</span>
                                    @elseif(in_array(strtolower($l->status), ['diproses','diproses_satgas','proses']))
                                        <span class="badge badge-proses">{{ $l->status }}</span>
                                    @else
                                        <span class="badge badge-selesai">{{ $l->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $l->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.laporan.show',$l->id) }}" class="btn-detail">
                                        <i class="fa-solid fa-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="footer">
    © 2026 PelaporanKS - Politeknik Negeri Bengkalis
</div>

</div> <!-- content -->
</div> <!-- main -->

<script>
    const ctxBar = document.getElementById('chartBar').getContext('2d');

    const gradient = ctxBar.createLinearGradient(0,0,0,400);
    gradient.addColorStop(0,'rgba(37,99,235,.5)');
    gradient.addColorStop(1,'rgba(37,99,235,0)');

    new Chart(ctxBar,{
        type:'line',
        data:{
            labels:['Menunggu','Diproses','Selesai'],
            datasets:[{
                data:[
                    {{ $laporans->filter(fn($item)=>in_array(strtolower($item->status),['baru','menunggu','tunggu']))->count() }},
                    {{ $laporans->filter(fn($item)=>in_array(strtolower($item->status),['diproses','diproses_satgas','proses']))->count() }},
                    {{ $laporans->filter(fn($item)=>strtolower($item->status)=='selesai')->count() }}
                ],
                fill:true,
                backgroundColor:gradient,
                borderColor:'#3b82f6',
                borderWidth:4,
                tension:.4,
                pointRadius:6,
                pointHoverRadius:8,
                pointBackgroundColor:'#60a5fa',
                pointBorderColor:'#fff'
            }]
        },
        options:{
            responsive:true,
            maintainAspectRatio:false,
            plugins:{
                legend:{display:false}
            },
            scales:{
                x:{
                    ticks:{color:'#cbd5e1'},
                    grid:{display:false}
                },
                y:{
                    beginAtZero:true,
                    ticks:{
                        color:'#cbd5e1',
                        precision:0
                    },
                    grid:{
                        color:'rgba(255,255,255,.08)'
                    }
                }
            }
        }
    });

    new Chart(document.getElementById('chartPie'),{
        type:'doughnut',
        data:{
            labels:['Verbal','Fisik','KBGO','Relasi Kuasa'],
            datasets:[{
                data:[
                    {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='verbal')->count() }},
                    {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='fisik')->count() }},
                    {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='kbgo')->count() }},
                    {{ $laporans->filter(fn($item)=>strtolower($item->jenis_kasus ?? '')=='relasi kuasa')->count() }}
                ],
                backgroundColor:[
                    '#2563eb',
                    '#10b981',
                    '#f97316',
                    '#9333ea'
                ],
                borderWidth:0
            }]
        },
        options:{
            responsive:true,
            cutout:'75%',
            plugins:{
                legend:{
                    display:false
                }
            }
        }
    });

    // ==========================
    // NOTIFIKASI
    // ==========================
    document.addEventListener('DOMContentLoaded', function(){

        const notifBtn = document.getElementById('notifBtn');
        const notifDropdown = document.getElementById('notifDropdown');

        if(notifBtn && notifDropdown){

            notifBtn.addEventListener('click', function(e){
                e.stopPropagation();
                notifDropdown.classList.toggle('show');
            });

            notifDropdown.addEventListener('click', function(e){
                e.stopPropagation();
            });

            document.addEventListener('click', function(){
                notifDropdown.classList.remove('show');
            });

        }

    });

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Satgas - PelaporanKS</title>

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
    background:#f1f5f9;
    color:#1e293b;
    overflow-x:hidden;
}


/* SIDEBAR */

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:280px;
    height:100vh;
    background:linear-gradient(180deg,#020617,#03173f);
    border-right:1px solid rgba(255,255,255,.08);
    padding:25px;
    z-index:100;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    box-shadow:10px 0 30px rgba(0,0,0,.4);
}


.logo{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:40px;
    border-bottom:1px solid rgba(255,255,255,.08);
    padding-bottom:20px;
}


.logo img{
    width:50px;
    height:50px;
    object-fit:contain;
}


.logo-text h2{
    font-size:20px;
    color:white;
}


.logo-text span{
    font-size:12px;
    color:#60a5fa;
}



/* MENU */

.menu{
    display:flex;
    flex-direction:column;
    gap:8px;
}


.menu a{
    display:flex;
    align-items:center;
    gap:15px;
    padding:14px 16px;
    border-radius:14px;
    text-decoration:none;
    color:#cbd5e1;
    transition:.3s;
}


.menu a:hover,
.menu .active{

    background:linear-gradient(135deg,#2563eb,#3b82f6);
    color:white;
}


.menu i{
    width:20px;
}



/* HELP */

.help-card{

    padding:20px;
    border-radius:20px;

    background:rgba(255,255,255,.04);
    border:1px solid rgba(255,255,255,.08);

}


.help-card i{

    color:#60a5fa;
    font-size:35px;
    margin-bottom:10px;

}


.help-card h3{
    color:white;
}


.help-card p{

    color:#94a3b8;
    font-size:13px;
    line-height:1.6;

}


.help-btn{

    display:block;
    margin-top:15px;
    text-align:center;
    padding:10px;
    border-radius:12px;

    background:#2563eb;
    color:white;
    text-decoration:none;

}



/* MAIN */

.main{

    margin-left:280px;
    padding:35px;

}


/* TOPBAR */


.topbar{

    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;

}


.topbar h1{
    font-size:28px;
    color:#1e293b;
}

.topbar p{
    color:#64748b;
}



.user-box{
    display:flex;
    align-items:center;
    gap:12px;
    background:#ffffff;
    border:1px solid #e2e8f0;
    padding:12px 18px;
    border-radius:18px;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.notif-wrapper{
    position:relative;
}

.notif-btn{
    width:48px;
    height:48px;
    border:none;
    border-radius:50%;
    background:#ffffff;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    color:#2563eb;
    font-size:20px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
    transition:.25s;
}

.notif-btn:hover{
    background:#2563eb;
    color:#ffffff;
}

.notif-badge{
    position:absolute;
    top:-5px;
    right:-5px;
    width:22px;
    height:22px;
    border-radius:50%;
    background:#ef4444;
    color:#ffffff;
    font-size:11px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    border:2px solid #ffffff;
}

.notif-dropdown{
    display:none;
    position:absolute;
    right:0;
    top:60px;
    width:340px;
    background:#ffffff;
    border-radius:14px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,.15);
    z-index:9999;
}

.notif-dropdown.show{
    display:block;
}

.notif-title{
    padding:15px;
    font-weight:700;
    color:#1e293b;
    border-bottom:1px solid #e2e8f0;
}

.notif-item{
    display:block;
    padding:15px;
    text-decoration:none;
    color:#334155;
    border-bottom:1px solid #f1f5f9;
    transition:.2s;
}

.notif-item:hover{
    background:#f8fafc;
}

.notif-empty{
    padding:35px 20px;
    text-align:center;
    color:#64748b;
}

.notif-footer{
    display:block;
    text-align:center;
    text-decoration:none;
    padding:12px;
    font-weight:600;
    color:#2563eb;
    background:#f8fafc;
}

.notif-footer:hover{
    background:#eff6ff;
}

.avatar{

    width:42px;
    height:42px;
    border-radius:50%;

    background:#2563eb;

    display:flex;
    align-items:center;
    justify-content:center;

}



/* STAT */

.stats-grid{

    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:30px;

}


.card{
    padding:25px;
    border-radius:22px;
    display:flex;
    justify-content:space-between;
    align-items:center;

    background:#ffffff;
    border:1px solid #e2e8f0;

    box-shadow:0 8px 25px rgba(15,23,42,.08);
}

.card-value{
    font-size:38px;
    font-weight:700;
}

.card-label{
    color:#64748b;
}

.card-icon{
    width:50px;
    height:50px;
    border-radius:15px;
    display:flex;
    align-items:center;
    justify-content:center;
}
.card{
    transition:transform .2s ease;
}

.card:hover{
    transform:translateY(-4px);
}

/* Warna angka */
.text-blue{
    color:#2563eb;
}

.text-orange{
    color:#f59e0b;
}

.text-green{
    color:#10b981;
}

.text-red{
    color:#ef4444;
}

.text-purple{
    color:#7c3aed;
}
/* STATUS CARD */

.t-tunggu{

    background:rgba(245,158,11,.15);
    color:#fbbf24;
    border:1px solid rgba(245,158,11,.25);

}

.t-proses{

    background:rgba(37,99,235,.15);
    color:#60a5fa;
    border:1px solid rgba(37,99,235,.25);

}


.t-selesai{

    background:rgba(16,185,129,.15);
    color:#34d399;
    border:1px solid rgba(16,185,129,.25);

}



/* SPLIT */

.split-layout{

    display:grid;
    grid-template-columns:1.8fr 1.2fr;
    gap:25px;

}



.panel-box{
    background:#ffffff;
    border:1px solid #e2e8f0;
    border-radius:22px;
    padding:25px;
    box-shadow:0 8px 25px rgba(15,23,42,.08);
    transition:.3s ease;
}

.panel-box:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 35px rgba(15,23,42,.12);
}



.bg-antrian{

    border-left:5px solid #10b981;

}



.bg-chart{

    border-left:5px solid #3b82f6;

}



.panel-title{
    font-size:18px;
    font-weight:700;
    color:#1e293b;
    margin-bottom:20px;
    border-bottom:1px solid #e2e8f0;
    padding-bottom:12px;
}

.panel-title span{
    color:#64748b;
}




/* TABLE */


table{

    width:100%;
    border-collapse:collapse;

}



th{
    padding:14px;
    text-align:left;
    color:#2563eb;
    background:#eff6ff;
}

td{
    padding:14px;
    color:#334155;
    border-bottom:1px solid #e2e8f0;
}

tr:hover td{
    background:#f8fafc;
}




/* BADGE */


.badge{

    padding:6px 12px;

    border-radius:10px;

    font-size:12px;

    font-weight:600;

}



.b-tunggu{

    background:rgba(245,158,11,.12);

    color:#fbbf24;

}



.b-proses{

    background:rgba(37,99,235,.12);

    color:#60a5fa;

}



.b-selesai{

    background:rgba(16,185,129,.12);

    color:#34d399;

}





.btn-action{

    color:#60a5fa;

    text-decoration:none;

    font-weight:600;

}




.chart-container{

    height:230px;

}





.footer{
    margin-top:40px;
    text-align:center;
    color:#64748b;
}





@media(max-width:1024px){

    .split-layout{

        grid-template-columns:1fr;

    }


    .stats-grid{

        grid-template-columns:1fr;

    }

}



@media(max-width:768px){

    .sidebar{

        left:-280px;

    }


    .main{

        margin-left:0;

    }

}


</style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div>
            <div class="logo">
                <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
                <div class="logo-text">
                    <h2>PelaporanKS</h2>
                    <span>Satgas Panel</span>
                </div>
            </div>

            <div class="menu">
                <a href="{{ route('satgas.dashboard') }}" class="active">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
                <a href="{{ route('satgas.laporan') }}">
                    <i class="fa-solid fa-file-lines"></i> Laporan Masuk
                </a>
                <a href="{{ route('satgas.riwayat') }}">
                    <i class="fa-solid fa-folder-open"></i> Riwayat Investigasi
                </a>
                <a href="{{ route('logout') }}">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>

        <div class="help-card">
            <i class="fa-solid fa-shield-halved"></i>
            <h3>Satgas PPKS</h3>
            <p>Kelola investigasi laporan, verifikasi temuan, dan tindak lanjut kasus secara profesional.</p>
            <a href="#" class="help-btn">Panduan Satgas</a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">
        
        <!-- TOPBAR -->
        <div class="topbar">
    <div>
        <h1>Halo, {{ explode(' ', auth()->user()->name)[0] }}</h1>
        <p>Berikut adalah rangkuman beban kerja investigasi Anda hari ini.</p>
    </div>

    <div style="display:flex;align-items:center;gap:18px;">

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
            🔔 Notifikasi Satgas
        </div>

        @forelse($notifications as $notif)

            <a href="{{ route('satgas.show',$notif->id) }}"
               class="notif-item">

                <strong>{{ $notif->kode_laporan }}</strong>

                <br>

                <small>
                    Admin mengirim laporan baru untuk diinvestigasi.
                </small>

                <br>

                <small style="color:#94a3b8;">

                    {{
                        $notif->created_at->isToday()
                        ? 'Hari ini'
                        : (
                            $notif->created_at->isYesterday()
                            ? 'Kemarin'
                            : $notif->created_at->format('d M Y')
                        )
                    }}

                </small>

            </a>

        @empty

            <div class="notif-empty">
                <i class="fa-regular fa-bell-slash"></i>
                <br>
                Belum ada notifikasi.
            </div>

        @endforelse

        <a href="{{ route('satgas.laporan') }}"
           class="notif-footer">

            Lihat Semua Laporan →

        </a>

    </div>

</div>

        <div class="user-box">
            <div class="avatar">
                <i class="fa-solid fa-user-shield"></i>
            </div>

            <div>
                <h4 style="font-size:14px;color:#1e3a8a;">
                    {{ auth()->user()->name }}
                </h4>
                <small style="color:#4b5563;font-weight:500;">
                    Tim Satgas
                </small>
            </div>
        </div>

    </div>
</div>

        <!-- STATS (Setiap balok diwarnai secara solid sesuai fungsionalitasnya) -->
        <div class="stats-grid">

    <!-- Total Laporan -->
    <div class="card t-tunggu">
        <div>
            <div class="card-label">Total Laporan</div>
            <div class="card-value">{{ $count['semua'] }}</div>
        </div>
        <div class="card-icon i-tunggu">
            <i class="fa-solid fa-folder"></i>
        </div>
    </div>

    <!-- Sedang Investigasi -->
    <div class="card t-proses">
        <div>
            <div class="card-label">Sedang Investigasi</div>
            <div class="card-value">{{ $count['Diproses'] }}</div>
        </div>
        <div class="card-icon i-proses">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

    <!-- Kasus Selesai -->
    <div class="card t-selesai">
        <div>
            <div class="card-label">Kasus Selesai</div>
            <div class="card-value">{{ $count['Selesai'] }}</div>
        </div>
        <div class="card-icon i-selesai">
            <i class="fa-solid fa-check-double"></i>
        </div>
    </div>

</div>

        <!-- SPLIT LAYOUT -->
        <div class="split-layout">
            
            <!-- ANTRIAN KASUS (Balok Warna Mint Soft) -->
            <div class="panel-box bg-antrian">
                <div class="panel-title">
                    Kasus Perlu Tindakan
                    <span>Menampilkan {{ $laporans->take(5)->count() }} teratas</span>
                </div>
                <div style="overflow-x: auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Klasifikasi Kasus</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    @foreach($laporanTeratas as $laporan)
    <tr>
        <td style="font-family: monospace; color:#60a5fa; font-weight:600;">
    {{ $laporan->kode_laporan }}
</td>

        <td>
            <b>{{ $laporan->jenis_kasus ?? 'Umum' }}</b>
        </td>

        <td>
            @if(in_array(strtolower($laporan->status), ['baru','menunggu','tunggu']))
                <span class="badge b-tunggu">Menunggu</span>
            @elseif(in_array(strtolower($laporan->status), ['diproses','diproses_satgas','proses']))
                <span class="badge b-proses">Investigasi</span>
            @else
                <span class="badge b-selesai">Selesai</span>
            @endif
        </td>
<td>
    <a href="{{ route('satgas.show', $laporan->id) }}" class="btn-action">
        Proses <i class="fa-solid fa-chevron-right"></i>
    </a>
</td>
    </tr>
    @endforeach
</tbody>
                    </table>
                </div>
            </div>

            <!-- PROPORSI KASUS (Balok Warna Sky-Blue Soft) -->
            <div class="panel-box bg-chart">
                <div class="panel-title">Metrik Produktivitas</div>
                <div class="chart-container">
                    <canvas id="satgasPieChart"></canvas>
                </div>
            </div>

        </div>

        <div class="footer">
            &copy; 2026 Tim Satgas PPKS - Politeknik Negeri Bengkalis
        </div>
    </div>

    <!-- CHART SCRIPT -->
   <script>
    const ctx = document.getElementById('satgasPieChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Menunggu', 'Investigasi', 'Selesai'],
            datasets: [{
                data: [
                    {{ $count['Menunggu'] }},
                    {{ $count['Diproses'] }},
                    {{ $count['Selesai'] }}
                ],
                backgroundColor: ['#d97706', '#2563eb', '#059669'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '80%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: '#374151',
                        boxWidth: 12,
                        padding: 20,
                        font: {
                            weight: '600'
                        }
                    }
                }
            }
        }
    });
</script>

<script>
    const notifBtn = document.getElementById("notifBtn");
    const notifDropdown = document.getElementById("notifDropdown");

    notifBtn.addEventListener("click", function(e){
        e.stopPropagation();
        notifDropdown.classList.toggle("show");
    });

    document.addEventListener("click", function(){
        notifDropdown.classList.remove("show");
    });
</script>

</body>
</html>
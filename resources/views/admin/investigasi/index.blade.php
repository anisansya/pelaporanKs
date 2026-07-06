<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Investigasi Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{ margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI',sans-serif; }
        body{ background:linear-gradient(135deg,#020617,#041c4d,#020617); color:white; min-height:100vh; overflow-x:hidden; }

        /* SIDEBAR */
        .sidebar{ position:fixed; left:0; top:0; width:280px; height:100vh; background:#030b2b; border-right:1px solid rgba(255,255,255,.05); padding:14px; z-index:100; }
        .logo{ display:flex; align-items:center; gap:12px; padding:10px; margin-bottom:35px; }
        .logo img{ width:48px; height:48px; }
        .logo-text h2{ color:white; font-size:22px; }
        .logo-text span{ color:#94a3b8; font-size:13px; }
        .menu{ display:flex; flex-direction:column; gap:8px; }
        .menu a{ display:flex; align-items:center; gap:15px; padding:16px 18px; border-radius:18px; text-decoration:none; color:#cbd5e1; transition:.3s; }
        .menu a:hover, .menu a.active{ background:linear-gradient(135deg,#2563eb,#3b82f6); color:white; }

        /* MAIN */
        .main{ margin-left:280px; padding:30px; }
        .header{ display:flex; justify-content:space-between; align-items:center; padding:25px 30px; border-radius:25px; background:rgba(255,255,255,.05); backdrop-filter:blur(15px); border:1px solid rgba(255,255,255,.08); margin-bottom:30px; }
        .stats{ display:grid; grid-template-columns:repeat(4,1fr); gap:20px; margin-bottom:30px; }
        .stat{ background:rgba(255,255,255,.04); backdrop-filter:blur(15px); border:1px solid rgba(255,255,255,.06); padding:22px; border-radius:20px; }
        .stat p{ color:#94a3b8; margin-bottom:10px; }
        .stat h1{ font-size:35px; }
        .stat-total h1{ color:#3b82f6; } .stat-wait h1{ color:#fbbf24; } .stat-success h1{ color:#34d399; } .stat-reject h1{ color:#f87171; }
        .search-box{ background:rgba(255,255,255,.04); padding:20px; border-radius:22px; margin-bottom:30px; display:flex; gap:15px; }
        input, select{ padding:14px 20px; border-radius:14px; background:rgba(255,255,255,.05); border:1px solid rgba(255,255,255,.08); color:white; flex:1; }
        option{ color:black; }
        .table-card{ background:rgba(255,255,255,.05); border-radius:30px; padding:30px; }
        table{ width:100%; border-collapse:collapse; }
        th{ background:rgba(37,99,235,.15); color:#60a5fa; padding:18px; text-align:left; }
        td{ padding:18px; border-bottom:1px solid rgba(255,255,255,.08); }
        .badge{ padding:7px 15px; border-radius:20px; font-size:12px; font-weight:bold; }
        .badge-menunggu{ background:rgba(245,158,11,.15); color:#fbbf24; }
        .badge-setuju{ background:rgba(16,185,129,.15); color:#34d399; }
        .badge-tolak{ background:rgba(239,68,68,.15); color:#f87171; }
        .actions{ display:flex; gap:10px; }
        .btn{ padding:10px 15px; border-radius:12px; color:white; text-decoration:none; font-size:13px; }
        .btn-blue{ background:#2563eb; }
        @media(max-width:768px){ .sidebar{ left:-280px; } .main{ margin-left:0; } .stats{ grid-template-columns:1fr; } }
    </style>
</head>

<body>
<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/logo-polbeng.png') }}">
        <div class="logo-text"><h2>PelaporanKS</h2><span>Admin Panel</span></div>
    </div>
    <div class="menu">
        <a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
        <a href="{{ route('admin.laporan.index') }}"><i class="fa-solid fa-file-lines"></i> <span>Laporan Masuk</span></a>
        <a href="{{ route('admin.investigasi.index') }}" class="active"><i class="fa-solid fa-folder-open"></i> <span>Hasil Investigasi</span></a>
        <a href="{{ route('admin.rekap') }}"><i class="fa-solid fa-print"></i> <span>Cetak Laporan</span></a>
        <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a>
    </div>
</div>

<div class="main">
    <div class="header">
        <div><h1>Hasil Investigasi</h1><p>Kelola dan verifikasi hasil investigasi Satgas PPKS</p></div>
    </div>

    <div class="stats">
        <div class="stat stat-total"><p><i class="fa-solid fa-folder"></i> Total</p><h1>{{ $laporans->count() }}</h1></div>
        <div class="stat stat-wait"><p><i class="fa-solid fa-clock"></i> Menunggu</p><h1>{{ $laporans->where('investigasi.status_investigasi','Menunggu Persetujuan Admin')->count() }}</h1></div>
        <div class="stat stat-success"><p><i class="fa-solid fa-circle-check"></i> Disetujui</p><h1>{{ $laporans->where('investigasi.status_investigasi','Disetujui Admin')->count() }}</h1></div>
        <div class="stat stat-reject"><p><i class="fa-solid fa-circle-xmark"></i> Ditolak</p><h1>{{ $laporans->where('investigasi.status_investigasi','Ditolak Admin')->count() }}</h1></div>
    </div>

    <div class="search-box">
        <input type="text" id="search" placeholder="🔍 Cari kode laporan atau judul...">
        <select id="filter">
            <option value="">Semua Status</option>
            <option value="Menunggu">Menunggu</option>
            <option value="Disetujui">Disetujui</option>
            <option value="Ditolak">Ditolak</option>
        </select>
    </div>

    <div class="table-card">
        <h2>Daftar Hasil Investigasi</h2>
        <table id="table">
            <thead>
                <tr><th>Kode</th><th>Judul</th><th>Status Investigasi</th><th>Tanggal</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @forelse($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->kode_laporan }}</td>
                    <td>{{ $laporan->judul }}</td>
                    <td>
                        @php $status = optional($laporan->investigasi)->status_investigasi; @endphp
                        @if($status == 'Disetujui Admin') <span class="badge badge-setuju">Disetujui</span>
                        @elseif($status == 'Ditolak Admin') <span class="badge badge-tolak">Ditolak</span>
                        @else <span class="badge badge-menunggu">Menunggu</span>
                        @endif
                    </td>
                    <td>{{ optional($laporan->investigasi)->tanggal_investigasi ? \Carbon\Carbon::parse($laporan->investigasi->tanggal_investigasi)->format('d M Y') : '-' }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.investigasi.show',$laporan->id) }}" class="btn btn-blue">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" align="center">Belum ada hasil investigasi.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script>
let search = document.getElementById('search');
let filter = document.getElementById('filter');
function cari(){
    let keyword = search.value.toLowerCase();
    let status = filter.value.toLowerCase();
    document.querySelectorAll("#table tbody tr").forEach(row=>{
        let text = row.innerText.toLowerCase();
        row.style.display = (text.includes(keyword) && (status==="" || text.includes(status))) ? "" : "none";
    });
}
search.addEventListener('keyup',cari);
filter.addEventListener('change',cari);
</script>
</body>
</html>
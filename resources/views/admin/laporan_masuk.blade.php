<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Masuk Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #020617, #041c4d, #020617);
            color: white;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: #030b2b;
            border-right: 1px solid rgba(255, 255, 255, .05);
            padding: 14px;
            z-index: 100;
        }

        /* LOGO */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            margin-bottom: 35px;
        }

        .logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .logo-text h2 {
            font-size: 22px;
            font-weight: 700;
            color: white;
        }

        .logo-text span {
            color: #94a3b8;
            font-size: 13px;
        }

        /* MENU (Disesuaikan Sesuai Permintaan) */
        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px 18px;
            border-radius: 18px;
            text-decoration: none;
            color: #cbd5e1;
            transition: .3s;
        }

        .menu a:hover,
        .menu a.active {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .menu i {
            width: 25px;
            text-align: center;
        }

        /* MAIN CONTAINER */
       .main{
    margin-left:280px;
    padding:30px;
    min-height:100vh;
    background:#f1f5f9;
}

        /* HEADER TOPBAR */
        .header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:25px 30px;
    border-radius:25px;
    background:#ffffff;
    border:1px solid #e2e8f0;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
    margin-bottom:30px;
}

.header h1{
    font-size:32px;
    font-weight:700;
    color:#0f172a;
}

.header p{
    margin-top:5px;
    color:#64748b;
}
        /* STATISTICS GRID */
        .stats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat{
    background:#ffffff;
    border:1px solid #e2e8f0;
    padding:22px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.05);
    transition:.3s;
}

.stat:hover{
    transform:translateY(-5px);
}

.stat p{
    font-size:14px;
    color:#64748b;
}

.stat h1{
    color:#0f172a;
}
        
        .stat-all h1 { color: #3b82f6; }
        .stat-wait h1 { color: #fbbf24; }
        .stat-process h1 { color: #60a5fa; }
        .stat-success h1 { color: #34d399; }
        .stat-reject h1 { color: #f87171; }

        /* SEARCH & FILTER */
        .search-box{
    background:#ffffff;
    border:1px solid #e2e8f0;
    box-shadow:0 8px 20px rgba(0,0,0,.05);
    padding:20px;
    border-radius:22px;
    margin-bottom:30px;
    display:flex;
    gap:15px;
}
        input,
        select {
        padding: 14px 20px;
        border-radius: 14px;
        border: 1px solid rgba(255,255,255,.08);
        background: #1e2b57;
        color: #ffffff;
        flex: 1;
        }

        select option {
        background: #ffffff;
        color: #000000;
        }

        /* TABLE */
        .table-card{
    background:#ffffff;
    border:1px solid #e2e8f0;
    border-radius:30px;
    padding:30px;
    box-shadow:0 8px 20px rgba(0,0,0,.05);
}

        table { width: 100%; border-collapse: collapse; }
        th{
    background:#dbeafe;
    color:#1d4ed8;
    padding:18px;
    font-weight:600;
}

td{
    padding:18px;
    color:#1e293b;
    border-bottom:1px solid #e2e8f0;
}

tr:hover{
    background:#f8fafc;
}
        
       .badge{
    padding:8px 16px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.badge-menunggu{
    background:#fef3c7;
    color:#b45309;
    border:1px solid #fcd34d;
}

.badge-proses{
    background:#dbeafe;
    color:#1d4ed8;
    border:1px solid #93c5fd;
}

.badge-selesai{
    background:#dcfce7;
    color:#15803d;
    border:1px solid #86efac;
}

.badge-ditolak{
    background:#fee2e2;
    color:#b91c1c;
    border:1px solid #fca5a5;
}

        .actions-cell{
    display:flex;
    gap:10px;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:9px 16px;
    border-radius:12px;
    text-decoration:none;
    color:#ffffff;
    font-size:13px;
    font-weight:500;
    transition:all .3s ease;
}

.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 6px 15px rgba(0,0,0,.15);
}

.btn-blue{
    background:#2563eb;
}

.btn-blue:hover{
    background:#1d4ed8;
}

.btn-green{
    background:#16a34a;
}

.btn-green:hover{
    background:#15803d;
}

        @media(max-width:768px) {
            .sidebar { left: -280px; }
            .main { margin-left: 0; padding: 20px; }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
            <div class="logo-text">
                <h2>PelaporanKS</h2>
                <span>Admin Panel</span>
            </div>
        </div>

        <div class="menu">
            <a href="{{route('admin.dashboard')}}">
                <i class="fa-solid fa-house"></i> <span>Dashboard</span>
            </a>
            <a href="{{route('admin.laporan.index')}}" class="active">
                <i class="fa-solid fa-file-lines"></i> <span>Laporan Masuk</span>
            </a>
            <a href="{{route('admin.investigasi.index')}}">
                <i class="fa-solid fa-folder-open"></i> <span>Hasil Investigasi</span>
            </a>
            <a href="{{ route('admin.cetak') }}">
                <i class="fa-solid fa-print"></i> <span>Cetak Laporan</span>
            </a>
            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="header">
            <div>
                <h1>Laporan Masuk</h1>
                <p>Kelola data dan validasi laporan pengguna kampus</p>
            </div>
        </div>

        <div class="stats">
            <div class="stat stat-all"><p><i class="fa-solid fa-folder"></i> Total</p><h1>{{$count['semua']}}</h1></div>
            <div class="stat stat-wait"><p><i class="fa-solid fa-clock"></i> Menunggu</p><h1>{{$count['Menunggu']}}</h1></div>
            <div class="stat stat-process"><p><i class="fa-solid fa-shield-halved"></i> Diproses</p><h1>{{$count['Diproses']}}</h1></div>
            <div class="stat stat-success"><p><i class="fa-solid fa-circle-check"></i> Selesai</p><h1>{{$count['Selesai']}}</h1></div>
            <div class="stat stat-reject"><p><i class="fa-solid fa-circle-xmark"></i> Ditolak</p><h1>{{$count['Ditolak']}}</h1></div>
        </div>

        <div class="search-box">
            <input type="text" id="search" placeholder="🔍 Cari token, judul, atau kata kunci...">
            <select id="filter">
                <option value="">Semua Status</option>
                <option value="Menunggu">Menunggu</option>
                <option value="Diproses">Diproses</option>
                <option value="Selesai">Selesai</option>
                <option value="Ditolak">Ditolak</option>
            </select>
        </div>

        <div class="table-card">
            <h2>Daftar Laporan Terkini</h2>
            <div class="table-responsive">
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Token</th>
                            <th>Judul Kasus</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporans as $l)
                        <tr>
                            <td><b>#{{$l->id}}</b></td>
                            <td style="font-family: monospace; color: #38bdf8;">{{$l->kode_laporan}}</td>
                            <td>{{$l->judul}}</td>
                            <td><span class="badge badge-{{ strtolower($l->status) }}">{{$l->status}}</span></td>
                            <td>{{$l->created_at->format('d M Y H:i')}}</td>
                            <td>
                                <div class="actions-cell">
                                    <a class="btn btn-blue" href="{{route('admin.laporan.show',$l->id)}}"><i class="fa-solid fa-eye"></i></a>
                                    <a class="btn btn-green" href="{{route('admin.laporan.verifikasi.form',$l->id)}}"><i class="fa-solid fa-user-check"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        let search = document.getElementById('search');
        let filter = document.getElementById('filter');
        function cari(){
            let keyword = search.value.toLowerCase();
            let status = filter.value.toLowerCase();
            document.querySelectorAll("#table tbody tr").forEach(row => {
                let text = row.innerText.toLowerCase();
                row.style.display = (text.includes(keyword) && (status === "" || text.includes(status))) ? "" : "none";
            });
        }
        search.addEventListener("keyup", cari);
        filter.addEventListener("change", cari);
    </script>
</body>
</html>
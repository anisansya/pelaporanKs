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
        .main {
            margin-left: 280px;
            padding: 30px;
        }

        /* HEADER TOPBAR */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 30px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, .08);
            margin-bottom: 30px;
        }

        .header h1 { font-size: 32px; font-weight: 700; }
        .header p { margin-top: 5px; color: #cbd5e1; }

        /* STATISTICS GRID */
        .stats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat {
            background: rgba(255, 255, 255, .04);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, .06);
            padding: 22px;
            border-radius: 20px;
            transition: .3s ease;
        }

        .stat:hover { transform: translateY(-4px); background: rgba(255, 255, 255, .07); }
        .stat p { font-size: 14px; color: #94a3b8; display: flex; align-items: center; gap: 8px; }
        .stat h1 { font-size: 36px; font-weight: 700; margin-top: 10px; }
        
        .stat-all h1 { color: #3b82f6; }
        .stat-wait h1 { color: #fbbf24; }
        .stat-process h1 { color: #60a5fa; }
        .stat-success h1 { color: #34d399; }
        .stat-reject h1 { color: #f87171; }

        /* SEARCH & FILTER */
        .search-box {
            background: rgba(255, 255, 255, .04);
            padding: 20px;
            border-radius: 22px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
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
        .table-card {
            background: rgba(255, 255, 255, .05);
            border-radius: 30px;
            padding: 30px;
        }

        table { width: 100%; border-collapse: collapse; }
        th { background: rgba(37, 99, 235, .15); color: #60a5fa; padding: 18px; text-align: left; }
        td { padding: 18px; border-bottom: 1px solid rgba(255, 255, 255, .08); }
        
        .badge { padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; text-transform: uppercase; }
        .badge-menunggu { background: rgba(245,158,11,.15); color: #fbbf24; }
        .badge-proses { background: rgba(59,130,246,.15); color: #60a5fa; }
        .badge-selesai { background: rgba(16,185,129,.15); color: #34d399; }
        .badge-ditolak { background: rgba(239, 68, 68, 0.15); color: #f87171; }

        .actions-cell { display: flex; gap: 10px; }
        .btn { padding: 9px 16px; border-radius: 12px; text-decoration: none; color: white; font-size: 13px; }
        .btn-blue { background: #2563eb; }
        .btn-green { background: #16a34a; }

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
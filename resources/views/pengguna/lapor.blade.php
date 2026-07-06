<!DOCTYPE html>

<html>

<head>

<title>Buat Laporan</title>


<style>

body{

font-family:Arial;
background:#e9f0f8;
padding:40px;

}


.container{

background:white;
max-width:600px;
margin:auto;
padding:30px;
border-radius:15px;
box-shadow:0 5px 20px #ddd;

}


input,textarea{

width:100%;
padding:12px;
margin-top:10px;

}


textarea{

height:150px;

}


button{

margin-top:20px;
padding:12px 30px;
background:#2563eb;
color:white;
border:0;
border-radius:8px;

}


a{

text-decoration:none;

}

</style>

</head>


<body>


<div class="container">


<h1>
Laporan Anonim
</h1>


<p>
Identitas pelapor tidak diperlukan
</p>



<form method="POST"
action="{{route('lapor.store')}}">

@csrf



<input
name="judul"
placeholder="Judul laporan">



<textarea
name="isi_laporan"
placeholder="Isi laporan"></textarea>




<input
name="lokasi"
placeholder="Lokasi kejadian">



<button>
Kirim Laporan
</button>


</form>



</div>


</body>

</html>
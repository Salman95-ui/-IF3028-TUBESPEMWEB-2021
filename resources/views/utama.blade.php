<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="/css/utama.css">
	<title>Utama Page</title>
</head>

<body>
	<div class="container">
		<h2>SIMPLE LAPOR!</h2>

		<div class="input-group">
			<input type="text" name="search" placeholder="Filter ..">
			<button>Search</button>
		</div>

		<div class="link">
			<small><a href="#">Buat Laporan/Komentar</a></small>
		</div>
		<div class="list">

			<div class="header">
				<p>Laporan/Komentar Terakhir</p>
				<hr>
			</div>

			@foreach($data as $DATA)
			<div class="list-item">
				<p>{{$DATA->komentar}}</p>

				<div class="list-nav">
					<span>{{$DATA->file}}</span>
					<span class="nav1">Waktu {{$DATA->waktu}} <a href="">Lihat Selengkapnya ></a></span>
				</div>

				<hr>
			</div>
			@endforeach
		</div>
	</div>
</body>

</html>
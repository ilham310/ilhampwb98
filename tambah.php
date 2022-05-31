<!DOCTYPE>
<html>

<head>
	<title>Belajar PHP | Tampilkan Data Identitas</title>
</head>

<body>
	<header>
		<h3>Tambah Identitas</h3>
	</header>
	<form action="proses_tambah.php" method="POST">
		<fieldset>
			<p>
				<label for="nama" >Nama: </label>
				<input type="text" name="nama" placeholder="nama lengkap" />
			</p>
			<p>
				<label for="alamat" >Alamat: </label>
				<textarea name="alamat"></textarea>
		    </p>
		    <p>

			     <label for="jk">Jenis Kelamin:</label>
			     <label><input type="radio" name="jk" value="laki-laki">Laki-Laki</label>
			     <label><input type="radio" name="jk" value="perempuan">Perempuan</label>
			</p>
			<p>
				<label for="no_telp">Nomor HP: </label>
				<textarea name="nomor"></textarea>
			</p>
			
			<p>
				<label for="kodepost">Kodepost:</label>
				<input type="text" name="kodepost" placeholder="kodepost" />
			</p>
			<p>
				<input type="submit" value="Daftar" name="daftar" />

		    </p>
		</fieldset>
	</form>
</body>
</html>

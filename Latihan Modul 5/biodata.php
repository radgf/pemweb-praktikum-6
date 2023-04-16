<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h2 align=center>Biodata Saya</h2>

	<?php
		// variabel biodata
		$nama = "Radhyana Gayatri Faradilla";
		$ttl = "Karanganyar, 10 Juni 2003";
        $jenis = "Perempuan";
		$alamat = "Jl Kedung Tarukan Baru I/8, Surabaya";
		$email = "radhyana.gayatri@gmail.com";
		$telepon = "0857 3051 8581";
        $hobi = "Memasak";
        $pendidikan = "S1 Sistem Informasi UPNVJT"
	?>

	<table align="center">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $ttl; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $jenis; ?></td>
		</tr>
        <tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><?php echo $telepon; ?></td>
		</tr>
        <tr>
			<td>Hobi</td>
			<td>:</td>
			<td><?php echo $hobi; ?></td>
		</tr>
        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><?php echo $pendidikan; ?></td>
        </tr>
	</table>
</body>
</html>
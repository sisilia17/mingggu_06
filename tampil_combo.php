<table border='1'>
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Prodi</th>
		<th>Angkatan</th>
	</tr>
	<?php
		include "koneksi.php";
		if(isset($_POST['prodi'])){
			$prodi=$_POST['prodi'];
		}else{
			$prodi='';
		}

		$hasil=mysqli_query($kon, "select * from mahasiswa where prodi='".$prodi."'order by nim asc");
		$no=0;
		while ($data = mysqli_fetch_array($hasil)):
			$no++;
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['prodi']; ?></td>
		<td><?php echo $data['angkatan']; ?></td>
	</tr>
		<?php endwhile;?>
</table>
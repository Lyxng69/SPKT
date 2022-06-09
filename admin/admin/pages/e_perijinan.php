<?php
include "koneksi.php";
	$id_perijinan = $_POST['id_perijinan'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$tmp_lahir = $_POST['tmp_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$no_telp= $_POST['no_telp'];
	$tujuan_kegiatan= $_POST['tujuan_kegiatan'];
	$waktu_kegiatan= $_POST['waktu_kegiatan'];
	$tempat_kegiatan= $_POST['tempat_kegiatan'];
	


			mysqli_query($conn,"UPDATE tbl_perijinan set nama='$nama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',no_telp='$no_telp',tujuan_kegiatan='$tujuan_kegiatan',waktu_kegiatan='$waktu_kegiatan',tempat_kegiatan='$tempat_kegiatan' where id_perijinan='$id_perijinan'");
		

			echo "<script>
				window.location='index.php?module=perijinan';
			</script>"

?>
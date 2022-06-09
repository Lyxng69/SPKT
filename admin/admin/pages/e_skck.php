<?php
include "koneksi.php";
	$id_skck = $_POST['id_skck'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$kebangsaan = $_POST['kebangsaan'];
	$agama = $_POST['agama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$masa= $_POST['masa'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$alamat = $_POST['alamat'];
	$pekerjaan= $_POST['pekerjaan'];
	$no_ktp= $_POST['no_ktp'];
	$keperluan= $_POST['keperluan'];
	$riwayat_sekolah= $_POST['riwayat_sekolah'];
	
$ket= $_POST['ket'];

		{
		

//echo "UPDATE barang set type_barang='$type_barang',id_ketegori='$id_kategori',ulasan='$ulasan',merk='$merk',berat='$berat',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_barang='$id_barang'";
			
			mysqli_query($conn,"UPDATE tbl_skck set nama='$nama',jenis_kelamin='$jenis_kelamin',kebangsaan='$kebangsaan',agama='$agama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',alamat='$alamat',pekerjaan='$pekerjaan',no_ktp='$no_ktp',keperluan='$keperluan',riwayat_sekolah='$riwayat_sekolah',keterangan='$ket',masa='$masa' where id_skck='$id_skck'");
		
			echo "<script>
				window.location='index.php?module=skck';
			</script>";
		}
	
?>
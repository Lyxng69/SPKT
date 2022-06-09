        <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
                            
	<?php
	include"../koneksi.php";
	?>

	<div id="daftar" style=" border: 1px solid black;">
<div class="tab-content">
<p align="center">&raquo;Input Data STNK&laquo;</p>
<table border="0px">
			<form method="post" class="form-group" action="tambah_stnk.php" enctype="multipart/form-data">
			<tr><td>No Registrasi</td> <td>:</td> <td><input name="no_registrasi" size="25" class="texbox"></td></tr>
			<tr><td>Nama</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
			<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat" cols="25" rows="3" size="25" class="texarea"></textarea></td></tr>
			<tr><td>Merk</td> <td>:</td><td><input name="merk" cols="25" rows="3" size="25" class="texbox"></td></tr>
			<tr><td>Type</td> <td>:</td><td><input name="type" cols="25" rows="3" size="25" class="texbox"></td></tr>
			<tr><td>Jenis</td> <td>:</td><td><input name="jenis" cols="25" rows="3" size="25" class="texbox"></td></tr>
			<tr><td>Model</td> <td>:</td> <td><input name="model" size="25" class="texbox"></td></tr>
			<tr><td>Tahun</td> <td>:</td> <td><input name="tahun" size="25" class="texbox"></td></tr>
			<tr><td>Isi Silinder</td> <td>:</td><td><input name="isi_silinder"  size="25" class="texbox"></td></tr>
			<tr><td>Warna</td> <td>:</td><td><input name="warna" size="25" class="texbox"></td></tr>
			<tr><td>Keterangan</td><td>:</td><td><select name="ket" class="texbox" value="<?php $_POST['keterangan']?>">
			<option value="pilih">--Pilih--</option>
			<option value="Baru">Baru</option>
			<option value="Perpanjang">Perpanjang</option>
			</select></td></tr>
			<tr><td><input type="submit" value="Kirim" class="button">
				<input type="hidden" name="act" value="add"></td></tr>
			</table>
			</form>
</div></blockquote>
                        </div>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
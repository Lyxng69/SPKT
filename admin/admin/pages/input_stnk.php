        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">STNK</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
	<?php
	include"koneksi.php";
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	Tambah STNK
	</div>
	<form method="post" class="form-group" action="?module=tambah_stnk" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="no_registrasi" placeholder="No Registrasi" class="form-control"><br>
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		<input type="text" name="merk" placeholder="Merk" class="form-control"><br>
		<input type="text" name="type" placeholder="Type" class="form-control"><br>
		<input type="text" name="jenis" placeholder="Jenis" class="form-control"><br>
		<input type="text" name="model" placeholder="Model" class="form-control"><br>
		<input type="text" name="tahun" placeholder="Tahun" class="form-control"><br>
		<input type="text" name="isi_silinder" placeholder="Isi Silinder" class="form-control"><br>
		<input type="text" name="warna" placeholder="Warna" class="form-control"><br>
		<td><select name="ket" placeholder="Keterangan" class="form-control">
			<option value="pilih">--Pilih--</option>
			<option value="Baru">Baru</option>
			<option value="Perpanjang">Perpanjang</option>
		</select></td></tr><br>
		<input type="date" name="masa" placeholder="Berlaku Sampai" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>

	</form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
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
$e=$_GET['id'];
$edit=mysqli_query($conn,"SELECT * FROM tbl_stnk WHERE id_stnk='$e'");
$book = mysqli_fetch_array($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit STNK
</div>
<form action="?module=e_stnk" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_stnk" class="form-control" value =" <?php  echo $book['id_stnk'];?>">

 		<b>No Registrasi :</b> <input type="text" name="no_registrasi" class="form-control" value =" <?php  echo $book['no_registrasi'];?>" ><br>
 		<b>Nama :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $book['nama'];?>" ><br>
		<b>Alamat : </b><input type="text" name="alamat" class="form-control" value =" <?php  echo $book['alamat'];?>"><br>
		<b>Merk : </b><input type="text" name="merk" class="form-control" value =" <?php  echo $book['merk'];?>" ><br>
		<b>Type : </b><input type="text" name="type" class="form-control" value =" <?php  echo $book['type'];?>" ><br>
 		<b>Jenis : </b><input type="text" name="jenis" class="form-control" value =" <?php  echo $book['jenis'];?>" ><br>
 		<b>Model : </b><input type="text" name="model" class="form-control" value =" <?php  echo $book['model'];?>" ><br>
 		<b>Tahun : </b><input type="text" name="tahun" class="form-control" value =" <?php  echo $book['tahun'];?>" ><br>
 		<b>Isi Silinder : </b><input type="text" name="isi_silinder" class="form-control" value =" <?php  echo $book['isi_silinder'];?>" ><br>
 		<b>Warna : </b><input type="text" name="warna" class="form-control" value =" <?php  echo $book['warna'];?>" ><br>
		<b>Keterangan : </b><input type="text" name="ket" class="form-control" value =" <?php  echo $book['keterangan'];?>" ><br>
		<b>Berlaku Sampai: </b><input type="date" name="masa" class="form-control" value ="<?php  echo $book['masa'];?>" ><br>
 		<td><input type="submit" class="btn btn-success" value="simpan">
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
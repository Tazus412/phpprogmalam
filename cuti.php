<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into cuti(nama,jabatan,departemen,sisa_cuti,mulai_tanggal,masuk_kembali,alamat_selama_cuti,alasan_cuti)
values(
'".$_POST['nama']."',
'".$_POST['jabatan']."',
'".$_POST['departemen']."',
'".$_POST['sisa_cuti']."',
'".$_POST['mulai_tanggal']."',
'".$_POST['masuk_kembali']."',
'".$_POST['alamat_selama_cuti']."',
'".$_POST['alasan_cuti']."')");

if($query_input){
header('location:view_cuti.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="index1.php" class="btn btn-danger">MENU</a>
<table class="table table-bordered" border="">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" class="form-control"></td>
	</tr>
	<tr>
		<td>Departemen</td>
		<td><input type="text" name="departemen" class="form-control"></td>
	</tr>
	<tr>
		<td>Sisa Cuti</td>
		<td><input type="text" name="sisa_cuti" class="form-control"></td>
	</tr>
	<tr>
		<td>Mulai Tanggal</td>
		<td><input type="date" name="mulai_tanggal" class="form-control"></td>
	</tr>
	<tr>
		<td>Masuk Kembali</td>
		<td><input type="date" name="masuk_kembali" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat Selama Cuti</td>
		<td><input type="text" name="alamat_selama_cuti" class="form-control"></td>
	</tr>
	<tr>
		<td>Alasan Cuti</td>
		<td><input type="text" name="alasan_cuti" class="form-control"></td>
	</tr>

		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
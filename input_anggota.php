<?php 
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into anggota(nama,alamat,no_telepon)
values(
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_telepon']."')");

if($query_input){
header('location:view_anggota.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered"border="1">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td><input type="text" name="no_telepon" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
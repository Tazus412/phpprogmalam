<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from cuti");

?>
</br>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<a href="cuti.php" class="btn btn-danger">Tambah Anggota</a>
<a href="index1.php" class="btn btn-danger">Menu</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Departemen</td>
        <td>Sisa Cuti</td>
        <td>Mulai Tanggal</td>
        <td>Masuk Kembali</td>
        <td>Alamat Selama Cuti</td>
        <td>Alasan Cuti</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><?php echo $tampil ['jabatan'];?></td>
        <td><?php echo $tampil ['departemen'];?></td>
        <td><?php echo $tampil ['sisa_cuti'];?></td>
        <td><?php echo $tampil ['mulai_tanggal'];?></td>
        <td><?php echo $tampil ['masuk_kembali'];?></td>
        <td><?php echo $tampil ['alamat_selama_cuti'];?></td>
        <td><?php echo $tampil ['alasan_cuti'];?></td>
    </tr>
<?php } ?>
</tale>
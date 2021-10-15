
<?php

$server="localhost";
$user="root";
$password="";
$database="phpprogmalam";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
echo "Koneksi Sukses";
}else{
echo "koneksi gagal";
}

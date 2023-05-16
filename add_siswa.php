<<?php 
include 'koneksi.php';
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$ttl  = $_POST['ttl'];
$no_hp  = $_POST['no_hp'];
$tgl_masuk  = $_POST['tgl_masuk'];


$tambah = mysqli_query($koneksi,"insert into tbl_siswa values (NULL,'$nama','$ttl','$alamat','$no_hp','$tgl_masuk',1500000,500000,100000)");

if($tambah == true){
	header("location:siswa.php?alert=berhasil");
}else{
	header("location:siswa.php?alert=gagal");	
}



?>
<<?php 
include 'koneksi.php';
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$no_hp  = $_POST['no_hp'];


$tambah = mysqli_query($koneksi,"insert into tbl_guru values (NULL,'$nama','$alamat','$no_hp')");

if($tambah == true){
	header("location:guru.php?alert=berhasil");
}else{
	header("location:guru.php?alert=gagal");	
}



?>
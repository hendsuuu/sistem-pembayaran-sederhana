<<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$no_hp  = $_POST['no_hp'];

$tambah = mysqli_query($koneksi,"update tbl_guru set nama_guru='$nama',alamat='$alamat',no_hp='$no_hp' where id='$id'");
if($tambah == true){
	header("location:guru.php?alert=berhasil");
}else{
	header("location:guru.php?alert=gagal");	
}



?>
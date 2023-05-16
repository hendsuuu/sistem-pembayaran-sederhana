<?php 
include 'koneksi.php';
$id  = $_GET['id'];

$hapus=mysqli_query($koneksi, "delete from tbl_guru where id='$id'");
if($hapus){
	header("location:guru.php?alert=berhasilhapus");
}else{
	header("location:guru.php?alert=gagal");	
}

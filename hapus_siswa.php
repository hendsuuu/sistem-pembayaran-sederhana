<?php 
include 'koneksi.php';
$id  = $_GET['id'];

$hapus=mysqli_query($koneksi, "delete from tbl_siswa where id='$id'");
if($hapus){
	header("location:siswa.php?alert=berhasilhapus");
}else{
	header("location:siswa.php?alert=gagal");	
}

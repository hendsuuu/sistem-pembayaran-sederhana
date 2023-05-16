<<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama  = $_POST['nama'];
$alamat  = $_POST['alamat'];
$ttl  = $_POST['ttl'];
$no_hp  = $_POST['no_hp'];
$tgl_masuk  = $_POST['tgl_masuk'];
$spp  = $_POST['spp'];
$pendaftaran  = $_POST['pendaf'];

$tambah = mysqli_query($koneksi,"update tbl_siswa set nama='$nama',ttl='$ttl',alamat='$alamat',no_hp='$no_hp',tgl_masuk='$tgl_masuk',spp='$spp',pendaftaran='$pendaftaran' where id='$id'");
if($tambah == true){
	header("location:siswa.php?alert=berhasil");
}else{
	header("location:siswa.php?alert=gagal");	
}



?>
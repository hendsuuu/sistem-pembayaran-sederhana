<<?php 
include 'koneksi.php';
$id = $_POST['id'];
$ket = $_GET['ket'];

$bayar  = $_POST['bayar'];
$spp  = $_POST['spp'];
$pendaftaran  = $_POST['pendaftaran'];

if($ket == "spp"){
    if($spp>0){
        $spp = $spp - $bayar;
        if($spp < 0){
            $spp = 0;
        }
    }

    $tambah = mysqli_query($koneksi,"update tbl_siswa set spp='$spp' where id='$id'");
    if($tambah == true){
        header("location:siswa.php?alert=berhasil");
    }else{
        header("location:siswa.php?alert=gagal");	
    }
}
else{
    if($pendaftaran>0){
        $pendaftaran = $pendaftaran - $bayar;
        if($pendaftaran < 0){
            $pendaftaran = 0;
        }
    }
    $tambah = mysqli_query($koneksi,"update tbl_siswa set pendaftaran='$pendaftaran' where id='$id'");
    if($tambah == true){
        header("location:pendaftaran.php?alert=berhasil");
    }else{
        header("location:pendaftaran.php?alert=gagal");	
    }
}





?>
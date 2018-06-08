<?php
require_once("connect.php");
$set = $_GET['set'];
$id = $_GET['id'];
switch($set){
	case 'admin':
	$hapus = mysqli_query($link,"DELETE FROM admin WHERE id_admin='$id'");
	if($hapus){
		echo "<script>";
		echo "alert('Data Berhasil Dihapus!');";
		echo "location='tabel-admin.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('Data GAGAL Dihapus!');";
		echo "location='tabel-admin.php';";
		echo "</script>";
	}
	break;
	case 'pegawai':
	$hapus = mysqli_query($link,"DELETE FROM pegawai WHERE id_pegawai='$id'");
	if($hapus){
		echo "<script>";
		echo "alert('Data Berhasil Dihapus!');";
		echo "location='tabel-pegawai.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('Data GAGAL Dihapus!');";
		echo "location='tabel-pegawai.php';";
		echo "</script>";
	}
	break;
	case 'surat_tugas':
	$ha = mysqli_query($link,"DELETE FROM detail_surattugas WHERE id_st='$id'");
	$hapus = mysqli_query($link,"DELETE FROM surat_tugas WHERE id_st='$id'");
	if($hapus){
		echo "<script>";
		echo "alert('Data Berhasil Dihapus!');";
		echo "location='tabel-surat-tugas.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('Data GAGAL Dihapus!');";
		echo "location='tabel-surat-tugas.php';";
		echo "</script>";
	}
	break;
	case 'provinsi':
	$hapus = mysqli_query($link,"DELETE FROM provinsi WHERE id_provinsi='$id'");
	if($hapus){
		echo "<script>";
		echo "alert('Data Berhasil Dihapus!');";
		echo "location='tabel-provinsi.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('Data GAGAL Dihapus!');";
		echo "location='tabel-provinsi.php';";
		echo "</script>";
	}
	break;
	case 'kota':
	$hapus = mysqli_query($link,"DELETE FROM kota WHERE id_kota='$id'");
	if($hapus){
		echo "<script>";
		echo "alert('Data Berhasil Dihapus!');";
		echo "location='tabel-kota.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('Data GAGAL Dihapus!');";
		echo "location='tabel-kota.php';";
		echo "</script>";
	}
	break;
	
	
}
?>
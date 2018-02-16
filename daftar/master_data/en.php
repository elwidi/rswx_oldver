<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$KodeKelas = $_GET["KodeKelas"];
$NamaKelas = $_GET["NamaKelas"];
$Tarif = $_GET["Tarif"];
$JasaSarana = $_GET["JasaSarana"];
$JasaMedik = $_GET["JasaMedik"];
$JasaPerawat = $_GET["JasaPerawat"];
 
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
    //---
	if($KodeKelas==''){
	echo "HARAP ISIKAN KODE KELAS";
	}elseif($NamaKelas==''){
	echo "HARAP ISIKAN NAMA KELAS";
	}else{
	$TglJam = date("d.m.Y:H:i:s");
	   $simp = mysql_query("INSERT INTO  `kelas` 
	   (`id`, `KodeKelas`, `NamaKelas`, `Tarif`, `JasaSarana`, `JasaMedik`, `JasaPerawat`, `Opr`, `TglJam`) 
	   VALUES (NULL, '$KodeKelas','$NamaKelas','$Tarif',
	   '$JasaSarana','$JasaMedik','$JasaPerawat','$a[Nama]','$TglJam')");
	   if($simp){
	   header("Location:./se.php");
	   }else{
	   echo "SIMPAN DATA GAGAL";
	   }
	}
}else{
header("Location:../keluar.php");
}
?>

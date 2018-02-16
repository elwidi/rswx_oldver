<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$KodeKelas = $_GET["KodeKelas"];
$NamaKelas = $_GET["NamaKelas"];
$Tarif = $_GET["Tarif"];
$JasaMedik = $_GET["JasaMedik"];
$JasaPerawat = $_GET["JasaPerawat"];
$JasaSarana = $_GET["JasaSarana"];
 
$kaaja_dkfj = mysql_query("SELECT * FROM kelas WHERE id='$id'");
$ii = mysql_fetch_array($kaaja_dkfj);
if(!$ii[id]){
header("Location:./se.php");
}
$TglJam = date("d-m-Y.H:i:s");
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
 $simp = mysql_query("UPDATE  `kelas` SET `KodeKelas` =  '$KodeKelas',
`NamaKelas` = '$NamaKelas',
`Tarif` = '$Tarif',
`JasaSarana` = '$JasaSarana',
`JasaMedik` = '$JasaMedik',
`JasaPerawat` = '$JasaPerawat',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `kelas`.`id` =$id");
if($simp){
header("Location:./se.php");
}else{
echo "simpan data gagal";
}
 }else{
 header("Location:../keluar.php");
 }
?>

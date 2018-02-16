<?
session_start();
include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
if($a[Level]==12){
$Tgl=date("d.m.Y");
$Jam=date("H:i:s");
  $gatr = mysql_query("UPDATE `tabelbiayax` SET `Kelompok1` = '$Kelompok1',
`Kelompok2` = '$Kelompok2',
`Kelompok3` = '$Kelompok3',
`Opr` = '$a[id]',
`Tgl` = '$Tgl',
`Jam` = '$Jam' WHERE `id` ='$id'");
 if($gatr){
header("Location:../keluar2.php");
 }else{
 echo "SIMPAN DATA GAGAL,....<br>";
 }
 }

?>
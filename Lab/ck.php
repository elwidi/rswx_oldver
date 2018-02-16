<?php 
session_start();
include "../konek.php";
include "../ceke.php";$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $gatr = mysql_query("DELETE FROM  tabelbiayax WHERE id='$id'");
 if($gatr){
 header("Location:./makan_gemblong.php");
 }else{
 echo "HAPUS DATA GAGAL";
 }
 }else{
 header("Location:../keluar.php");
 }
 ?>

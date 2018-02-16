<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jkjk_jbnjknkjn = mysql_query("SELECT * FROM datapasien WHERE id='$IdPasien'");
$pp = mysql_fetch_array($jkjk_jbnjknkjn);

$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id] || !$pp[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d.m.Y-H:i:s");
 $simpn = mysql_query("INSERT INTO 
 `pj_rajal` (`id`, `IdPj`, `RmPj`, `NamaPj`, `IdRajal`, `RmRajal`, `NamaRajal`, `IdOpr`, `Opr`, `TglJam`, `Keterangan`)
  VALUES (NULL, '$IdPasien', '$pp[NoPasien]', '$pp[NamaPasien]', '$id', '$uu[NoPasien]', '$uu[NamaPasien]', '$a[id]', 
  '$a[Nama]', '$TglJam', '$Keterangan')");
  header("Location:./ed_d.php?NoPasien=$uu[NoPasien]&ade=3");
}?>
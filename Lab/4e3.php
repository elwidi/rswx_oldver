<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$z = $ii;
if(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){

	$ndsa = "$z[id].$z[RegId]";
	$djkdjkdfd = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
$ads = mysql_query("SELECT COUNT(id) as jj FROM txnjalan2 WHERE RegId='$ii[RegId]'");
$bx = mysql_fetch_array($ads);
//
 if($bx[jj]>0 && $bala==1){
//
 $KeyID=date("d").date("m")."-".date("Y");
//
$kiakaik = mysql_query("SELECT NoUrut FROM urutanlab  where KeyID='$KeyID' ORDER BY id DESC");
$p = mysql_fetch_array($kiakaik);
//
$NoUrut=$p[NoUrut]+1;
$RegId="$id.$z[RegId]";
$TglJam=date("d.m.Y-H:i:s");
  
 $isikpao = mysql_query("INSERT INTO  `urutanlab` (`id`,`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`
 , `Tgl`, `Bln`, `Thn`)
 VALUES ('NULL','RJ.$id', '$KeyID', '$NoUrut', '$RegId', '$z[NoPasien]', '$z[NamaPasien]', '$TglJam', '$a[Nama]','$z[TglMasuk]','$z[BlnMasuk]','$z[ThnMasuk]')");
 echo "INSERT INTO  `urutanlab` (`id`,`IdPasien`, `KeyID`, `NoUrut`, `RegId`, `NoPasien`, `NamaPasien`, `TglJam`, `Opr`
 , `Tgl`, `Bln`, `Thn`)
 VALUES ('NULL','RJ.$id', '$KeyID', '$NoUrut', '$RegId', '$z[NoPasien]', '$z[NamaPasien]', '$TglJam', '$a[Nama]','$z[TglMasuk]','$z[BlnMasuk]','$z[ThnMasuk]')"; }
 

 }
header("Location:./4e.php?id=$id");
?>
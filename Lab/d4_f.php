<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$IdDetil=$_GET["IdDetil"];
$dimas = $_GET["dimas"];
$NoBukti=$_GET["NoBukti"];
if($dimas=='ela'){
$ujs = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
}else{
 $ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
 }
 $ii = mysql_fetch_array($ujs);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
if($dimas=='ela'){
$de = mysql_query("DELETE FROM cetak_hasil_labinap WHERE IdAsal='$IdDetil'");
}else{
$de = mysql_query("DELETE FROM cetak_hasil_lab WHERE IdAsal='$IdDetil'");
}
if($de){
	 if($dimas=='ela'){
	 $ded = mysql_query("DELETE FROM txninap2 WHERE id='$IdDetil'");
	 }else{
	 $ded = mysql_query("DELETE FROM txnjalan2 WHERE id='$IdDetil'");
	 }
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="3wzx.php?NoBukti=<? echo $NoBukti; ?>&dimas=<? echo $dimas; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()"></body>
	</html>
	<?
}
}
?>

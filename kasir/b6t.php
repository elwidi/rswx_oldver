<?php
session_start();
include "../konek.php";
include "../hari.php";
include "../ceke.php";
$iin = $_GET["iin"];
$dimas = $_GET["dimas"];
$hasil = $_GET["hasil"];
$tres = $_GET["tres"];
  $id = $_GET [ "id" ];
  $NamaBarang = $_GET["NamaBarang"];
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
$pcah = explode("-",$x[transferKe]);
if(!$x[id]){
header("Location:../keluar2.php");
}else{
$TglKeluar=date("d-m-Y");
$JamKeluar=date("H:i:s");
 	$upda = mysql_query("UPDATE keluarmasukpasien SET TglKeluar='$TglKeluar',JamKeluar='$JamKeluar' WHERE id='$id'");
	$usksj = mysql_query("UPDATE ruangan SET stat=0 WHERE id='$pcah[0]'");
if($ela=='anakku'){
header("Location:../Daftar/fito_sayangku.php");
}else{?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c0p.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
<? } ?>
<?
}
?>
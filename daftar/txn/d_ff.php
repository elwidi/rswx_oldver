<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="3wmj.php?IdDetil=<? echo $IdDetil; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<? 
}
?>

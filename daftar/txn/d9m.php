<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
 $jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
 if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ws3.php?IdDokter=<? echo $IdDokter; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
}
?>
<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$mas = $_GET["mas"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
if($mas=='mitra'){
$mj = mysql_query("UPDATE keluarmasukpasien SET materai=0 where id='$id'");
}else{
 $mj = mysql_query("UPDATE keluarmasukpasien SET materai=1 where id='$id'");
 }
if($mj){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="4em.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
}
}
?>
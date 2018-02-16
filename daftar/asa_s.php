<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$kdjkl = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$bb = mysql_fetch_array($kdjkl);
if(!$bb[id]){
header("Location:../keluar2.php");
}else{
$kdjkl = mysql_query("DELETE FROM rwtjalan_pesan WHERE id='$id'");
} ?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xxs_d.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html> 
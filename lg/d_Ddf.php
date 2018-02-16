<?php 
session_start();
include "../konek.php";
include "../ceke.php";

$uo = mysql_query("UPDATE stok_opm SET Stat=1 WHERE Stat=0");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sa1.php?kakang=<? echo $kakang; ?>&IdObat=<? echo $IdObat; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
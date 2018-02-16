<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$kp = mysql_fetch_array($ada);
if(!$kp[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{ 
 //
$ip = mysql_query("DELETE FROM   `cetak_lab`   WHERE `cetak_lab`.`IdPasien` =$id");
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xs_099.php?akan=11&fito=<? echo $id; ?>&ak=1";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>
<?
}
?>
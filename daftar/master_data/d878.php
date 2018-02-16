<?
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$NamaDokter = $_GET["NamaDokter"];
$hari = $_GET["hari"];
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="e3ee.php?hari=<? echo $hari; ?>&NamaDokter=<? echo $NamaDokter; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<? 
}
?>

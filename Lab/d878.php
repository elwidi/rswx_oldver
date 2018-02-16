<?
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==12){
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

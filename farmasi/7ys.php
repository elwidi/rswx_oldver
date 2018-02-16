<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="n185.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>
<?
}
?>
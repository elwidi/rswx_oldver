<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjf_dfdfdfd  = mysql_query("SELECT * FROM judul_anc WHERE id=1");
$dapa =  mysql_fetch_array($kjf_dfdfdfd);
if($a[Level]==9){
$TglJam=date("d.m.Y-H:i:s");
$upda = mysql_query("UPDATE judul_anc SET NamaBps='$NamaBps',Wilayah='$Wilayah',Opr='$a[User]',TglJam='$TglJam'
WHERE id='1'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="x012_s.php?id=<? echo $id; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
}
?>
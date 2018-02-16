<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
if($a[Level]==9){
$jhjdhkdfd = mysql_query("SELECT * FROM icd_ri2 WHERE id='$IdDetil'");
}else{
$jhjdhkdfd = mysql_query("SELECT * FROM icd_ri WHERE id='$IdDetil'");
}
$ya = mysql_fetch_array($jhjdhkdfd);
if(!$ya[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
if($a[Level]==9){
$dele = mysql_query("DELETE FROM icd_ri2 WHERE id='$IdDetil'");
}else{
$dele = mysql_query("DELETE FROM icd_ri WHERE id='$IdDetil'");
}
if($dele){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="09.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<?
}

}?>

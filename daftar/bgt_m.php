<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaDokter  = $_GET["NamaDokter"];
$IdPenjamin = $_GET["IdPenjamin"];
 $NamaPenjamin = $_GET["NamaPenjamin"];
$id = $_GET["id"];
$NamaPoli = $_GET["NamaPoli"];
$IdDokter = $_GET["IdDokter"];
$NamaRujukan = $_GET["NamaRujukan"];
$IdRujukan = $_GET["IdRujukan"];

$IdDept = $_GET["IdDept"];

if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="s23.php?IdDept=<? echo $IdDept; ?>&IdPenjamin=<? echo $IdPenjamin; ?>&NamaDokter=%&id=<? echo $id; ?>&IdDokter=<? echo $IdDokter; 
?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<? 
}
?>

<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$is87_08 = mysql_query("SELECT * FROM  stok_opm WHERE id='$id'");
$bp = mysql_fetch_array($is87_08);
if(!$bp[id]){
header("Location:../keluar2.php");
}else{
$d9dk = mysql_query("DELETE FROM stok_opm WHERE id='$id'");
if($d9dk){
?>
<html>
<head>
<SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="x109.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT>  </head>
<body onload="win44()"></body>
</html>
<?
} }
?>
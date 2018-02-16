<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
//
$kikik = mysql_query("SELECT * FROM materai WHERE id='$IdDetil'");
$oo = mysql_fetch_array($kikik);
if(!$oo[id]){
header("Location:../../keluar2.php");
}elseif(!$x[id]){
header("Location:../../keluar2.php");
}else{
	$del = mysql_query("Delete from  materai WHERE id='$IdDetil'");
	if($del){
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="e30.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onload="win44()">
	
	</body>
	</html>
	<?
	}
}?>

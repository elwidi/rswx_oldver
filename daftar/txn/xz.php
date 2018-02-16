<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
////////////////////
$LFKLGFKG = mysql_query("SELECT * FROM tambahdokter WHERE id='$IdDetil'");
$ud = mysql_fetch_array($LFKLGFKG);
if(!$ud[id]){
header("Location:../../keluar2.php");
}elseif(!$x[id]){
header("Location:../../keluar2.php");
}else{
 $dek = mysql_query("DELETE FROM tambahdokter WHERE id='$IdDetil'");
 if($dek){
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="8uu.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()"></body>
 </html>
 <?
 }
}
?>
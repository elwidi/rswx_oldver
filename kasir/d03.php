<?
session_start();
include "../salaman.php";
 include "../konek.php";
 $frl = mysql_query("DELETE FROM vaksin_pasien where id=$id");
 if($frl){
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="v0s.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onload="win44()"></body>
 </html>
 <?
 }else{
 echo "DELETE DATA GAGAL";
 }
 ?>
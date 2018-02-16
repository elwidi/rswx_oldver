<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $Bus = mysql_query("SELECT * FROM txnrad WHERE id=$hari");
$x = mysql_fetch_array($Bus);
 $JJHDFDF_K = mysql_query("SELECT * FROM txnjalan WHERE id='$IdDetil'");
$hh = mysql_fetch_array($JJHDFDF_K);
if(!$hh[id] || !$x[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==16){
 $JJHDFDFddd_K = mysql_query("DELETE FROM txnjalan WHERE id='$IdDetil'");
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="x_0099.php?RegId=<? echo $x[RegId]; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onload="win44()"></body>
 </html><?
}
?>
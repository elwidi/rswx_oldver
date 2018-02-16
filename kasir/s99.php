<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh= mysql_fetch_array($jdfd);
 if(!$hh[id]){
header("Location:../keluar2.php");
}else{
if($x==12){
$dfidjfdjk = mysql_query("DELETE FROM txnjalan where id='$IdDetil'");
 }else{
 $dfidjfdjk = mysql_query("DELETE FROM txnugd where id='$IdDetil'");
 } 
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ug.php?id=<? echo $id;  ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()">
 
 </body>
 </html>
 <?
}
?>
<?
session_start();
include "../konek.php";
include "../salaman.php";
 //
 
 //
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$usij = mysql_query("SELECT * FROM podetil77 WHERE id='$Detil'");
 $kk = mysql_fetch_array($KDJFKDJFKD); 
 //
$yu= mysql_fetch_array($usij);

//
 if(!$yu[id]){
header("Location:../keluar2.php");
}elseif(!$kk[id]){
header("Location:../keluar2.php");
}else{
 $kdjfd = mysql_query("DELETE FROM podetil77 WHERE id='$Detil'");
 ?><html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cc0d9d.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onload="win44()">
 
 </body>
 </html><?
}
?>
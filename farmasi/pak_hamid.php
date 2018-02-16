<?
session_start();
 include "../konek.php";
include "../ceke.php";
if($dik_dimas[duapuluh]!=1 && $a[Level]==11 || $dik_dimas[duapuluh]!=1 && $a[Level]==6){
 echo "AKSES TIDAK DIIJINKAN ADMIN";
}else{
if($a[Level]==98){
$datat = mysql_query("SELECT * FROM supplier3 WHERE id='$id'");
}elseif($a[Level]==6){
$datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
}else{
$datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
}
$xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:./kompor.php");
}
if($a[Level]==98){
$datatsss = mysql_query("DELETE FROM supplier3 WHERE id='$id'");
}elseif($a[Level]==6){
$datatsss = mysql_query("DELETE FROM supplier2 WHERE id='$id'");
}else{
$datatsss = mysql_query("DELETE FROM supplier WHERE id='$id'");
}
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cdd_dp.php";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()"></body>
 
 </html>
 <? } ?>
<?
session_start();
include "../konek.php";
include "../ceke.php";
$badak = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$b = mysql_fetch_array($badak);
if(!$b[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==1){
$updaha = mysql_query("UPDATE `rwtjalan_pesan` SET `TglMasuk` = '$TglMasuk',
`BlnMasuk` = '$BlnMasuk',
`ThnMasuk` = '$ThnMasuk',
`Operator` = '$a[User]' WHERE `rwtjalan_pesan`.`id` ='$id'");}
 ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c3ss.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onload="win44()">
 
 </body>
 </html>
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdfd_Dfdfdf = mysql_query("SELECT * FROM tarif WHERE id='$id'");
$ii = mysql_fetch_array($kjdfd_Dfdfdf);
 if(!$ii[id]){
 echo "RECORD SET TIDAK LENGKAP";
 }elseif($FiLaDim[a3]!='on'){
 echo "ANDA TIDAK BERHAK AKSES HALAMAN INI";
 }elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112  || $a[Level]==16    || $a[Level]==22){
$kjdfd_Dfdfddfdffdf = mysql_query("delete  FROM tarif WHERE id='$id'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="dd_ddd.php";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<? 
  } 
 ?>
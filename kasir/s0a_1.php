<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
///
$kdjfdD= mysql_query("SELECT * FROM anc WHERE IdPasien='$id'");
$ph = mysql_fetch_array($kdjfdD);
if(!$ph[id]){
echo "RECORD SET TIDAK DIKENAL,....<br>";
}else{
 $dkdl_Dfd = mysql_query("DELETE FROM anc WHERE IdPasien='$id'");
 $dkdl_Dfddd = mysql_query("DELETE FROM anc_2 WHERE IdPasien='$id'");
 $dkdl_Dfddfdfdd = mysql_query("DELETE FROM anc_nw WHERE IdPasien='$id'");
  
 
}?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sm_d.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html> 
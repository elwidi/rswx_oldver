<?
session_start();
include "../ceke.php";
include "../konek.php";
 ///
$kdjfdD= mysql_query("SELECT * FROM kb WHERE id='$id'");
$ph = mysql_fetch_array($kdjfdD);
if(!$ph[id]){
echo "RECORD SET TIDAK DIKENAL,....<br>";
}else{
 $dkdl_Dfd = mysql_query("DELETE FROM kb WHERE id='$id'");
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sm_d.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html> <?  
}?>
 
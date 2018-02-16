<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$kdjfkdjfkd = mysql_query("SELECT * FROM TarifRad WHERE id='$id'");
$ii = mysql_fetch_array($kdjfkdjfkd);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
	$del = mysql_query("DELETE FROM TarifRad WHERE id='$id'");
	?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xas.php?NamaBiaya=<? echo $NamaBiaya; ?>&ha=<? echo $ha; ?>&se=<? echo $se; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html><?
}
 ?>
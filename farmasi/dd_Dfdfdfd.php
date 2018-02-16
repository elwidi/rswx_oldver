<?
session_start();
include "../konek.php";
include "../ceke.php";
 $KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
$ii = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP,.....<br>";
}else{
 $ipd = mysql_query("UPDATE polog77x SET Stap=$CaraBayar,Ppn='$Ppn' WHERE id='$id'");
}?>
<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="nnnnnn.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	
	</body>
	</html>

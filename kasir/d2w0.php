<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php"; 
 $kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
$ISKSJS = mysql_query("SELECT * FROM jasalayan WHERE id='$Detil'");
$up = mysql_fetch_array($ISKSJS);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif(!$ii[id]){
header("Location:../keluar2.php");
}else{
	$upda = mysql_query("UPDATE jasalayan SET Nilai=0,Nilai2=0 WHERE id='$Detil'");
	if($upda){
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="D3S.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onload="win44()">
	
	</body>
	</html> 
	<?
	}
}
?> 
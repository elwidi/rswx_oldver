<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
	$simp = mysql_query("UPDATE oder_2 SET Stat=1 WHERE id='$id'");
	if($simp){
	$reke= mysql_query("UPDATE oder_2detil SET Stat=1 WHERE IdTxn='$id'");
	if($reke){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="C98.php?id=<? echo $id; ?>&ukur=<? echo $ukur; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<?	}else{
	echo "PROSES KIRIM DATA TIDAK SEMPURNA,.. SILAHKAN HUBUNGI ADMIN";
	}
	}
	
}
 ?>
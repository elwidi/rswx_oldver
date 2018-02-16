<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
	$simp = mysql_query("UPDATE oder_1 SET Stat=1 WHERE id='$id'");
	if($simp){
	$reke= mysql_query("UPDATE oder_1detil SET Stat=1 WHERE IdTxn='$id'");
	if($reke){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sa1.php?IdObat=<? echo $IdObat; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?	}else{
	echo "PROSES KIRIM DATA TIDAK SEMPURNA,.. SILAHKAN HUBUNGI ADMIN";
	}
	}
	
}
 ?>
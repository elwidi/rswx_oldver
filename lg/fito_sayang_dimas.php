<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND Stat=1");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id] || $a[Level]!=6){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
	$simp = mysql_query("UPDATE oder_2 SET Stat=2 WHERE id='$id'");
	if($simp){
	$reke= mysql_query("UPDATE oder_2detil SET Stat=2 WHERE IdTxn='$id'");
	if($reke){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="z6t.php?dimas=fito&id=<? echo $id; ?>";
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
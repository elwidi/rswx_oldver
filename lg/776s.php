<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND Stat>=1");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
//
$k9kj_dfd = mysql_query("SELECT * FROM oder_2detil WHERE id='$IdDetil'"); 
$yb = mysql_fetch_array($k9kj_dfd);
if(!$yb[id]){
header("Location:../keluar2.php");
}else{
$TotBeli=$QtyBeri*$yb[HargaBeli];
$TotJual=$QtyJual*$yb[HargaJual];
	$udpa = mysql_query("UPDATE  `oder_2detil` SET  
`TotBeli` = '$TotBeli',
`TotJual` = '$TotJual',
`QtyBeri` = '$QtyBeri',
`Keterangan` = '$Keterangan' WHERE  `id` ='$IdDetil'");
if($udpa){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="harsono_ayahku.php?se=<? echo $se; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>
<?
}else{
echo "SIMPAN DATA GAGAL,...........<br>";
}
}?>
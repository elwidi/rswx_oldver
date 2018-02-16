<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1detil WHERE id='$IdDetil'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
//
$Pengali = $ok[TotalQty]/$ok[Qty];
//
if($a[Level]!=11){
echo "MAAF ANDA TIDAK DIIJINKAN AKSES HALAMAN INI";}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
$TotalQty = $Pengali * $Qty;
$TotBeli=$ok[HargaBeli]*$TotalQty;
$TotJual=$ok[HargaJual]*$TotalQty;

	$simp = mysql_query("UPDATE  `oder_1detil` SET `TotalQty` = '$TotalQty',`Qty` = '$Qty',
`TotBeli` = '$TotBeli',
`TotJual` = '$TotJual' ,`QtyBeri`='$QtyOk' 
,`Keterangan`='$Keterangan' WHERE `oder_1detil`.`id` ='$IdDetil'");
}?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sda1.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>

<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$usij = mysql_query("SELECT * FROM podetil77 WHERE id='$IdDetil'");
 $yu= mysql_fetch_array($usij);
 //
if(!$yu[id]){  
 header("Location:../keluar2.php");
}elseif(!$yu[id]){ 
 header("Location:../keluar2.php");
}else{
$Total = $HargaBeli*$yu[Pengali]*$Qty;
//echo "$Total = $HargaBeli*$yu[Pengali]*$Qty;<br>"; 
if($PotPrc>0){
$PotRp=$Total*$PotPrc/100;
}else{
$PotRp=$PotRp;
}
 $pjkan = strlen($Keterangan);
 if($pjkan>0){
 $TglJam=date("d.m.Y-H:i:s"); 
 	$isisk = mysql_query("INSERT INTO  `ket_det_po` 
	(`id`, `IdDetil`, `Keterangan`, `Opr`, `TglJam`) VALUES 
	(NULL, '$IdDetil', '$Keterangan', '$a[Nama]', '$TglJam')");
	//
	$usos = mysql_query("UPDATE `ket_det_po` SET `Keterangan` = '$Keterangan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdDetil` ='$IdDetil'");
	//
 }
  $sim = mysql_query("UPDATE `podetil77` SET `Qty` = '$Qty',
 `Harga` = '$HargaBeli',
`Total` = '$Total',
`PotPrc` = '$PotPrc',
`PotRp` = '$PotRp',
`TotRp` = '$TotRp',
`Bacth` = '$NoBatch',
`TglEd` = '$TglEd',
`BlnEd` = '$BlnEd',
`ThnEd` = '$ThnEd' WHERE  `id` ='$IdDetil'");
  if($sim){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="z2ws.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>

<?
}
 }
?>
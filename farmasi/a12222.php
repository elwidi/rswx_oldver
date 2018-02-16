<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$usij = mysql_query("SELECT * FROM podetil77 WHERE id='$IdDetil'");
 $yu= mysql_fetch_array($usij);
 //
 $re= mysql_fetch_array($KDJFKDJFKD);
  $jjdjdjdjdjd_Dfdf = mysql_query("SELECT * FROM settingsatuan WHERE id='$IdSatuan'");
$hb = mysql_fetch_array($jjdjdjdjdjd_Dfdf);
$Total = $hb[Pengali]*$Qty*$HargaBeli;

//echo "$Total = $HargaBeli*$yu[Pengali]*$Qty;<br>"; 
 if(!$yu[id]){  
 header("Location:../keluar2.php");
}elseif(!$yu[id]){ 
 header("Location:../keluar2.php");
}else{
 //echo "$Total = $HargaBeli*$yu[Pengali]*$Qty;<br>"; 
if($PotPrc>0){
$PotRp=$Total*$PotPrc/100;
}else{
$PotRp=$PotRp;
}
//
$kkdjjfdfd_Dfdf  = mysql_query("Update dataobat 
set Hna='$HargaBeli' where id='$yu[IdBarang]'");
//
 $KeyID="$yu[IdBarang]-$hj[BlnDtg]-$hj[ThnDtg]";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$hj[TglDtgl]', '$hj[BlnDtg]', '$hj[ThnDtg]', '$yu[IdBarang]', '$yu[NamaBarang]','BL')");
 
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
`IdSatuan` = '$IdSatuan',
`NamaSatuan` = '$hb[NamaSatuan]',
`Pengali` = '$hb[Pengali]',
 `PotPrc` = '$PotPrc',
`PotRp` = '$PotRp',
`TotRp` = '$TotRp',
`Bacth` = '$NoBatch',
`TglEd` = '$TglEd',
`BlnEd` = '$BlnEd',
`ThnEd` = '$ThnEd',
`IdSupplier` = '$re[IdSupplier]',`IdFaktur`='$hj[id]' WHERE  `id` ='$IdDetil'");
 
  if($sim){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="jujujuj.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>";
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
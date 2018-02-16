<?
session_start();
include "../konek.php";
include "../ceke.php";
 if($dik_dimas[delapanbelas]!=1){
echo "MAAF ANDA TIDAK BERHAK AKSES HALAMAN INI";
}else{
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
$usij = mysql_query("SELECT * FROM podetil77x WHERE id='$IdDetil'");
 $yu= mysql_fetch_array($usij);
 //
 $jjdjdjdjdjd_Dfdf = mysql_query("SELECT * FROM settingsatuan WHERE id='$IdSatuan'");
$hb = mysql_fetch_array($jjdjdjdjdjd_Dfdf);
if($bk==1){
$Total = $hb[Pengali]*$Qty*$Habe;
 }else{
$HargaBeli = $Habe/$hb[Pengali]/$Qty;
  }
  if($PotPrc>0){
$PotRp=$Total*$PotPrc/100;
}else{
$PotRp=$PotRp;
}
//
//$kkdjjfdfd_Dfdf  = mysql_query("Update dataobat 
//set Hna='$HargaBeli' where id='$yu[IdBarang]'");
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
 $TglJam=date("d.m.Y-H:i:s");
 
  if($bk==1){
  $sim = mysql_query("UPDATE `podetil77x` SET `Qty` = '$Qty',
 `Harga` = '$Habe',
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
`ThnEd` = '$ThnEd',`IdFaktur`='$hj[id]'
,`Kait`='$bk' ,`Opr`='$a[User]'
,`TglJam`='$TglJam' WHERE  `id` ='$IdDetil'");
 }else{
    $sim = mysql_query("UPDATE `podetil77x` SET `Qty` = '$Qty',
 `Harga` = '$HargaBeli',
`Total` = '$Habe',
`IdSatuan` = '$IdSatuan',
`NamaSatuan` = '$hb[NamaSatuan]',
`Pengali` = '$hb[Pengali]',
 `PotPrc` = '$PotPrc',
`PotRp` = '$PotRp',
`TotRp` = '$habe',
`Bacth` = '$NoBatch',
`TglEd` = '$TglEd',
`BlnEd` = '$BlnEd',
`ThnEd` = '$ThnEd',`IdFaktur`='$hj[id]'
,`Kait`='$bk' ,`Opr`='$a[User]'
,`TglJam`='$TglJam' WHERE  `id` ='$IdDetil'");
  }
// header("Location:../keluar2.php"); 
 } ?>
 <html>
 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="x2www.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
 <body onLoad="win44()">
 
 </body>
 </html>
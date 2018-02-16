<?
session_start();
include "../konek.php";
include "../salaman.php";

 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
///
 $jjjjjj = mysql_query("SELECT * FROM dataobat WHERE id='$IdBarang'");
 $nn = mysql_fetch_array($jjjjjj);
/// 
$Total = $Harga * $Qty;
if(!$kk[id]){
header("Location:../keluar2.php");
}else{

$TglJam=date("d.m.Y");
 $kdkddmd= mysql_query("SELECT * FROM settingsatuan WHERE id='$Satuan'");
  $oo = mysql_fetch_array($kdkddmd);
$Qty2 = $Qty* $oo[Pengali];
$Total = $Harga * $Qty2;
  ////
  $KeyID = "$asep-$IdDetil";
 ////
 
 $sim = mysql_query("INSERT INTO  `podetil77` (`id`, `IdPo77`, `IdBarang`, `NamaBarang`, `Qty`, `Harga`, `Total`, `Tgl`, `Bln`, `Thn`, 
`Opr`, `TglJam`, `IdSatuan`, `NamaSatuan`, `Pengali`, `PotPrc`, `PotRp`, `TotRp`, `Bacth`, `Stat`, `TglEd`, `BlnEd`
, `ThnEd`, `IdSupplier`,`Kait`) 
VALUES (NULL, '$id', '$IdBarang', '$nn[NamaObat]', '$Qty', '$Harga', '$Total', '$kk[Tgl]',
 '$kk[Bln]', '$kk[Thn]', '$kk[Opr]', '$TglJam', '$Satuan', '$oo[NamaSatuan]', '$oo[Pengali]', '$PotPrc', '', '', '', '', '', ''
 , '', '$kk[IdSupplier]','$KeyID')");
 if($baya!=2){
 //
 $KDJKJDKFD_DFD = mysql_query("SELECT * FROM podetil77 where IdBarang='$IdBarang' AND TglJam='$TglJam'");
 $uup = mysql_fetch_array($KDJKJDKFD_DFD);
 $isisk = mysql_query("INSERT INTO  `ket_det_po` 
	(`id`, `IdDetil`, `Keterangan`, `Opr`, `TglJam`) VALUES 
	(NULL, '$uup[id]', '$Keterangan', '$a[Nama]', '$TglJam')");
 //
 header("Location:./30o.php?iin=bca&id=$id");
	 } if($sim){
	 ?>
	 <html>
	 <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c3ee.php?asep=<? echo $asep; ?>&baya=<? echo $baya; ?>&iin=<? echo $iin; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	 <body onLoad="win44()"></body>
	 </html>
	 <?
	 }
}
?>

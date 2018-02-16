<?
session_start();
include "../konek.php";
include "../ceke.php";
$TglJam=date("d.m.Y")."-x";
$KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$ss = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD); 

 //////////////////////
$KDJFKDJFKD2 = mysql_query("SELECT * FROM podetil77 WHERE id='$Gatal'"); 
$hb =  mysql_fetch_array($KDJFKDJFKD2);
$Qty2 = $hb[Qty]-$Qty;
$Total = $hb[Pengali]*$Qty*$hb[Harga];
$Totale =$hb[Pengali]*$Qty2*$hb[Harga];
  if($dimas=='sehat'){
$KDJFKDJFDFDFDFDDKD2 = mysql_query("DELETE  FROM podetil77 WHERE id='$Gatal'"); 
  
  }elseif(!$hb[id]){
 echo "RECORD SET TIDAK DITERIMA,....";
 }else{
$pasdddf  = mysql_query("update podetil77 set Qty='$Qty',Total='$Total' WHERE id='$Gatal'");
$ddfdfdfdfd  = mysql_query("update podetil77x set Qty='$Qty',Total='$Total' WHERE IdAsal='$Gatal'");
 
$peraka = mysql_query("INSERT INTO `podetil77` (`id`, `IdPo77`, `IdBarang`, `NamaBarang`, `Qty`, 
`Harga`, `Total`,
`Tgl`, `Bln`, `Thn`, `Opr`, `TglJam`, `IdSatuan`, `NamaSatuan`,
 `Pengali`, `PotPrc`, `PotRp`, `TotRp`, `Bacth`,
  `Stat`, `TglEd`, `BlnEd`, `ThnEd`, `IdSupplier`, `Kait`, `IdFaktur`) VALUES
 (NULL, '$hb[IdPo77]', '$hb[IdBarang]', '$hb[NamaBarang]', '$Qty2', '$hb[Harga]', '$Totale',
  '$hb[Tgl]', '$hb[Bln]', '$hb[Thn]', '$a[User]', '$TglJam', '$hb[IdSatuan]', '$hb[NamaSatuan]', 
  '$hb[Pengali]', '$hb[PotPrc]', '$hb[PotRp]', '$hb[TotRp]', '-', 
  '$hb[Stat]', '$hb[TglEd]', '$hb[BlnEd]', '$hb[ThnEd]', '', '', '-')");
 
?>

<?  }
 ?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="mmm9.php?iin=bca&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<?
session_start();
include "../konek.php";
include "../ceke.php";
 //////////////////////
$KDJFKDJFKD2 = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk2 = mysql_fetch_array($KDJFKDJFKD2); 
//
$KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$ss = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD); 
//
 $KDJFKDJF_090kdjfkdjfdfkdfdK34343D = mysql_query("SELECT * FROM podetil77 WHERE id='$Detil'");
$xx = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdK34343D); 

if(!$kk2[id]){
echo "PO AWAL TIDAK DIKENAL";
 }elseif(!$xx[id]){
echo "DATA DETAIL TIDAK DIKENAL";
}else{ 
  if($bara=='bere'){
   $ujujs = mysql_query("delete from podetil77x where IdAsal='$Detil'");
  }else{
  $iisk = mysql_query("INSERT INTO  `podetil77x` 
  (`id`, `IdPo77`, `IdBarang`, `NamaBarang`, `Qty`, 
  `Harga`, `Total`, `Tgl`, `Bln`, `Thn`, `Opr`, `TglJam`, `IdSatuan`,
   `NamaSatuan`, `Pengali`, `PotPrc`, `PotRp`, `TotRp`, `Bacth`, `Stat`, 
   `TglEd`, `BlnEd`, `ThnEd`, `IdSupplier`, `Kait`, `IdFaktur`, `IdAsal`, `IdPox`) VALUES
    (NULL, '$xx[IdPo77]', '$xx[IdBarang]', '$xx[NamaBarang]', '$xx[Qty]',
	 '$xx[Harga]', '$xx[Total]', '$xx[Tgl]', '$xx[Bln]', '$xx[Thn]', '$xx[Opr]', '$xx[TglJam]', '$xx[IdSatuan]', 
	 '$xx[NamaSatuan]', '$xx[Pengali]', '$xx[PotPrc]', '$xx[PotRp]', '$xx[TotRp]', '$xx[Bacth]', '$xx[Stat]', 
	 '$xx[TglEd]', '$xx[BlnEd]', '$xx[ThnEd]', '$kk2[IdSupplier]', '$Kait', '$xx[IdFaktur]', '$xx[id]','$IdPo')");
 	  }
	if($fito=='dila'){
	 header("Location:./a10_m2.php?ok=yes&id=$id&IdPo=$IdPo");	
	}else{
	  header("Location:./a10_m.php?ok=dimas&id=$id&IdPo=$IdPo");
} }

?>
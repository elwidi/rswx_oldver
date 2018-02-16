<?
session_start();
include "../konek.php";
include "../salaman.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
$lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
 $yh = mysql_fetch_array($lklfkfdl);
if(!$yh[id]){
echo "DATA FAKTUR TIDAK DIKENAL";
}elseif(!$kk[id]){
echo "DATA PO TIDAK DIKENAL";
}elseif($a[Level]!=999){
  $up = mysql_query("UPDATE polog77x SET Stak=2 WHERE id='$id'");
 $ups = mysql_query("UPDATE podetil77x SET Stat=2  WHERE IdFaktur='$dimas'");
$udps = mysql_query("UPDATE fakturpo SET Stak=2  WHERE id='$dimas'");
 //	if($up){
  	$jaka_sd = mysql_query("SELECT * FROM podetil77x WHERE IdFaktur='$dimas'");
	while($hv = mysql_fetch_array($jaka_sd)){
  	/////////////////////////////////////////////////
$KeyIDXc="$hv[IdBarang]-$yh[BlnDtg]-$yh[ThnDtg]";
 $iaki = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
	 (NULL, '$KeyIDXc', '$yh[TglDtgl]', '$yh[BlnDtg]', '$yh[ThnDtg]','$hv[IdBarang]', '$hv[NamaBarang]', 'BLx')");	
 	$kjffgf_glgfklgf = mysql_query("SELECT * FROM uppering_obat WHERE id='1'");
$aa22= mysql_fetch_array($kjffgf_glgfklgf);
  $Tiga = $hv[Harga]+($hv[Harga]*$aa22[Tiga]/100); 
   $Dua = $Tiga+($Tiga*$aa22[Tiga]/100); 
    $Satu = $Dua+($Dua*$aa22[Satu]/100); 
    $Vip = $Satu+($Satu*$aa22[Vip]/100); 
   $Svip = $Vip+($Vip*$aa22[Svip]/100); 
	////////////////////////////////////////////////////////
	$kali = $hv[Qty]*$hv[Pengali];
	//
 	//
	}
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="8iiuu.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	 
	</body>
	</html>
	<?
	//}
}
?>
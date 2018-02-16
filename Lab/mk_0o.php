<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
$KDKDJ = mysql_query("SELECT * FROM sublab_2 WHERE id='$ela'");
$nb = mysql_fetch_array($KDKDJ);
if(!$nb[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$TglJam=date("d.m.Y-H:i:s");
 $mkn = mysql_query("INSERT INTO  `cetak_hasil_sublab`
  (`id`, `RegId`, `IdBiaya`, `level`, `Idsublab`, `NamaBiaya`,
  `Hasil`, `Satuan`, `NilaiNormal`, `MaxP`, `MinP`, `MinW`, `MaxW`, `Keterangan`, `Opr`, `TglJam`)
  VALUES (NULL, '$fito', '$nb[id]', '$nb[level]', '$kunci', '$nb[NamaBiaya]',
   '$Hasil', '$Satuan', '$NilaiNormal', '$MaxP', '$MinP', '$MinW', '$MaxW', '$Keterangan', '$a[Nama]', '$TglJam')");
 if(!$mkn){
$mkm = mysql_query("UPDATE cetak_hasil_sublab SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam' WHERE Idsublab='$kunci'");
}
 }else{
}?>

<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="oioi_00.php?fito=<? echo $fito; ?>&ak=1";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>

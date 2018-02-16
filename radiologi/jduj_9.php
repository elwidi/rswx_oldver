<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$kiki_00ll_lllm = mysql_query("SELECT * FROM txninap3 WHERE id='$IdBiaya'");
$nx = mysql_fetch_array($kiki_00ll_lllm);
//
$upda = mysql_query("UPDATE norad SET Stat=1 WHERE NoTxn='$nx[NoBukti]'");
//
if(!$hh[id]){
header("Location:../keluar.php");
}
$TglJam=date("d-m-Y.H:i:s");
if($Keterangan==''){
echo "ANDA BELUM ISIKAN,.. KETERANGAN,...............<br>";
}else{
$sim = mysql_query("INSERT INTO `pasrad2` 
(`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `Tgl`, `Bln`, `Thn`, `IdTxn`, `NamaTxn`, `Keterangan`, `Kesan`, `Opr`, `Jam`, `NoBukti`, `Saran`)
 VALUES (NULL, '$id', '$hh[NoPasien]', '$hh[NamaPasien]',
  '$hh[TglMasuk]', '$hh[BlnMasuk]', '$hh[ThnMasuk]', '$IdBiaya', '$nx[NamaBiaya]', '$Keterangan', '$Kesan', '$a[Nama]', '$TglJam','$nx[NoBukti]','$Saran')");
  if(!$sim){
  $ksk= mysql_query("UPDATE pasrad2 SET Keterangan='$Keterangan',Kesan='$Kesan',Jam='$TglJam',Opr='$a[Nama]',Saran='$Saran' WHERE IdTxn='$IdBiaya'");
  }
} 
}else{
 }
  ?> 

<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ftt_lde.php?IdStruk2=<? echo $IdStruk2; ?>&IdPasien=<? echo $IdPasien; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
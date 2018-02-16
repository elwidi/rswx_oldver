<?
session_start();
include "../ceke.php";
include "../konek.php";
if($a[Level]==16){
$jdkj = mysql_query("SELECT * FROM txnrad WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$kiki_00ll_lllm = mysql_query("SELECT * FROM txnjalan WHERE id='$IdBiaya'");
$nx = mysql_fetch_array($kiki_00ll_lllm);
//
if(!$hh[id]){
header("Location:../keluar.php");
}
$TglJam=date("d-m-Y.H:i:s");
$YES="LU.$id";
$IdBiaya="LU.$IdBiaya";
if($Keterangan==''){
echo "ANDA BELUM ISIKAN,.. KETERANGAN,...............<br>";
}else{
  $sim = mysql_query("INSERT INTO  `pasrad` 
(`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `Tgl`, `Bln`, `Thn`, `IdTxn`, `NamaTxn`, `Keterangan`, `Kesan`, `Opr`, `Jam`, `Saran`)
 VALUES (NULL, '$YES', '$hh[NoPasien]', '$hh[NamaPasien]',
  '$hh[Tgl]', '$hh[Bln]', '$hh[Thn]', '$IdBiaya', '$nx[NamaBiaya]', '$Keterangan', '$Kesan', '$a[Nama]', '$TglJam','$Saran')");
   $upd = mysql_query("UPDATE norad SET Stat=1 WHERE NoTxn='RL-$hh[RegId]'");
    if(!$sim){
  $upd = mysql_query("UPDATE norad SET Stat=1 WHERE NoTxn='RL-$hh[RegId]'");
  $ksk= mysql_query("UPDATE pasrad SET Keterangan='$Keterangan',Kesan='$Kesan',Jam='$TglJam',Opr='$a[Nama]',Saran='$Saran'  WHERE IdTxn='$IdBiaya'");
  }
} 
}else{
 }?> 

<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ftt_l.php?id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
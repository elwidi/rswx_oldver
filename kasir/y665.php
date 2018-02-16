<?
session_start();
include "../konek.php";
include "..ceke.php";
include "../alamat.php"; 
$kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
//
$ldjfdfldldf = mysql_query("SELECT * FROM txninap3 WHERE id='$Detil'");
$up = mysql_fetch_array($ldjfdfldldf);
if(!$ii[id] || !$up[id]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
$dlfldfkd = mysql_query("UPDATE  `txninap3` SET `Harga` = '$Harga',
`Total` = '$Harga',
`TglJam` = '$TglJam',
`Opr` = '$a[Nama]' WHERE  `id` ='$Detil'");
$jsjsjsj= mysql_query("UPDATE  `diskontarifrinap` SET `Diskon` = '$Diskon',
`Alasan` = '$Alasan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `IdTxn` ='$Detil'");
$sik = mysql_query("INSERT INTO `diskontarifrinap`
(`id`, `IdPasien`,`IdTxn`, `Diskon`, `Alasan`, `Opr`, `TglJam`) VALUES 
(NULL, '$id','$Detil', '$Diskon', '$Keterangan', '$a[Nama]', '$TglJam')"); 

if($dlfldfkd){ ?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="../d_4545.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html> 
<?
}
}
?>
<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
include "../hari.php";
$jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$Id'");
$hh= mysql_fetch_array($jdfd);
if(!$hh[id]){
header("Location:../keluar2.php");
}else{
$Tgl=date("d-m-Y");
$Jam=date("H:i:s");
$TglJam=date("d.m.Y-H:i:s");
  $mdd_kjkdfd = mysql_query("SELECT * FROM txnugd WHERE IdPasien='$Id'");
 while($ba = mysql_fetch_array($mdd_kjkdfd)){
 $Detil  = "$Harga_$ba[id]";
$var  = $_GET["Harga_$ba[id]"];
$Disk  = $_GET["Disk_$ba[id]"];
$rp_dis = $var*$Disk/100;
 $var_Jamin  = $_GET["Jamin_$ba[id]"]; 	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnugd` SET `Harga` = '$var'  WHERE `txnugd`.`id` ='$Detil'");
    $Bayar=$var-$var_Jamin;
     $isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$Detil', '$var_Jamin', '$Bayar', '$a[Nama]', '$TglJam', '$ba[NamaBiaya]','$Id','$Detil')"); 
 
///
$kdkdkdfd_Dfddf = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$var_Jamin',
`NonJam` = '$Bayar',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdDetil` ='$Detil'");
 
 } 
 }
 ?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="3saccs.php?id=<? echo $hh[id]; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
 
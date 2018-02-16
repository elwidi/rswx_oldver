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
$isi = mysql_query("INSERT INTO 
`dataupdate` (`id`, `IdUpdate`, `NamaTabel`, `NamaHari`, `Tgl`, `Jam`, `Opr`, `Alasan`, `Info`) VALUES 
(NULL, '$id', 'txnugd', '$hari', '$Tgl', '$Jam', '$a[Nama]', '$Alasan', 'Perubahan data Dari $HargaLama ke $Harga')");
	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnugd` SET `Harga` = '$Harga' WHERE `txnugd`.`id` ='$id'");
  $kdkdjfdjfkdfd= mysql_query("UPDATE `txnjalan2` SET `Harga` = '$Harga', `Total` = '$Harga',
   `Opr` = '$a[Nama]', `TglJam` = '$TglJam' WHERE  `id` ='$id'");
   $Bayar=$Harga-$Jaminan;
   if($x!=99){
    $isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$Id', '$Jaminan', '$Bayar', '$a[Nama]', '$TglJam', '$param','$Id','L.$id')"); 
 
///
$kdkdkdfd_Dfddf = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$Jaminan',
`NonJam` = '$Bayar',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdDetil` ='L.$id'");
   }else{
 $isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$Id', '$Jaminan', '$Bayar', '$a[Nama]', '$TglJam', '$param','$Id','$id')"); 
 
///
$kdkdkdfd_Dfddf = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$Jaminan',
`NonJam` = '$Bayar',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdDetil` ='$id'");   }
 
 
//
 }
 if($kdkdjfdjfkdfd){
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
<? } ?>
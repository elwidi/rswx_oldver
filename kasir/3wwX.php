<?
session_start();
 include "../konek.php";
include "../ceke.php";
include "../hari.php";
$jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$Id'");
$hh= mysql_fetch_array($jdfd);
if(!$hh[id]){
header("Location:../keluar2.php");
}else{
$Tgl=date("d-m-Y");
$Jam=date("H:i:s");
$TglJam=date("d.m.Y-H:i:s");
if($x==51){
  $mdd_kjkdfd = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Fis'");
}elseif($x==12){
  $mdd_kjkdfd = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
}else{
  $mdd_kjkdfd = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$hh[RegId]'");
 }
 while($ba = mysql_fetch_array($mdd_kjkdfd)){
 $Detil  = "$Harga_$ba[id]";
$var  = $_GET["Harga_$ba[id]"];
 $var_Jamin  = $_GET["Jamin_$ba[id]"];
 if($x==12){
 	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnjalan` SET `Harga` = '$var', `JumlahHarga` = '$var',
   `Opr` = '$a[Nama]', `TglJam` = '$TglJam' WHERE  `id` ='$Detil'");
 }elseif($x==51){
 	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnjalan` SET `Harga` = '$var', `JumlahHarga` = '$var',
   `Opr` = '$a[Nama]', `TglJam` = '$TglJam' WHERE  `id` ='$Detil'");
 }elseif($x==99){
 	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnjalan` SET `Harga` = '$var', `Total` = '$var',
   `Opr` = '$a[Nama]', `TglJam` = '$TglJam' WHERE  `id` ='$Detil'");
 }else{
  	 $kdkdjfdjfkcvcvdfd= mysql_query("UPDATE `txnjalan2` SET `Harga` = '$var', `Total` = '$var',
   `Opr` = '$a[Nama]', `TglJam` = '$TglJam' WHERE  `id` ='$Detil'");
  
}   
   $Bayar=$var-$var_Jamin;
   if($x==12){
   $Kunci ="R.$Detil";
   }elseif($x==51){
   $Kunci ="F.$Detil";
   }elseif($x==99){
   $Kunci ="$Detil";
   }else{
   $Kunci ="L.$Detil";
   }
 $jdj_dfddfd=mysql_query("SELECT COUNT(id) AS kk FROM pecah_kwt WHERE IdPasien='$Id' AND IdDetil ");
     $isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$Detil', '$var_Jamin', '$Bayar', '$a[Nama]', '$TglJam', '$ba[NamaBiaya]','$Id','$Kunci')"); 
 
///
$kdkdkdfd_Dfddf = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$var_Jamin',
`NonJam` = '$Bayar',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam'  WHERE  `IdDetil` ='$Kunci'");
 //
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
 
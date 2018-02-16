<?
session_start();
include "../salaman.php";
include "../rake.php";
$TglJam=date("d.m.Y-H:i:s");
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112  || $a[Level]==16){
// $del = mysql_query("DELETE FROM txnjalan WHERE id='$ela'");
 $del = mysql_query("UPDATE txnjalan set Harga='$Harga',JumlahHarga='$Harga',
 TglJam='$TglJam',Opr='$a[Nama]' WHERE id='$ela'");
 $NonJaminan = $Harga - $Jaminan;
 ////////////////////////////////////////////////////////////////////////////////////////////////
    $isi = mysql_query("INSERT INTO  `pecah_kwt` (`id`, `IdKwt`, `Jam`, `NonJam`, `Opr`, `TglJam`, `Jenis`, `IdPasien`, `IdDetil`) VALUES 
(NULL, '$id', '$Jaminan', '$NonJaminan', '$a[Nama]', '$TglJam', '$param','$id','R.$ela')"); 
 
///
$kdkdkdfd_Dfddf = mysql_query("UPDATE  `pecah_kwt` SET `Jam` = '$Jaminan',
`NonJam` = '$NonJaminan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdDetil` ='R.$ela'");
 
 //////////////////////////////////////////////////////////////////////////////////////////////////////
 if($del && $a[Level]!=16){
?><html>
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
</html><? }elseif($del && $a[Level]==16){
 header("Location:./er_45.php?id=$id");
 }elseif($del && $a[Level]!=16){
 header("Location:./u.php?id=$id");
 }else{
 echo "SIMPAN DATA GAGAL";
 }
}else{
header("Location:../keluar.php");
}
?>
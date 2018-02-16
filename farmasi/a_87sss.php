<?
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjkf_kljkj = mysql_query("SELECT * FROM jual_ob_rl WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjkf_kljkj);
if(!$ya[id]){
header("Location:../keluar2.php");
}else{
 $kdjkdfd_Dfdfd = mysql_query("SELECT * FROM racikembal WHERE id=1");
 $yapa = mysql_fetch_array($kdjkdfd_Dfdfd);

if($Mingo==1){
$Total  = ($ya[Harga]*$Qty)+$yapa[Embalase];
}else{
$Total  = $ya[Harga]*$Qty;
}
if($anak=='panah'){
$upa = mysql_query("DELETE FROM `jual_ob_rl`   WHERE  `id` ='$IdDetil'");
}else{
 $upa = mysql_query("UPDATE  `jual_ob_rl` SET `Qty` = '$Qty',
`Harga` = '$ya[Harga]',
`JumlahHarga` = '$Total',
`Operator` = '$a[Nama]',
`stat` = '$RaciKe' WHERE  `id` ='$IdDetil'");
 }
}
header("Location:../keluar2.php");

?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xxxx_s.php?NoResep=<? echo $NoResep; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<?
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjkf_kljkj = mysql_query("SELECT * FROM jual_ob_rl WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjkf_kljkj);
if(!$ya[id]){
header("Location:../keluar2.php");
}else{
$Total  = $ya[Harga]*$Qty;
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
header("Location:../keluar2.php?RegId=");

?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sssss.php?RegId=<? echo $ya[RegId]; ?>&NoResep=<? echo $NoResep; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
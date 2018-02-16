<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RegId = $_GET["RegId"];
 
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
$baba = mysql_query("SELECT * FROM jual_ob_rl_tmp WHERE RegId='$RegId'");
while($ii = mysql_fetch_array($baba)){
//$iskan = mysql_query("");
$tgl=date("d");$bln =date("m"); $thn=date("y");
$jme = date("H:i:s");
$thne=date("Y");
///
 $KeyID="$ii[IdObat]-$bln-$thn";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$tgl', '$bln', '$thn', '$ii[IdObat]', '$ii[NamaObat]','JL')");

//
 $wkt = "$tgl-$bln-$thn:$aku";
$sim = mysql_query("INSERT INTO `jual_ob_rl` (`id`,`tgl`,`bln`,`thn`,`IdRLOB`,`RegId`,`TypeJual`,`IdObat`,`IdResep`,`KodeObat`,`NamaObat`,
`Qty`,`Harga`,`JumlahHarga`,`NamaPasien`,`TglTran`,`Operator`,`Jam`,`IdUnit`,`stat`) VALUES 
(NULL,'$tgl','$bln','$thne','$ii[IdRLOB]','$ii[RegId]','$ii[TypeJual]','$ii[IdObat]','$ii[IdResep]','$ii[KodeObat]','$ii[NamaObat]',
'$ii[Qty]','$ii[Harga]','$ii[JumlahHarga]','$ii[NamaPasien]','$ii[TglTran]','$a[Nama]','$jme','$a[KodeBagian]','$ii[stat]')");
}//end of while
 $updas = mysql_query("UPDATE rl_resep set Stat='1' WHERE NoResep='$RegId'");
$haps = mysql_query("DELETE FROM jual_ob_rl_tmp WHERE RegId='$RegId'");
 }else{
 }
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cc_kas_df.php?id=<? echo $RegId; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>
<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$Tgl = $_GET["Tgl"];
$Bln=$_GET["Bln"];
$Thn=date("Y");
if($hari=='ini'){
$jdujdudjduj = mysql_query("SELECT * FROM dataperusahaan WHERE id='$id'");
}elseif($hari==3){
$jdujdudjduj = mysql_query("SELECT * FROM dokter WHERE id='$id'");
}else{
$jdujdudjduj = mysql_query("SELECT * FROM bagian WHERE id='$id'");
}
$dapat  = mysql_fetch_array($jdujdudjduj);
if(!$dapat[id]){
//header("Location:../../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="493" colspan="3"><div align="left" class="style1">
DETAIL DATA TRANSAKSI <br />
<?
echo strtoupper($dapat[NamaBagian]); 
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="24" bgcolor="#D4D0C8" class="style1">NO</td>
<td width="83" bgcolor="#D4D0C8" class="style1">TGL MASUK</td>
<td width="83" bgcolor="#D4D0C8" class="style1">NO RM</td>
<td width="107" bgcolor="#D4D0C8" class="style1">NAMA PASIEN</td>
<td width="250" bgcolor="#D4D0C8" class="style1">DIAGNOSA</td>
<td width="250" bgcolor="#D4D0C8" class="style1">DOKTER</td>
</tr>
<?
$nomer =1;
if($hari=='ini'){
 $kdjfkdf = mysql_query("SELECT * FROM rwtjalan WHERE KodePer='$id'   AND BlnMasuk='$Bln' AND ThnMasuk='2014'");
}elseif($hari==3){
$kdjfkdf = mysql_query("SELECT * FROM rwtjalan WHERE KodeDokter='$id' AND TglMasuk='$Tgl'  AND BlnMasuk='$Bln' AND ThnMasuk='$Thn'");
}else{
$kdjfkdf = mysql_query("SELECT * FROM rwtjalan WHERE KodeBagian='$id' AND TglMasuk='$Tgl'  AND BlnMasuk='$Bln' AND ThnMasuk='$Thn'");
}
while($kk = mysql_fetch_array($kdjfkdf)){
$pac =$nomer%2;
if($pac==1){
$warna='';
}else{
$warna='bgcolor="#ADF5B0"';
}
?> 
<tr  <? echo $warna; ?> class="style2" valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><?
echo "$kk[TglMasuk]-$kk[BlnMasuk]-$kk[ThnMasuk]";
?></div></td>
<td><div align="left"><? echo $kk[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($kk[NamaPasien]));?></div></td>
<td><div align="left"><?
$ksiskdsk  = mysql_query("SELECT Diagnosa FROM icd_rj WHERE IdPasien='$kk[id]'");
$bv = mysql_fetch_array($ksiskdsk);
echo $bv[Diagnosa];
?></div></td>
<td><div align="left"><? echo $kk[NamaDokter]; ?></div></td>
</tr>
<?
$nomer++; }?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
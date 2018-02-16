<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($jdmj);
if(!$ii[id]){
header("Location:../../keluar2.php");
}else{
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
<td width="541" colspan="3"><div align="left">
<span class="style1">Pembatalan Transaksi Pasien Rawat Inap</span><BR />
<table border="0" class="style2" cellpadding="2" cellspacing="2">
<tr>
<td width="80">No Rm</td>
<td width="3">:</td>
<td width="382"><div align="left">
<?
echo $ii[NoPasien];
?>
</div></td>
</tr>
<tr>
<td>Nama Pasien</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($ii[NamaPasien])); 
?></div></td>
</tr>
<tr>
<td>Kelas</td><td>:</td><td><div align="left">
<?
	$splo = explode("-",$ii[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo $j[NamaKelas];
?>
</div></td>
</tr>
<tr>
<td>Ruangan</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($j[NamaRuangan])); 
?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="159">Transfer Kamar</td>
  <td width="8">:</td>
  <td width="281"><div align="left"><?
    $ikikikiki = mysql_query("SELECT COUNT(id) as hh FROM transfer WHERE MstKey='$id' order by id asc");
$kk = mysql_fetch_array($ikikikiki);
echo $kk[hh];
  ?></div></td>
  </tr>
  <tr>
    <td>Txn Inap </td>
    <td>:</td>
    <td><div align="left"><?
	   $kdjfkdfdfdfjkd  = mysql_query("SELECT count(id) as mm FROM txninap3 WHERE MstKey='$ii[MstKey]' AND KodeBagian!='x' AND KodeKelompok!='448'");
	   $cf = mysql_fetch_array($kdjfkdfdfdfjkd);
	   echo $cf[mm];
	?></div></td>
  </tr>
  <tr>
    <td>Fisiotherapy</td>
    <td>:</td>
    <td><div  align="left"><?
	  $kdjfkjkd2  = mysql_query("SELECT COUNT(id) as mm FROM txninap3 WHERE MstKey='$ii[MstKey]'   AND KodeKelompok='448'");
	   $cf2 = mysql_fetch_array($kdjfkjkd2);
	   	   echo $cf2[mm];
 	?></div></td>
  </tr>
  <tr>
  <td>Lab</td><td>:</td><td><div align="left"><?
    $kdjfkjkd5  = mysql_query("SELECT COUNT(id) as jj FROM txninap2 WHERE MstKey='$ii[MstKey]'");
	$bb = mysql_fetch_array($kdjfkjkd5);
	echo $bb[jj];
  ?></div></td>
  </tr>
  <tr>
  <td>Radiologi</td><td>:</td><td><div align="left"><?
    $dfdfdkdjfkjkd2  = mysql_query("SELECT COUNT(id) AS hh FROM txninap3 WHERE MstKey='$ii[MstKey]' AND KodeBagian='x'");
  $ye = mysql_fetch_array($dfdfdkdjfkjkd2);
echo number_format($ye[hh]);
  ?></div></td>
  </tr>
  <tr>
  <td>Farmasi</td><td>:</td><td><div align="left"><?
    $cv0099090KDJFKDJ = mysql_query("SELECT count(id) as nn FROM jualobat2 WHERE RegId='$ii[MstKey]'");
  $gcd = mysql_fetch_array($cv0099090KDJFKDJ);
echo $gcd[nn];
  ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?
  if($kk[hh]==0 && $gcd[nn]==0 && $ye[hh]==0 && $bb[jj]==0 &&  $cf2[mm]==0 &&  $cf[mm]==0){
  ?>
  <tr>
    <td colspan="3"><div align="left">
	<input type="button" name="fgfgf" value="Batalkan Transaksi"  onClick="wCompare_0sdsdd1bz = window.open('../../cc09.php?id=<? echo $id; ?>', 
  'wCompare_0sdsdd1bz', 'width=580,height=200,left=170,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0sdsdd1bz.focus();" >
	<input type="button" name="fgfgf" value="Kembali" onClick="location.href='../fito_sayangku.php';">
	<input type="button" name="fgfdfdgf" value="Depan" onClick="location.href='../index.php';">
	</div></td>
    </tr>
	<? } ?>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
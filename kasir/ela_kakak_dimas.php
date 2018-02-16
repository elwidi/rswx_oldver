<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($tgl1>0 && $tgl2>0 && $tgl2>=$tgl1 && $bln1>0 && $thn1>2012){
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
<table width="1194" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1186" colspan="3" valign="top">
<div align="left" class="style1">
LAPORAN ANC (ANTE NATAL CARE )<br />
PERI0DE : <? echo "$tgl1 sd $tgl2 ";
$bln=$bln1; $thn1=$thn1;
include "../bulan.php";
?></div></td>
</tr>
<tr>
  <td colspan="3" valign="top">&nbsp;</td>
</tr>
<TR>
<td valign="top" colspan="3"><div align="left">
<table width="1183" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="26" rowspan="2" bgcolor="#CCFFCC"><div align="center"><strong> NO</strong></div></td>
<td width="50" rowspan="2" bgcolor="#CCFFCC"><strong> NO RM</strong></td>
<td width="98" rowspan="2" bgcolor="#CCFFCC"><strong> NAMA PASIEN</strong></td>
<td width="187" rowspan="2" bgcolor="#CCFFCC"><strong> ALAMAT</strong></td>
<td width="85" rowspan="2" bgcolor="#CCFFCC"><strong> TELP</strong></td>
<td width="67" rowspan="2" bgcolor="#CCFFCC"><div align="center"><strong> UMUR<br>
  KEHAMILAN<br> 
  (minggu)</strong></div></td>
<td colspan="3" bgcolor="#CCFFCC"> <div align="center"><strong>TANGGAL</strong></div></td>
<td width="154" rowspan="2" bgcolor="#ECE9D8"><strong> KETERANGAN</strong></td>
<td width="80" rowspan="2" bgcolor="#ECE9D8"><strong>OPR</strong></td>
<td width="79" rowspan="2" bgcolor="#ECE9D8"><strong>TGLJAM</strong></td>
</tr>
<tr>
<td width="78" bgcolor="#CCFFCC"><strong>PERIKSA</strong></td><td width="105" bgcolor="#CCFFCC"><strong>PERIKSA BERIKUT</strong></td><td width="100" bgcolor="#CCFFCC"><strong>PERKIRAAN LAHIR</strong></td>
</tr>
<?
$nomer=1;
$kdjfkdjkfd = mysql_query("SELECT * FROM anc WHERE TglMasuk>=$tgl1 AND TglMasuk<=$tgl2 AND BlnMasuk=$bln AND ThnMasuk=$thn1");
while($aa = mysql_fetch_array($kdjfkdjkfd)){
$jdjhdf = mysql_query("SELECT Alamat,Telp FROM datapasien WHERE NoPasien='$aa[NoPasien]'");
$up = mysql_fetch_array($jdjhdf);
$pfd = $nomer%2;
if($pfd==1){
$warna='bgcolor="#FFD2FF"';
}else{
$warna='';
}
?>
<tr valign="top"  <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $aa[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($aa[NamaPasien])); ?></div></td>
  <td><div align="left"><? echo $up[Alamat]; ?></div></td>
  <td><div align="left"><? echo $up[Telp]; ?></div></td>
  <td><div align="center"><? echo $aa[UmurHamil]; ?></div></td>
  <td><div align="right"><?
  echo "$aa[TglMasuk]-$aa[BlnMasuk]-$aa[ThnMasuk]";
  ?></div></td>
  <td><div align="right"><?
  echo "$aa[TglKontrol]-$aa[BlnKontrol]-$aa[ThnKontrol]";
  ?></div></td>    <td><div align="right"><?
  echo "$aa[TglLahir]-$aa[BlnLahir]-$aa[ThnLahir]";
  ?></div></td>
  <td bgcolor="#E6D6F8"><div align="left"><? echo $aa[Keterangan]; ?></div></td>
  <td bgcolor="#E6D6F8"><div align="left"><? echo $aa[Opr]; ?></div></td>
  <td bgcolor="#E6D6F8"><div align="left"><? echo $aa[TglJam]; ?></div></td>
</tr>
<? 
$nomer++; } ?>
</table>
</div></td>
</TR>
</table>
</div></body>
</html>
<? }else{
echo "RECORD SET TIDAK DIKENAL";
}
?> 
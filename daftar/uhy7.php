<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
 <table width="1175" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr bgcolor="#59BA54" >
<td width="29"><div align="center"><span class="style3">NO</span></div></td>
<td width="38"><strong>REGID</strong></td>
<td width="76"><strong>JAM MASUK</strong></td>
<td width="115"><strong>NO RM</strong></td>
<td width="167"><strong>NAMA PASIEN</strong></td>
<td width="126"><strong>POLI</strong></td>
<td width="157"><strong>DOKTER</strong></td>
<td width="30"><div align="center"><strong>USIA</strong></div></td>
<td width="194"><strong>PENJAMIN</strong></td>
<td width="80"><strong>BARU/LAMA</strong></td>
<td width="61">ICD</td>
 </tr>
<?
$nomer=1;
$tgl =date("d");
$bln=date("m");
$thn=date("Y");
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' ORDER BY id desc");
while($vv = mysql_fetch_array($msjsmsm)){
$pec = $nomer%2;
if($pec==1){
$warna ='bgcolor="#CCFFCC"';
}else{
$warna ='';
}?>
<tr  <? echo $warna; ?> valign="top">
<tD><div align="center"><? echo $nomer; ?></div></tD>
<td><div align="left"><? echo $vv[RegId];?></div></td>
<td><div align="left"><? echo $vv[JamMasuk];?></div></td>
<td><div align="left"><? echo $vv[NoPasien];?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaPasien]); ?></div></td>
<td><div align="left"><? echo $vv[Bagian]; ?></div></td>
<td><div align="left"><? echo $vv[NamaDokter]; ?></div></td>
<td><div align="center"><? echo $vv[Umur]; ?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaPer]); ?></div></td>
<td><div align="center"><? echo $vv[LB]; ?></div></td>
<td><div align="left"><?
$hnhn = mysql_query("SELECT KodeIcd
FROM `icd_rj` WHERE IdPasien='$vv[id]'");
while($xo = mysql_fetch_array($hnhn)){
echo "$xo[KodeIcd], ";
} 
?></div></td>
</tr>

<?
$nomer++; } ?><tr bgcolor="#59BA54" >
  <tD colspan="11">&nbsp;</tD>
  </tr>
</table>
</div>
</body>
</html>
<? 
}?>
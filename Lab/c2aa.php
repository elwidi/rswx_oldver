<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ldjfdlfkdlflfl = mysql_query("SELECT * FROM lab_bulan WHERE id='$id'");
$ha = mysql_fetch_array($ldjfdlfkdlflfl);
   $pch = explode(".",$ha[KeyID]);

if(!$ha[id]){
echo "RECORD SET TIDAK LENGKAP,...<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
<style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="931" colspan="3"><div align="left" class="style1">
DETAIL HISTORY DATA<br />
<?
echo $ha[NamaBiaya];
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style4">
<tr>
<td width="20" bgcolor="#FFCC66"><strong>No</strong></td>
<td width="26" bgcolor="#FFCC66"><strong>Tgl</strong></td>
<td width="90" bgcolor="#FFCC66"><div align="center"><strong>NoRm</strong></div></td>
<td width="140" bgcolor="#FFCC66"><strong>Nama Pasien</strong></td>
<td width="110" bgcolor="#FFCC66"><strong>Bagian</strong></td>
<td width="114" bgcolor="#FFCC66"><strong>Dokter</strong></td>
<td width="61" bgcolor="#FFCC66"><div align="right"><strong>Harga</strong></div></td>
<td width="68" bgcolor="#FFCC66"><div align="right"><strong>Total</strong></div></td>
<td width="97" bgcolor="#FFCC66"><strong>Opr</strong></td>
<td width="104" bgcolor="#FFCC66"><strong>TglJam</strong></td>
</tr>
<?
$nomer=1;
  $kdidkdidkdk = mysql_query("SELECT * FROM txnjalan2 WHERE IdBiaya='$pch[0]' AND BlnMasuk='$ha[Bln]' AND ThnMasuk='$ha[Thn]' ");
 while($nn = mysql_fetch_array($kdidkdidkdk)){
$ak = $nomer%2;
if($ak==1){
$warna='';
}else{
$warna=' bgcolor="#FFFF99"';
} ?>
<tr valign="top" <? echo $warna;  ?> >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="center"><? echo "$nn[TglMasuk]-$nn[BlnMasuk]-$nn[ThnMasuk]"; ?></div></td>
<td><div align="center"><? echo $nn[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaPasien])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaPoli])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaDokter])); ?></div></td>
<td><div align="right"><?
echo number_format($nn[Harga]); 
?></div></td>
<td><div align="right"><?
echo number_format($nn[Total]);
$toto =$toto + $nn[Total]; 
?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Opr])); ?></div></td>
<td><div align="left"><? echo   $nn[TglJam]; ?></div></td>
</tr>
 <?
$nomer++; } ?><tr>
  <td colspan="7" bgcolor="#FFCC66">&nbsp;</td>
  <td bgcolor="#FFCC66"><div align="right"><?
  echo number_format($toto); 
  ?></div></td>
  <td colspan="2">&nbsp;</td>
  </tr>
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

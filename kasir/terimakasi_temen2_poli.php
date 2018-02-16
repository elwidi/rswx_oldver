<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdudjudj = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien'");
$hg = mysql_fetch_array($jdudjudj);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="482" colspan="3"><div align="left">
<span class="style1">DETAIL HISTORY </span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style12">
<tr>
<td width="84">NO RM</td>
<td width="8">:</td>
<td width="193"><div align="left">
<?
echo $hg[NoPasien];
?>
</div></td>
</tr>
<tr>
  <td>NAMA PASIEN </td>
  <td>:</td>
  <td><div align="left"><?
  echo ucfirst(strtolower($hg[NamaPasien]));
  ?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style12">
  <tr>
  <td width="18" bgcolor="#000000"><span class="style2">NO</span></td>
  <td width="62" bgcolor="#000000"><span class="style2">TGL</span></td>
  <td width="62" bgcolor="#000000"><span class="style2">JAM</span></td>
  <td width="176" bgcolor="#000000"><span class="style2">BAGIAN</span></td>
  <td width="75" bgcolor="#000000"><span class="style2">DOKTER</span></td>
  <td width="112" bgcolor="#000000"><span class="style2">OPR</span></td>
  </tr>
  <?
  $nom=1;
  $kjdkfdfd_Dfdfd  = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$hg[NoPasien]'");
  while($po = mysql_fetch_array($kjdkfdfd_Dfdfd)){
$yh = $nom%2;
if($yh==1){
$warna=' bgcolor="#FFFF93"';
}else{
$warna='';
}  ?>
  <tr <?  echo $warna; ?> valign="top">
  <td><div align="center"><? echo $nom; ?></div></td>
  <td><div align="left"><? echo "$po[TglMasuk]-$po[BlnMasuk]-$po[ThnMasuk]"; ?></div></td>
  <td><div align="center"><? echo $po[JamMasuk]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($po[Bagian])); ?></div></td>
  <td><div align="left"><? echo $po[NamaDokter]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($po[Operator])); ?></div></td>
  </tr>

  <?
  $nom++; } ?>  <tr>
    <td colspan="6" bgcolor="#000000">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
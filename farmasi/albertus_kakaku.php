<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjksds_dssd = mysql_query("SELECT * FROM catat_obat WHERE id='$id'");
$ba =  mysql_fetch_array($kjksds_dssd);
if(!$ba[id]){
echo "RECORD SET DATA TIDAK LENGKAP,....<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="582" colspan="3"><div align="left" class="style1">
Detail History Retur<BR />
<font color="#990000"><?
echo ucfirst(strtolower($ba[NamaObat])); 
?></font>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="17" bgcolor="#99CCFF"><strong>No</strong></td>
<td width="108" bgcolor="#99CCFF"><strong>Sumber</strong></td>
<td width="78" bgcolor="#99CCFF"><div align="right"><strong>Tgl</strong></div></td>
<td width="50" bgcolor="#99CCFF"><div align="center"><strong>Qty</strong></div></td>
<td width="61" bgcolor="#99CCFF"><div align="right"><strong>Harga</strong></div></td>
<td width="54" bgcolor="#99CCFF"><div align="right"><strong>Total</strong></div></td>
<td width="144" bgcolor="#99CCFF"><strong>Alasan</strong></td>
</tr>
<?
$nomer=1;
  $kjdf_Dfdfd_kjkk = mysql_query("SELECT * FROM returbeli WHERE IdBarang='$ba[IdObat]'");
while($ss = mysql_fetch_array($kjdf_Dfdfd_kjkk)){
$no = $nomer%2;
if($no==1){
$warna=' bgcolor="#FEF1D3"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $ss[NoPo]; ?></div></td>
<td><div align="right"><? echo "$ss[Tgl]-$ss[Bln]-$ss[Thn]"; ?></div></td>
<td><div align="center"><? echo number_format($ss[Qty]); ?></div></td>
<td><div align="right"><? echo number_format($ss[Harga]); ?></div></td>
<td><div align="right"><? echo number_format($ss[Total]);
$tot = $tot + $ss[Total];
 ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ss[Alasan])); ?></div></td>
</tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="5" bgcolor="#99CCFF"><div align="center"><strong>Total</strong></div></td>
  <td bgcolor="#99CCFF"><div align="right"><strong><? echo number_format($tot); ?></strong></div></td>
  <td>&nbsp;</td>
</tr></table>
</div>
</td>
</tr>
</table>
</body>
</html>
<? } ?>
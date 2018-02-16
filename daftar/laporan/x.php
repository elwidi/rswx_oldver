<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$bln1= $_GET["bln2"];
$thn1= $_GET["thn1"];
$tgl1=$_GET["tgl1"];
$tgl2=$_GET["tgl2"];
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
.style2 {
	font-size: 14;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="973" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><span class="style2">LAPORAN PEMAKAIAN materai 6000 <br>
PERIODE : 
      <?
$bln=$bln1;
echo "$tgl1 sd $tgl2 ";
 include "../../bulan.php";
?><br>&nbsp;
</span></td> 
</tr>
<tr valign="top">
<td><div align="left">
<table border="1" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="18" bgcolor="#D4D0C8"><span class="style1">NO</span></td><td width="74" bgcolor="#D4D0C8">TANGGAL</td><td width="79" bgcolor="#D4D0C8">NAMA PASIEN</td>
<td width="54" bgcolor="#D4D0C8">NO PRI</td>
<td width="105" bgcolor="#D4D0C8">NO RM</td>
<td width="105" bgcolor="#D4D0C8">NAMA PASIEN</td>
<td width="167" bgcolor="#D4D0C8">NAMA DOKTER</td>
<td width="133" bgcolor="#D4D0C8">DIAGNOSA</td>
<td width="111" bgcolor="#D4D0C8">KET</td><td width="55" bgcolor="#D4D0C8">JUMLAH</td>
</tr>
<?

?>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="10" bgcolor="#D4D0C8">&nbsp;</td>
  </tr>
</table>
</div></td>
</tr>

</table>
</body>
</html>
<?
}
?>
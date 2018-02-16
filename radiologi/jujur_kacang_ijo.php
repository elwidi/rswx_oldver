<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$buku = mysql_query("SELECT * FROM pasienradluar WHERE id='$id'");
$h = mysql_fetch_array($buku);
if(!$h[id]){
header("Location:./mencret_jorok.php?id=1");
}
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
-->
</style>
</head>
<body>
<div align="center">
<table width="481" border="0" cellpadding="2" cellspacing="2" bgcolor="#D4D0C8">
<tr bgcolor="#000099">
<td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style1">
<img src="../gambar/radpng">
</div></td>
</tr>
<tr valign="top">
<td colspan="3" bgcolor="#FFFFFF">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="199"><span class="style4">NO DAFTAR</span></td>
<td width="13"><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td width="247"><div align="left" class="style2 style5"><? echo $id; ?></div></td>
</tr>
<tr>
<td width="199"><span class="style4">REGID</span></td>
<td width="13"><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td width="247"><div align="left" class="style2 style5"><? echo $h[RegId]; ?></div></td>
</tr>
<tr>
<td><span class="style4">NAMA PASIEN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><? echo strtoupper($h[NamaPasien]); ?></div></td>
</tr>
<tr>
<td><span class="style4">JENIS KELAMIN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><? echo strtoupper($h[JenisKelamin]); ?></div></td>
</tr>
<tr>
<td><span class="style4">ALAMAT</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><? echo strtoupper($h[Alamat]); ?></div></td>
</tr>
<tr>
<td><span class="style4">TELP </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div  align="left" class="style4"><? echo $h[HpTelp]; ?></div></td>
</tr>
<tr>
<td><span class="style4">USER INPUT</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><? echo strtoupper($h[Opr]); ?></div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr bgcolor="#000099">
<td colspan="3" bgcolor="#5ABB52"><div align="center">
  <input name="dfdfd" type="button" class="style4"  onClick="location.href='bokongmu_gede.php?id=<? echo $id; ?>';" value="Edit"> 
<input name="fgfgf" type="button" class="style4" onClick="location.href='permen_karet.php?iki=<? echo $id; ?>';" value="Transaksi">
<input name="ffgf" type="button" class="style4" onClick="location.href='mencret_jorok.php?id=2';" value="Mundur">
</div></td>
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
}else{
header("Location:./keluar.php");
}
?>
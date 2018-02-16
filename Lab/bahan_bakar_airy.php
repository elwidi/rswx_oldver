<?php 
session_start();
include "../konek.php";
include "../ceke.php";$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $kop = mysql_query("SELECT * FROM sublab WHERE id=$del");
$ke = mysql_fetch_array($kop);
if(!$ke[id]){
header("Location:./buah_melon_manis.php?id=$id");
}
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style4 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style6 {color: #FFFFFF}
-->
</style>
</head>
<body alink="White" vlink="White" link="White">
<div align="center">
<table width="397" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bgcolor="#000099">
<td height="20" colspan="3"><div align="center" class="style1">
 <span class="style6">YAKIN DATA INI AKAN DIHAPUS ?</span><br>
<a href="bahan_bakar_air.php?del=<? echo $ke[id]; ?>&klw=<? echo $ke[IdBiaya]; ?>">YA</a> / <a href="buah_melon_manis.php?id=<? echo $ke[IdBiaya]; ?>">TIDAK</a>

</div></td>
</tr>
<tr>
<td width="205"><span class="style4">NAMA BIAYA</span></td><td width="15"><div align="center"><strong><span class="style4">:</span></strong></div></td><td width="305"><span class="style4">
 <? echo $ke[NamaBiaya]; ?> 
<input type="hidden" name="IdBiaya" value="<? echo $id; ?>">
<input type="hidden" name="del" value="<? echo $del; ?>">
</span></td>
</tr>
<tr class="style4"> 
<td><span class="style4">KELOMPOK</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><span class="style4">
  
  <? echo $ke[Kelompok]; ?> 
 || 

</span></td> 
</tr>
<tr class="style4"> 
<td>LEVEL</td><td>:</td><td> <?  echo $ke[Level]; ?> </td>   
</tr>
 <tr>
<td><span class="style4">SATUAN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style2 style5"> <? echo $ke[Satuan]; ?></textarea>
 </td>
</tr>
<tr>
<td><span class="style4">HASIL</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4"><? echo $ke[Hasil]; ?></div></td>
</tr>
<tr>
<td><span class="style4">NILAI NORMAL </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td>
<div align="left" class="style4"><? echo $ke[NilaiNormal]; ?></div></td>
</tr>
<tr>
<td><span class="style4">MAX PRIA</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4"><? echo $ke[MaxP]; ?> </div></td>
</tr>
<tr>
<td><span class="style4">MIN PRIA </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4"> <? echo $ke[MinW]; ?> </div></td>
</tr><tr>
<td><span class="style4">MAX WANITA </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4"><? echo $ke[MaxW]; ?></div></td>
</tr>
<tr>
  <td><span class="style4">MIN WANITA </span></td>
  <td><div align="center"><strong>:</strong></div></td>
  <td><span class="style4">
  <? echo $ke[MinW];?> 
  </span></td>
</tr>
<tr bgcolor="#000099">
  <td colspan="3">
    <div align="center" class="style2">
    &nbsp;
    </div></td>
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
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="8i.php">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="112"><span class="style1">PERIODE</span></td>
<td width="8">:</td>
<td width="230"><div align="left"><span class="style15 style2 style8  style3">
  <select name="Bln" class="style1" id="Bln">
    <option value="<? echo date("m")-0; ?>">
      <? $bln=date("m"); $thn1='';
include "../bulan.php"; ?>
      </option>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
  <input type="hidden" name="as" value="<? echo $as; ?>">
  <input type="hidden" name="Kat" value="<? echo $Kat; ?>">
/
<select name="Thn" class="style1" id="Thn">
  <option value="<? echo date("Y");?>"><? echo date("Y");?></option>
  <?
$hyh = 2011;
while($hyh<=2020){
?>
  <option value="<? echo $hyh; ?>"><? echo $hyh; ?></option>
  <? 
$hyh++;
}
?>
</select>
</span>

</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Sort" name="fgfgf" class="style1">
  <input type="button" name="fgfgf" value="Tutup" onClick="window.close()" class="style1">
  </div></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
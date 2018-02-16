<?php
session_start();
include "../konek.php";
include "../salaman.php";
$Detil  = $_GET["Detil"];
$id = $_GET["id"];
$kiks_sd = mysql_query("SELECT * FROM keluarmasukpasien  WHERE id='$id'");
$ii = mysql_fetch_array($kiks_sd);
//
$kdikdik = mysql_query("SELECT * FROM penerimaandp WHERE id='$Detil'");
$sp= mysql_fetch_array($kdikdik);
//
if(!$ii[id] || !$sp[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style1123 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="3was.php">
<table border="1">
<tr>
<td width="358" colspan="3"><div align="left" class="style1">
HAPUS / KOREKSI DATA BAYAR DP<br />
<?
echo $ii[MstKey];
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1123">
<tr>
<td width="103">TGL</td>
<td width="4"><strong>:</strong></td>
<td width="231">
<div align="left" class="style1123">
<input  name="tgl" type="text" class="style1123" value="<? echo $sp[tgl]; ?>" size="2" maxlength="2" />
- 
<input  name="bln" type="text" class="style1123" value="<? echo $sp[bln]; ?>" size="2" maxlength="2" />
-
<input  name="thn" type="text" class="style1123" value="<? echo $sp[thn]; ?>" size="4" maxlength="4" />
</div></td>
</tr>
<tr>
<td>TUNAI</td><td><strong>:</strong></td>
  <td><div align="left">
    <input type="text"  name="Tunai" class="style1123" size="14" maxlength="14" value="<? echo $sp[Tunai]; ?>">
    <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="Detil" value="<? echo $Detil; ?>">
  </div>   </tr>
  <tr>
  <td>KK</td><td><strong>:</strong></td>
  <td><div align="left">
  <input type="text" name="Kk" class="style1123" size="14" maxlength="14" value="<? echo $sp[Kk]; ?>">
  </div></td>
  </tr>
  <tr>
  <td>DB</td><td><strong>:</strong></td>
  <td><div align="left">
  <input type="text" name="Db" class="style1123" size="14" maxlength="14" value="<?  echo $sp[Db]; ?>">
  </div></td>
  </tr>
    
  <tr>
  <td>JAM</td><td><strong>:</strong></td>
  <td><div align="left">
 
  <input type="text" name="Jam" class="style1123" size="14" maxlength="14" value="<? echo $sp[Jam]; ?>">
   </div></td>
  </tr>
  <tr valign="top">
  <td>KETERANGAN</td><td><strong>:</strong></td>
  <td><div align="left">
  <textarea name="Keterangan" cols="30" rows="3" class="style1123"><? echo $sp[Keterangan]; ?></textarea>
  </div></td>
  </tr>
  <tr>
  <td colspan="3"><div align="center"> 
    <input type="radio"  name="we" value="0" <? if($sp[JenisDp]=="0"){ ?>checked="checked" <? } ?>> DP
    || <input type="radio" name="we" value="1" <? if($sp[JenisDp]=="1"){ ?>checked="checked"<? } ?>> Pulang   
  </div></td>
</tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="submit" value="Simpan" name="fgf" class="style1123">
	<input type="button" name="fgf" value="Selesai" onClick="window.close()" class="style1123">
	</div></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}
?>
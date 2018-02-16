<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
$kiksksds = mysql_query("SELECT * FROM racikembal WHERE id=1");
$ok = mysql_fetch_array($kiksksds);
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
<form action="y6t.php">
<table border="1">
<tr>
<td width="484" colspan="3"><div align="left" class="style1">
SETTING NILAI TAMBAHAN <br />
PENJUALAN
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<table width="476" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="106">EMBALASE</td>
<td width="3">:</td>
<td width="347"><div align="left">
<input name="Embalase" type="text" class="style1" id="Embalase" value="<? echo $ok[Embalase]; ?>" size="12" maxlength="12" />
</div></td>
</tr>
<tr>
<td>RACIKAN</td><td>:</td><td><div align="left">
<input   name="Racikan" type="text" class="style1" size="12" value="<? echo $ok[Racikan];?>" maxlength="12" />
</div></td>
</tr>
<tr valign="top">
  <td>KETERANGAN</td>
  <td>:</td>
  <td><textarea name="Keterangan" cols="30" rows="3" class="style1"><? echo $ok[Keterangan]; ?></textarea>  </td> 
</tr>
<tr valign="top">
  <td colspan="3">TERAKHIR UPDATE  : <? echo $ok[TglJam]; ?></td>
  </tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input name="fgfgf" type="submit" class="style1" value="Update">
  <input name="ffgf" type="button" class="style1" onClick="window.close()" value="Selesai">
  </div></td>
  </tr>
</table>
</div></td>
</tr>
</table>
</form>
</body>
</html>
<?
}
?>
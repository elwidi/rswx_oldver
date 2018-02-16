<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php"; 
 $kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
$ISKSJS = mysql_query("SELECT * FROM jasalayan WHERE id='$Detil'");
$up = mysql_fetch_array($ISKSJS);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="322" colspan="3" valign="top"><div align="left" class="style1">
DETAIL JASA LANANAN<br />
TGL : <? echo "$up[Tgl] ";
$bln=$up[Bln]; $thn1=$up[Thn];
include "../bulan.php"; ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="114">NILAI MIN</td>
<td width="3">:</td>
<td width="187"><div align="left">
<input name="Min" type="text" class="style2"  value="<? echo $up[Nilai]; ?>" size="14" maxlength="14">
</div></td>
</tr>
<tr>
<td>NILAI NORMAL</td><td>:</td><td><div align="left">
<input name="Normal" type="text" class="style2"  value="<? echo $up[Nilai2]; ?>" size="14" maxlength="14">
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><input type="button" name="fgf" value="Hapus" onClick="location.href='d2w0.php?id=<? echo $id; ?>&Detil=<? echo $Detil; ?>';" class="style2">
  <input type="button" name="fgfg" value="Selesai" onClick="window.close()" class="style2"></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html><?
}
?>
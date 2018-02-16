<?
session_start();
include "../konek.php";
include "../ceke.php";
  $ada = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
$splo = explode("-",$kp[transferKe]);
 $Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);

 
  $jshjsdsj_sdskknjf = mysql_query("SELECT * FROM ket_hasil_lab2 WHERE IdPasien='$fito' AND NoBukti='$NoBukti'");
				  $us_s = mysql_fetch_array($jshjsdsj_sdskknjf);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
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
.style3 {font-size: 12px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="center"><?
 if($us_s[id]){
			?> <form action="dfd_ooicvcvc09099.php">
	                    <? }else{ ?><form action="dioxxi.php"><? } ?><table  border="0" cellpadding="2" cellspacing="2" class="style3">
<tr>
<td colspan="3"><div align="center" class="style1">
HALAMAN ISIKAN KETERANGAN HASIL<br />
HASIL PEMERIKSAAN LAB
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr valign="top">
<td width="116"><span class="style4">KETERANGAN</span></td>
<td width="3"><span class="style4">:</span></td>
<td width="236"><div align="left" class="style4">
<textarea rows="3" cols="30" name="Keterangan"><? echo $us_s[Keterangan]; ?></textarea>
 <input type="hidden" name="NoBukti" value="<? echo $NoBukti; ?>">
	                            <input  type="hidden" name="fito" value="<? echo $fito; ?>">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style4">
DI UPDATE OLEH : <? echo strtoupper($a[Nama]); echo " || "; echo date("d.m.Y-H:i:s"); ?>
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Update" name="dfdf">
<input type="button" name="fgfg" value="Selesai" onClick="window.close()">
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
 }else{
 header("Location:../keluar2.php");
 }
 ?>
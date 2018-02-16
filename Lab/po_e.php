<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
///

  //$kunci="$ui[id]-$kk[id]";
  $kdkkd = mysql_query("SELECT * FROM cetak_hasil_sublab WHERE Idsublab='$kunci'");
  $kokpa = mysql_fetch_array($kdkkd);
///
if($kandang=='sapi' && $kokpa[id]>0){
$KDKDJ = mysql_query("SELECT * FROM cetak_hasil_sublab WHERE Idsublab='$kunci'");
}elseif($kandang=='sapi' && !$kokpa[id]){
$KDKDJ = mysql_query("SELECT * FROM sublab_2 WHERE id='$ela'");
}else{
$KDKDJ = mysql_query("SELECT * FROM cetak_hasil_lab WHERE id='$ela'");
}
$nb = mysql_fetch_array($KDKDJ);
if(!$nb[id]){
echo "$kandang"; 
//header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#009933
}

.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }

-->
</style>
</head>
<body bgcolor="#CCFFCC"  alink="#990000" vlink="#990000" link="#990000">
<div align="left">
<?
if($kandang=='sapi'){
?>
<form action="mk_0o.php">
<? 
}else{
?>
<form action="f_09_h.php">
<? } 
if($kandang=='sapi'){
$popo ="class='style333'";  
}else{
$popo ="class='style2'";  
}
?>
<table border="0" cellpadding="2" cellspacing="2" <? echo "$popo"; ?>>
<tr>
<td width="537"  colspan="3" bgcolor="#000066"><div align="center" class="style3 style4">
INPUT / KOREKSI HASIL PEMERIKSAAN<br />
<?
echo $kp[RegId];
?>
</div></td>
</tr>
<tr>
<td onClick="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" <? echo $popo; ?>>
<tr>
<td width="125" class="style2">NAMA BIAYA</td>
<td width="8"><strong>:</strong></td>
<td width="424"><div align="left"><? echo strtoupper($nb[NamaBiaya]); ?></div></td>
</tr>
<tr>
<td class="style2">HASIL</td>
<td><strong>:</strong></td>
<td><div align="left"><?
if($ibu=='iin'){
$Naj = "Negatif";
}elseif($ibu=='sri'){
$Naj = "Positif";
}else{
$Naj = $nb[Hasil];
}
?>
<input name="Hasil" type="text" class="style1" size="30" maxlength="80" value="<? echo $Naj; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="ela" value="<? echo $ela; ?>">
<input type="hidden" name="fito" value="<? echo $fito; ?>">
<?
if($kandang=='sapi'){
?>
<input type="hidden" name="kunci" value="<? echo "$kunci"; ?>">
<? 
}
?>

<span class="style6"><a href="po_e.php?ibu=sri&kandang=<? echo $kandang; ?>&kunci=<? echo $kunci; ?>&ela=<? echo $ela; ?>&fito=<? echo $fito;?>&ak=<? echo $ak; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >+++</a> / <a href="po_e.php?ibu=iin&kandang=<? echo $kandang; ?>&kunci=<? echo $kunci; ?>&ela=<? echo $ela; ?>&fito=<? echo $fito;?>&ak=<? echo $ak; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >---</a></span></div></td>
</tr>
<tr>
<td class="style2">SATUAN</td>
<td><strong>:</strong></td>
<td><div align="left">
<input name="Satuan" value="<? echo $nb[Satuan]; ?>" type="text" class="style1" size="30" maxlength="80">
</div></td>
</tr>
<tr>
<td class="style2">NILAI NORMAL</td>
<td><strong>:</strong></td>
<td><div align="left">
 <input name="NilaiNormal" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[NilaiNormal]; ?>">
</div></td> 
</tr>
<?
if($ada==99){
?>
<tr>
<td class="style2">MAX P </td>
<td><strong>:</strong></td>
<td><div align="left">
<input name="MaxP" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[MaxP]; ?>">
</div></td>
</tr>
<tr>
<td class="style2">MIN P </td>
<td><strong>:</strong></td>
<td><div align="left">
<input name="MinP" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[MinP]; ?>">
</div></td>
</tr>
<tr>
<td class="style2">MIN W </td>
<td><strong>:</strong></td>
<td><div align="left">
<input name="MinW" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[MinW]; ?>">
</div></td>
</tr>
<tr>
<td class="style2">MAX W </td> 
<td><strong>:</strong></td>
<td><div align="left">
<input name="MaxW" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[MaxW]; ?>">
</div></td>
</tr>
<? } ?>
<tr>
<td class="style2">KETERANGAN</td>
<td><strong>:</strong></td>
<td><div align="left">
<input name="Keterangan" type="text" class="style1" size="30" maxlength="80" value="<? echo $nb[Keterangan]; ?>">
</div></td>
</tr>
<?
  $jkop = mysql_query("SELECT COUNT(id) as jj FROM sublab_2 WHERE IdBiaya='$nb[IdBiaya]-$nb[Idsublab]'");
 $nbx = mysql_fetch_array($jkop);
if($nbx[jj]>0){
?>
<tr bgcolor="#000066">
<td colspan="3"><div align="center" class="style3">
  <a href=" "
   onClick="wCompare23 = window.open('xx0_1.php?kunci=<? echo $ela; ?>&ceka=<? echo $ceka;?>&ela=<? echo $ela; ?>&fito=<? echo $fito; ?>&ak=<? echo $ak; ?>', 
  'wCompare23', 'width=821,height=440,left=20,Top=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare23.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
	 style="text-decoration:none">TAMPILKAN TUK KOREKSI SEMUA</a>
</div></td>
</tr>
<? 
}else{
?>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<? } ?>
<tr bgcolor="#000000">
  <td colspan="3">
  <input name="fgf" type="submit" class="style2" value="Proses" style="background:#FFFFFF">
   <input name="fgfg" type="button" class="style2" onClick="location.href='f_09.php?ela=<? echo $ela; ?>&fito=<? echo $fito; ?>';" value="Hapus"  style="background:#FFFFFF">
   <input name="ffg" type="button" class="style2" onClick="window.close()" value="Selesai"  style="background:#FFFFFF">  </td>
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
}else{

}?>
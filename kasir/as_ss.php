<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-9' WHERE id='$a[id]'");
}
if($a[User2]=='admin'){
$udd_00 = mysql_query("UPDATE konco SET Level=9 WHERE id='$a[id]' AND User='admin'");
}
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6666';
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
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left"><form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1067" colspan="3"><div align="left" class="style1">
LIST DATA RETUR
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" class="style2" cellpadding="2" cellspacing="2">
<tr>
<td width="156">No Retur </td>
<td width="8">:</td>
<td width="516"><div align="left">
 <input type="text" name="NoRetur" maxlength="12" size="12">
 <input type="hidden" name="mas" value="hari">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Sort" name="fgfgf" class="style2"><?
if($mas=='hari'){
?>
<input type="button" name="fgfgf" value="Reset" onClick="location.href='as_ss.php';" class="style2">
<?
}
?>
<input  type="button" name="fgfgf" value="Selesai" onClick="location.href='index.php';" class="style2">
</div></td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="32" bgcolor="#000099"><div align="center"><span class="style3">NO</span></div></td>
<td width="32" bgcolor="#000099"><div align="center"><span class="style3">NO RETUR</span></div></td>
<td width="32" bgcolor="#000099"><div align="center"><span class="style3">TGL RETUR</span></div></td>
<td width="60" bgcolor="#000099"><div align="center"><span class="style3">NO RM</span></div></td><td width="144" bgcolor="#000099"><span class="style3">NAMA PASIEN</span></td><td width="155" bgcolor="#000099"><span class="style3">NAMA OBAT</span></td><td width="44" bgcolor="#000099"><div align="center" class="style3">QTY</div></td><td width="77" bgcolor="#000099"><div align="right" class="style3">HARGA</div></td><td width="85" bgcolor="#000099"><div align="right" class="style3">TOTAL</div></td><td width="187" bgcolor="#000099"><span class="style3">ALASAN</span></td><td width="116" bgcolor="#000099"><span class="style3">OPR</span></td><td width="98" bgcolor="#000099"><span class="style3">TGL/JAM</span></td>
</tr>
<?
$nomer=1;
//NoRetur
if($mas=='hari'){
$kdjfkdjfkdf = mysql_query("SELECT * FROM returobatjalan WHERE id='$NoRetur' ORDER BY id desc");
}else{
$kdjfkdjfkdf = mysql_query("SELECT * FROM returobatjalan  ORDER BY id desc  LIMIT 0,29");
}
while($nn = mysql_fetch_array($kdjfkdjfkdf)){
//
$kdjkdfd  = mysql_query("SELECT NoPasien FROM rwtjalan WHERE id='$nn[IdPasien]'");
$oo = mysql_fetch_array($kdjkdfd);
//
$pc = $nomer%2;
if($pc%2){
$warna=' bgcolor="#CCFF99"';
}else{
$warna='';
}
?>
<tr  onClick="wComparec45_4_54d_add = window.open('x0_a.php?id=<? echo $nn[id]; ?>', 
  'wComparec45_4_54d_add', 'width=880,height=420,left=270,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparec45_4_54d_add.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   valign="top" <? echo $warna; ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="center"><? echo $nn[id]; ?></div></td>
<td><div align="center"><? echo "$nn[Tgl]-$nn[Bln]-$nn[Thn]"; ?></div></td>
<td><div align="center"><? echo $oo[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaPasien])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaObat])); ?></div></td>
<td><div align="center"><? echo number_format($nn[Qty]); ?></div></td>
<td><div align="right">
  <?
$kdjkfjdkfd_Dfdf   = mysql_query("SELECT HargaBeli,JmlHargaBeli FROM jualobat WHERE id='$nn[IdJual]'");
$pps= mysql_fetch_array($kdjkfjdkfd_Dfdf);
echo number_format($pps[HargaBeli]);
?>
</div></td>
<td><div align="right"><?
$Tot = $pps[HargaBeli]*$nn[Qty];
echo number_format($Tot); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Alasan])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Opr])); ?></div></td>
<td><div align="left"><? echo $nn[TglJam]; ?></div></td>
</tr>
 <?
$nomer++; } ?>
<tr>
  <td colspan="10" bgcolor="#000099">&nbsp;</td>
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
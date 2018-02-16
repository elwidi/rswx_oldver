<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
if($IdBarang>0){
$dyhhd_Dfd = mysql_query("SELECT * FROM barang_logistik WHERE id=$IdBarang");
$uf = mysql_fetch_array($dyhhd_Dfd);
}
?>
<html>
<head><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("m12wx.php?NamaBarang=<? echo $NamaBarang; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>", "wCompare", "width=580,height=440,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
 
//--></script> 
<style type="text/css">
<!--
.style1888 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-weight: bold}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body <? if($anak==3){ ?> onLoad="toCompare()" <? } ?>>
<div align="left"> 
<?
if($uf[id]){
?>
<form action="b6sst.php">
<?
}else{
?>
<form target="_self">
<? } ?><table width="414" class="style1888" border="0" cellpadding="2" cellspacing="2">
<?
if($ok[Stak]==1){
?><tr bgcolor="#FFCC99"><?
}else{
?><tr>
<? } ?>
<td colspan="3"><div align="left">
<strong>JENIS PERMINTAAN : 
<input <? if($ok[Stak]==0){ ?> checked="checked"<? } ?> type="radio" name="Stak" value="<?  echo $ok[Stak]; ?>" onClick="location.href='iin_ela.php?id=<? echo $id; 
?>&Stak=0';">
RUTIN || 
<input type="radio"  onClick="location.href='iin_ela.php?id=<? echo $id; 
?>&Stak=1';" name="Stak" <? if($ok[Stak]==1){ ?> checked="checked"<? } ?> value="<?  echo $ok[Stak]; ?>">
NON RUTIN
</strong></div></td>
</tr>
<tr>
<td width="100" >NO TXN</td>
<td width="8">:</td>
<td width="245"><div align="left">MT-<? echo  ($ok[id]); ?></div></td>
</tr>
<tr>
<td>TGL</td><td>:</td><td><div align="left"><?
echo "$ok[Tgl]-$ok[Bln]-$ok[Thn]";
?></div></td>
</tr>
<tr>
<td>JAM</td><td>:</td><td><div align="left"><? echo $ok[Jam]; ?></div></td>
</tr>
<tr>
<td>BAGIAN</td><td>:</td><td><div align="left"><? echo strtoupper($ok[NamaUnit]); ?></div></td>
</tr>
<?
 if($uf[id]){
?>
<tr>
<td>NAMA BARANG </td>
<TD>:</TD><td><div align="left"><?
echo $uf[NamaBarang];
?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left"><?
echo $uf[NamaSatuan];
?></div></td>
</tr>
 
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<input type="text" name="Qty" maxlength="12" size="12" value="1">
<input type="hidden" name="ukur" value="<? echo $ukur; ?>">
<input type="hidden" name="id" value="<?  echo $id; ?>">
<input type="hidden" name="IdBarang" value="<? echo $IdBarang; ?>">
</div></td>
</tr>
<tr valign="top">
<td>KETERANGAN</td><td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Keterangan" class="style1888"></textarea>
</div></td>
</tr><?
}else{
?><TR>
<TD>NAMA BARANG </TD>
<td>:</td><td><div align="left">
<input type="text" name="NamaBarang" maxlength="50" size="20" class="style1888" <? if($ok[Stat]==1){ ?> disabled="disabled"<? } ?>>
<input type="hidden" name="anak" value="3">
<input type="hidden" name="ukur" value="<? echo $ukur; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</TR>

<? } ?>
<tr>
  <td colspan="3"><span class="style1">
  <input  <? if($ok[Stat]>=1){ ?> disabled="disabled"<? } ?>  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   type="submit" value="Submit" name="fgf" class="style1888">
  <input type="button" name="fgfg" value="Cetak"  onClick="wCompare4f4d12 = window.open('xqa.php?id=<? echo $id; ?>', 
  'wCompare4f4d12', 'width=680,height=500,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f4d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style1888">
	<input type="button" name="fgfg" value="Kirim"  onClick="wCompare4f23232324d12 = window.open('c23wx.php?id=<? echo $id; ?>', 
  'wCompare4f23232324d12', 'width=580,height=140,left=270,Top=220,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f23232324d12.focus();"  <? if($ok[Stat]>=1){ ?> disabled="disabled"<? } ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style1888">
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    type="button" name="cdfd " value="Selesai" onClick="location.href='index.php';" class="style1888">  </span></td>
  </tr>
<tr valign="top">
  <td colspan="3"><div align="left">
   <iframe src="n6x.php?id=<? echo $id; ?>" width="800" height="250" frameborder="0"></iframe>
  </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}
?>
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND Stat>=1 AND Stat<=2");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if($a[Level]!=11){
echo "MAAF ANDA TIDAK BEHAK AKSES HALAMAN INI ";
}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
if($IdObat>0){
$dyhhd_Dfd = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
$uf = mysql_fetch_array($dyhhd_Dfd);
}
?>
<html>
<head><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("m12w.php?NamaObat=<? echo $NamaObat; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>", "wCompare", "width=580,height=440,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
 
//--></script> 
<style type="text/css">
<!--
.style1888 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
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
<form target="_self">
<table width="414" class="style1888" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="118" >NO TXN</td>
<td width="3">:</td>
<td width="667"><div align="left">MT-<? echo  ($ok[id]); ?></div></td>
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
<td>OBAT/ALKES</td><TD>:</TD><td><div align="left"><?
echo $uf[NamaObat];
?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left"><select name="IdSatuan">
<?
$idk_kdf = mysql_query("SELECT id,IdSatuan,Pengali FROM settingsatuan WHERE IdBarang='$uf[id]'");
while($cv = mysql_fetch_array($idk_kdf)){
?>
<option value="<? echo $cv[id]; ?>"><?  
$kidkfd_Dfdk = mysql_query("SELECT NamaSatuan FROM satuan WHERE id='$cv[IdSatuan]'");
$ub = mysql_fetch_array($kidkfd_Dfdk);
echo $ub[NamaSatuan];
 ?></option>
<? } ?>
</select></div></td>
</tr>
 
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<input type="text" name="Qty" maxlength="12" size="12" value="1">
<input type="hidden" name="ukur" value="<? echo $ukur; ?>">
<input type="hidden" name="id" value="<?  echo $id; ?>">
<input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
</div></td>
</tr>
<?
}else{
?><TR>
<TD>NAMA OBAT/ALKES</TD><td>:</td><td><div align="left">
<input type="text" name="NamaObat" maxlength="50" size="20" class="style1888" <? if($ok[Stat]==2){ ?> disabled="disabled"<? } ?>>
<input type="hidden" name="anak" value="3">
<input type="hidden" name="ukur" value="<? echo $ukur; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</TR>
<? } ?>
<tr>
  <td colspan="3"><span class="style1">
  <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   type="submit" value="Submit" name="fgf" class="style1888"  <? if($ok[Stat]==2){ ?> disabled="disabled"<? } ?>>
  <input type="button" name="fgfg" value="Cetak"  onClick="wCompare4f4d12 = window.open('x09.php?id=<? echo $id; ?>', 
  'wCompare4f4d12', 'width=580,height=500,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f4d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style1888">
	<input type="button"  <? if($ok[Stat]==2){ ?> disabled="disabled"<? } ?> name="fgfg" value="Terima Data"  onClick="wCompare4f23232324d12 = window.open('cw3.php?id=<? echo $id; ?>', 
  'wCompare4f23232324d12', 'width=580,height=140,left=270,Top=220,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f23232324d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style1888">
 
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    type="button" name="cdfd " value="Selesai" onClick="location.href='index.php';" class="style1888">  </span></td>
  </tr>
<tr valign="top">
  <td colspan="3"><div align="left">
   <iframe src="n6z.php?id=<? echo $id; ?>" width="800" height="250" frameborder="0"></iframe>
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

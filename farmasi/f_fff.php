<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD);
///
 $jjjjjj = mysql_query("SELECT * FROM dataobat WHERE id='$IdBarang'");
 $nn = mysql_fetch_array($jjjjjj);
 //
 $jjjjjjx = mysql_query("SELECT Harga as HargaJual FROM podetil77x WHERE IdBarang='$IdBarang' ORDER BY id desc");
 $nnx = mysql_fetch_array($jjjjjjx);
 
  $kdjfkdjkfdf_Dfdfdf  = mysql_query("SELECT COUNT(id) AS sa  FROM podetil77 WHERE IdBarang='$IdBarang' AND Tgl='$kk[Tgl]' AND Bln='$kk[Bln]' AND Thn='$kk[Thn]'");
 $gb = mysql_fetch_array($kdjfkdjkfdf_Dfdfdf);
  
 //
/// 
if(!$kk[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
 $kdidkid = mysql_query("SELECT COUNT(id) AS mm FROM settingsatuan WHERE IdBarang='$IdBarang'");
$adap= mysql_fetch_array($kdidkid);

?><html><head><script language="JavaScript">
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
	</script> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare_001129 = window.open("bhg.php?id=<? echo $IdBarang; ?>", "wCompare_001129", "width=580,height=640,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare_001129.focus(); 
}; 
 //--></script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style></head><?
 ?> 
<body <? if($adap[mm]==0){ ?> onLoad="toCompare()"<? } ?>>
 <form action="jnhhh.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="446" colspan="3"><div align="left" class="style1">
INPUT DATA BARANG
</div></td>
 <tr valign="top">
<td colspan="3"><div  align="left">
<br>
<table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" class="style2"><?
if($gb[sa]>0){
?>
<tr>
<td colspan="3" bgcolor="#990000"><div align="left" class="style3">Obat Ini Sudah di Order Di Po Lain </div></td>
</tr>
<? } ?>
<tr>
<td width="132">KODE BARANG</td>
<td width="3">:</td>
<td width="274"><div align="left"><? if($iin=='bca'){
echo $nn[KodeObat];
}else{
echo $nn[KodeBarang];
} ?></div></td>
</tr>
<tr>
<td>NAMA BARANG</td><td>:</td><td><div align="left"><?
if($iin=='bca'){
echo strtoupper($nn[NamaObat]);
}else{
echo strtoupper($nn[NamaBarang]);
}?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left">
<select name="Satuan" class="style2">
<?
$oak_D= mysql_query("SELECT id FROM settingsatuan WHERE IdBarang='$IdBarang' ORDER BY Pengali DESC");
while($yg = mysql_fetch_array($oak_D)){
?>
<option value="<? echo $yg[id]; ?>"><?
$ksisksik = mysql_query("SELECT NamaSatuan FROM settingsatuan WHERE id='$yg[id]'");
$yb = mysql_fetch_array($ksisksik);
echo $yb[NamaSatuan];
 ?></option>
<? } ?>
</select> || <a href="#" style="text-decoration:none"  onClick="wCompare_001129 = window.open('bhg.php?id=<? echo $IdBarang; ?>', 
  'wCompare_001129', 'width=580,height=500,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_001129.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >++Set++</a>
</div></td>
</tr>
<?
  if($adap[mm]==0){ 
?>
<tr class="style2" bgcolor="#FFCC99">
<td colspan="3"><div align="center">SATUAN BELUM DISETTING</div></td>
</tr>
<?  
  }else{?>
<tr>
<td>HARGA</td><td>:</td><td><div align="left"> 
<input type="text" name="Harga" maxlength="12" size="12" class="style2"   value="<? echo $nnx[HargaJual]; ?>"/>
</div></td>
</tr>
<tr>
<td>PRC</td><td>:</td><td><div align="left">
<input name="PotPrc" type="text" class="style2" size="6" maxlength="6" />
%
</div></td>
</tr>
<?
  if($oo[id]){
 ?>
 <tr>
 <td>PENGALI</td><td>:</td><td><div align="left"><? echo $oo[Pengali]; ?></div></td>
 </tr>
 <? 
}
?>
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<input name="Qty" type="text" class="style2" value="1" size="12" maxlength="12" />
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdBarang" value="<? echo $IdBarang; ?>">
<input type="hidden" name="iin" value="<? echo $iin; ?>" />
</div></td>
</tr>
<tr valign="top">
<td>KETERANGAN</td>
<td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Keterangan" class="style2"></textarea>
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Simpan" name="dfgf" />
<input type="button" name="fgf" value="Selesai" onClick="window.close()" />
</div></td>
</tr>
<? } ?>
</table>
</div></td>
</tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
    
   </div></td>
 </tr>
</table>
</tr></table>
</form></body></html>
<?
}
?>

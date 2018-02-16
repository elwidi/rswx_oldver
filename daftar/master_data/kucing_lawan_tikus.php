<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#0099CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<?
include "pre_1.php";
?>
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
<div align="left"><form target="_self">
<table width="1156" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="1148" colspan="3"><div align="left">
<table width="658" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="123">NAMA  PASIEN </td>
<td width="5">:</td>
<td width="510"><div align="left">
<input type="text" name="NamaPasien" maxlength="40" size="20" class="style1">
<input type="hidden" name="ada" value="3">
</div></td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input name="FGFGF" type="submit" class="style1" value="Cari">
  <input type="button" name="ffgf" value="Kembali" onClick="location.href='../index.php';" class="style1">
 <?
 if($ada==3 || $IdPasien!=''){
 ?>
 <input type="button" name="dfdfdfd" value="Reset" onClick="location.href='kucing_lawan_tikus.php';" class="style1">
 <?
 }
 if($pa==23){
 ?>  
 <? 
 }else{
 ?> 
  
 <? } ?> </div></td>
  </tr> 
</table>
</div></td>
</tr> 
<tr>
<td colspan="3" valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr bgcolor="#FFCCCC">
<td width="18"><strong>NO</strong></td>
<td width="60"><div align="center"><strong>REC</strong></div></td>
<td width="83"><strong>NO RM</strong></td>
<td width="93"><strong>NAMA PASIEN</strong></td>
<td width="68"><strong>TGL LAHIR</strong></td>
<td width="149"><strong>ALAMAT</strong></td>
<td width="122"><strong>KEC</strong></td>
<td width="134"><strong>KELURAHAN</strong></td>
<td width="114"><strong>RT</strong></td>
<td width="131"><strong>RW</strong></td>
<td width="106"><div align="center"><strong>TELP</strong></div></td>
</tr> 
<?
$nomer=1;
if($ada==3){
$kdjfkdfd = mysql_query("SELECT * FROM datapasien WHERE NamaPasien like '$NamaPasien%' LIMIT 0,100");
}elseif($pa==23){
$kdjfkdfd = mysql_query("SELECT * FROM datapasien  WHERE Kecamatan!='' AND Kelurahan!='' and Rt!='' AND Rw!='' order by id desc Limit 0,60");
}else{
$kdjfkdfd = mysql_query("SELECT * FROM datapasien   order by id desc Limit 0,260");
}
while($aa = mysql_fetch_array($kdjfkdfd)){
//
 //
$nc = $nomer%2;
if($nc==1){
$warna = 'bgcolor="#D9FDEE"';
}else{
$warna = '';
}
if($aa[id]==$IdPasien){
?><tr class="style1" valign="top" bgcolor="#CCCCCC"><?
}else{ ?>
<tR <? echo $warna; ?>  valign="top" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='kucing_lawan_tikus.php?ada=<? echo $ada; ?>&NamaPasien=<? echo $NamaPasien; ?>&IdPasien=<? echo $aa[id]; ?>';" >
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="center"><? echo "#$aa[id]";  ?></div></td>
<td><div align="center"><? echo $aa[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($aa[NamaPasien]));?></div></td>
<td><div align="left"><? echo $aa[tgllhr]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($aa[Alamat])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($aa[Kecamatan])); ?></div></td>
 <td><div align="left"><? 
if($aa[id]==$IdPasien){
?><input name="text" type="text" class="style1" id="suggest" autofocus="autofocus"  />
<? }else{
echo ucfirst(strtolower($aa[Kelurahan]));
}  ?></div></td>
<td><div align="left"><? echo  $aa[Rt]; ?></div></td>
<td><div align="left"><? echo  $aa[Rw]; ?></div></td>

<td><div align="center"><? echo $aa[Telp]; ?></div></td>
</tR>
<?
$nomer++; } ?>
</table> 

</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}else{
echo "anda tidak berhak mengakses halaman ini";
}?>
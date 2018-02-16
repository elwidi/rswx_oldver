<?
session_start();
include "../konek.php";
 include "../ceke.php";
  ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#999999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {color: #000000}
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
}
.style12 {color: #333333}
-->
</style>
</head>
<body> 
<div align="center">
<table border="1" cellpadding="0" cellspacing="0">
<tr>
<td bordercolor="#000000">
<div align="center">
<table width="1023" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr  bgcolor="#FFCCCC">
<td height="35" colspan="9" bgcolor="#FFFFFF"><div align="center" class="style11 style12">
DATA SUPPLIER
</div></td>
</tr>
<TR  bgcolor="#FFCCCC" valign="top">
<td width="19"><div align="center" class="style9"><span class="style5">NO</span></div></td>
<td width="65"><div align="center" class="style9">
  <div align="left"><span class="style5">KODE SUPPLIER </span></div>
</div></td>
<td  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='kompor.php?bab=12';" width="231"><div align="center" class="style9">
  <div align="left"><span class="style5">NAMA SUPPLIER </span></div>
</div></td>
<td width="195"><div align="center" class="style9">
  <div align="left"><span class="style5">ALAMAT</span></div>
</div></td>
<td width="133"><div align="center" class="style9">
  <div align="left"><span class="style5">TELP</span></div>
</div></td>
<td width="124"><div align="center" class="style9">
  <div align="left"><span class="style5">KOTA</span></div>
</div></td>
<td width="77"><div align="center" class="style9">
  <div align="left"><span class="style5">OPR</span></div>
</div></td>
<td width="103"><div align="center" class="style9"><span class="style5">TGLJAM</span></div></td>
 <td width="56"><div align="center" class="style9"><span class="style5">SUB BID<br>USAHA</span></div></td>
 </TR>

<?
if($kopi=='susu'){ }else{
?>
<tr>
<td colspan="9" bgcolor="#D3FEF2">
<form target="_self">
<table width="752" border="0" cellpadding="2" cellspacing="2" bgcolor="#66FF00">
<tr>
<td width="114" bgcolor="#D3FEF2"><span class="style8">NAMA SUPPLIER </span></td>
<td width="20" bgcolor="#D3FEF2"><span class="style5">:</span></td>
<td width="564" bgcolor="#D3FEF2"><span class="style8">
  <input type="text" name="NamaSuplier" maxlength="20" size="20">
  <input type="hidden" name="iin" value="1">
 || 
 <input name="Porses" type="submit" class="style8" value="Proses"> 
 <?
  if($a[Level]==98 && $taat_selalu[delapan]==0){
 
 }elseif($a[Level]==98 && $taat_selalu[delapan]==1){
?><input name="Kembali" type="button" class="style8" onClick="location.href='kopi_susu.php';" value="Tambah">
  <?  }else{
 ?><input name="Kembali" type="button" class="style8" onClick="location.href='kopi_susu.php';" value="Tambah">
  <? } ?><input name="Kembali" type="button" class="style8" onClick="location.href='../3w.php';" value="Kembali">
  
  <input name="kekr"  type="button" class="style8" 
 onClick="location.href='kompor.php?NamaSuplier=<? echo $NamaSuplier; ?>&kopi=susu';" value="Clear">
 </span></td>
</tr>
</table>
</form>
</td>
</tr>
<? } ?>
<?
$no=1;
if($a[Level]==98){
 if($bab==12){
 $datat = mysql_query("SELECT * FROM supplier3 WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY NamaSuplier desc LIMIT 0,120");
 }else{
 $datat = mysql_query("SELECT * FROM supplier3 WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY id desc LIMIT 0,120");
 }
 }elseif($a[Level]==6){
 if($bab==12){
 $datat = mysql_query("SELECT * FROM supplier2 WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY NamaSuplier desc LIMIT 0,120");
 }else{
 $datat = mysql_query("SELECT * FROM supplier2 WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY id desc LIMIT 0,120");
  } 
}else{
	 if($bab==12){
 $datat = mysql_query("SELECT * FROM supplier  WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY NamaSuplier asc LIMIT 0,120");
 }else{
 $datat = mysql_query("SELECT * FROM supplier WHERE NamaSuplier LIKE '$NamaSuplier%' ORDER BY id desc LIMIT 0,120");
  } 
}
 while($aa = mysql_fetch_array($datat)){
$dkjfkdjfkdjfkdjkdjd = mysql_query("SELECT COUNT(id) as jj FROM obatsupplier WHERE IdSupplier='$aa[id]'");
$posk = mysql_fetch_array($dkjfkdjfkdjfkdjkdjd);
$pe = $no%2;
if($pe==1){
$warna='';
}else{
$warna='bgcolor="#FFFF99"';
}
 ?>
<tr <? echo $warna; ?> valign="top" onClick="location.href='dionotmn.php?id=<? echo $aa[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
 class="style8"> 
<td><div align="center" class="style4"><? echo $no; ?></div></td>
<td><div align="left" class="style4"><? 
 echo "$aa[id]";  ?></div></td>
<td><div align="left" class="style4"><? echo strtoupper($aa[NamaSuplier]); ?></div></td>
<td><div align="left" class="style4"><? echo strtoupper($aa[Alamat]); ?></div></td>
<td><div align="left" class="style4"><? echo strtoupper($aa[Telp]); ?></div></td>
<td><div align="left" class="style4"><? echo strtoupper($aa[Kota]); ?></div></td>
<td><div align="left"  class="style4"><? echo strtoupper($aa[Opr]); ?></div></td>
<td><div align="left" class="style4"><? echo $aa[TglJam]; ?></div></td> 
<td><div align="left"><?
$dokdkd = mysql_query("SELECT BidangUsaha FROM bidang_usaha WHERE id='$aa[Level]'");
$ub = mysql_fetch_array($dokdkd);
echo $ub[BidangUsaha];
?></div></td>
</tr>
<? $no++; } ?>
<TR  bgcolor="#FFCCCC">
<td colspan="9">&nbsp;</td>
</TR>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>


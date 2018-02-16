<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$IdDetil=$_GET["IdDetil"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$jhsjdskdad2  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'"); 
$hh = mysql_fetch_array($jhsjdskdad2);

////////////////////////////////////////////
  $kikidkdik = mysql_query("SELECT SUM(Harga) AS jj FROM txnugd WHERE IdPasien='$uu[id]'");
  $cc = mysql_fetch_array($kikidkdik);
////
 $dkjfkdjfkdjfkd0098 = mysql_query("SELECT COUNT(id) AS hh FROM jualobat WHERE RegId='$uu[RegId]'");
$yh = mysql_fetch_array($dkjfkdjfkdjfkd0098);
/////////////////////////////////////////////
  $kdjfkdjfkdf  = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$hh[RegId]'");
  $js = mysql_fetch_array($kdjfkdjfkdf);
//
   $ksiskisks_334343  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
  $h_12 = mysql_fetch_array($ksiskisks_334343);
//D
if($cc[jj]>0){
echo "MAAF KAMI MENEMUKAN ADA TRANSAKSI JADI TIDAK BISA BATAL";
}elseif($h_12[jj]>0){
echo "MAAF KAMI MENEMUKAN ADA TRANSAKSI RADIOLOGI ";
}elseif($yh[hh]>0){
echo "ADA TRANSAKSI OBAT ";
 }elseif($a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style122 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body>
<div align="left">
<?
if($id>0){
?>
<form action="h7.php">
<? }else{ ?>
<form target="_self">
<? }?>
<table width="1376" border="0" cellpadding="2" cellspacing="2">
 <tr bgcolor="#59BA54" class="style24">
   <td height="26" colspan="2" bgcolor="#59BA54">
     <div align="left">
         List Pasien Batal
     </div></td></tr> 
	 <tr>
	 <td colspan="3"><div align="left"><?
	  include "../kucrit.php";
	 ?></div></td>
	 </tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="3" cellspacing="3">
<tr>
<td width="1482" colspan="3">
  <span class="style1">HALAMAN PEMBATALAN PASIEN</span></td>
</tr>
<tr valign="top" >
<td colspan="3" valign="top">
<table width="1374" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="374"> 
<div align="left">
<table width="374" border="0" cellpadding="1" cellspacing="1" class="style2">
<?
if(!$uu[id]){
?>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left">
<input name="NamaPasien" type="text" class="style2" size="20" maxlength="30">
</div></td>
</tr>
<tr>
<td>NO RM</td><td>:</td><td><div align="left">
<input name="NoPasien" type="text" class="style2" size="20" maxlength="20">
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#59BA54"><div align="left">
<input type="submit" value="Sort" name="fgf" class="style2">
<?
/*<input type="button" name="fgf2" class="style2" value="Cek By Periode"  onClick="wCompare = window.open('juj_D.php?mas=bagong', 
  'wCompare', 'width=580,height=200,left=470,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >*/ ?>
<input type="button" name="dfd" value="Selesai" onClick="location.href='index.php';" class="style2">
</div></td>
</tr>
<?
}else{
?><tr>
<td width="113">REGID</td>
<td width="3">:</td>
<td width="248"><div align="left">
<? echo $uu[RegId];?>
</div></td>
</tr>
<tr>
  <td>NO RM </td>
  <td>:</td>
  <td><div align="left"><?
  echo $uu[NoPasien];
   ?></div></td>
</tr>
<tr>
  <td>NAMA PASIEN </td>
  <td>:</td>
  <td><div align="left"><? echo strtoupper($uu[NamaPasien]); ?></div></td>
</tr>
<tr>
  <td>DOKTER</td>
  <td>:</td>
  <td><div align="left"><? echo $uu[NamaDokter]; ?></div></td>
</tr>
<tr>
  <td>POLI</td>
  <td>:</td>
  <td><div align="left"><? echo strtoupper($uu[Bagian]);?></div></td>
</tr>
<tr>
  <td>USIA</td>
  <td>:</td><?
$pch=explode(":",$uu[BlnUmur]);
  ?>
  <td><div align="left"><? echo "$uu[Umur] Thn $pch[0] Bln $pch[1] Hr  "; ?></div></td>
</tr>
<tr valign="top">
  <td>ALASAN BATAL </td>
  <td>:</td>
  <td><div align="left">
  <?
  $jshjdsjdhsj  = mysql_query("SELECT * FROM alasanbatal WHERE id='$IdDetil'");
  $ya  = mysql_fetch_array($jshjdsjdhsj);
  if($ya[id]){ ?><textarea rows="4" cols="30" name="Alasan" class="style2"><? echo $ya[Alasan]; ?></textarea>
  <? }else{ ?><input name="fgff" type="button" class="style2"   onClick="wCompare = window.open('dz.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=400,left=470,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" value="Ambil Alasan >>>" ><? } ?>
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div>  </td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input type="submit" value="Update" name="fgf" class="style2" <? if($ya[id]){ }else{ ?> disabled="disabled"<? } ?>>
  <?
  if($ya[id]){
  ?>
  <input type="button" name="dfd" value="Reset" onClick="location.href='xw.php?id=<? echo $id; ?>';" class="style2">
  <?
  }
  ?>
  <input  type="button" name="fffgf" value="Selesai" onClick="location.href='index.php';" class="style2">
  </div></td>
  </tr>
  <? } ?>
</table>
</div>
</td>
<td width="986"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style122">
<tr>
<td width="28" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
<td width="39" bgcolor="#59BA54"><strong>TGL MASUK</strong></td>
<td width="52" bgcolor="#59BA54"><strong>NO RM</strong></td>
<td width="191" bgcolor="#59BA54"><strong>NAMA PASIEN</strong></td>
<td width="137" bgcolor="#59BA54"><strong>BAGIAN</strong></td>
<td width="154" bgcolor="#59BA54"><strong>DOKTER</strong></td>
<td width="118" bgcolor="#59BA54"><strong>ALASAN</strong></td>
<td width="126" bgcolor="#59BA54"><strong>OPR</strong></td>
</tr>
<?
$NamaPasien = $_GET["NamaPasien"];
$NoPasien = $_GET["NoPasien"];
$Na = strlen($NamaPasien);
$No = strlen($NoPasien);
$nomer=1;
if($No>0){
$kdjfldkfldkfld = mysql_query("SELECT * FROM rwtjalan_btl WHERE NoPasien='$NoPasien'");
}elseif($Na>0){
$kdjfldkfldkfld = mysql_query("SELECT * FROM rwtjalan_btl WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY id DESC limit 0,23");
}else{
$kdjfldkfldkfld = mysql_query("SELECT * FROM rwtjalan_btl ORDER BY id DESC limit 0,23");
}
while($kk = mysql_fetch_array($kdjfldkfldkfld)){
$we =  $nomer %2;
if($we==1){
 $warna ='bgcolor="#FFCCCC"';
 }else{
 $warna ='';
}
 ?>
<tr <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo "$kk[TglMasuk]-$kk[BlnMasuk]-$kk[ThnMasuk]"; ?></div></td>
<td><div align="left"><? echo $kk[NoPasien]; ?></div></td>
<td><div align="left"><? echo strtoupper($kk[NamaPasien]); ?></div></td>
<td><div align="left"><? echo strtoupper($kk[Bagian]); ?></div></td>
<td><div align="left"><? echo $kk[NamaDokter]; ?></div></td>
<td><div align="left"><? echo strtoupper($kk[Alasan]); ?></div></td>
<td><div align="left"><? echo strtoupper($kk[Pembatal]); ?></div></td>
</tr>
 <?
$nomer++; } ?><tr>
  <td colspan="8" bgcolor="#59BA54">&nbsp;</td>
  </tr>
</table>
</div></td>
</tr>
</table>
</td> 
</tr>
</table>
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

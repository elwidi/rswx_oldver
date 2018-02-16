<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
//
 $umurnya = mysql_query("SELECT 	* FROM datapasien WHERE NoPasien='$uu[NoPasien]'");
 $k=mysql_fetch_array($umurnya);
//
$kdjfd_fdfd = mysql_query("SELECT * FROM rujukan WHERE id='$IdRujukan'");
$ada = mysql_fetch_array($kdjfd_fdfd);
$IdRujukan=$ada[id];
//
$kikdi_Dfd = mysql_query("SELECT * FROM dokter WHERE id='$IdDokter'");
$ada2 = mysql_fetch_array($kikdi_Dfd);
$IdDokter=$ada2[id];
//
$kdjfiddk = mysql_query("SELECT * FROM bagian WHERE id='$IdBagian'");
$ada3 = mysql_fetch_array($kdjfiddk);
$IdDept=$ada3[id];
//
$kdjfsdsdsiddk = mysql_query("SELECT * FROM dataperusahaan WHERE id='$IdPer'");
$ada4 = mysql_fetch_array($kdjfsdsdsiddk);
$IdPenjamin=$ada4[id];
if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><?
if($ada3[id]){
include "arah_4.php";
}elseif($ada2[id]){
include "arah_3.php";
}elseif($ada[id]){
include "arah_2.php";
}else{
include "arah_1.php";
} ?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
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
<td colspan="3" valign="top">
<div align="left">
<img src="../gambar/depan.png"></div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#990000"><div align="left" class="style1">
HALAMAN PERMINTAAN RUJUKAN
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <?
  if($ada4[id]){}else{
  ?><tr>
  <td colspan="3"><div align="left">
  <a href="ed_d.php" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KEMBALI </a>|| 
  <a href="x0_129.php?id=<? echo $id; ?>" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >RESET</a>
  </div></td>
  </tr>
  <? } ?>
  <tr>
  <td bgcolor="#FFFF66">TRIGER</td>
  <td bgcolor="#FFFF66">:</td>
  <td bgcolor="#FFFF66"><div align="left"><? echo "$k[NoPasien]/$k[NamaPasien]-$k[id]"; ?></div></td>
  </tr>
  <tr>
  <td width="154">NO RM</td>
  <td width="8">:</td>
  <td width="351"><div align="left"><? echo "$uu[NoPasien]"; ?></div></td>
  </tr>
  <tr>
  <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($uu[NamaPasien]); ?></div></td>
  </tr>
  <tr>
  <td>BAGIAN</td><td>:</td><td><div align="left"><? echo $uu[Bagian]; ?></div></td>
  </tr>
  <tr>
  <td>RUJUKAN </td>
  <td>:</td><td><div align="left">
  <?
  if($ada[id]){
  echo "$ada[NamaRujukan]";
  }else{
  ?><input type="text" class="style2" id="suggest" />
  <? } ?></div></td>
  </tr>
  <tr>
    <td>DOKTER 7AN </td>
    <td>:</td>
    <td><div align="left">
	<?
	if($ada2[id]){
	echo "$ada2[NamaDokter]";
	}else{
	?><input type="text" class="style2" id="suggest" />
	<? } ?></div></td>
  </tr>
    <tr>
    <td>POLI/BAGIAN </td>
    <td>:</td>
    <td><div align="left">
	<?
	if($ada3[id]){
	echo "$ada3[NamaBagian]";
	}else{
	?><input type="text" class="style2" id="suggest" />
	<? } ?></div></td>
  </tr>
    <tr>
      <td>PENJAMIN</td>
      <td>:</td>
      <td><div align="left">
	  <?
	if($ada4[id]){
	echo "$ada4[NamaPer]";
	}else{
	?><input type="text" class="style2" id="suggest" />
	<? } ?>
	  </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?
	if($ada4[id]){
	?><tr>
      <td colspan="3" bgcolor="#0000CC"><div align="left">
	  <input type="button" name="fgfgf" value="Lanjutkan" onClick="location.href='simpan_daftar2.php?budi=<? echo $budi; ?>&id=<? echo $k[id]; 

	?>&IdDept=<? echo $IdDept; 

	?>&IdDokter=<? echo $IdDokter; ?>&IdRujukan=<? echo $IdRujukan; 

	?>&IdPenjamin=<? echo $IdPenjamin; ?>&JenisRawat=JALAN&Lempar=<? echo $uu[id]; ?>';">
	  <input type="button" name="ffg" value="Kembali" onClick="location.href='ed_d.php';">
	  </div></td>
      </tr>
	  <? } ?>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}else{

}
?>
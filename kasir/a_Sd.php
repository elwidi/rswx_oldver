<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdfd = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$ua = mysql_fetch_array($kdjfkdfd);
if(!$ua[id]){
echo "RECORD SET TIDAK DIKENAL";
}else{
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
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
 .style21 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
 }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table width="935" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="927" colspan="3"><div align="left">
<span class="style1">HISTORY DATA PERAWATAN</span><br />
<table border="0" class="style2" cellpadding="2" cellspacing="2">
<tr>
<td width="135">NoPasien</td>
<td width="8">:</td>
<td width="354"><div align="left"><? echo $ua[NoPasien]; ?></div></td>
</tr> 
<tr>
<td>Nama Pasien</td><td>:</td><td><div align="left"><? echo ucfirst(strtolower($ua[NamaPasien])); ?></div></td>
</tr>
<tr valign="top">
<td>Alamat</td><td>:</td><td><div align="left"><? echo ucfirst(strtolower($ua[Alamat])); ?></div></td>
</tr>
</table></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="950" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="17" height="21" bgcolor="#999933"><span class="style3">NO</span></td>
<td width="56" bgcolor="#999933"><span class="style3">NO PASIEN</span></td>
<td width="89" bgcolor="#999933"><span class="style3">NAMA </span></td>
<td width="77" bgcolor="#999933"><div align="right"><span class="style3">TGL MASUK</span></div></td>
<td width="61" bgcolor="#999933"><div align="center"><span class="style3">JAM MASUK</span></div></td>
<td width="65" bgcolor="#999933"><span class="style3">7AN</span></td>
<td width="102" bgcolor="#999933"><span class="style3">DOKTER</span></td>
<td width="117" bgcolor="#999933"><span class="style3">PTGAS</span></td>
<td width="98" bgcolor="#66FF33"><strong>LAB</strong></td>
<td width="95" bgcolor="#66FF33"><strong>TXN</strong></td>
<td width="81" bgcolor="#66FF33"><strong>RAD</strong></td>
<td width="81" bgcolor="#66FF33"><strong>DIAGNOSA</strong></td>
</tr>
<?
$nomer=1;
$kdjfkdfd_Dfdfd  = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$ua[NoPasien]'");
while($bb = mysql_fetch_array($kdjfkdfd_Dfdfd)){
$vv=$bb;
$na =$nomer%2;
if($na==1){
$warna='';
}else{
$warna='bgcolor="#CCFF99"';
}?>
<tr valign="top"  <? echo $warna; ?>    >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($bb[NamaPasien])); ?></div></td>
<td><div align="right"><? echo "$bb[TglMasuk]";
$bln=$bb[BlnMasuk]; $thn1=$bb[ThnMasuk];
include "../bulan2.php"; 
 ?></div></td>
 <td><div align="center"><? echo $bb[JamMasuk]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($bb[Bagian])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($bb[NamaDokter])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($bb[Operator])); ?></div></td>
<td><div align="left"> 
 <table border="0" cellpadding="1" cellspacing="1" class="style21">
<?
$nu=1;
  $kdjfkdjfkdf  = mysql_query("SELECT NamaBiaya FROM txnjalan2 WHERE RegId='$vv[RegId]'");
  while($js = mysql_fetch_array($kdjfkdjfkdf)){
  $cap=$nu%2;
  if($cap==1){
  $warna=' bgcolor="#FF9999"';
  }else{
  $warna='';
  }
 ?> 
<tr valign="top" <? echo $warna; ?>>
 <td width="27"><div align="center"><? echo $nu; ?></div></td><td width="58"><div align="left"><? echo ucfirst(strtolower($js[NamaBiaya])); ?></div></td>
 </tr>
  <?  $nu++; }
  
?></table>
 </div></td>
<td><div align="left">
<table border="0" class="style21">
<?
$ne=1;
$kikidkdik = mysql_query("SELECT NamaBiaya FROM txnugd WHERE IdPasien='$vv[id]'");
while($cc = mysql_fetch_array($kikidkdik)){
  $cap2=$ne%2;
  if($cap2==1){
  $warna2=' bgcolor="#FFFF33"';
  }else{
  $warna2='';
  }?>
<tr valign="top"<? echo $warna2; ?>>
<td><div align="center"><? echo $ne; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($cc[NamaBiaya])); ?></div></td>
</tr>
<?
$ne++; } ?>
</table>
</div></td>
<td><div align="left">
<table border="0" class="style21"><?
$jua=1;
  $ksiskisks_334343  = mysql_query("SELECT NamaBiaya FROM txnjalan WHERE RegId='$vv[RegId]' AND KodeKelompok='Rad'");
  while($h_12 = mysql_fetch_array($ksiskisks_334343)){
 $cap3=$jua%2;
  if($cap3==1){
  $warna3=' bgcolor="#B8FBB5"';
  }else{
  $warna3='';
  } ?>
  <tr valign="top" <? echo $warna3; ?>  >
  <td><div align="center"><? echo $jua; ?></div></td>
  <td><div align="left"><? echo  ucfirst(strtolower($h_12[NamaBiaya])); ?></div></td>
  </tr>
  <?
  $jua++; } 
?>
</table></div></td>
<td width="18" bgcolor="#FFCCCC"><div align="left"><?
 $jdsfjdjf = mysql_query("SELECT Diagnosa FROM icd_rj WHERE IdPasien='$vv[id]'");
while($jk = mysql_fetch_array($jdsfjdjf)){
echo "<i>"; echo ucfirst(strtolower($jk[Diagnosa])); echo " </i>";;
}
?></div></td></tr>
 
<?
$nomer++; } ?><tr>
  <td colspan="11" bgcolor="#999933">&nbsp;</td>
  <td bgcolor="#FFCCCC">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>
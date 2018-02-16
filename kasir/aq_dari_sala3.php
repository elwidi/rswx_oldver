<?
session_start();
include "../salaman.php";
include "../konek.php";
$dkdkfdfd_Dfdfd =  mysql_query("select * from kira_lahir where id='$id'");
$hp = mysql_fetch_array($dkdkfdfd_Dfdfd);
//
$diuddfd_DFdf = mysql_query("SELECT * FROM rwtjalan WHERE id='$hp[IdRj]'");
$ii = mysql_fetch_array($diuddfd_DFdf);
if(!$hp[id] || !$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head>
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
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="617" colspan="3"><div align="left">
<span class="style1">DETAIL INFORMASI PASIEN REC #<? echo $id; ?></span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="80">No Pasien</td>
<td width="3">:</td>
<td width="156"><div align="left"><?
echo $ii[NoPasien];
?></div></td>
</tr>
<tr>
<td>Nama Pasien</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($ii[NamaPasien])); 
?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="24" bgcolor="#FFFF66"><div align="center"><strong>NO</strong></div></td>
  <td width="90" bgcolor="#FFFF66"><strong>TGL MASUK</strong></td>
  <td width="180" bgcolor="#FFFF66"><strong>DOKTER</strong></td>
  <td width="289" bgcolor="#FFFF66"><strong>BAGIAN</strong></td>
  </tr>
  <?
  $nom=1;
  $kjfgfG_Fgffg  = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$ii[NoPasien]'");
  while($bb = mysql_fetch_array($kjfgfG_Fgffg)){
  $na = $nom%2;
  if($na==1){
  $warna=' bgcolor="#FEE4CD"';
  }else{
  $warna=''; 
  }  ?>
  <tr <? echo $warna; ?> valign="top">
  <td><div align="center"><? echo $nom; ?></div></td>
  <td><div align="right"><? echo "$bb[TglMasuk]-$bb[BlnMasuk]-$bb[ThnMasuk]"; ?></div></td> 
  <td><div align="left"><? echo ucfirst(strtolower($bb[NamaDokter])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($bb[Bagian])); ?></div></td> 
  </tr>
  <?
  $nom++; } ?>
  <tr>
  <td colspan="4" bgcolor="#FFFF66">&nbsp;</td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</body>
</html>
<? } ?>
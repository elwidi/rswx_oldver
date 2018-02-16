<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
$NamaBiaya  = $_GET["NamaBiaya"];
if($a[Level]==12 || $a[Level]==91){
$ldkldkfldklfd = mysql_query("SELECT * FROM paketlab WHERE id='$id'");
$ya = mysql_fetch_array($ldkldkfldklfd);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<form action="98d_d.php">
<table width="690" border="0" cellpadding="1" cellspacing="1">
<tr>
<td colspan="3"><div align="left">
<img src="../gambar/lab.gif">
</div></td>
</tr>
<TR>
<TD colspan="2" valign="top">
<div align="left">

<table width="369"  border="0" cellpadding="2" cellspacing="2">
<TR>
<td><span class="style1">NAMA PAKET</span></td>
<td>:</td><td><div align="left">
<input name="NamaPaket" type="text" class="style1" size="30" maxlength="100" value="<?  echo $ya[NamaPaket]; ?>" />
<input type="hidden" name="id" value="<? echo $ya[id]; ?>">
</div></td>
</TR>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="fgfg" type="submit" class="style1" value="Submit" />
<input name="fgfgf" type="button" class="style1"  onclick="location.href='makan_gemblong.php';" value="Kembali" />
<input name="fgdfdffg" type="button" class="style1" onClick="location.href='index.php';" value="Depan" />
<input name="ffgfgfgf" type="button" class="style1"  onclick="location.href='../keluar.php';" value="Keluar" />
</div></td>
</tr>
<?
$cekd = mysql_query("SELECT COUNT(id) AS jj FROM tabelbiayax WHERE Kelompok3='$ya[id]'");
$ss= mysql_fetch_array($cekd);
if($ss[jj]>0){
?>
<tr>
<td colspan="3"   valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="26" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="258" bgcolor="#D4D0C8" colspan="2"><strong>PEMERIKSAAN</strong></td>
</tr>
<?
if($ya[id]>0){
$nom=1;
$mno = mysql_query("SELECT * FROM tabelbiayax WHERE Kelompok3='$ya[id]'");
while($nb = mysql_fetch_array($mno)){
?>
<tr>
<td><div  align="center"><? echo $nom; ?></div></td>
<td><div align="left"><? echo strtoupper($nb[NamaBiaya]); ?></div></td>
<td><div align="center"><a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="ff_Fg.php?id=<? echo $id; ?>&IdDetil=<? echo $nb[id]; ?>" style="text-decoration:none">HAPUS</a></div></td>
</tr>
<?
$nom++;
}
?>
<?
}?>
</table>
</div>
</td>
</tr> 

<? } ?>
</table>
</div>
</TD><td width="1063"       valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="43" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
<td width="331" bgcolor="#D4D0C8"><strong>NAMA PAKET</strong></td>
<td width="84" bgcolor="#D4D0C8"><div align="center"><strong>ITEM</strong></div></td>
<td width="84" bgcolor="#D4D0C8"><strong>OPR</strong></td>
<td width="156" bgcolor="#D4D0C8"><strong>TGLJAM</strong></td>
</tr>
<?
$nomer=1;
$kdfjdkjfd_Dfd = mysql_query("SELECT * FROM paketlab order by id");
while($kk = mysql_fetch_array($kdfjdkjfd_Dfd)){
?>
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='s_erre.php?id=<? echo $kk[id]; ?>';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($kk[NamaPaket]); ?></div></td>
<td><div align="center"><? 
$cek = mysql_query("SELECT COUNT(id) AS jj FROM tabelbiayax WHERE Kelompok3='$kk[id]'");
$kn = mysql_fetch_array($cek);
if($kn[jj]>0){
echo $kn[jj];
}else{
echo "."; 
}
?></div></td>
<td><div align="left"><? echo strtoupper($kk[Opr]); ?></div></td>
<td><div align="left"><? echo $kk[TglJam]; ?></div></td>
</tr>

<?
$nomer++; } ?><tr>
  <td colspan="5" bgcolor="#D4D0C8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</TR>
</table>
</form>
</div>
</body>
</html>
<? }else{
header("Location:../keluar2.php");
}
?>
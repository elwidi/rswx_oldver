<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$as = $_GET["as"];
$NamaDokter  = $_GET["NamaDokter"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
 if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){

?>
<html>
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
<table width="790" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="782" colspan="3"><div align="left" class="style1">
DATA TELPHONE <? 
if($as==9){
?>RUJUKAN <? 
}else{
?>DOKTER  <? } ?><br>
<form target="_self">
<table border="0" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="149">NAMA DOKTER</td>
<td width="8">:</td>
<td width="306"><div align="left">
<input type="text" name="NamaDokter" maxlength="20" size="20" class="style2">
<input type="hidden" name="as" value="<? echo $as; ?>">
</div></td>
</tr>
</table>
</form>
</div></td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="3" cellspacing="3" class="style2">
<tr>
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="160" bgcolor="#D4D0C8"><strong>NAMA</strong></td>
<td width="290" bgcolor="#D4D0C8"><strong>ALAMAT</strong></td>
<td width="122" bgcolor="#D4D0C8"><strong>TELP </strong></td>
<td width="142" bgcolor="#D4D0C8"><strong>HP</strong></td>
</tr>
<?
$nomer =1;
 if($as==10){
$kdjfkdk = mysql_query("SELECT * FROM dataperusahaan WHERE NamaPer like '$NamaPer%' ORDER BY NamaPer");
 }elseif($as==9){
$kdjfkdk = mysql_query("SELECT * FROM rujukan WHERE NamaRujukan like '$NamaDokter%' ORDER BY NamaRujukan");
}else{
$kdjfkdk = mysql_query("SELECT * FROM dokter WHERE NamaDokter like '$NamaDokter%' ORDER BY NamaDokter");
}
while($x = mysql_fetch_array($kdjfkdk)){ 
$mi = $nomer%2;
if($mi==1){
$warna ='bgcolor="#A6FAB0"';
 }else{
$warna ='';}
?>
<tr <? echo $warna; ?> onClick="location.href='g_gg.php?as=<? echo $as; ?>&id=<?  echo $id; ?>&IdDokter=<? echo $x[id]; ?>';"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? 
if($as==10){
echo strtoupper($x[NamaPer]); 
}elseif($as==9){
echo strtoupper($x[NamaRujukan]); 
}else{
echo strtoupper($x[NamaDokter]); 
}?></div></td>
<td><div align="left"><? echo strtoupper($x[Alamat]); ?></div></td>
<td><div align="left"><? echo $x[Telp]; ?></div></td>
<td><div align="left"><? echo $x[Hp]; ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>
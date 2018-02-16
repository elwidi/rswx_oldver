<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
if(!$KodeBagian){
$KodeBagian=19;
}else{
$KodeBagian=$KodeBagian;
}
if(!$bln){
$bln=10; 
$thn1=2013;
}else{
$bln=$bln;
$thn1=$thn1;
}?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
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
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="242" colspan="3"><div align="left" class="style1">
LAPORAN AKTIVITAS DETAI USER <br />
PERIODE :  <? include "../bulan.php"; ?><br> 
<? $Bagian = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$KodeBagian'");
$n= mysql_fetch_array($Bagian);
echo $n[NamaBagian]; 
?> || <a href="#" onClick="wCompare_01233 = window.open('b901.php', 
  'wCompare_01233', 'width=380,height=210,left=470,Top=145,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01233.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">GANTI PERIODE &amp; BAGIAN </a>
	 || 
	 <a href="../3w.php" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">KEMBALI KE MENU UTAMA</a> </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style2">
<tr>
<td width="20" rowspan="2" bgcolor="#CCCCFF"> No </td>
<td width="30" rowspan="2" bgcolor="#CCCCFF"> User </td> <? $wa2 =1;
while($wa2<=31){ $tgl = "$thn1-$bln-$wa2";
 $hari = date('l',strtotime($tgl));
if($hari=="Sunday"){
$hari = "Ming";
$warna='bgcolor="#FF6699"';
}elseif($hari=="Monday"){
$hari="Sen";
$warna='bgcolor="#CCCCCC"';
}elseif($hari=="Tuesday"){
$hari = "Sel";
$warna='bgcolor="#CCCCCC"';
}elseif($hari=="Wednesday"){
$hari="Rab";
}elseif($hari=="Thursday"){
$hari="Kam";
$warna='bgcolor="#CCCCCC"';
}elseif($hari=="Friday"){
$hari="Jum";
$warna='bgcolor="#CCCCCC"';
}elseif($hari=="Saturday"){
$hari="Sab";
$warna='bgcolor="#CCCCCC"';
}?><td width="35"    <? echo $warna; ?>><div align="center"><? 
  echo $hari;
   ?></div></td><? $wa2++; } ?>
</tr><tr>
<? $wa =1;
while($wa<=31){?><td bgcolor="#CCFFCC"><div align="center"><? echo $wa; ?></div></td><? $wa++; } ?>
</tr>
<?
$nomer  = 1;
$kdjfkdjfd = mysql_query("SELECT * FROM konco WHERE KodeBagian='$KodeBagian'");
while($bb = mysql_fetch_array($kdjfkdjfd)){
?>
<tr>
<td><div align="left">
<? echo $nomer; ?>
</div></td>
<td><div align="left"><? echo $bb[Nama]; ?></div></td>
  <? $wa =1;
while($wa<=31){
include "../war.php";?><td <? echo $warna; ?>><div align="center"><? 
if($KodeBagian==12){
    $kdjkjdkfd = mysql_query("SELECT COUNT(id) AS hh FROM txnjalan WHERE   KodeKelompok='Rad' AND TglMasuk='$wa' AND BlnMasuk=$bln AND Opr='$bb[Nama]'");
$ya = mysql_fetch_array($kdjkjdkfd);
 $kdjkjdkfd2 = mysql_query("SELECT COUNT(id) AS hh FROM txninap3 WHERE Opr='$bb[Nama]' AND Tgl='$wa' AND Bln=$bln");
$ya2 = mysql_fetch_array($kdjkjdkfd2);
 }elseif($KodeBagian==23){
 $kdjkjdkfd = mysql_query("SELECT COUNT(id) AS hh FROM jualobat WHERE Operator='$bb[Nama]' AND Tgl='$wa' AND Bln=$bln");
$ya = mysql_fetch_array($kdjkjdkfd);
//
$kdjkjdkfd2 = mysql_query("SELECT COUNT(id) AS hh FROM jualobat2 WHERE Operator='$bb[Nama]' AND Tgl='$wa' AND Bln=$bln");
$ya2 = mysql_fetch_array($kdjkjdkfd2);
}else{
$kdjkjdkfd = mysql_query("SELECT COUNT(id) AS hh FROM txnjalan2 WHERE Opr='$bb[Nama]' AND TglMasuk='$wa' AND BlnMasuk=$bln");
$ya = mysql_fetch_array($kdjkjdkfd);
//
$kdjkjdkfd2 = mysql_query("SELECT COUNT(id) AS hh FROM txninap2 WHERE Opr='$bb[Nama]' AND Tgl='$wa' AND Bln=$bln");
$ya2 = mysql_fetch_array($kdjkjdkfd2);
}
//
$tg = $ya[hh]+$ya2[hh]; 
if($tg>0){ echo $tg; }else{ echo "-"; }
?></div></td><? $wa++; } ?>
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
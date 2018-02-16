<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET [ "id" ];
  $MstKey = $_GET["MstKey"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==5 || $a[Level]==16){
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
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style2 {
	font-size: 12px;
	color: #FFFFFF;
}
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style4 {font-size: 10px}
.style5 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; }
.style12 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #FFFFFF; font-weight: bold; }
.style13 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left"></div>
<div align="center">
<table width="709" height="84" border="0" cellpadding="2" cellspacing="2">
<tr  bgcolor="#FFCCCC">
<td colspan="7" bgcolor="#000066"><div align="center" class="style1 style2 style13">LIST DATA STRUK REG: <? echo $MstKey; ?> </div></td>
</tr>
<tr  bgcolor="#FFCCCC">
<td width="23" bgcolor="#000066"><span class="style12">NO</span></td>
<td width="80" bgcolor="#000066"><span class="style12">NO STRUK</span></td>
<td width="176" bgcolor="#000066"><span class="style12">DOKTER</span></td>
<td width="319" bgcolor="#000066"><span class="style12">BAGIAN</span></td>
<td width="46" bgcolor="#000066"><span class="style12">TGL</span></td>
<td width="46" bgcolor="#000066"><div align="center" class="style13"><span class="style3">FO</span></div></td>
<td width="46" bgcolor="#000066"><div align="center" class="style13"><span class="style3">USER</span></div></td>
</tr>
<?
$nax=1;
if($a[Level]==16){
$nno = mysql_query("SELECT * FROM datastruk WHERE MstKey='$MstKey' AND KodeBagian='x'");
}else{
$nno = mysql_query("SELECT * FROM datastruk WHERE MstKey='$MstKey' AND KodeBagian!='x'");
}
while($f = mysql_fetch_array($nno)){
$buk = "BA-$f[id]";
 $cek_inap = mysql_query("SELECT id,NoBukti FROM  txninap  WHERE NoBukti='$buk'");
 $yes = mysql_fetch_array($cek_inap);
 $pch = explode("-",$yes[NoBukti]);
if($yes[id]){
$fo=0;
?>
<tr>
<? }else{
$fo=1; ?>
<tr bgcolor="#FFCC99" <? if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==168){ ?>
 onClick="wCompare = window.open('drd_9.php?id=<? echo $id; ?>&mas=<? echo $f[id]; ?>', 
  'wCompare', 'width=580,height=500,left=670,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    <? } ?>> 
<? } ?>

<td><div align="center" class="style1 style4"><? echo $nax; ?></div></td>
<td><div align="left" class="style5"><? echo "#MM-$f[id]"; ?></div></td>
<TD><div align="left" class="style5"><? echo $f[NamaDokter]; ?></div></TD>
<TD><div align="left" class="style5"><? echo ucfirst(strtolower($f[NamaBagian])); ?></div></TD>
<td><div align="left" class="style5"><? echo "$f[Tgl]/$f[Bln]$f[Thn]"; ?></div></td>
<td><div align="center" class="style5"><? echo $fo; ?></div></td>
 <td><div align="center" class="style5"><? echo $f[Opr]; ?></div></td>
</tr>
<? $nax++; } ?>
<TR  bgcolor="#FFCCCC">
<TD colspan="7" bgcolor="#000066">&nbsp;</TD>
</TR>
</table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>
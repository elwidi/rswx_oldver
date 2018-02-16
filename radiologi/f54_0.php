<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
if($aku=='bersabar'){
$KSIK= mysql_query("SELECT * FROM txnjalan WHERE id='$IdBiaya'");
}else{
$KSIK= mysql_query("SELECT * FROM txninap WHERE id='$IdBiaya'");  
}
$mp= mysql_fetch_array($KSIK);
$ki_09= mysql_query("SELECT COUNT(id) AS hh FROM bacaanhasilrad WHERE IdBiaya='$mp[KodeBiaya]'  AND Type='$Type'");
$ada = mysql_fetch_array($ki_09);
///
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
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
	font-size: 12px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="373" colspan="3"><div align="center">
INPUT HASIL PEMERIKSAAN<br />
<?
echo strtoupper($mp[NamaBiaya]); echo " ( $mp[KodeBiaya] )";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table  border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="24" height="26" bgcolor="#000000"><span class="style2">NO</span></td>
<td width="30" bgcolor="#000000"><span class="style2">REC</span></td>
<td width="298" bgcolor="#000000"><span class="style2">NAMA HASIL</span></td>
</tr>
<?
$nom=1;
$ldfkfgffg= mysql_query("SELECT * FROM bacaanhasilrad WHERE IdBiaya='$IdBiaya' AND Type='$Type'");
while($bb = mysql_fetch_array($ldfkfgffg)){
?>
<tr  valign="top"
onClick="location.href='Y9999.php?IdStruk=<? echo $IdStruk; ?>&aku=<? echo $aku; ?>&IdBiaya=<? echo $IdBiaya; ?>&id=<? echo $id; ?>&doa=<? echo $bb[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nom; ?></div></td>
<td><div align="center"><? echo $bb[id];?></div></td>
<td><div align="left"><? echo $bb[HasilBacaan];?></div></td>
</tr>
<?
$nom++; } ?><tr>
  <td colspan="3" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}else{} 
 
 			  ?> 
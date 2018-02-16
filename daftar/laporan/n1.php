<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
include "../../hari.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
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
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0" class="style1">
<tr>
<td width="523" colspan="3"><div align="left">
PRESENTASE PEMAKAIAN TEMPAT TIDUR
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="475"><span class="style4">RATA<sup>2</sup>
TT TERPAKAI<br />
PER KELAS PERAWATAN<br>&nbsp;</span></td>
</tr>
<tr valign="top">
  <td><div align="left">
  <table width="439" border="1" cellpadding="1" cellspacing="1" class="style2">
  <tr>
 <td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td> <td width="179" bgcolor="#D4D0C8"><div align="center"><strong>KELAS <br>
   PERAWATAN</strong></div></td><td width="71" bgcolor="#D4D0C8"><strong>KAPASITAS<br> 
      TT</strong></td>
  <td width="57" bgcolor="#D4D0C8"><strong>RATA <sup>2</sup><BR>
  TERPAKAI</strong></td><td width="80" bgcolor="#D4D0C8"><strong>PERSENTASE<br>
    BOR</strong></td>
  </tr>
  <?
  $nomer=1;
  $kdkdjm = mysql_query("SELECT * FROM kelas ORDER BY NamaKelas");
  while($nn = mysql_fetch_array($kdkdjm)){
  ?>
  <tr>
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="center"><? echo strtoupper($nn[NamaKelas]); ?></div>      </td>
    <td onClick="wCompare = window.open('xq.php?id=<? echo $nn[id]; ?>', 
  'wCompare', 'width=580,height=300,left=370,Top=134, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><div align="center"><?
	$uj = mysql_query("SELECT COUNT(id) AS nn FROM ruangan WHERE KodeKelas='$nn[KodeKelas]'");
	$b= mysql_fetch_array($uj);
	echo $b[nn];
	?></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
	  </tr>
  <?
  $nomer++; } ?>
  <tr>
    <td colspan="2" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
	<td bgcolor="#D4D0C8">&nbsp;</td>	<td bgcolor="#D4D0C8">&nbsp;</td>	<td bgcolor="#D4D0C8">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
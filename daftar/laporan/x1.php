<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
include "../../hari.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCCCC';
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
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }

-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0"> 
<tr>
<td width="611" colspan="3"><div align="left" class="style1">
KOREKSI DATA HARIAN<br>
PERIODE : <? echo strtoupper($hari); echo " , ";
echo date("d-m-Y");?>
<br>&nbsp;</div></td>
</tr>
 
<tr>
<td colspan="3" valign="top">
<div align="left">
  <table border="1" cellpadding="1" cellspacing="1" class="style2">
    <tr>
      <td width="37" bgcolor="#D4D0C8"><strong>NO</strong></td>
      <td width="213" bgcolor="#D4D0C8"><strong>RUANG <br />
        PERAWATAN</strong></td>
      <td width="58" bgcolor="#D4D0C8"><strong>SISA <br />
        PASIEN</strong></td>
      <td width="66" bgcolor="#D4D0C8"><strong> PASIEN<br />
        MASUK</strong></td>
      <td width="55" bgcolor="#D4D0C8"><strong>PASIEN<br />
        KELUAR</strong></td>
      <td width="68" bgcolor="#D4D0C8"><strong>PASIEN <br />
        NOW</strong></td>
      <td width="76" bgcolor="#D4D0C8"><strong>PASIEN<br />
        transfer</strong></td>
    </tr>
    <?
$nomer =1;
$msmsmms = mysql_query("SELECT * FROM ruangan ORDER BY Lantai,KodeKelas");
while($oo = mysql_fetch_array($msmsmms)){
 if($Lantai!=$oo[Lantai]){
 ?>
    <tr class="style2">
      <td colspan="7"><div align="left">
          <?
 echo $oo[Lantai];
 ?>
      </div></td>
    </tr>
    <? 
 }?>
  <?
  if($KodeKelas!=$oo[KodeKelas]){
  ?> <tr>
      <td><div align="center"><? echo $nomer; ?></div></td>
      <td><div align="left"><? echo strtoupper($oo[NamaRuangan]); ?></div></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
     </tr>
    <?  } $KodeKelas = $oo[KodeKelas];
 $Lantai = $oo[Lantai];
 
$nomer++; } ?>
    <tr>
      <td bgcolor="#D4D0C8" colspan="2"><div align="center"><strong>TOTAL</strong></div></td>
      <td bgcolor="#D4D0C8">&nbsp;</td>
      <td bgcolor="#D4D0C8">&nbsp;</td>
      <td bgcolor="#D4D0C8">&nbsp;</td>
      <td bgcolor="#D4D0C8">&nbsp;</td>
      <td bgcolor="#D4D0C8">&nbsp;</td>
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
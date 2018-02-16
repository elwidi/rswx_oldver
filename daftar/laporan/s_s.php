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
	font-size: 16px;
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
<table width="1111" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="159"><div align="left">
 <table width="159" border="0" cellpadding="2" cellspacing="2">
 <tr class="style2">
 <td><div align="left">
 <img src="../../gb/gb.png" width="87" height="74" /><br>
 &nbsp;&nbsp;&nbsp;<?
 $bln=date("m");
 $thn1 = date("Y");
 echo strtoupper($hari);  echo "<br>"; 
 ?> &nbsp;&nbsp;&nbsp;<? echo date("d"); include "../../bulan.php";
 ?>
 </div></td>
 </tr>
 </table>
</div></td><td width="938" colspan="-1"><div align="left">
 <table border="0" cellpadding="1" cellspacing="1">
 <tr>
 <td width="816" height="61"><div align="left" class="style1">INDIKATOR KEBERHASILAN (BARBER - JOHNSON, MBO BY HOSPITAL)</div></td>
 </tr>
 </table>
 </div></td>
</tr>
<tr>
<td colspan="3"><span class="style4">

<a href="../index.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KEMBALI</a> || 
<a href="n6.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 % PEMAKAIAN TT LANTAI</a> ||
 <a href="n1.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 % PEMAKAIAN TT KELAS</a>  || 
 <a href="x1.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KOREKSI DATA HARIAN</a>
</span></td>
</tr>
<tr valign="top">
  <td colspan="2"><div align="left">
  <table border="1" cellpadding="0" cellspacing="0" class="style2">
  <tr>
  <td width="31" rowspan="2" bgcolor="#D4D0C8"><div align="center"><strong> NO</strong></div></td>
  <td width="255" rowspan="2" bgcolor="#D4D0C8"><strong> BIDANG KEBERHASILAN<br>
    DALAM <br>
    KELAS PERAWATAN</strong></td>
  <td colspan="3" bgcolor="#D4D0C8"> <div align="center"><strong>TEMPAT TIDUR  </strong></div></td>
   <td colspan="2" bgcolor="#D4D0C8"><div align="center"><strong>JML PASIEN</strong></div></td>
	<td colspan="2" bgcolor="#D4D0C8"><strong>BED DAYS </strong></td>
  <td width="38" rowspan="2" bgcolor="#D4D0C8"><strong> ALOS</strong></td>
  <td width="42" rowspan="2" bgcolor="#D4D0C8"><strong> BOR</strong></td>
  <td width="46" rowspan="2" bgcolor="#D4D0C8"><strong> BTO</strong></td>
  <td colspan="2" bgcolor="#D4D0C8"> <div align="center"><strong>TOI</strong></div></td>
  </tr>
    <tr>
  <td width="66" bgcolor="#D4D0C8"><strong>KAPASITAS</strong></td>
   <td width="70" bgcolor="#D4D0C8"><strong>BED TERPAKAI </strong></td>
    <td width="60" bgcolor="#D4D0C8"><strong>SISA BED </strong></td>
 	<td width="60" bgcolor="#D4D0C8"><strong>PASIEN MASUK </strong></td>
	<td width="62" bgcolor="#D4D0C8"><strong>PASIEN KELUAR </strong></td>
	<td width="64" bgcolor="#D4D0C8"><strong>AVAILABLE</strong></td>
  <td width="64" bgcolor="#D4D0C8"><strong>OCCUPIED</strong></td>
  <td width="40" bgcolor="#D4D0C8"><strong>(HARI)</strong></td>
  <td width="57" bgcolor="#D4D0C8"><strong>(HOURS)</strong></td>
  </tr>
 
    <tr>
      <td colspan="15" bgcolor="#D4D0C8">&nbsp;</td>
      </tr>
  </table>
  </div></td>
  </tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td colspan="-1">&nbsp;</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>

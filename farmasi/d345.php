<?
session_start();
include "../konek.php";
include "../ceke.php";
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
<td width="513" colspan="3"><div align="left" class="style1">
LAPORAN FARMASI <br />
PERIODE : <? 
$bln=$Bln;
$thn1 = $Thn;
include "../bulan.php";
?>
</div></td> 
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tR>
  <td width="18" bgcolor="#99CCFF"><strong>NO</strong></td>
  <td width="341" bgcolor="#99CCFF"><strong>KETERANGAN</strong></td>
  <td width="79" bgcolor="#99CCFF"><strong>JML<br>
  LEMBAR</strong></td>
  </tR>
  <?
  $nomer=1;
  $aada = mysql_query("SELECT * FROM rwtjalan WHERE BlnMasuk='$Bln' AND ThnMasuk='$Thn' ORDER BY Bagian");
  while($bb= mysql_fetch_array($aada)){
  if($Bagian !=$bb[Bagian]){
  ?>
  <tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo strtoupper($bb[Bagian]); ?></div></td>
  <td><div align="right"><?
  
  ?></div></td>
  </tr>

  <?

  $nomer++; 
  }
  $Bagian =$bb[Bagian]; } ?>
   <tr>
    <td colspan="2" bgcolor="#99CCFF"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#99CCFF">&nbsp;</td>
  </tr> </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>

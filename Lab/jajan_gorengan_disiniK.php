<?php 
session_start();
include "../konek.php";
include "../ceke.php";$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
//include "latar_lab.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
-->
</style>
</head>
<body>

<div align="center">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr class="style3">
    <td height="41" colspan="3"><div align="center"><strong>
    PILIH KELOMPOK
    </strong></div></td>
    </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td width="164"><span class="style3">KELOMPOK</span></td><td width="9"><span class="style3">:</span></td><td width="379"><div align="left" class="style3">
      <select name="Kelompok">
        <option  value="0">--Kelmpok--</option>
        <?
$kalo = mysql_query("SELECT * FROM kelompoklab ORDER BY NamaKelompok");
while($ww = mysql_fetch_array($kalo)){
?>
        <option value="<? echo $ww[id]; ?>" onClick="location.href='jajan_gorengan_disiniK.php?id=<? echo $ww[id]; ?>&kadal=1';"><? 
$koki = mysql_query("SELECT NamaKelompok FROM kelompoklab WHERE id='$ww[id]'");
$jaka = mysql_fetch_array($koki);
echo strtoupper($jaka[NamaKelompok]);
 ?></option>
        <? } ?>
      </select>
    </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><div align="center"><A href="makan_gemblong.php" style="text-decoration:none ">KEMBALI</A></div></td>
    </tr>
	<?
	if($kadal==1){
	$koki3 = mysql_query("SELECT NamaKelompok FROM kelompoklab WHERE id='$id'");
$jaka3 = mysql_fetch_array($koki3);

	?>
    <tr>
      <td colspan="3" valign="top">
	  <div align="left">
<iframe src="jajan_gorengan_disini.php?Kelompok=<? echo $jaka3[NamaKelompok]; ?>" width="890" height="300" frameborder="0"></iframe>
	  </div>
	  </td>
    </tr>
	<? } ?>
  </table>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>
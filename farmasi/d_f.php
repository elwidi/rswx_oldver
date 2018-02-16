<?php 
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
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="637" colspan="3"><div align="left" class="style1">
INSTALASI FARMASI RS YADIKA<br />
FORM PERMINTAAN STOCK
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="410" border="0" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="108">TGL</td>
  <td width="8"><strong>:</strong></td>
  <td width="245"><div align="left">
   <?
echo date("d");
$bln=date("m");
$thn1 = date("Y");
include "../bulan.php";
?>
  </div></td>
  </tr>
  <tr>
    <td>KE BAGIAN  </td>
    <td><strong>:</strong></td>
    <td>LOGISTIK</td>
  </tr>
  </table>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="23" bgcolor="#D4D0C8"><strong>NO</strong></td>
  <td width="241" bgcolor="#D4D0C8"><strong>NAMA BARANG</strong></td>
  <td width="73" bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
  <td width="61" bgcolor="#D4D0C8"><div align="center"><strong>JML DIMINTA</strong></div></td>
    <td width="61" bgcolor="#D4D0C8"><div align="center"><strong>ORDER</strong></div></td>
  <td width="53" bgcolor="#D4D0C8"><div align="right"><strong>NILAI</strong></div></td>
  <td width="146" bgcolor="#D4D0C8"><strong>KETERANGAN</strong></td>
  </tr>
  <?
  $nomer=1;
  $kdjfkdjd  = mysql_query("SELECT * FROM jualobat WHERE NamaObat!='' ORDER BY KodeObat,id desc");
  while($aa = mysql_fetch_array($kdjfkdjd)){
  if($KodeObat!=$aa[KodeObat]){
  ?>
  <tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo strtoupper($aa[NamaObat]); ?></div></td>
  <td><div align="left"><? echo strtoupper($aa[Satuan]); ?></div></td>
  <td><div align="center"><? 
  $akusj = mysql_query("SELECT SUM(Qty) AS hh FROM jualobat WHERE KodeObat='$aa[KodeObat]'");
  $ya = mysql_fetch_array($akusj);
  echo number_format($ya[hh]);
  ?></div></td>
  <tD>&nbsp;</tD>
    <td><div align="right"><? 
  $akusj2 = mysql_query("SELECT SUM(JmlHargaBeli) AS hh FROM jualobat WHERE KodeObat='$aa[KodeObat]'");
  $ya2 = mysql_fetch_array($akusj2);
  echo number_format($ya2[hh]);
  $to = $to +$ya2[hh];
  ?></div></td>
  <td><div align="left"><? ?></div></td>
  </tr>
 
  <?
  $nomer++;
  }$KodeObat=$aa[KodeObat]; } ?> <tr>
    <td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong>
      <?
	echo number_format($to); 
	?>
    </strong></div></td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="626" border="0" cellpadding="1" cellspacing="1">
  <tr valign="top">
  <td width="189"><div align="left">
  <table border="0" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="156"><div align="center">DI BUAT OLEH</div></td>
  </tr>
  <tr>
    <td height="59"><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">A. DWI NUGRAHINY </div></td>
  </tr>
  <tr>
    <td>TGL : </td>
  </tr>
  </table>
  </div></td><td width="165"><table border="0" cellpadding="1" cellspacing="1" class="style2">
    <tr>
      <td width="163"><div align="center">PENGENDALI STOK </div></td>
    </tr>
    <tr>
      <td height="59"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">NOVA ROZAYANA, S.Si Apt </div></td>
    </tr>
    <tr>
      <td>TGL</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table></td>
  <td width="250"><div align="right">
    <table width="194" border="0" cellpadding="1" cellspacing="1" class="style2">
        <tr>
          <td width="145"><div align="center">DI BUAT OLEH</div></td>
        </tr>
        <tr>
          <td height="59"><div align="center"></div></td>
        </tr>
        <tr>
          <td><div align="center">Dr IRWAN HERIYANTO ,MARS </div></td>
        </tr>
        <tr>
          <td><div align="left">TGL</div></td>
        </tr>
      </table>
  </div></td>
  </tr>
  </table>
  </div> </td>
</tr>
<tr></tr>
</table>
</div>
</body>
</html>
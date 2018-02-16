<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_1detil WHERE IdTxn='$id'");
 $dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' ");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="526" colspan="3" valign="top">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="51">&nbsp;</td>
<td width="365"><span class="style1">RS YADIKA</span><br>
  <span class="style2">FORMULIR PERMINTAAN BARANG</span></td>
</tr>
<tr>
  <td colspan="2"><hr></td>
  </tr>
</table></td>
</tr>
<tr>
  <td colspan="3" valign="top"><div align="left">
  <table border="0" cellpadding="1" cellspacing="1" class="style3">
  <tr>
  <td width="101">Nomer</td>
  <td width="8"><strong>:</strong></td>
  <td width="310"><div align="left">MT-<? echo $ok[id]; ?></div></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><strong>:</strong></td>
    <td><div align="left"><?
	echo $ok[Tgl]; 
	$bln=$ok[Bln];
	$thn1=$ok[Thn];
	include "../bulan.php";
	?></div></td>
  </tr>
  <tr>
    <td>Dari Bagian </td>
    <td><strong>:</strong></td>
    <td><div align="left"><?
	echo strtoupper($ok[NamaUnit]);
	?></div></td>
  </tr>
  <tr>
    <td>Kepada Bagian </td>
    <td><strong>:</strong></td>
    <td><div align="left">LOGISTIK FARMASI</div></td>
  </tr>
  </table>
  </div></td>
</tr>
<tr>
  <td colspan="3" valign="top"><div align="left">
  <table width="527" border="0" cellpadding="2" cellspacing="2" class="style3">
  <tr>
  <td width="20" rowspan="2" bgcolor="#99CCFF"><span class="style7">NO </span></td><td width="151" rowspan="2" bgcolor="#99CCFF"><span class="style7">NAMA BARANG </span></td>
  <td colspan="2" bgcolor="#99CCFF"><div align="center"><span class="style7">JUMLAH  </span></div></td>
  <td width="76" rowspan="2" bgcolor="#99CCFF"><span class="style7">SAT </span></td>
  <td width="131" rowspan="2" bgcolor="#99CCFF"> <span class="style7">KETERANGAN</span></td>
  </tr>
    <tr>
  <td width="54" bgcolor="#99CCFF"><span class="style7">DIMINTA</span></td><td width="81" bgcolor="#99CCFF"><span class="style7">DIKELUARKAN</span></td>
  </tr><?
  $nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_1detil WHERE IdTxn='$id'");
while($uu = mysql_fetch_array($kdjfkdjfddf0909)){
  ?>
    <tr valign="top">
      <td><div align="center"><? echo $nomer; ?></div></td>
      <td><div align="left"><? echo $uu[NamaObat]; ?></div></td>
      <td><div align="center"><? echo number_format($uu[Qty]); ?></div></td>
      <td><div align="center"><? 
	  if($uu[QtyBeri]>0){
	  echo $uu[QtyBeri];
	  }else{
	  echo "."; 
	  }
	  ?></div></td>
      <td><div align="left"><?
	  $h_dfd = mysql_query("SELECT Satuan FROM dataobat WHERE id='$uu[IdObat]'");
	  $ip=mysql_fetch_array($h_dfd);
	  echo $ip[Satuan];
	  ?></div></td>
    <td><div align="left">
	<?
	echo $uu[Keterangan]; 
	?>
	</div></td>
	</tr>
<?
$nomer++; } 
?>
    <tr>
      <td colspan="6"></td>
      </tr>
  </table>
  </div></td>
</tr>
<tr>
  <td colspan="3" valign="top"><div align="left"><br>
        <table width="520"  class="style3" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="130"><div align="center">Di buat Oleh</div></td><td width="170"><div align="center">Mengetahui</div></td><td colspan="2" ><div align="center">Disetujui</div></td>
    </tr>
          <tr>
            <td height="51">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="93" >&nbsp;</td>
      <td width="117" >&nbsp;</td>
    </tr>
          <tr>
            <td>Tgl : </td>
      <td>Tgl : </td>
      <td >Tgl:</td>
      <td >Tgl:</td>
    </tr>
            </table>
  </div></td>
</tr>
</table>
</body>
</html>
<?
}
?>
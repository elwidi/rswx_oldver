<?
session_start();
include "../konek.php";
include "../ceke.php";
$bln1=$bln1-0;
$FKLDKLFDFD  = mysql_query("SELECT * FROM kelas WHERE id='$id'");
$yap = mysql_fetch_array($FKLDKLFDFD);
if(!$yap[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><style type="text/css">
<!--
.style9 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
-->
</style></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style10">
<tr>
<td width="521" colspan="3"><div align="left">
 <font face="Arial, Helvetica, sans-serif">DETAIL TRANSAKSI PEMERIKSAAN RADIOLOGI <br />
 <?
echo "$tgl1 sd $tgl2 ";
$bln=$bln1;
include "../bulan.php";
 ?>
 <BR />
 <font color="#990000"><B><I>KELAS : <? echo $yap[NamaKelas]; ?></I></B></font></font><font color="#990000"><B><I></I></B></font>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style9">
  <tr>
  <td width="18" bgcolor="#FFCCCC"><strong>NO</strong></td><td width="56" bgcolor="#FFCCCC"><strong>NO BUKTI</strong></td><td width="54" bgcolor="#FFCCCC"><strong>RM</strong></td><TD width="89" bgcolor="#FFCCCC"><strong>PASIEN</strong></TD><td width="164" bgcolor="#FFCCCC"><strong>NAMA BIAYA</strong></td><td width="81" bgcolor="#FFCCCC"><div align="right"><strong>HARGA</strong></div></td>
  </tr> 
  <?
  $nomer=1;
  $kdjkfd = mysql_query("SELECT * FROM txninap2 where NoBukti Like 'LAB-%' AND Kelas='$yap[NamaKelas]' AND Tgl<=$tgl2 AND Tgl>=$tgl1 AND Bln=$bln1 AND Thn=$thn1");
  while($bb = mysql_fetch_array($kdjkfd)){
  ?>
  <tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $bb[NoBukti]; ?></div></td>
  <td><div align="center"><? echo $bb[NoPasien]; ?></div></td>
  <td><div align="center"><? echo $bb[NamaPasien]; ?></div></td>
  <td><div align="left"><? echo $bb[NamaBiaya]; ?></div></td>
  <td><div align="right"><? echo number_format($bb[Harga]); 
  $toto = $toto + $bb[Harga]; 
  ?></div></td>
  </tr>
 
  <?
  $nomer++; } ?>
    <tr>
    <td colspan="5" bgcolor="#FFCCCC"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($toto); ?></strong></div></td>
  </tr></table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>
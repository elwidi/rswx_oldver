<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
include "../terbilang.php";
 $kdidkdxxcxf  = mysql_query("SELECT *
FROM `kwita_gab` WHERE IdOpr='$a[id]'");
$ya = mysql_fetch_array($kdidkdxxcxf);
 if($FiLaDim[Duabelas]=='on' && $a[Level]==9){
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
	font-size: 11px; color:#666666
 }
 .style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#000000
 }
-->
 </style>
 </head>
 <body>
 <table border="0" cellpadding="0" cellspacing="0">
 <tr valign="top">
 <td width="466" colspan="3"><div align="left">
 <table border="0" cellpadding="1" cellspacing="1">
 <tr valign="top">
 <td width="97"><div align="left">
 <img src="../gb/gb.png" />
 </div></td><td width="345"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="343"><span class="style1">KWITANSI</span></td>
 </tr>
 <tr class="style2">
   <td><div align="left"><? echo $fkd[Nama]; ?></div></td>
 </tr>
 <tr  class="style2">
   <td><div align="left"><? echo $fkd[Jalan]; ?></div></td>
 </tr>
 <tr  class="style2">
   <td><div align="left">Telp:<? echo $fkd[Telp]; ?>, Fax : <? echo $kfd[Fax]; ?></div></td>
 </tr>
 </table>
 </div></td>
 </tr>
 </table>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2"  class="style3">
   <tr  >
   <td width="115">DITERIMA DARI</td>
   <td width="3">:</td>
   <td width="323"><div align="left"><? echo $ya[NamaPasien]; echo " ( $ya[NoPasien] )"; ?></div></td>
   </tr>
   <tr  valign="top" >
     <td>KETERANGAN</td>
     <td>:</td>
     <td><div align="left">TRANSAKSI PEMBAYARAN : <?  
$kDFDFDdidkdxxcxf  = mysql_query("SELECT *
FROM `kwita_gab` WHERE IdOpr='$a[id]'");
while($ya = mysql_fetch_array($kDFDFDdidkdxxcxf)){
echo "KWT:$ya[IdKwitansi],";
$tot  = $tot + $ya[Nilai];
}
 	 ?> AN : <? echo $ya[NamaPasien]; ?></div></td>
   </tr>
   <tr  >
     <td>SEJUMLAH</td>
     <td>:</td>
     <td><div align="left"><?
	 echo number_format($tot);
	 ?></div></td>
   </tr>
   <tr valign="top"  >
     <td>TERBILANG</td>
     <td>:</td>
     <td><div align="left"><?
	 $kal = terbilang($tot);
	 echo "$kal";
	 ?></div></td>
   </tr>
   <tr valign="top"  >
     <td colspan="3"><div align="right">
	 <table width="197" border="0" cellpadding="0" cellspacing="0" class="style3">
	 <tr>
	 <td><div align="right">Bakasi, <? echo date("d-m-Y"); ?></div></td>
	 </tr>
	 <tr>
	   <td height="63"><div align="right"></div></td>
	   </tr>
	 <tr>
	   <td> <div align="right">( <? echo $a[Nama]; ?> ) </div></td>
	   </tr>
	 </table>
	 </div></td>
     </tr>
   <tr valign="top"  >
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
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
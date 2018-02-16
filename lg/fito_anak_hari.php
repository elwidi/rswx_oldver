<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' ");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if($ok[Stak]==1){
header("Location:./xqa.php?id=$id");
}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style4 {
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
 <td width="603" colspan="3">
   <div align="center"><span class="style1">
     <?
 echo strtoupper($fkd[Nama]);
 ?>
     .</span><span class="style2"><br>
       FORMULIR PERMINTAAN STOCK
     </span></div></td>
 </tr>
 <tr>
 <td colspan="3"><hr /></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style4">
 <tr>
 <td width="101">Nomor</td>
 <td width="3">:</td>
 <td width="252"><div align="left"><? echo "MT-$id"; ?></div></td>
 </tr>
 <tr>
 <td>Tgl</td><td>:</td><td><div align="left"><?
  echo "$ok[Tgl] - ";
   $bln=$ok[Bln]; $thn1=$ok[Thn];
   include "../bulan2.php"; 
 ?></div></td>
 </tr>
 <tr>
 <td>Dari Bagian </td><td>:</td>  <td width="252"><div align="left"><? 
  $peo = explode("POLI",strtoupper($ok[NamaUnit]));
  if(!$peo[1]){
   echo ucfirst(strtolower($ok[NamaUnit])); 
  }else{
   echo ucfirst(strtolower($peo[1])); 
   }?></div></td>
 </tr>
 </table>
 </div> </td>
 </tr>
 <tr>
   <td colspan="3" valign="top"><div align="left">
   <table border="1" cellpadding="0" cellspacing="0" class="style4">
   <tr>
   <td width="44" rowspan="2"><strong>NO </strong></td>
   <td width="58" rowspan="2"><strong>NAMA BARANG </strong></td>
   <td width="106" rowspan="2"><strong>STOK <br>
     AKHIR </strong></td>
   <td colspan="2"><div align="center"><strong>JUMLAH  </strong></div></td>
     <td width="60" rowspan="2"><strong>SATUAN </strong></td>
     <td width="172" rowspan="2"><strong>KETERANGAN </strong></td>
   </tr>
     <tr>
   <td width="69"><div align="center"><strong>DIMINTA</strong></div></td>
     <td width="72"><div align="center"><strong>DISTRIBUSI</strong></div></td>
     </tr>
   <?
  $nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_2detil WHERE IdTxn='$id'");
while($as= mysql_fetch_array($kdjfkdjfddf0909)){   ?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $as[NamaBarang]; ?></div></td>
<td><div align="center"><? ?></div></td>
<td><div align="center"><? echo number_format($as[Qty]); ?></div></td>
<td><div align="center"><? echo number_format($as[QtyBeri]); ?></div></td>
<td><div align="left"><?  echo $as[NamaSatuan]; ?></div></td>
<td><div align="left"><? echo $as[Keterangan]; ?></div></td>
</tr>
<?
$nomer++; } ?></table>
   </div></td>
 </tr>
 <tr>
   <td colspan="3" valign="top"><div align="left">
   <table width="595" border="1" cellpadding="0" cellspacing="0" class="style4">
   <tr>
   <td width="156" height="24"><div align="center">DIBUAT OLEH</div></td>
   <td width="205"><div align="center">PENGENDALI STOCK</div></td>
   <td width="226"><div align="center">DISETUJUI</div></td>
   </tr>
   <tr>
   <td height="52">&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp; </td>
   </tr>
    <tr>
   <td height="17">Tanggal :  </td>
   <td>Tanggal : </td>
   <td>Tanggal : </td>
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
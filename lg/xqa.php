<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' ");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if($ok[Stak]==0){
header("Location:./fito_anak_hari.php?id=$id");
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
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="602" colspan="3">
   <div align="center"><span class="style1">
     <?
 echo strtoupper($fkd[Nama]);
 ?>
     .</span><span class="style2"><br>
       FORMULIR PERMINTAAN BARANG
     </span></div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style4">
   <tr>
   <td width="48">Nomor</td>
   <td width="3">:</td>
   <td width="185"><div align="left">MT-<? echo $id; ?></div></td><td width="116">Dari Bagian</td>
   <td width="8">:</td>
   <td width="200"><div align="left"><? 
  $peo = explode("POLI",strtoupper($ok[NamaUnit]));
   echo ucfirst(strtolower($peo[1])); ?></div></td>
   </tr>
   <tr>
   <td>Tanggal </td><td>:</td><td><div align="left"><?
   echo "$ok[Tgl] - ";
   $bln=$ok[Bln]; $thn1=$ok[Thn];
   include "../bulan2.php"; 
   ?></div></td><td>Kepada Bagian</td><td>:</td><td><div align="left">Logistik Umum</div></td>
   </tr>
   </table>
   </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="1" cellpadding="0" cellspacing="0" class="style4">
   <tr>
   <td width="21" rowspan="2" bgcolor="#ECE9D8"><strong>NO </strong></td><td width="142" rowspan="2" bgcolor="#ECE9D8"><strong>NAMA BARANG</strong></td>
   <td colspan="2" bgcolor="#ECE9D8"><div align="center"><strong>JUMLAH</strong></div></td>
   <td width="98" rowspan="2" bgcolor="#ECE9D8"><div align="center"><strong>SATUAN </strong></div></td><td width="146" rowspan="2" bgcolor="#ECE9D8"><strong>KETERANGAN </strong></td>
   </tr>
   <tr>
   <td width="87" bgcolor="#ECE9D8"><div align="center"><strong>DIMINTA</strong></div></td><td width="93" bgcolor="#ECE9D8"><div align="center"><strong>DIKELUARKAN</strong></div></td>
   </tr>
 <?
  $nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_2detil WHERE IdTxn='$id'");
while($as= mysql_fetch_array($kdjfkdjfddf0909)){

 ?>  <tr>
     <td><div align="center"><? echo $nomer; ?></div></td>
     <td><div align="left"><? echo ucfirst(strtolower($as[NamaBarang])); ?></div></td>
     <td><div align="center"><? echo $as[Qty]; ?></div></td>
      <td><div align="center"></div></td>
     <td><div align="center"><?
	 echo ucfirst(strtolower($as[NamaSatuan]));  ?></div></td> 
	 <td><div align="left"><? echo $as[Keterangan]; ?></div></td>
   </tr>
    <?
	$nomer++; } ?>
   </table>
   </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table width="602" border="1" cellpadding="0" cellspacing="0" class="style4">
   <tr>
   <td width="159"><div align="center">Di Buat Oleh</div></td><td width="181"><div align="center">Mengetahui</div></td>
   <TD colspan="2"><div align="center">Disetujui</div></TD>
   </tr>
   <tr>
     <td height="39">&nbsp;</td><td>&nbsp;</td>
     <td width="106">&nbsp;</td>
     <TD width="140">&nbsp;</TD>
   </tr>
   <tr>
     <td>Tgl:</td>
     <td>Tgl:</td>
     <TD>Tgl:</TD>
     <td>Tgl:</td>
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
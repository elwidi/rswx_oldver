<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./de7.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
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
.style2{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
 .style3{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
-->
 </style>
 </head>
 <body>
 <div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tR>
<td width="1076" colspan="3"><div align="left" class="style1">
INSTALASI FARMASI RSIA YADIKA<br />
FORM PERMINTAAN STOK
</div></td>
</tR>
<tr valign="top">
<td  colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="119" height="23">Tanggal</td>
 <TD width="8">:</TD>
 <td width="842"><div align="left"><? echo "$kk[Tgl] ";
 $bln=$kk[Bln]; $thn1=$kk[Thn];
 include "../bulan.php";
  ?></div></td> 
 </tr>
 <tr>
 <td>No Order Farmasi</td><td>:</td><td><div align="left"><?
 echo "$kk[NoPo]";
 ?></div></td>
 </tr>
 <tr>
 <td>Ke Bagian</td><TD>:</TD><td><div align="left">Farmasi Gudang </div></td>
 </tr>
 <?
$kdkdkdkdkdk = mysql_query("SELECT COUNT(id) as kk FROM polog77x WHERE IdPo='$id'");
$up = mysql_fetch_array($kdkdkdkdkdk);
if($up[kk]>0){
?>
<tr class="style2">
<td>Po Dari Frm Gdg </td>
<td>:</td><td><div align="left">
<select name="IdP" class="style2">
<option value="-">--Ada <?  echo $up[kk]; ?> Po Terkait--</option>
 <?
$kdkdkdkdkddddk = mysql_query("SELECT id,IdPo FROM polog77x WHERE IdPo='$id'");
while($yy = mysql_fetch_array($kdkdkdkdkddddk)){
?>
<option value="<? echo $yy[id]; ?>"  onClick="location.href='makan_ubi_mentah_enak.php?id=<? echo $id; ?>&IdPo=<? echo $yy[id]; ?>';"><?
$ta_dsdd = mysql_query("SELECT NamaSupplier,NoPo FROM polog77x where id='$yy[id]'");
$uu = mysql_fetch_array($ta_dsdd);
echo $uu[NoPo]; echo " &nbsp;&nbsp;";
echo "$uu[NamaSupplier]<br>"; ?></option>
<? } ?>
</select>
</div></td>
</tr>
<tr class="style2">
  <td colspan="3"><div align="left">
  <input name="fgfgf" type="button" class="style3" onClick="location.href='x23.php?id=<? echo $id; ?>';" value="Kembali">
  <input name="fgfgf" type="button" class="style3" onClick="location.href='XW_9.php';" value="List Order Farmasi"> 
    <input name="fgfgf" type="button" class="style3" onClick="location.href='semoga_ela_cepet_sembuh.php';" value="List Order Gudang">
	<input name="fgfgf" type="button" class="style3" style="background:#FFCC33" onClick="location.href='makan_ubi_mentah_enak.php?id=<? echo $id; ?>';" value="Tampilkan Yang Semua">
	<input name="fgfgf" type="button" class="style3" onClick="location.href='index.php';" value="Depan">
  </div></td>
  </tr>
<? } ?>
 </table>
</div></td>
</tr>
<tr valign="top">
  <td  colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style3">
  <tr>
  <td width="20" bgcolor="#ECE9D8"><strong>No</strong></td>
  <td width="189" bgcolor="#ECE9D8"><strong>NamaBarang</strong></td>
  <TD width="53" bgcolor="#ECE9D8"><strong>Jumlah<BR>
    Diminta</strong></TD>
  <td width="46" bgcolor="#ECE9D8"><strong>Satuan</strong></td>
  <tD width="161" bgcolor="#ECE9D8"><strong>Keterangan</strong></tD>
  <TD width="172" bgcolor="#ECE9D8"><strong>Pbf</strong></TD>
  <TD width="172" bgcolor="#ECE9D8"><strong>No Po</strong></TD>
  </tr>
  <?
    $nomer=1;
 
     $kkkfg = mysql_query("SELECT * FROM podetil77x WHERE IdPo77='$id' ORDER BY IdSupplier");
  while($aa = mysql_fetch_array($kkkfg)){ 
 $no = $nomer%2;
 if($no==1)
{
$warna=' bgcolor="#CCFFFF"';
}else{
$warna='';
}
 
  $kdfdfd_Dfdfd =  mysql_query("SELECT id,IdPox FROM podetil77x WHERE id='$aa[id]'");
 $bp = mysql_fetch_array($kdfdfd_Dfdfd); 
 //
$jh_dddd = mysql_query("SELECT NoPo,NamaSupplier FROM polog77x WHERE id='$bp[IdPox]'");
$ii = mysql_fetch_array($jh_dddd);
 ?>
 <tr  <?  echo $warna; ?> valign="top">
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($aa[NamaBarang])); ?></div></td>
 <td><div align="center"><? echo number_format($aa[Qty]); ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($aa[NamaSatuan])); ?></div></td>
 <td><div align="left"><?
  	$kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT * FROM ket_det_po WHERE IdDetil='$aa[id]'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);
 echo ucfirst(strtolower($yape[Keterangan]));
 ?></div></td>
  <td><div align="left"><?
echo ucfirst(strtolower($ii[NamaSupplier]));
?></div></td>
<td><div align="left"><?
echo $ii[NoPo]; 
?></div></td>

 </tr>

 <?
 $nomer++;
   } ?> <tr valign="top">
   <td colspan="6"><div align="center">
   <table width="581" border="0" cellpadding="0" cellspacing="0">
   <tr valign="top">
   <td width="242"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style2">
   <tr>
   <td width="168">Di Buat Oleh</td>
   </tr>
   <tr>
   <td height="49">&nbsp;</td>
   </tr>
   <tr>
   <td> ( A.Dwi Nugrahiny ) </td>
   </tr>
   </table>
   </div></td><td width="254"><div align="right">
     <table border="0" cellpadding="2" cellspacing="2" class="style2">
         <tr>
           <td width="198"><div align="center">Pengendali Stok </div></td>
         </tr>
         <tr>
           <td height="50"><div align="center"></div></td>
         </tr>
         <tr>
           <td> <div align="center">(Nova Rozayana, S Si Apt </div></td>
         </tr>
        </table>
   </div></td>
   </tr>
   </table>
   </div></td>
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
<?
session_start();
include "../konek.php";
 include "../ceke.php";
include "../alamat.php";

$jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if($a[Level]==3){
include "../terbilang.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}.style14 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style15 {color: #000000}
-->
</style>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
<table border="0" cellpadding="0" cellspacing="1">
<tr valign="top">
<td width="158"><div align="left">
<table width="379" border="0" cellpadding="0" cellspacing="0" class="style14"><? /*re4.php?id=<? echo $id;*/ ?>
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='../Daftar/ed_d.php';" >
<td width="275" colspan="3" ><div align="left">
<table width="400" border="0" cellpadding="0" cellspacing="0">
<tr> <td width="84"> <div align="center"><span class="style1"><img   src="../gb/gb.png" alt="logo" width="45" height="45"></span></div></td>
    <td width="300" colspan="3"><span class="style14">
      <?
	echo strtoupper($fkd[Nama]); 
	?>
      <br>      
      <? echo strtoupper($fkd[Jalan]); ?><br />
      Telp.  <? echo $fkd[Telp]; ?>.<br>
	  FAX : <? echo $fkd[Fax]; ?> </span> </td>
    </tr>
   
</table>

</div></td>
</tr>
</table>
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
 <table width="691" border="1" cellpadding="1" cellspacing="0"  >
 
 <tr valign="top" >
 <td width="365"><div align="left">
 <table width="365" border="0" cellpadding="1" cellspacing="1">
<tr valign="top"  <?
if($hh[Jam]>0){
?> onClick="wCompare_098_7zm1 = window.open('z2_9.php?id=<? echo $id; ?>', 
  'wCompare_098_7zm1', 'width=680,height=300,left=370,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_098_7zm1.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   <? } ?>  ><?
$jen = substr(strtoupper($ii[NamaPer]),0,3);
 ?>
 <td width="355"   colspan="3"><div align="center" class="style1"> <? 
 echo "KWITANSI";
  // echo $ii[NamaPer];
 ?></div></td>
 </tr>
<tr valign="top">
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="1" cellspacing="1" class="style14">
<tr >
<td>Group</td><TD>:</TD><td><div align="left"><? 
echo ucfirst(strtolower($hh[NamaPer]));
?></div></td>
</tr> 
<tr valign="top">
                            <td width="108">No</td>
 <td width="3">:</td>
 <td width="238"><div align="left"><? echo "KWT:$id"; ?></div></td>
 </tr>
<tr valign="top">
   <td>Sudah terima dari </td>
   <td>:</td>
   <td><div align="left"><a href="#" 
	   onClick="wCompare = window.open('65yhy_0.php?id=<? echo $id;?>', 
  'wCompare', 'width=380,height=440,left=500,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none" ><? echo ucfirst(strtolower($hh[Pembayar])); ?></a></div></td>
 </tr>
<tr valign="top">
   <td>Uang Sejumlah </td>
   <td>:</td>
   <td><div align="left"><?
 if($ii[KodePer]==83){
   $nil = $hh[Asli];
 }else{

    $nil = $hh[Db]+$hh[Kk]+$hh[Jam]+$hh[Tunai];
 }  $kal= terbilang($nil);
   echo $kal;
//   echo number_format($nil);
   ?></div></td>
 </tr>
<tr valign="top">
   <td>Untuk Pembayaran </td>
   <td>:</td>
   <td><div align="left"><? echo ucfirst(strtolower($hh[Keterangan])); ?></div></td>
 </tr>
<tr valign="top">
  <td>Dokter</td>
  <td>:</td>
  <td><div align="left"><?
  echo $ii[NamaDokter];
  ?></div></td>
</tr>
 </table>
 </div> </td>
 </tr>
 <tr class="style14">
   <td colspan="3" valign="top"><div align="right">Bekasi, <?
   echo date("d"); $bln=date("m"); $thn1 =date("Y");
   include "../bulan.php";
   ?></div></td>
 </tr>
 <tr valign="top">
   <td colspan="3" valign="top"><div align="left">
   <table border="0" cellpadding="0" cellspacing="0">
 
  <tr valign="top">
     <td><div align="left"> <table border="0" cellpadding="0" cellspacing="0">
	 <tr class="style14">
	 <td width="80"> Jumlah (Rp) :</td>
	 <td width="110" valign="top"><div align="left">
	 <table border="1" cellpadding="1" cellspacing="1" class="style14">
	<tr valign="top">
	 <td width="101"><div align="left"><?
	 echo number_format($nil); 
	 ?></div></td>
	 </tr>
	 </table>
	 </div></td>
	 </tr>
	 </table></div></td>
   </tr>
  <tr valign="top">
     <td><hr></td>
   </tr>
   <tr valign="top">
     <td><div align="left">
	 <table width="204" border="0" cellpadding="1" cellspacing="1" class="style14">
	<?
	if($hh[Kk]>0){
	?> 
	<tr>
	 <td width="81">K Kredit</td>
	 <td width="8">:</td>
	 <td width="105"><div align="right"><? echo number_format($hh[Kk]-$hh[crg]); ?></div></td>
	 </tr>
	 <?
	 }
	if($hh[Tunai]>0){
	?> 
	<tr>
	 <td width="81">Tunai</td>
	 <td width="8">:</td>
	 <td width="105"><div align="right"><? echo number_format($hh[Tunai]); ?></div></td>
	 </tr>
	 <?
	 }
	 if($hh[Db]>0){
	 ?>
	 <tr valign="top">
	 <td>Debet</td><td>:</td><td><div align="right"><? echo number_format($hh[Db]); ?></div></td>
	 </tr>
	 <? }  
	  if($hh[Jam]>0){
	 ?>
	 <tr onClick="wCompare_098 = window.open('ma3.php?id=<? echo $id; ?>', 
  'wCompare_098', 'width=580,height=300,left=370,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_098.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    valign="top">
	 <td>Jaminan</td><td>:</td><td><div align="right"><?
	  if($ii[KodePer]==83){
	   $kk_sddd = mysql_query("SELECT id FROM datapasien WHERE NoPasien='$ii[NoPasien]'");
	 $yv = mysql_fetch_array($kk_sddd);
	// echo "$yv[id]";
	$paoe = mysql_query("SELECT * FROM karyawan WHERE IdPasien='$yv[id]'");
	$hvv = mysql_fetch_array($paoe);
	  echo number_format($hh[Jam]-$hvv[Plafond]);
	
	  }else{
	  echo number_format($hh[Jam]);
	  }  ?></div></td>
	 </tr>
	 <?
	 if($ii[KodePer]==83){
	 ?>
	 <tr>
	 <td>Plafond</td><td>:</td><td><div align="right">
	   <?
	 
	echo number_format($hvv[Plafond]);
	 ?>
	   </div></td>
	 </tr> 
	 <? } ?>
	  <? }  if($hh[crg]>0){
	 ?>
	 <tr valign="top">
	    <td>Card Fee </td>
	    <td>&nbsp;</td>
	    <td><div align="right"><?
		echo number_format($hh[crg]); 
		?></div></td>
	    </tr>
	  <? } ?>
	 
	 </table>
	 </div></td>
   </tr>
   </table>
   </div></td>
 </tr>
 <tr valign="top" class="style14">
   <td colspan="3" valign="top"><div align="right">( <? echo $a[Nama]; ?> )<br>
  </div></td>
 </tr>
 </table>
 </div></td>
  <td width="310" valign="top"><div align="left">
  <table border="0" cellpadding="1" cellspacing="1" class="style14">
 <!-- <?
 /*
      onClick="wCompare_098_7zm1 = window.open('z2_9s.php?id=<? echo $id; ?>', 
  'wCompare_098_7zm1', 'width=680,height=300,left=370,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_098_7zm1.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	*/ ?> --> <tr valign="top"    onClick="wCompare_098_7zm1 = window.open('z2_9s.php?id=<? echo $id; ?>', 
  'wCompare_098_7zm1', 'width=680,height=300,left=370,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_098_7zm1.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td width="17"><strong>No</strong></td>
  <td width="205"><strong>Pelanyanan</strong></td>
  <td width="66"><strong>Jumlah (Rp)</strong></td>
  </tr>
  <?
  $nomer=1;
 $kdjfkdjfd = mysql_query("SELECT SUM(JmlHargaBeli) AS hh FROM jualobat WHERE RegId='$ii[RegId]'");
$uj = mysql_fetch_array($kdjfkdjfd);
   $nomer = $nomer;
  $dflklfd = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$ii[RegId]'");
  while($p = mysql_fetch_array($dflklfd)){
  ?>
 <tr valign="top">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($p[NamaBiaya])); 
  ?></div></td>
  <td><div align="right"><? echo number_format($p[Total]);
  $kabeh =$kabeh + $p[Total];
   ?></div></td>
  </tr>
  <?
  $nomer++; } 
   $dflklfd2 = mysql_query("SELECT * FROM txnjalan WHERE RegId='$ii[RegId]'");
  while($p2 = mysql_fetch_array($dflklfd2)){
  ?>
 <tr valign="top">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($p2[NamaBiaya])); ?></div></td>
  <td><div align="right"><? echo number_format($p2[JumlahHarga]);
  $kabeh2 =$kabeh2 + $p2[JumlahHarga];
   ?></div></td>
  </tr>
  <?
  $nomer++; }  
  $dflklfd2x = mysql_query("SELECT * FROM txnugd WHERE IdPasien='$ii[id]'");
  while($p2x = mysql_fetch_array($dflklfd2x)){
  ?>
 <tr valign="top">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($p2x[NamaBiaya])); ?>
  </div></td>
  <td><div align="right"><? echo number_format($p2x[Harga]);
  $kabeh2x =$kabeh2x + $p2x[Harga];
   ?></div></td>
  </tr>
  <?
  $nomer++; } 
    if($uj[hh]>0){   
   $kdikd_dfd =  mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$ii[id]'");
   while($vv = mysql_fetch_array($kdikd_dfd)){
    ?>
 <tr valign="top">
   <td><div align="center"><? echo $nomer; ?></div></td> 
   <td><div align="left">Obat Resep <? echo $vv[NoResep]; ?></div></td>
   <td><div align="right"><?
   $nn=$vv;
    include "../Farmasi/harga_farmasi2.php";
	$t_obat=$ta_s;
   ?></div></td>
  </tr>
  <? $nomer++; } ?>
  <? } ?>
   <tr>
  <td colspan="2" bgcolor="#FFFFFF"><div align="center"><strong>TOTAL</strong></div></td><td bgcolor="#FFFFFF"><div align="right"><strong>
    <?
	  
	$kabeh3=$kabeh2x+$kabeh2+$kabeh+$t_obat;
    echo number_format($kabeh3); 
  ?>
  </strong></div></td>
  </tr>
  </table>
 </div></td>
  </tr>
</table></div></td></tr>
<tr>
<td class="style14 style15"><div align="right">  <?
   echo date("d-m-Y:H:i:s");
   ?></div></td>
</tr>
</table>
 
<?
$TglJam=date("d.m.Y-H:i:s");
$kdfkdjfd_DFdfd  = mysql_query("INSERT INTO  `tanda_cetak_kwt` (`id`, `TglJam`, `Kwt`) VALUES (NULL, '$TglJam','$id')");
 $djdjjd = mysql_query("SELECT COUNT(id) AS hh FROM tanda_cetak_kwt WHERE Kwt='$id'");
$hhh = mysql_fetch_array($djdjjd);
$depana =1;
while($depana<=$hhh[hh]){
echo "*";
$depana++; }
?> 
 
</body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>
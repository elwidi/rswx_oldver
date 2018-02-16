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
 if( $a[Level]==3 ){
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
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="1">
<tr valign="top">
<td width="158"><div align="left">
<table width="379" border="0" cellpadding="0" cellspacing="0" class="style14">
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='../Farmasi/sulistiono.php';" >
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
  
<tr valign="top">
 <td width="108">NO</td>
 <td width="3">:</td>
 <td width="238"><div align="left"><? echo "$hh[NoPasien]"; ?></div></td>
 </tr>
<tr valign="top">
   <td>Sudah terima dari </td>
   <td>:</td>
   <td><div align="left"><? echo $hh[Pembayar]; ?></div></td>
 </tr>
<tr valign="top">
   <td>Uang Sejumlah </td>
   <td>:</td>
   <td><div align="left"><?
 if($ii[KodePer]==83){
   $nil = $hh[Asli];
 }else{
    $nil = $hh[Db]+$hh[Kk]+$hh[Jam]+$hh[Tunai]+$hh[crg];
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
	 <td width="105"><div align="right"><? echo number_format($hh[Kk]); ?></div></td>
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
	 <td>Jaminan</td><td>:</td><td><div align="right"><? echo number_format($hh[Jam]); ?></div></td>
	 </tr> <? } ?>  
	<?
	if($hh[crg]>0){ ?><tr valign="top">
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
   <td colspan="3" valign="top"><div align="right">( <? echo $a[Nama]; ?> )</div></td>
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
	*/ ?> -->
                  <tr valign="top"   > 
                    <td width="17"><strong>No</strong></td>
                    <td width="205"><strong>Pelanyanan</strong></td>
                    <td width="66"><strong>Jumlah (Rp)</strong></td>
                 <tr valign="top"   > 
                    <td><div align="center">1 </div></td>
                    <td><div align="left">Penjualan Apotik Resep Luar </div></td>
                    <td><div align="right"><? echo number_format($nil); ?></div></td>
                  </tr>
				 
                  <tr valign="top"   > 
                    <td colspan="2"><div align="center">TOTAL</div></td>
                      <td><div align="right"><? echo number_format($nil); ?></div></td>
                  </tr>
                </table>
 </div></td>
  </tr>
</table></div></td></tr>
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
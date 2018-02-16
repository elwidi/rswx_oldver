<?
session_start();
 include "../konek.php";
 include "../ceke.php";
include "../alamat.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){

$Bus = mysql_query("SELECT * FROM labumum WHERE id=$fito");
$x = mysql_fetch_array($Bus);
if(!$x[id]){
header("Location:./permen_karet.php");
}
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; }
-->
</style>
</head>
<div align="left">
<table border="0"   onClick="location.href='nasi_kucing.php?hari=<? echo $fito; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  cellpadding="1" cellspacing="1">
<tr valign="top">
<td colspan="3"><div align="left" class="style1">
<table border="0" cellpadding="1" cellspacing="1" class="style3">
	     <tr>
           <td width="377"><span class="style16"><strong>BUKTI TRANSAKSI PEMERIKSAAN LAB LUAR<br>RUMAH SAKIT YADIKA</strong></span></td>
	       </tr>
	     <tr>
           <td></td>
	       </tr>
	     <tr>
           <td><div align="left"><?
		   echo $fkd[Jalan];
		   ?></div></td>
	       </tr>
	     <tr>
           <td>Telp <?
		   echo $fkd[Telp];
		   ?><?
		   echo $fkd[Fax];
		   ?> </td>
	       </tr>
	     <tr>
           <td><span class="style5"><?
		   $kiks_dfdfd = mysql_query("SELECT * FROM dokterlab WHERE id=1 ");
		   $nam = mysql_fetch_array($kiks_dfdfd); 
		   echo $nam[Dokter]; 
		   ?></span></td>
	       </tr>
	     <tr>
           <td><span class="style5">NO SIP : <? echo $nam[Sip];  ?> </span></td>
	       </tr>
	     <tr>
	       <td>INSTALASI LABORATORIUM </td>
	       </tr>
	  </table> </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
 
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style23">
<tr>
<td>JENIS PEMERIKSAAN</td><td>:</td>
<td><div align="left">
LABORATORIUM LUAR </div></td>
</tr>
<tr>
<td width="153">NO MED REC</td>
<td width="4">:</td>
<td width="224"><div align="left"><? echo $x[id]; ?></div></td>
</tr>
<tr>
<td>NO TRANS LAB</td><td>:</td><td><div align="left"><?  $pcd_f = explode("-",$x[RegId]); 
echo "$pcd_f[0] ";
?>(<?  	//
$Rea="$x[id].$x[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut FROM urutanlab WHERE RegId='$Rea'");
	$bcx = mysql_fetch_array($ksjksds);
	echo $bcx[NoUrut];
	//
	?>)<? 
 ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($x[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>ATAS PERMINTAAN</td><td>:</td><td><div align="left"><? echo $x[NamaDokter];  ?></div></td>
</tr>
<tr>
<td colspan="3"><u>JENIS PEMERIKSAAN</u></td> 
</tr>
<tr>
<td colspan="2"><div align="left">
<table width="158" border="0" cellpadding="2" cellspacing="2" class="style23">
<?
$nomer=1;
$kdkdkfjdkdf = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$x[RegId]' LIMIT 0,5");
while($zz= mysql_fetch_array($kdkdkfjdkdf)){
?>
<tr>
<td width="27"><div align="center"><? echo $nomer; ?></div></td>
<td width="117"><div align="left"><? echo strtoupper($zz[NamaBiaya]); 
$asda = $asda + $zz[Total];
?></div></td>
</tr>
<?
$Diskon=$zz[KodeKeu];
$nomer++; } ?>
</table>
</div></td><td valign="top">
<div align="left">
<table width="158" border="0" cellpadding="2" cellspacing="2" class="style23">
<?

$kdkdkfjdkdf2 = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$x[RegId]' LIMIT 5,10");
while($zz2= mysql_fetch_array($kdkdkfjdkdf2)){
?>
<tr>
<td width="27"><div align="center"><? echo $nomer; ?></div></td>
<td width="117"><div align="left"><? echo strtoupper($zz2[NamaBiaya]); 
$asda2 = $asda2 + $zz2[Total];
?></div></td>
</tr>
<?
$Diskon2=$zz2[KodeKeu];
$nomer++; } ?>
</table></div>
</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr valign="top">
 <td colspan="3"><div align="right">
 <table border="0" cellpadding="1" cellspacing="1" class="style23">
 <tr>
 <td width="177">TGL TRANSAKSI</td>
<td width="4">:</td>
<td width="186"><div align="left"><? echo "$x[Tgl]/$x[Bln]/$x[Thn]"; echo " $pcd_f[1] ";  ?></div></td>
</tr>
<tr>
<td>PETUGAS LAB</td><td>:</td><td><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
</tr>
<tr>
<td>TOTAL TRANSAKSI</td><td>:</td><td><div align="left"><? 
$asda3 = $asda+$asda2;
echo number_format($asda3); ?></div></td>
</tr>
<tr>
<td>DISCOUNT</td><td>:</td><td><div align="left"><? echo "$Diskon%";?></div></td>
</tr>
<tr>
<td>TOTAL</td><td>:</td><td><div align="left"><? echo number_format($asda3); ?></div></td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr>
<td>CARA PEMBAYARAN</td><td>:</td><td><div align="left">TUNAI</div></td>
</tr>
<tr>
<td>TGL SELESAI</td><td>:</td><td><div align="left"><? // echo "$x[TglMasuk]/$x[BlnMasuk]/$x[ThnMasuk]"; ?></div></td>
 </tr>
 </table>
 </div></td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr class="style23">
<td colspan="3"><div align="left">
<u>NOTA INI SEBAGAI BUKTI PENGAMBILAN HASIL</u>
</div></td>
</tr>
</table>
</div>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>
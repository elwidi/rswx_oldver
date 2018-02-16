<?
session_start();
include "../konek.php";
include "../ceke.php";
 include "../alamat.php";

if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
 if(!$z[id]){
 header("Location:./index.php");
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
	font-size: 13px;
	font-weight: bold;
}
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; }
.style24 {
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>
<div align="left">
<table border="0"   cellpadding="1" cellspacing="1">
<tr  >
<td colspan="3"><div align="left" class="style1">
LABORATORIUM RS.YADIKA</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table  onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="391"><div align="left" class="style2">
<?  echo $fkd[Jalan]; ?></div></td>
</tr>
<tr>
<td><div align="left">
  <span class="style3">Telp : <? echo $fkd[Telp]; ?> 
  Fax : <? echo $fkd[Fax];  ?></span></div></td></tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="381" border="0" cellpadding="1" cellspacing="1" class="style23">
<tr>
<td>ASAL PASIEN </td>
<td>:</td>
<td><div align="left">
RAWAT JALAN
</div></td>
</tr>
<tr>
<td width="153">NO MED REC</td>
<td width="4">:</td>
<td width="224"><div align="left"><? echo $z[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NO TRANS LAB</td><td>:</td><td><div align="left"> <b><?  //echo "$z[RegId]"; 
 $Rea="$z[id].$z[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut,TglJam FROM urutanlab WHERE RegId='$Rea'");
	$bcx = mysql_fetch_array($ksjksds);
  $pcf = explode("-",$bcx[TglJam]);
  $poke = explode(".",$pcf[0]);
 echo "$poke[0]$poke[1]$poke[2] (";echo $bcx[NoUrut]; echo ")";	//
	?> </b><? 
 ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><b><? echo strtoupper($z[NamaPasien]); ?></b></div></td>
</tr>
<tr>
<td>ATAS PERMINTAAN</td><td>:</td><td><div align="left"><? 
 //$dlkdlkdlfd = mysql_query("SELECT NamaDokter,id FROM UpddokterlabJl WHERE IdPasien='$id'");
			//	$hb = mysql_fetch_array($dlkdlkdlfd);
				if($hb[id]){
				?><font color="#666666"><b><i><?
				echo $hb[NamaDokter]; ?></i></b></font><? 
				}else{
				echo $z[NamaDokter];
				}  ?></div></td>
</tr>
<tr>
<td colspan="3"><u>JENIS PEMERIKSAAN</u></td> 
</tr>
<tr>
 <td colspan="3" valign="top"><div align="left">
 <table width="377" border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td colspan="2"><div align="left">
<table width="203" border="0" cellpadding="2" cellspacing="2">
<?
$nomer=1;
if($bara=='kuda'){
$kdkdkfjdkdf = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$z[RegId]' AND Opr like '%-x' LIMIT 0,5"); 
}else{
$kdkdkfjdkdf = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$z[RegId]'  AND Opr not like '%-x'   LIMIT 0,5");
}
while($zz= mysql_fetch_array($kdkdkfjdkdf)){
if($bara=='kuda'){
?>
<tr class="style23"><? 
}else{?>
<tr class="style24">

<? } ?>
<td width="27"><div align="center"><? echo $nomer; ?></div></td>
<td width="162"><div align="left"><? echo strtoupper($zz[NamaBiaya]); 
$asda = $asda + $zz[Total];
?></div></td>
</tr>
<?
$Diskon=$zz[KodeKeu];
$nomer++; } ?>
</table>
</div></td>
 <td width="160" valign="top">
   <div align="left">
     <table width="160" border="0" cellpadding="2" cellspacing="2" class="style23">
       <?
	  if($bara=='kuda'){
$kdkdkfjdkdf2 = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$z[RegId]'  AND Opr like '%-x' LIMIT 5,10");
}else{
$kdkdkfjdkdf2 = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$z[RegId]'    AND Opr not like '%-x'  LIMIT 5,10");
}
while($zz2= mysql_fetch_array($kdkdkfjdkdf2)){
?>
       <tr>
         <td width="27"><div align="center"><? echo $nomer; ?></div></td>
            <td width="121"><div align="left"><? echo strtoupper($zz2[NamaBiaya]); 
$asda2 = $asda2 + $zz2[Total];
?></div></td>
            </tr>
       <?
$Diskon2=$zz2[KodeKeu];
$nomer++; } ?>
     </table>
   </div></td></tr>
 </table>
 </div></td>
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
 <table border="0" cellpadding="2" cellspacing="2" class="style23">
 <tr>
 <td width="177">TGL TRANSAKSI</td>
<td width="4">:</td>
<td width="186"><div align="left"><? echo "$z[TglMasuk]/$z[BlnMasuk]/$z[ThnMasuk]"; echo "  $z[JamMasuk]";  ?></div></td>
</tr>
<tr>
<td>PETUGAS LAB</td><td>:</td><td><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
</tr>
<tr>
<td>TOTAL TRANSAKSI</td><td>:</td><td><div align="left"><b><?
$asda3 = $asda+$asda2; echo number_format($asda3); ?></b></div></td>
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
<td>CARA PEMBAYARAN</td><td>:</td><td><div align="left"><? echo strtoupper($z[NamaPer]); ?></div></td>
</tr>
<tr>
<td>TGL SELESAI</td><td>:</td><td><div align="left"><? // echo "$z[TglMasuk]/$z[BlnMasuk]/$z[ThnMasuk]"; ?></div></td>
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

}
?>

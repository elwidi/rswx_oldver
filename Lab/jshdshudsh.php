<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";
$id  = $_GET["id"];
$Dus = $_GET["Dus"];
$Op = explode("-",$NoBukti);
if($Op[0]=='LAB'){
$NoBukti="$NoBukti";
}else{
$NoBukti="LAB-$NoBukti";
}
 $dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$z = mysql_fetch_array($dataa);
 $splo = explode("-",$z[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);

//cek wis bayar durung ---------------------------->
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
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
<table border="0"   onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  cellpadding="1" cellspacing="1">
<tr>
<td colspan="3"><div align="left" class="style1">
LABORATORIUM RS.YADIKA
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="391" class="style2"><div align="left" class="style2"><?
echo $fkd[Jalan];
?></div></td>
</tr>
<tr>
<td class="style2"><div align="left">
  <span class="style3">Telp:<? echo $fkd[Telp]; ?></span></div></td></tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style23">
<tr>
<td>RUANG / KELAS </td>
<td>:</td>
<td><div align="left"><?
echo $j[NamaRuangan]; echo " / "; echo $j[NamaKelas]
?></div></td>
</tr>
<tr>
<td width="153">NO MED REC</td>
<td width="4">:</td>
<td width="224"><div align="left"><? echo $z[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NO TRANS LAB</td><td>:</td><td><div align="left"><?  //echo "$NoBukti"; 
  	//
$Rea="$z[id].$z[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut,TglJam FROM urutanlab WHERE RegId='$id.$NoBukti'");
	$bcx = mysql_fetch_array($ksjksds);
	  $pcf = explode("-",$bcx[TglJam]);
  $poke = explode(".",$pcf[0]);
 echo "$poke[0]$poke[1]$poke[2] (";echo $bcx[NoUrut]; echo ")";
	//
	 
 ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($z[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>ATAS PERMINTAAN</td><td>:</td><td><div align="left"><? 
//$lkdlfld_000 = mysql_query("SELECT id,NamaDokter FROM dokterlabInap WHERE NoBukti='$NoBukti'");
//$mn = mysql_fetch_array($lkdlfld_000);
if($mn[id]){
echo "<i><b>$mn[NamaDokter]</i></b>";
}else{
echo $z[KetDokter]; 
} ?></div></td>
</tr>
<tr>
<td colspan="3"><u>JENIS PEMERIKSAAN</u></td> 
</tr>
<tr>
<td colspan="2"><div align="left">
<table width="187" border="0" cellpadding="2" cellspacing="2" class="style23">
<?
$nomer=1;
$kdkdkfjdkdf = mysql_query("SELECT * FROM txninap2 WHERE  MstKey='$z[MstKey]'  AND NoBukti='$NoBukti' limit 0,5");
while($zz= mysql_fetch_array($kdkdkfjdkdf)){
?>
<tr>
<td width="27"><div align="center"><? echo $nomer; ?></div></td>
<td width="146"><div align="left"><? echo strtoupper($zz[NamaBiaya]); 
$asda = $asda + $zz[JumlahHarga];
$bala = "$zz[Tgl]-$zz[Bln]-$zz[Thn]";
?></div></td>
</tr>
<?
$Diskon=$zz[KodeKeu];
$nomer++; } ?>
</table>
</div></td>

<td valign="top"><div align="left">
<table width="187" border="0" cellpadding="2" cellspacing="2" class="style23">
<?
 $kdkdkfjdkdf2 = mysql_query("SELECT * FROM txninap2 WHERE  MstKey='$z[MstKey]'  AND NoBukti='$NoBukti' limit 5,10");
while($zz2= mysql_fetch_array($kdkdkfjdkdf2)){
?>
<tr>
<td width="27"><div align="center"><? echo $nomer; ?></div></td>
<td width="146"><div align="left"><? echo strtoupper($zz2[NamaBiaya]); 
$asda2 = $asda2 + $zz2[JumlahHarga];
?></div></td>
</tr>
<?
$Diskon2=$zz2[KodeKeu];
$nomer++; } ?>
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
<td width="186"><div align="left"><? echo "$bala / "; echo "  $z[JamMasuk]";  ?></div></td>
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
header("Location:./keluar.php");
}
 ?>
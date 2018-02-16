<?
session_start();
include "../salaman.php";
include "../konek.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style2">
<td width="1256" colspan="3" valign="top">
<div align="left"><strong>
LAPORAN JADWAL PERIKSA <br />
RS YADIKA
</strong><br>
PERIODE : <? echo "$tgl1 "; 
 $bln=$bln1; include "../bulan.php";
echo " sd $tgl2 "; 
$bln=$bln2; include "../bulan.php";
?></div></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style1">
<input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';" class="style1"> 
|| 
<? 
if($tampak=='beda'){
?>
<input type="button" name="gfgf" value="Tampilkan Global" style="background:#FFFF33" onClick="location.href='harsono_ayah_ku.php?bln2=<? echo $bln2; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>';" class="style1"> 
<?}else{
?>
<input type="button" name="gfgf" value="Tampilkan Lebih Detail" onClick="location.href='harsono_ayah_ku.php?tampak=beda&bln2=<? echo $bln2; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>';" class="style1"> 
<? } ?></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="0" class="style1">
<tr valign="top">
 <td width="21" rowspan="2" bgcolor="#FF99FF">NO </td><td width="49" rowspan="2" bgcolor="#FF99FF">NO RM </td><td width="182" rowspan="2" bgcolor="#FF99FF">NAMA PASIEN </td><td width="300" rowspan="2" bgcolor="#FF99FF">ALAMAT </td>
 <td width="124" rowspan="2">TELP</td>
 <td colspan="2" bgcolor="#FF99FF"><div align="center">TGL PERIKSA</div></td>
  
 <td width="83" rowspan="2" bgcolor="#FF99FF"><div align="center">USIA<br>
   HAMIL(Minggu)</div></td>
   <? if($tampak=='beda'){?>
   <td rowspan="2">PERKIRAAN<br>LAHIR</td>
   <td  rowspan="2">Opr</td><td  rowspan="2">TglJam</td>
 <td width="156" rowspan="2" bgcolor="#FF99FF">KETERANGAN</td>   <? } ?>
</tr>
<tr valign="top">
 <td width="80" bgcolor="#FF99FF">SEBELUMNYA</td><td width="66" bgcolor="#FF99FF">SKARANG</td>  
</tr>
  
<?
    $nomer=1;
//   $gambar ='<img src="../gb/centang.jpg" width="12" height="11">'; 
    $banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$bln1/$tgl1/$thn1");
  $sekar = ceil(($comp-$kini)/86400);
  $mulai=0;
 $disik=1;
  while($mulai<=$sekar){
    $compare = date("d/m/Y",$kini +$mulai*86400);
 $peca=explode("/",$compare);
 $Tgl=$peca[0]-0;
 $Bln=$peca[1]-0;
  $Thn=$peca[2]-0;
  $ikik_d = mysql_query("SELECT * FROM anc WHERE TglKontrol=$Tgl AND BlnKontrol=$Bln AND ThnKontrol=$Thn ORDER BY ThnMasuk,BlnMasuk,TglMasuk");
  while($vv = mysql_fetch_array($ikik_d)){
  $yt = $nomer%2;
  if($yt==1){
  $warna='bgcolor="#CFFED1"';
  }else{
  $warna='';
  }
 ?><tr <? echo $warna; ?>  valign="top">
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo $vv[NoPasien]; ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($vv[NamaPasien])); ?></div></td>
 <td><div align="left"><?
 $ujuj_ddddd =  mysql_query("SELECT Alamat,Telp FROM datapasien WHERE NoPasien='$vv[NoPasien]'");
 $ya  = mysql_fetch_array($ujuj_ddddd);
 echo ucfirst(strtolower($ya[Alamat])); ?></div></td>
 <td><div align="left"><? echo $ya[Telp]; ?></div></td>
 <td><div align="right"><? echo "$vv[TglMasuk]-$vv[BlnMasuk]-$vv[ThnMasuk]"; ?></div></td>
 <td><div align="right"><? echo "$vv[TglKontrol]-$vv[BlnKontrol]-$vv[ThnKontrol]"; ?></div></td>
  
  <td><div align="center"><? echo $vv[UmurHamil]; ?></div></td>  <? if($tampak=='beda'){?>
  <td><div align="right"><?
  //echo "$vv[TglLahir]-$vv[BlnLahir]-$vv[ThnLahir]";
  //echo "$vv[IdPasien]";
  $ooidfd_dfd = mysql_query("SELECT Tgl,Bln,Thn,id FROM kira_lahir WHERE IdRec='$vv[id]'");
  $hg = mysql_fetch_array($ooidfd_dfd);
  if(!$hg[id]){
    $hari_dalam_minggu = $vv[UmurHamil]*7;
$ukur = 280-$hari_dalam_minggu; 
     $kini = strtotime("$vv[BlnMasuk]/$vv[TglMasuk]/$vv[ThnMasuk]");
    $compare = date("d/m/Y",$kini +$ukur*86400);
  $pde = explode("/",$compare);
///
$TglJamX=date("d.m.Y-H:i:i");
  /*$iin_istri_hari = mysql_query("INSERT INTO  `kira_lahir` (`id`, `Tgl`, `Bln`, `Thn`, `IdRec`, `IdRj`, `Opr`, `TglJam`) 
  VALUES (NULL, '$pde[0]', '$pde[1]', '$pde[2]', '$vv[id]', '$vv[IdPasien]', '$a[Nama]', '$TglJamX')");
 ///  echo "??"; 
 */ }else{
  echo "$hg[Tgl]-$hg[Bln]-$hg[Thn]";
   } ?></div></td>
   <td><div align="left"><? echo ucfirst(strtolower($vv[Opr]));?></div></td>
   <td><div  align="center"><a href="" style="text-decoration:none" onClick="wCompares2_01 = window.open('anc.php?id=<? echo $vv[IdPasien]; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"><? echo $vv[TglJam]; ?></a></div></td> <td><div align="left"><? echo ucfirst(strtolower($vv[Keterangan])); ?></div></td>
   <?    } ?>
 </tr>

<? 
 $nomer++; } 
   $mulai++; } ?><tr valign="top">
  <td colspan="12" bgcolor="#FF99FF">&nbsp;</td>
  </tr> 
</table>
</div>
</td>
</tr>
</table>
</body>
</html>
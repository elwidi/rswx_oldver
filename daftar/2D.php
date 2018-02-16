<?
session_start();
include "../konek.php";
include "../ceke.php";
$ade = $_GET["ade"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$tgl1 = $_GET["tgl1"];
$tgl2 = $_GET["tgl2"];
$bln1 = $_GET["bln2"];
$bln2 = $_GET["bln2"];
$thn1 = $_GET["thn1"];
$thn2 = $_GET["thn2"];
session_start();
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
	which.style.background='#ffffff'
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
</head>
<body>
 <table  cellpadding="2" cellspacing="2" border="0"> 
<tr>
<td width="915"   colspan="3"><div align="center" class="style2"> 
  <div align="left">LIST DATA PASIEN RAJAL <br />
    PERIODE : 
  <?
echo "$tgl1/$bln1/$thn1 sd $tgl2/$bln2-$thn1";
?>
  </div>
</div></td>
</tr>
 <tr>
 <td colspan="3" ><span class="style3">.</span></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table width="1024" border="1" class="style1">
<tr>
<td width="22" bgcolor="#D4D0C8"><span class="style3">NO</span></td>
<td width="40" bgcolor="#D4D0C8"><strong>REGID</strong></td>
<td width="40" bgcolor="#D4D0C8"><strong>TGL</strong></td>
<td width="70" bgcolor="#D4D0C8"><strong>JAM MASUK</strong></td>
<td width="107" bgcolor="#D4D0C8"><strong>NO RM</strong></td>
<td width="155" bgcolor="#D4D0C8"><strong>NAMA PASIEN</strong></td>
<td width="118" bgcolor="#D4D0C8"><strong>POLI</strong></td>
<td width="146" bgcolor="#D4D0C8"><strong>DOKTER</strong></td>
<td width="28" bgcolor="#D4D0C8"><div align="center"><strong>USIA</strong></div></td>
<td width="208" bgcolor="#D4D0C8"><strong>PENJAMIN</strong></td>
<td width="66" bgcolor="#D4D0C8"><strong>BARU/LAMA</strong></td>
 </tr>

 <?
$nomer = 1;  $noma=1; $batas=1;
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
 $tgl=$peca[0]-0;
 $bln=$peca[1]-0;
  $thn=$peca[2]-0;
  $nomer=1;
 $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' ORDER BY id desc");
while($vv = mysql_fetch_array($msjsmsm)){
?>
<tr valign="top">
<tD><div align="center"><? echo $nomer; ?></div></tD>
<td><div align="left"><? echo $vv[RegId];?></div></td>
<td><div align="right"><? echo "$compare"; ?></div></td>
<td><div align="left"><? echo $vv[JamMasuk];?></div></td>
<td><div align="left"><? echo $vv[NoPasien];?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaPasien]); ?></div></td>
<td><div align="left"><? echo $vv[Bagian]; ?></div></td>
<td><div align="left"><? echo $vv[NamaDokter]; ?></div></td>
<td><div align="center"><? echo $vv[Umur]; ?></div></td>
<td><div align="left"><?
if($vv[NamaPer]==''){
echo "NONE";
}else{
 echo strtoupper($vv[NamaPer]); 
 } ?></div></td>
<td><div align="center"><? echo $vv[LB]; ?></div></td>
</tr>

<?
$nomer++; }
$mulai++; }  ?><tr valign="top">
  <tD colspan="11" bgcolor="#D4D0C8">&nbsp;</tD>
  </tr>
 </table>
 </div>
 </td>
 </tr>
 
</table> 
</body>
</html><?
}else{
header("Location:../keluar.php");
}
?>
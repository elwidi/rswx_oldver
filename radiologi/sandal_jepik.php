<?php
session_start();
include "../konek.php";
include "../ceke.php";
include "../rake.php";
$id = $_GET["IdPasien"];
/* jalan_panjang0.php?JasaDokter=<? echo $vv[JasaDokter]; ?>&IdBiaya=<? echo $vv[id]; ?>&IdPasien=<? echo $IdPasien; 
?>&IdStruk=<? echo $IdStruk; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 */
 $kiskisksi= mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
 $ii = mysql_fetch_array($kiskisksi);
 $splo = explode("-",$ii[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
if(!$ii[id]){
echo "DATA TIDAK DIKENAL";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>

<style type="text/css">
<!--
.style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style20 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="676" colspan="3"><div align="left" class="style19">
 LIST DATA TARIF RINAP<br>
 <?
 echo strtoupper($ii[NamaPasien]);  echo " ($ii[NoPasien])";
 ?><br><?
 echo strtoupper($j[NamaRuangan]); ?><font color="#990000"><b><i><u><?  echo " ($j[KodeKelas])"; ?></u></i></b></font><? 
 ?>
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table width="489"  border="1" class="style2">
 <tr>
 <td width="19" bgcolor="#000000"><div align="center"><span class="style20">NO</span></div></td>
 <td width="233" bgcolor="#000000"><span class="style20">NAMA BIAYA</span></td>
  <td width="139" bgcolor="#000000"><span class="style20">KELOMPOK</span></td>
 <td width="70" bgcolor="#000000"><div align="right" class="style20">HARGA</div></td>
 </tr>
 <?
 $nomer=1;
 $kfgfkgjfkjgkf = mysql_query("SELECT * FROM  tabelri WHERE NamaBiaya LIKE '$NamaBiaya%' AND KodeKelompok=3 limit 0,100");
 while($vv = mysql_fetch_array($kfgfkgjfkjgkf)){
 $pc = $nomer%2;
 if($pc==1){
 $warna='';
 }else{
  $warna='bgcolor="#CCCC99"';
 }
 ?>
 <tr  <? echo $warna; ?> valign="top"  onClick="location.href='../Kasir/jalan_panjang0.php?JasaDokter=<? echo $vv[JasaDokter]; ?>&IdBiaya=<? echo $vv[id]; ?>&IdPasien=<? echo $IdPasien; 
?>&IdStruk=<? echo $IdStruk; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo strtoupper($vv[NamaBiaya]); ?></div></td>
  <td><div align="left"><? 
  $kdjkdfd  = mysql_query("SELECT NamaKelompok FROM Kelompok WHERE id='$vv[KodeKelompok]'");
  $vv2  = mysql_fetch_array($kdjkdfd);
  echo strtoupper($vv2[NamaKelompok]);  //echo "($vv[KodeKelompok])"; ?></div></td>
 <td><div align="right"><? echo number_format($vv[$j[KodeKelas]]); ?></div></td>
 </tr>
 
 <?
 $nomer++; } ?><tr valign="top">
   <td colspan="4" bgcolor="#000000">&nbsp;</td>
   </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>
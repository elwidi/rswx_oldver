<?
session_start();
 include "../konek.php";
include "../ceke.php";
  $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF99CC';
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
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="580" colspan="3"><div align="left" class="style1">
LIST DATA TARIF RAJAL
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="18" bgcolor="#000000"><span class="style3">NO</span></td>
<td width="93" bgcolor="#000000"><span class="style3">KELOMPOK</span></td>
<td width="323" bgcolor="#000000"><span class="style3">NAMA BIAYA</span></td>
<td width="60" bgcolor="#000000"><div align="right" class="style3">HARGA</div></td>
</tr>
<?
$nomer=1;
$klfjglfklgf = mysql_query("SELECT * FROM tabelrj WHERE NamaBiaya LIKE '$NamaBiaya%' LIMIT 0,40");
while($bb = mysql_fetch_array($klfjglfklgf)){
$tanda = $bb[JsDrUmum]+$bb[JsDrSpc]+$bb[JsPerawat]+$bb[JsRs];
$pc=$nomer%2;
if($pc==1){
$warna=' bgcolor="#CCFFCC"';
}else{
$warna='';
}
?>
<tr     onClick="location.href='c2dd.php?id=<? echo $id; ?>&IdDetil=<? echo $bb[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? echo $warna; ?> valign="top">
<td><div align="center"><?  echo $nomer; ?></div></td>
<td><div align="left"><? 
$kdikd = mysql_query("SELECT NamaKelompok FROM Kelompok WHERE id='$bb[Kelompok]'");
$yg = mysql_fetch_array($kdikd);
echo strtoupper($yg[NamaKelompok]); 
echo "($bb[id])"; ?></div></td>
<td><div align="left"><?  if($tanda>0){
?><font color="#990000"><b><?
echo strtoupper($bb[NamaBiaya]); 
 ?></b></font><?
}else{
echo strtoupper($bb[NamaBiaya]); 
}
$tanda ='';
?></div></td>
<td><div align="right"><? echo number_format($bb[Harga]); ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
 
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjksds_dssd = mysql_query("SELECT * FROM catat_obat WHERE id='$id'");
$ba =  mysql_fetch_array($kjksds_dssd);
if(!$ba[id]){
echo "RECORD SET DATA TIDAK LENGKAP,....<br>";
}else{
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF66CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="739" colspan="3"><div align="left" class="style1">
Detail Informasi Barang <BR /><?
?><font color="#990000"><i><b><? echo ucfirst(strtolower($ba[NamaObat]));  ?></b></i></font><? 
?>
<br> Periode : <?   $bln=date("m")-0; $thn1 =date("Y"); 
include "../bulan.php"; ?><br><font color="#CC0000"><b>
<?
if($iin=='istriku'){
echo "Rwt Inap";
}else{
echo "Rwt.Jalan";
} 
?></b></font></div></td> 
</tr>
<tr class="style1">
<td colspan="3"><div align="left">
<a href=""   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="window.close()"style="text-decoration:none">Selesai</a>
 || 
 <?
  if($iin!='istriku'){
 ?><font color="#996600"><b><i>R.Jalan</i></b></font><? 
 }else{
 ?><a href="x9a_s.php?id=<? echo $id; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">R.Jalan</a> 
 <? } ?>
 || <?
 if($iin=='istriku'){
 ?><font color="#996600"><b><i>R.Inap</i></b></font><? 
 }else{
 ?> <a href="x9a_s.php?id=<? echo $id; ?>&iin=istriku" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">R.Inap</a> 
 <? } ?> || <a href="kadal_dan_kidil.php?id=<? echo $ba[IdObat]; ?>&var=<? echo $id; ?>" style="text-decoration:none" >Retur</a> </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td width="17" bgcolor="#FFCCCC"><strong>No</strong></td>
  <td width="93" bgcolor="#FFCCCC"><div align="right"><strong>Tgl</strong></div></td>
   <td width="45" bgcolor="#FFCCCC"><div align="center"><strong>Qty</strong></div></td>
   <td width="45" bgcolor="#FFCCCC"><div align="center"><strong>Harga</strong></div></td>
   <td width="60" bgcolor="#FFCCCC"><div align="right"><strong>Total</strong></div></td>
   <td width="87" bgcolor="#FFCCCC"><div align="center"><strong>No Rm</strong></div></td>
   <td width="108" bgcolor="#FFCCCC"><strong>Nama Pasien</strong></td>
   <td width="227" bgcolor="#FFCCCC"><strong>Dokter</strong></td>
  </tr>
  <?
  $nomer=1;
  if($iin=='istriku'){
    $djkfddD_dfdfdfd444545  = mysql_query("SELECT * FROM jualobat2 WHERE KodeObat='$ba[IdObat]' AND Bln='$bln' AND Thn='$thn1'");
  }else{
    $djkfddD_dfdfdfd444545  = mysql_query("SELECT * FROM jualobat WHERE KodeObat='$ba[IdObat]' AND Bln='$bln' AND Thn='$thn1'");
}
 while($xx = mysql_fetch_array($djkfddD_dfdfdfd444545)){
 $re =  $nomer%2;
 if($re==1){
 $warna=' bgcolor="#CEFDCF"';
 }else{
 $warna='';
 } ?>
  <tr <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="right"><? echo "$xx[Tgl]-$xx[Bln]-$xx[Thn]"; ?></div></td>
   <td><div align="center"><? $pc = explode(".",$xx[Qty]);
   if($pc[1]>0){
   echo number_format($xx[Qty],2);
   }else{
   echo number_format($xx[Qty]);
   }
   $sal = $sal + $xx[Qty];
    ?></div></td>
	<td><div align="right"><?
	echo number_format($xx[HargaBeli]);
	?></div></td>
  <td><div align="right"><? echo number_format($xx[JmlHargaBeli]);
  $tot  = $tot + $xx[JmlHargaBeli];
   ?></div></td>
  <td><div align="center"><? echo $xx[NoPasien]; ?></div></td>
  <td><div align="left"><?  echo ucfirst(strtolower($xx[NamaPasien])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($xx[NamaDokter])); ?></div></td> 
  </tr>
   <?
  $nomer++; } ?>  <tr>
    <td colspan="2" bgcolor="#FFCCCC"><div align="center"><strong>Total</strong></div></td>
	<td><div align="center"><? echo number_format($sal); ?></div></td>
	<td>&nbsp;</td>
    <td bgcolor="#FFCCCC"><div align="right"><strong><? echo number_format($tot); ?></strong></div></td>
    <td colspan="3">&nbsp;</td>
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
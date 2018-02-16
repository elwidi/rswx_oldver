<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$Bln){
$bln=date("m");
$thn1=date("Y");
}else{
$bln=$Bln;
$thn1=$Thn;
}?>
<html>
<head>
<style type="text/css">
<!--
.style3 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
  }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="860" height="43" colspan="3"><div align="left" class="style3">
Laporan Pembelian Unit <? if($Kat=='Rad'){ echo "Radiologi";
}elseif($Kat=='Lab'){
echo "Laboratorium";
}elseif($Kat=='Far'){
echo "Farmasi";
}else{
echo "SEMUANYA";
}?><br /><?

?>
Periode : <? include "../bulan.php"; ?>
</div></td>
</tr>
<tr class="style2">
<td colspan="3"><div align="left">
<a href="index.php" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Kembali</a> || 
<a href="b_09.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Rad" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Radiologi</a> || <a href="b_09.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Lab" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Laboratorium</a> || <a href="b_09.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Far" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Farmasi</a> 
|| <a href="b_09.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Semua</a>
|| <a  href="#" style="text-decoration:none"  onClick="wCompare4f3w12 = window.open('../lg/c2a0.php?Kat=<? echo $Kat; ?>&as=44', 
  'wCompare4f3w12', 'width=400,height=140,left=170,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f3w12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Cek Periode</a></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="715" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="23" rowspan="2" bgcolor="#FFCCFF"><strong>No </strong></td>
<td width="78" rowspan="2" bgcolor="#FFCCFF"><strong> Tgl</strong></td>
<td width="163" rowspan="2" bgcolor="#FFCCFF"><strong> No Po </strong></td>
<td width="215" rowspan="2" bgcolor="#FFCCFF"><strong>Supplier</strong></td>
 <td colspan="2" bgcolor="#FFCCFF"><div align="center"><strong> Nilai</strong></div></td>
</tr>
<tr>
<td width="103" bgcolor="#FFCCFF"><div align="right"><strong>cash</strong></div></td>
<td width="95" bgcolor="#FFCCFF"><div align="right"><strong>Hutang</strong></div></td>
</tr>
<?
$nomer=1;
$kdkdjkfd = mysql_query("SELECT * FROM polog77 WHERE NoPo LIKE '%$Kat%' AND Bln='$bln' AND Thn='$thn1' ORDER BY id desc");
while($bb = mysql_fetch_array($kdkdjkfd)){
$isksids_sd= mysql_query("SELECT SUM(Total) AS hh FROM podetil77 WHERE IdPo77='$bb[id]'");
$yo = mysql_fetch_array($isksids_sd);
?>
<tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo "$bb[Tgl]-$bb[Bln]-$bb[Thn]"; ?></div></td>
  <td><div align="left"><? echo $bb[NoPo]; ?></div></td>
  <td><div align="left"><? echo $bb[NamaSupplier]; ?></div></td>
  <td><div align="right"><? 
  if($bb[Jenis]==1){
  $cash = $yo[hh];
  }else{
  $hutang = $yo[hh];
  }
  echo number_format($cash);
  $t_cash = $t_cash + $cash;
  $cash=0;
  ?></div></td>
  <td><div align="right"><?
  echo number_format($hutang); 
  $t_hutang= $t_hutang+$hutang;
  $hutang=0;
  ?></div></td>
</tr>
<?
$nomer++; } ?>
<tr>
  <td colspan="4" bgcolor="#FFCCFF"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#FFCCFF"><div align="right"><?
  echo number_format($t_cash); ?></div></td>
  <td bgcolor="#FFCCFF"><div align="right"><?
    echo number_format($t_hutang);
  ?></div></td>
</tr>
 </table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
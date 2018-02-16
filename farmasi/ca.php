<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjfgfg_fghflgJHJJH =  mysql_query("SELECT * FROM catat_obat where id='$id'");
$ha = mysql_fetch_array($kjfgfg_fghflgJHJJH);
if(!$ha[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
}else{
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#3366CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style></head>
<body alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="853" colspan="3"><div align="left">
  <span class="style1"><font face="Arial, Helvetica, sans-serif">Detail Info <br />
  <font color="#CC9933">
  <?
echo ucfirst(strtolower($ha[NamaObat])); ?>
  </font></font></span>
</div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#990000"><div align="left" class="style3">
<a href=""  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none" onClick="window.close()">Tutup</a> || Pembelian || 
<a href="kadal_dan_kidil.php?id=<? echo $ha[IdObat]; ?>&var=<? echo $id; ?>" style="text-decoration:none" >Retur</a> 
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="17" bgcolor="#CCFFCC"><strong>No</strong></td>
<td width="183" bgcolor="#CCFFCC"><strong>NoPo</strong></td>
<td width="103" bgcolor="#CCFFCC"><strong>Supplier</strong></td>
<td width="49" bgcolor="#CCFFCC"><div align="right"><strong>Tgl</strong></div></td>
<td width="31" bgcolor="#CCFFCC"><div align="center"><strong>Qty</strong></div></td>
<td width="118" bgcolor="#CCFFCC"><strong>Satuan</strong></td>
<td width="64" bgcolor="#CCFFCC"><div align="center"><strong>Qty2</strong></div></td>

<td width="50" bgcolor="#CCFFCC"><div align="right"><strong>Harga</strong></div></td>
<td width="47" bgcolor="#CCFFCC"><div align="right"><strong>Total</strong></div></td>
</tr>
<?
$nomer=1;
$kdjfkdfd_Dfdfds = mysql_query("SELECT * FROM podetil77x where IdBarang='$ha[IdObat]'  AND Stat=2"); //AND Bln=$Bln AND Thn=$Thn ");
while($dap  = mysql_fetch_array($kdjfkdfd_Dfdfds)){
$jm = $nomer%2;
if($jm==1){
$warna=' bgcolor="#FFCCCC"';
}else{
$warna='';
} ?>
<tr <?  echo $warna; ?> valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><?
$kdkdfD_Dfd = mysql_query("SELECT NoPo,NamaSupplier FROM polog77x WHERE id='$dap[IdPox]'");
$up = mysql_fetch_array($kdkdfD_Dfd);
echo $up[NoPo];
?></div></td>
<td><div align="left"><?
echo ucfirst(strtolower($up[NamaSupplier])); 
?></div></td>
<td><div align="right"><? echo "$dap[Tgl]-$dap[Bln]-$dap[Thn]"; ?></div></td>
<td><div align="center"><? $tot = $dap[Qty];//*$dap[Pengali];
echo number_format($tot); $tot=0;
?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($dap[NamaSatuan])); ?></div></td>
<td><div align="center"><? 
$hga = $dap[Qty]*$dap[Pengali];
echo number_format($hga);
$tot_3 = $tot_3 + $hga;
$hga=0;
?></div></td>
<td><div align="right"><? echo number_format($dap[Harga]); ?></div></td>
<td><div align="right"><? echo number_format($dap[Total]);
$totk = $totk  +$dap[Total];
 ?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="6" bgcolor="#CCFFCC"><div align="center"><strong>Total</strong></div></td>
  <td bgcolor="#CCFFCC" colspan="2"><div align="center"><? echo number_format($tot_3); ?></div></td>
  <td bgcolor="#CCFFCC"><div align="right"><? echo number_format($totk);  ?></div></td>
</tr>

</table>
</div>
</td>
</tr>
</table>
</body>
</html>
<? } ?>
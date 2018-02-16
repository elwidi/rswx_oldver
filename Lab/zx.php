<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs)   ?>
	<html>
	<head></head>
	<body>
	<div align="left">
	<table border="1">
	<tr>
	<td width="266" colspan="3"><div align="left">
	LIST PAKET<br />
	<font  color="#990000"><b><u><i>
	 <?
	  $kikdidk = mysql_query("SELECT * FROM paketlab WHERE id='$IdPaket'");
	  $dap = mysql_fetch_array($kikdidk);
	  echo strtoupper($dap[NamaPaket]);
	   ?>
	</i></u></b></font> 
	</div></td>
	</tr>
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<table border="1">
	<tr>
	<td>NO</td><td>NAMA BIAYA</td><td colspan="2">HARGA</td>
	</tr>
	<?
	$nomer=1;
	$ldkfldkf = mysql_query("SELECT * FROM tabelbiayax WHERE Kelompok3='$IdPaket'");
	while($nn = mysql_fetch_array($ldkfldkf)){
	//
	$kdjkdjkd=mysql_query("SELECT id FROM txnjalan2 where RegId='$ii[RegId]' AND IdBiaya='$nn[id]'");
	$ub = mysql_fetch_array($kdjkdjkd);
	?>
	<tr>
	<td><div align="center"><? echo $nomer; ?></div></td>
	<td><div align="left"><? echo $nn[NamaBiaya]; ?></div></td>
	<td><div align="right"><? echo number_format($nn[Harga]); ?></div></td>
	<td><div align="left">
	<input type="checkbox" <? if($ub[id]){?> checked="checked"<? } ?>name="Ambil" onClick="location.href='kakus3.php?IdPaket=<? echo $IdPaket; ?>&IdBiaya=<? echo $nn[id]; ?>&id=<? echo $id; ?>';"> 
	</div></td>
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
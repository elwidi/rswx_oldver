<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style9661 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
<table width="544" border="1" class="style9661">
<tr>
<td width="22" bgcolor="#CCFFCC" ><strong>NO</strong></td>
<td width="164" bgcolor="#CCFFCC"><strong>OBAT / ALKES</strong></td><td width="36" bgcolor="#CCFFCC"><strong>QTY</strong></td><td width="123" bgcolor="#CCFFCC"><strong>SATUAN</strong></td><td width="88" bgcolor="#CCFFCC"><div align="right"><strong>MODAL</strong></div></td><td width="71" bgcolor="#CCFFCC"><div align="right"><strong>JUAL</strong></div></td>
 </tr>
<?
$nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_1detil WHERE IdTxn='$id'");
while($as= mysql_fetch_array($kdjfkdjfddf0909)){
if($as[Stat]>=1){
?><tr bgcolor="#CCFFCC"><?
}else{?>
<tr valign="top" onClick="wCompare = window.open('c29.php?id=<? echo $id; ?>&IdDetil=<? echo $as[id]; ?>', 
  'wCompare', 'width=540,height=140,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<? } ?><td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $as[NamaObat]; ?></div></td>
<td><div align="center"><? echo $as[Qty]; ?></div></td>
<td><div align="left"><? echo $as[NamaSatuan]; ?></div></td>
<td><div align="right"><? echo number_format($as[TotBeli]);
$tot_1 = $tot_1 + $as[TotBeli];
?></div></td>
<td><div align="right"><? echo number_format($as[TotJual]);
$tot_2 = $tot_2 + $as[TotJual];
?></div></td> 
</tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="4" bgcolor="#CCFFCC"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#CCFFCC"><div align="right"><strong><? echo number_format($tot_1); ?></strong></div></td>
  <td bgcolor="#CCFFCC"><div align="right"><strong><? echo number_format($tot_2); ?></strong></div></td>
</tr></table>
</div>
</body>
</html>
<?
}
?>
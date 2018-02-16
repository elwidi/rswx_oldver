<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND IdOpr='$a[id]'");
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
<td width="164" bgcolor="#CCFFCC"><strong>NAMA BARANG </strong></td>
<td width="36" bgcolor="#CCFFCC"><strong>QTY</strong></td><td width="123" bgcolor="#CCFFCC"><strong>SATUAN</strong></td><td width="88" bgcolor="#CCFFCC"><div align="left"><strong>KETERANGAN</strong></div></td> 
 </tr>
<?
$nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_2detil WHERE IdTxn='$id'");
while($as= mysql_fetch_array($kdjfkdjfddf0909)){
 if($as[Stat]>=1){
?><tr bgcolor="#FFCC99"><?
}else{
?><tr valign="top" onClick="wCompare = window.open('c29d.php?id=<? echo $id; ?>&IdDetil=<? echo $as[id]; ?>', 
  'wCompare', 'width=540,height=140,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<? } ?> <td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $as[NamaBarang]; ?></div></td>
<td><div align="center"><? echo $as[Qty]; ?></div></td>
<td><div align="left"><? echo $as[NamaSatuan]; ?></div></td>
<td> <div align="left"><? echo $as[Keterangan]; ?></div></td>
 
</tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="5" bgcolor="#CCFFCC"><div align="center">.</div>    <div align="right"><strong> </strong></div></td>
  </tr></table>
</div>
</body>
</html>
<?
}
?>
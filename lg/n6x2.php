<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND Stat>=1");
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
<table width="636" border="1" class="style9661">
<tr>
<td width="34" rowspan="2"   bgcolor="#CCFFCC" ><div align="center"><strong>NO</strong></div>  <div align="center"><strong> </strong></div></td>
<td width="201" rowspan="2" bgcolor="#CCFFCC"><strong>NAMA BARANG </strong><strong>  </strong></td>
<td colspan="2" bgcolor="#CCFFCC"><strong>MINTA</strong></td>
<td width="112" rowspan="2" bgcolor="#CCFFCC"><strong>SATUAN</strong><strong> </strong></td><td width="180" rowspan="2" bgcolor="#CCFFCC"><div align="left"><strong> </strong></div>  <div align="left"><strong>KETERANGAN</strong></div></td> 
 </tr>
 <tr>
<td width="34" bgcolor="#CCFFCC"><strong>QTY</strong></td>
<td width="35" bgcolor="#CCFFCC"><strong>BERI </strong></td>
</tr>
<?
$nomer=1;
$kdjfkdjfddf0909 = mysql_query("SELECT * FROM oder_2detil WHERE IdTxn='$id'");
while($as= mysql_fetch_array($kdjfkdjfddf0909)){
 if($as[Stat]==2){
 ?><tr bgcolor="#FFFF99"><?
 }else{
?><tr valign="top" onClick="wCompare = window.open('p20.php?id=<? echo $id; ?>&IdDetil=<? echo $as[id]; ?>', 
  'wCompare', 'width=640,height=440,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? } ?> <td><div align="center"><? echo $nomer;
	 ?></div></td>
<td><div align="left"><? echo $as[NamaBarang]; ?></div></td>
<td><div align="center"><? echo $as[Qty]; ?></div></td>
<td><div align="center"><? echo $as[QtyBeri]; ?></div></td>
<td><div align="left"><? echo $as[NamaSatuan]; ?></div></td>
<td> <div align="left"><? echo $as[Keterangan]; ?></div></td>
 
</tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="6" bgcolor="#CCFFCC"><div align="center">.</div>    <div align="right"><strong> </strong></div></td>
  </tr></table>
</div>
</body>
</html>
<?
}
?>
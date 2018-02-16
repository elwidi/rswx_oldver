<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$Bln){
$Bln=date("m")-0;
$Thn=date("Y");
}else{
$Bln=$Bln;
$Thn=$Thn;
}
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
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
	font-weight: bold;
}
.style2 {
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
<td width="608" colspan="3"><div align="left">
<span class="style1">LAPORAN INFORMASI STOK UNIT </span><br>
 <span class="style2"><a  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="index.php" style="text-decoration:none">KEMBALI</a> || 
 ||</span> <span class="style2">
</span> </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="354" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="29" bgcolor="#FFCC99"><div align="center"><strong>NO</strong></div></td>
 <td width="248" bgcolor="#FFCC99"><strong>UNIT</strong></td>
 <td width="57" bgcolor="#FFCC99"><div align="center"><strong>ITEM</strong></div></td>
</tr>
  
<?
$nomer=1;
$kdjfkdjfkd_jhjhj = mysql_query("SELECT * FROM bagian WHERE NamaBagian !='' 
AND id!=25   AND id!=21
AND id!=22 AND id!=20 AND id!=26  ORDER BY NamaBagian");
while($rt = mysql_fetch_array($kdjfkdjfkd_jhjhj)){
$pc = $nomer%2;
$kjkdfd_dfdfd = mysql_query("SELECT SUM(TotJual) AS hh FROM stok_opm WHERE IdUnit='$rt[id]'");
$yh = mysql_fetch_array($kjkdfd_dfdfd);
if($pc==1){
$warna='bgcolor="#CCFFCC"';
}else{
$warna='';
}
if($yh[hh]>0){?>
<tr  <? echo $warna; ?> onClick="wCompare4f4d12 = window.open('s6a.php?id=<? echo $rt[id]; ?>', 
  'wCompare4f4d12', 'width=780,height=500,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f4d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<? }else{ ?>
	<tr  bgcolor="#CCFF9D"><? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $rt[NamaBagian]; echo "($rt[id])"; ?></div></td> 
<td><div align="center"><?
echo number_format($yh[hh]);
$tot = $tot + $yh[hh];
 ?></div></td>
 </tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="2" bgcolor="#FFCC99"><div align="center"><strong>TOTAL</strong></div></td>
   <td bgcolor="#FFCC99"><div align="right"><? echo number_format($tot); ?></div></td>
</tr></table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
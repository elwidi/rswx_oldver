<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCC66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color:#000066
 }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
-->
</style></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="35" bgcolor="#003399"><div align="center"><span class="style3">NO</span></div></td>
<td width="227" bgcolor="#003399"><span class="style3">OBAT/ALKES</span></td>
<td width="52" bgcolor="#003399"><div align="center"><span class="style3">QTY</span></div></td>
 <td width="72" bgcolor="#003399"><div align="right"><span class="style3">NILAI</span></div></td>
 <td>TGL EXP</td>
 <td>OPR</td>
</tr>
<?
$nomer=1;
 $kjsdkdf_fgf = mysql_query("SELECT * FROM stok_opm WHERE IdUnit='$a[KodeBagian]' order by id desc");
while($vv = mysql_fetch_array($kjsdkdf_fgf)){
$ps =$nomer%2;
if($ps==1){
$warna=' bgcolor="#CCFFCC"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>     onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $vv[NamaObat]; ?></div></td>
<td><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
 <td><div align="right"><?
echo number_format($vv[Hna]); 
$tot = $tot + $vv[Hna];
?></div></td>
<td><div align="right"><? echo "$vv[Tgl]-$vv[Bln]-$vv[Thn]"; ?></div></td>
<td><div align="left"><? echo $vv[Opr]; ?></div></td>
 </tr>
<?
$nomer++; } ?><tr>
  <td colspan="4" bgcolor="#003399"><div align="center" class="style3">TOTAL</div></td>
  <td bgcolor="#003399"><div align="right"><span class="style4"><?
  echo number_format($tot); ?></span></div></td>
</tr>

</table>
</div>
</body>
</html>
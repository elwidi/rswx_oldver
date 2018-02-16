<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]' AND Stat=0");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id] && $kakang!='mas'){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sa1.php?kakang=<? echo $kakang; ?>&IdObat=<? echo $IdObat; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>";
self.close();
//-->
} 
</SCRIPT><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FFCC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style355661 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {color: #000000; font-weight: bold; }
-->
</style>
</head>
<body <? if($IdObat>0){?> onLoad="win44()"<? } ?>>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style355661">
<tr>
<td width="28" bgcolor="#CCCCCC"><div align="center"><span class="style3">NO </span></div></td>
<td width="232" bgcolor="#CCCCCC"><span class="style3">NAMA OBAT/ALKES  </span></td>
<TD width="93"   bgcolor="#CCCCCC"><div align="center" class="style3">  </div>  <div align="right" class="style3">HNA </div></TD>
</tr>

<?
$nomer=1;
$djlfdklffd_Dfdk = mysql_query("SELECT * FROM dataobat WHERE NamaObat LIKE '$NamaObat%' limit 0,40");
while($hs = mysql_fetch_array($djlfdklffd_Dfdk)){
//
$i8diu = mysql_query("SELECT id FROM  stok_opm WHERE KeyID='$a[KodeBagian]-$hs[id]' AND Stat=0");
$ub = mysql_fetch_array($i8diu);
//
$pc = $nomer%2;
if($ub[id]){
$warna=' bgcolor="#FF66CC"';
}elseif($pc==1){
$warna=' bgcolor="#FFCC66"';
}else{
$warna='';
}
?>
<tr onClick="location.href='m12w.php?kakang=<? echo $kakang; ?>&IdObat=<? echo $hs[id]; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>';" valign="top" <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $hs[NamaObat]; ?></div></td>
   <TD><div align="right"><? echo number_format($hs[HargaJual]); ?></div></TD>
</tr>
<?
$nomer++; } ?>
<tr>
  <td colspan="4" bgcolor="#CCCCCC">&nbsp;</td> 
  </tr>
<?
$nomer=1;
$dlklds_Sdsds
?>
</table>
</div>
</body>
</html>
<?
}
?>
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
	which.style.background='#00CC99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style789 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
}
.style36666661 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
  }
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}

-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="837" colspan="3"><div align="left">
<span  class="style789">LIST DATA PERMINTAAN AMPRAHAN</span><br />
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style36666661">
<tr>
<td width="24" bgcolor="#999999"><span class="style1">NO</span></td>
<td width="74" bgcolor="#999999"><span class="style1">HARI</span></td>
<td width="83" bgcolor="#999999"><div align="right" class="style1">TGL</div></td>
<td width="81" bgcolor="#999999"><div align="center" class="style1">JAM</div></td>
<td width="91" bgcolor="#999999"><span class="style1">NO TX</span></td>
<td width="68" bgcolor="#999999"><div align="center" class="style1">ITEM</div></td>
<td width="188" bgcolor="#999999"><span class="style1">STATUS</span></td>
<td width="177" bgcolor="#999999"><span class="style1">OPR</span></td>
</tr>
<?
$nomer=1;
$dkdjkfdjfd_fgflk = mysql_query("SELECT * FROM oder_1 WHERE IdUnit='$a[KodeBagian]' and NoTxn not like 'F%' order by id desc limit 0,30");
while($pp = mysql_fetch_array($dkdjkfdjfd_fgflk)){
if($pp[Stat]==1){
?><tr   onClick="wCompare4f4d12 = window.open('x09d.php?id=<? echo $pp[id]; ?>', 
  'wCompare4f4d12', 'width=580,height=500,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f4d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><?
}else{?>
<tr  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FFFFCC" onClick="location.href='index.php?id=<?
 echo $pp[id]; ?>&ukur=xes';">
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $pp[NamaHari]; ?></div></td>
<td><div align="right"><? echo "$pp[Tgl]-$pp[Bln]-$pp[Thn]"; ?></div></td>
<td><div align="center"><? echo $pp[Jam]; ?></div></td>
<td><div align="left"><? echo "MT-$pp[id]"; ?></div></td>
<td><div align="center"><?
$ksiks_Dfd = mysql_query("SELECT COUNT(id) AS jj FROM oder_1detil WHERE IdTxn='$pp[id]'");
$yg = mysql_fetch_array($ksiks_Dfd);
echo $yg[jj];
?></div></td>
<td><div align="left"><? if($pp[Stat]==1){
echo "Sudah Dikirim";
}elseif($pp[Stat]==0){
echo "Belum Di Kirim";
}elseif($pp[Stat]==2){
echo "SDH DI BUKA FARMASI";
}elseif($pp[Stat]==3){
echo "DIKIRIM KEMBALI ";
}else{
echo "?";
} ?>
</div></td>
<td><div align="left"><? echo $pp[Opr];?></div></td>
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
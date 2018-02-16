<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $dfdfd_FDddgatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
 $ii = mysql_fetch_array($dfdfd_FDddgatr);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP............";
}elseif($a[Level]==12){
?>
<html>
<head>
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
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#339999';
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
<td width="584" colspan="3"><div align="left" class="style1">
LIST SETT KOMPONEN<br />
<?
echo $ii[NamaBiaya]; 
?> 
</div></td>
</tr>
<TR>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="24" bgcolor="#003399"><span class="style3">NO</span></td>
<td width="191" bgcolor="#003399"><span class="style3">KOMPONEN</span></td>
<td width="99" bgcolor="#003399"><span class="style3">TGLJAM</span></td>
<td colspan="2" bgcolor="#003399"><span class="style3">OPR</span></td>
</tr>
<?
$nomer=1;
$kdjfkdjfkdjfkd = mysql_query("SELECT * FROM anak_labe WHERE IdBiaya='$id'");
while($hh = mysql_fetch_array($kdjfkdjfkdjfkd)){
$par  = $nomer%2;
if($par==1){
$warna=' bgcolor="#FFCCCC"';
}else{
$warna='bgcolor="#E3FDB3"';
} ?>
<tr valign="top" <? echo $warna; ?> >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $hh[Param]; ?></div></td>
<td><div align="left"><? echo $hh[TglJam]; ?></div></td>
<td width="136"><div align="left"><? echo $hh[Opr]; ?></div></td>
<td onClick="location.href='d_Ddd.php?id=<? echo $id; ?>&IdDetil=<? echo $hh[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" width="63"><div align="center">
Hapus</div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div> 
</td>
</TR>
</table>
</div>
</body>
</html>
<?
}
?>

<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari"); 
 }else{
$Bus = mysql_query("SELECT * FROM txnrad WHERE id=$hari");
}$x = mysql_fetch_array($Bus);
if(!$x[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
<td width="640" colspan="3"><div align="center">
<span class="style1">LIST DATA rujukan</span><br />
 </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="130">NAMA rujukan</td>
<td width="8">:</td>
<td width="361"><div align="left">
<input type="text" name="NamaRujukan" maxlength="100" size="20" class="style2">
<input type="hidden" name="anak" value="3">
<input type="hidden" name="hari" value="<? echo $hari; ?>">
<input type="hidden" name="xe" value="<? echo $xe; ?>"> || 
<input name="fg" type="submit" class="style2" value="Cari">
 <input name="fgfg" type="button" class="style2" onClick="window.close()" value="Selesai">
</div></td>
</tr>
</table>
</form>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="24" bgcolor="#FFCCCC"><strong>NO</strong></td>
<td width="274" bgcolor="#FFCCCC"><strong>NAMA PERUJUK</strong></td>
<td width="320" bgcolor="#FFCCCC"><strong>ALAMAT</strong></td>
</tr>
<?
$nomer =1;
if($anak==3){
$kdjfkdjkdf = mysql_query("SELECT * FROM rujukan WHERE NamaRujukan LIKE '%$NamaRujukan%' LIMIT 0,200");
}else{
$kdjfkdjkdf = mysql_query("SELECT * FROM rujukan LIMIT 0,100");
}
while($xx = mysql_fetch_array($kdjfkdjkdf)){
$pasS = $nomer%2;
if($pasS==1){
$warna='bgcolor="#FFFFB0"';
}else{
$warna=' bgcolor="#DCFED6"';
}
?>
<tR valign="top" <? echo $warna; ?> onClick="location.href='77i_0.php?xe=<? echo $xe; ?>&hari=<? echo $hari; ?>&IdRujuk=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $xx[NamaRujukan]; ?></div></td>
<td><div align="left"><? echo strtoupper($xx[Alamat]); ?></div></td>
</tR>
<?
$nomer++; } ?><tR>
  <td colspan="3" bgcolor="#FFCCCC">&nbsp;</td>
  </tR>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
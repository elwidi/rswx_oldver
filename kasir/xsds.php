<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF99CC';
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
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style2 {
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
<td width="468" colspan="3"><div align="left" class="style1">
List Tarif 
<br>
<?
echo $hh[Bagian]; 
?></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style12">
<tr>
<td width="20" bgcolor="#0033CC"><span class="style2">No</span></td>
<td width="219" bgcolor="#0033CC"><span class="style2">Nama Tarif</span></td>
<td width="72" bgcolor="#0033CC"><div align="right" class="style2">Harga</div></td>
</tr>
<?
$nomer=1;
$kdjfkdjkfdjdk = mysql_query("SELECT * FROM tarif WHERE IdUnit='$hh[KodeBagian]'");
while($nn = mysql_fetch_array($kdjfkdjkfdjdk)){
$pa  = $nomer%2;
if($pa==1){
$warna=' bgcolor="#FFFF99"';
}else{
$warna=' bgcolor="#E7FED6"';
}
?>
<tr valign="top" <? echo $warna; ?>onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   onClick="location.href='c2dd_01.php?anak=pdp&id=<? echo $id; ?>&IdDetil=<? echo $nn[id]; ?>';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaBiaya])); ?></div></td>
<td><div align="right"><? echo number_format($nn[Tiga]);?></div></td> 
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
<?
}
?>
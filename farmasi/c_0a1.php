<?
session_start();
include "../konek.php";
include "../ceke.php";
  $datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
 $xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}

.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="d00.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td height="30" colspan="3" bgcolor="#ECE9D8"><div align="left" class="style1">
LIST DATA SUB BIDANG
</div></td>
</tr>
<tr class="style2">
<td width="166">SUB BIDANG USAHA</td>
<td width="5">:</td>
<td width="453"><div align="left">
<input name="SubBidUsaha" type="text" class="style2" size="34" maxlength="120"  />
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Simpan" name="ffg" />
<input type="button" name="fgff" value="Selesai" onClick="window.close()" />

</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table class="style2" border="1">
  <tr>
  <td width="21" bgcolor="#9DACBF"><strong>NO</strong></td>
  <td width="208" bgcolor="#9DACBF"><strong>BIDANG USAHA</strong></td>
  <td width="97" bgcolor="#9DACBF"><strong>TGLJAM</strong></td>
  <td bgcolor="#9DACBF" colspan="2"><strong>OPR</strong></td>
  </tr> 
<?
$nomer=1;
$ksdkjskds = mysql_query("SELECT * FROM bidang_usaha order by BidangUsaha");
while($ik = mysql_fetch_array($ksdkjskds)){
?> 
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $ik[BidangUsaha]; ?></div></td>
<td><div align="left"><? echo $ik[TglJam]; ?></div></td>
<td width="129"><div align="left"><? echo $ik[Opr]; ?></div></td>
<td width="52"><div align="center">
<a href="s_000.php?id=<? echo $id; ?>&IdUsaha=<? echo $ik[id]; ?>" style="text-decoration:none"><strong>Hapus</strong></a>
</div></td>
</tr>
<?
$nomer++; } ?> </table>
  </div></td>
</tr>
</table>
</form>
</div>
</body> 
</html>
<?
}
?>

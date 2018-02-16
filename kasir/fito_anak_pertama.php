<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
///
$kdjfdD= mysql_query("SELECT * FROM anc WHERE IdPasien='$id'");
$ph = mysql_fetch_array($kdjfdD);
if(!$ph[id]){
echo "RECORD SET TIDAK DIKENAL,....<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style3 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="3" cellspacing="3">
<tr valign="top">
<td width="595" height="68" colspan="3"><div align="left">
<span class="style2">YAKIN DATA INI AKAN DIHAPUS?</span><br />
<span class="style3">
<a href="s0a_1.php?id=<? echo $id; ?>" style="background-color:#CCFF00"  >YA</a> || 
<a href="#" style="background-color:#CCFF00"  onClick="window.close()">TIDAK</a></span></div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
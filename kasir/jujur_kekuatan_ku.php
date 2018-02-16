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
<head></head>
<body>
<div align="left">
<form action="budi_yuli_sdr_cowok_ku.php">
<table border="1">
<tr>
<td colspan="3"><div align="left">
MENU INPUT KB
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1">
<tr>
<td>No Rm</td><td>:</td><td><div align="left"><? echo $hh[NoPasien]; ?></div></td>
</tr>
<tr>
<td>Nama Pasien</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($hh[NamaPasien]));
?></div></td>
</tr>
<tr>
<td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>
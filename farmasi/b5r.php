<?
session_start();
include "../konek.php";
include "../salaman.php";
$oodfnkdfmjkdd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$u = mysql_fetch_array($oodfnkdfmjkdd);
if(!$u[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head></head>
<body>
<div align="left">
<table border="1">
<tr>
<td colspan="3"><div align="left">
PROSES PENOMORAN RESEP<br />
<?
echo strtoupper($u[NamaPasien]); 
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1">
<tr>
<td>NO</td><td>NO TX</td><td colspan="2">NILAI</td>
</tr>
<?
$nomer=1;
$dkffd = mysql_query("SELECT * FROM rj_resep WHERE IdPasien=$id");
while($zz = mysql_fetch_array($dkffd)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><?
echo $zz[NoResep];
?></div></td>
<td><div align="right"><?

?></div></td>
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
<? } ?>
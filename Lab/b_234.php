<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
$ak = $_GET["ak"];
 $ada = mysql_query("SELECT * FROM labumum WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 
if(!$kp[id]){
//header("Location:./rambut_gondrong.php");
}
$kdjflodkfdlkfld = mysql_query("SELECT * FROM ket_hasil_lab WHERE IdPasien='LR.$fito'");
$mk = mysql_fetch_array($kdjflodkfdlkfld);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="center">
<form action="h990_s.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="center">
ISIKAN KETERANGAN HASIL LAB<br />
<?
echo strtoupper($kp[NamaPasien]);
?>
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr valign="top">
<td>KETERANGAN</td><td>:</td><td><div align="left">
<textarea rows="2" cols="30" name="Keterangan"><? echo $mk[Keterangan]; ?></textarea>
<input type="hidden" name="fito" value="<? echo $fito; ?>" />
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input type="submit" value="Simpan" name="ffg" />
<input type="button" name="fggf" value="Selesai" onclick="window.close()" />
</div></td>
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
}else{}?>
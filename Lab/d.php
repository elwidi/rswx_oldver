<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $gatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$as = mysql_fetch_array($gatr);
if($as[id]!=$id){
 header("Location:./makan_gemblong.php");
}

?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; color: #FFFFFF; }
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="649" colspan="3" bgcolor="#990000"><div align="center" class="style2">
YAKIN DATA INI AKAN DI HAPUS<br />
<?
echo strtoupper($as[NamaBiaya]);
?>
</div></td>
</tr>
<tr>
<td colspan="3"> <div align="center" class="style1"><a href="ck.php?id=<? echo $id; ?>" style="text-decoration:none">YA</a> || 
<a  href="ikan_goreng.php?id=<?  echo $id; ?>" style="text-decoration:none">TIDAK</a> </div></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
</tr>
</table>
</body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>
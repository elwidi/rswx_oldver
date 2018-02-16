<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ldkfldklfdklfd_Ddfdl = mysql_query("SELECT * FROM akti_perawat WHERE id='$id' and  IdOpr =$a[id]");
$ii = mysql_fetch_array($ldkfldklfdklfd_Ddfdl);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #993300;
}
-->
</style>
</head>
<body>
<table width="574" height="68" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="542" colspan="3"><span class="style1">YAKIN DATA INI AKAN DIHAPUS?</span><br />
  <span class="style2">
  <?
echo $ii[Keterangan];
?>
  .</span><br>
<input type="button" name="FGF" value="Ya" onClick="location.href='fff_F.php?id=<? echo $id; ?>';" />
||
<input type="button" name="fdgfgf" value="Selesai" onClick="window.close()" /></td>
</tr>
</table>
</body>
</html>
<? 
}
?>
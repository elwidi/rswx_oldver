<?php 
session_start();
header('Refresh: 3');
include "../konek.php";
include "../ceke.php";
$Bln=date("m")-0;
$Thn = date("Y")-0;
$KeyID="$Bln-$Thn";
  $kdjkfdf_dfdf = mysql_query("select * from biay_keluar_1 where KeyID='$KeyID'");
$ya_pao = mysql_fetch_array($kdjkfdf_dfdf);
 ?>
<html>
<head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" class="style2">
<tr valign="top">
<td width="240"><div align="left"><? echo number_format($ya_pao[Nilai2]);
 ?> </div></td>
</tr>
</table>
</body>
</html>
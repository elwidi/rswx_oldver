<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RegId= $_GET["RegId"];
  $jkjpp = mysql_query("SELECT COUNT(id) AS jj FROM jual_ob_rl_tmp WHERE RegId='$NoResep'");
 $h = mysql_fetch_array($jkjpp);
 if($h[jj]>0){
 ?><html>
<head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #0066CC;
}
-->
 </style>
</head>
 <body bgcolor="#F2FEE7">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="560" colspan="3"><div align="left">
 <span class="style1">YAKIN DATA INI AKAN DIPROSES KE PENJUALAN</span><br />
 <input type="button" name="FDGFGF" value="Ya" onClick="location.href='prologi.php?RegId=<? echo $NoResep; ?>';" />
 || <input type="button" name="gfhghg" value="Selesai" onClick="window.close()" />
 </div></td>
 </tr>
 </table>
 </div>
 </body>
 </html><? 
 }else{
 header("Location:../keluar2.php");
 }
 ?>
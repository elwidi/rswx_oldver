<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$msism = mysql_query("SELECT * FROM dataobat WHERE id='$IdObat'");
	$de = mysql_fetch_array($msism);
	if(!$de[id]){
 header("Location:../keluar2.php");
	}else{
   ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {font-size: 12px}
-->
 </style>
 </head>
 <body>
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="483" colspan="3"><div align="left" class="style1">
 HISTORY DATA OBAT
 </div></td> 
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="1" class="style1">
 <tr>
 <td width="24" bgcolor="#D4D0C8"><strong>NO</strong></td>
 <td width="223" bgcolor="#D4D0C8"><strong>NO ORDER</strong></td>
 <td width="63" bgcolor="#D4D0C8"><strong>STAT</strong></td>
 <td width="113" bgcolor="#D4D0C8"><strong>TGL</strong></td>
 <td width="26" bgcolor="#D4D0C8"><strong>QTY</strong></td>
 </tr>
 <?
 $nomer=1;
 $jdjjdjdjd = mysql_query("SELECT * FROM NoLogDetil2 WHERE IdBarang='$IdObat' order by id desc LIMIT 0,1000");
 while($xx = mysql_fetch_array($jdjjdjdjd)){
 $kkk = mysql_query("SELECT NoTxn,Stat FROM NoLog WHERE id='$xx[IdOrder]'");
 $jn = mysql_fetch_array($kkk);
 ?>
 <tr>
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo "$jn[NoTxn]"; ?></div></td>
 <td><div align="center"><? echo $jn[Stat];  ?></div></td>
 <td><div align="left"><? echo "$xx[Tgl]-$xx[Bln]-$xx[Thn]";  ?></div></td>
 <td><div align="center"><? echo $xx[QtyOk]; ?></div></td>
 </tr>
  <?
 $nomer++; } ?> <tr>
   <td colspan="5" bgcolor="#D4D0C8">&nbsp;</td>
   </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
 </div>
 </body>
 </html>
<? } ?>
 
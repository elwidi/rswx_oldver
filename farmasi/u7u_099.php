<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
$xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:./kompor.php");
}
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
 </style>
 </head>
 <body>
 <div align="center">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="554" colspan="3"><div align="center" class="style2">
 DETAIL DATA OBAT<br />
 <?
 echo strtoupper($xs[NamaSuplier]);
 ?>
 </div></td>
 </tr>
 <tr>
 <td colspan="3"><span class="style1">.</span></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="1" class="style1">
 <tr>
 <td width="18" bgcolor="#D4D0C8">NO</td>
 <td width="259" bgcolor="#D4D0C8">NAMA OBAT</td>
 <td width="99" bgcolor="#D4D0C8">KEY ID </td>
 <td width="150" bgcolor="#D4D0C8">TGLJAM</td>
 </tr>
 <?
 $nomer=1;
 $kik09=mysql_query("SELECT  * FROM obatsupplier WHERE IdSupplier='$id'");
 while($xx = mysql_fetch_array($kik09)){
 ?>
 <tr>
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo strtoupper($xx[NamaObat]); ?></div></td>
 <td><div align="left"><? echo  ($xx[KeyID]); ?></div></td>
 <td><div align="left"><? echo $xx[TglJam]; ?></div></td> 
 </tr>
 <? $nomer++; } ?> <tr>
   <td colspan="4" bgcolor="#D4D0C8">&nbsp;</td>
   </tr>

 </table>
 </div>
 </td>
 </tr>
 </table>
 </div>
 </body>
 </html>

<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 $kdjfkdkfd  = mysql_query("SELECT * FROM labumum WHERE id='$id'");
 $ya = mysql_fetch_array($kdjfkdkfd);
 //
 $kdjfkdjkfd= mysql_query("SELECT * FROM kwitansi_lab_rad WHERE IdTxn='L.$id'");
 $ua = mysql_fetch_array($kdjfkdjkfd);
 if($ua[id]){
 header("Location:./s.php?id=$ua[id]");
 }elseif(!$ya[id]){
 header("Location:./minum_jamu_telor_bebek.php");
 }else{
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
 </style>
 </head>
 <body>
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="300" colspan="3"><div align="left" class="style2">
 LIST DATA TXN LAB<br />
 <?
 echo $ya[NamaPasien];
 ?>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style2">
   <tr>
   <td width="18" bgcolor="#999999"><strong>NO</strong></td><td width="148" bgcolor="#999999"><strong>NAMA BIAYA</strong></td><td width="56" bgcolor="#999999"><div align="center"><strong>QTY</strong></div></td><td width="50" bgcolor="#999999"><div align="right"><strong>TOTAL</strong></div></td>
   </tr>
   <?
   $nomer=1;
$kdjkdjkfd= mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$ya[RegId]'");
while($up = mysql_fetch_array($kdjkdjkfd)){
   ?>
   <tR valign="top">
   <td><div align="center"><? echo $nomer; ?></div></td>
   <td><div align="left"><? echo $up[NamaBiaya]; ?></div></td>
   <td><div align="center"><? echo $up[Qty]; ?></div></td>
   <td><div align="right"><? echo number_format($up[Harga]);
   $to = $to + $up[Harga];
   ?></div></td>
   </tR>
  
   <?
   $nomer++; } ?> <tR>
     <td colspan="3" bgcolor="#999999"><div 
	  align="center"><strong>TOTAL</strong></div></td>
     <td bgcolor="#999999"><div align="center"><strong><? echo number_format($to); ?></strong></div></td>
   </tR>
   </table>
   </div></td>
 </tr> 
 </table>
 </div> 
 </body>
 </html>
 <?
 }
 ?>
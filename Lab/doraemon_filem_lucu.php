<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $dfdfd_FDddgatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
 $ii = mysql_fetch_array($dfdfd_FDddgatr);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP............";
}elseif($a[Level]==12){
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
 </style>
 </head>
 <body>
 <div align="left">
 <form action="d_Ddd019.php">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="410" colspan="3"><span class="style1">HALAMAN ISI KOMPONEN TAMBAHAN</span></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="80">Nama Biaya</td>
 <td width="3">:</td>
 <td width="288"><div align="left"><?
 echo $ii[NamaBiaya]; 
 ?></div></td>
 </tr>
 <tr valign="top">
   <td>Komponen</td>
   <td>:</td>
   <td><div align="left">
   <textarea rows="3" cols="40" name="Param" class="style2"></textarea>
   <input type="hidden" name="id"  value="<? echo $id; ?>">
   </div></td>
 </tr>
 <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <tr>
   <td colspan="3"><div align="left">
   <input type="submit" value="Simpan" name="dfdfd" class="style1"><?
   $djdjdjdjdj = mysql_query("SELECT COUNT(id) AS jj FROM anak_labe WHERE IdBiaya='$id'");
   $mm = mysql_fetch_array($djdjdjdjdj);
   if($mm[jj]>0){
   ?>
   <input type="button" name="fgfgf" value="Cek Data : <?  echo $mm[jj]; ?> Item " class="style1" style="background-color:#CCFF00"
    onClick="wCompare_anssseeak_cinta_3 = window.open('pasar_kucing_ga_ada.php?id=<? echo $id; ?>', 
  'wCompare_anssseeak_cinta_3', 'width=580,height=440,left=20,Top=39,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_anssseeak_cinta_3.focus();" >
   <? 
   }
   ?>
   <input type="button" name="fgfgf" value="Tutup" onClick="window.close()" class="style1">
   </div></td>
   </tr> 
 </table>
 </div>
 </td>
 </tr>
 </table>
 </form>s
 </div>
 </body>
 </html>
 <?
 }
  ?>
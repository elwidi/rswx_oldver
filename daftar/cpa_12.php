<?php 
 session_start();
 include "../konek.php";
 include "../ceke.php";
 ?>
 <html>
 <head>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
 </style><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="er4.php?NamaBiaya=<? echo $NamaBiaya; ?>&ha=<? echo $ha; ?>&se=<? echo $se; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT>
 </head>
 <body>
 <div align="left">
 <form action="as_9.php">
 <?
 /*NoKartu=230&budi=&id=19112&IdDept=8&IdDokter=8&IdRujukan=5*/
 ?>
 <input type="hidden" name="budi" value="<? echo $budi; ?>">
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <input type="hidden" name="IdDept" value="<? echo $IdDept; ?>">
 <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
 <input  type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">
 <input  type="hidden" name="IdPenjamin" value="<? echo $IdPenjamin; ?>">
  <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="520" colspan="3"><div align="left" class="style1">
 UPDATE NO KARTU
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="96">NO KARTU</td>
 <td width="5">:</td>
 <td width="199"><div align="left">
 <input name="NoKartu" type="text" class="style2" value="<? echo $NoKartu; ?>" size="32" maxlength="100">
 </div></td>
 </tr>
 <tr>
 <td colspan="3"><div align="left">
 <input type="submit" value="Update" name="fgfgfgf"  />
 <input  type="button" name="fgfgf" value="Selesai" onClick="window.close()">
 </div></td>
 </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
 </div>
 </body>
 </html> </form>
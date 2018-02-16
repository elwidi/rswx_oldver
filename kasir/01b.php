<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  if($a[Level]==9){
?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
 <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
 </style>
 </head>
 <body bgcolor="#CCCCCC">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td height="38" colspan="2"><span class="style1">HALAMAN AKSES LAPORAN</span></td>
 </tr>
 <tr>
 <td colspan="2" valign="top">
 <div align="left">
 <table class="style2" border="0" cellpadding="2" cellspacing="2">
 
 <tr    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
   <td width="8"><div align="center"><strong>2</strong></div></td>
   <td width="181">PERSALINAN</td>
 </tr>
 <tr>
   <td><div align="center"><strong>3</strong></div></td>
   <td>RUJUKAN</td>
 </tr>
 <tr   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="window.close()">
   <td><div align="center"><strong>4</strong></div></td>
   <td>KELUAR</td>
 </tr>
 </table>
 </div>
 </td>
 </tr>

 </table>
 </body>
 </html>
<?
}
?>
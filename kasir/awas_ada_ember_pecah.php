<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdfd_Dfdfdf = mysql_query("SELECT * FROM tarif WHERE id='$id'");
$ii = mysql_fetch_array($kjdfd_Dfdfdf);
 if(!$ii[id]){
 echo "RECORD SET TIDAK LENGKAP";
 }elseif($FiLaDim[a3]!='on'){
 echo "ANDA TIDAK BERHAK AKSES HALAMAN INI";
 }elseif( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16  || $a[Level]==22 ){
 ?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
 <body bgcolor="#FFCCCC">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="589" colspan="3"><div align="left">
 <font size="6" face="Verdana, Arial, Helvetica, sans-serif">YAKIN 
 <font color="#990000"><i><? echo strtoupper($ii[NamaBiaya]);  ?></i></font> 
 AKAN DI HAPUS? </font><br />
 <strong><font size="4" face="Geneva, Arial, Helvetica, sans-serif">
 <a href="d_ododkd.php?id=<? echo $id; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || 
 <a href="" style="text-decoration:none" onClick="window.close()" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">TIDAK</a> </font></strong></div></td>
 </tr>
 </table>
 </div>
 </body>
 </html>
 <? 
 } 
 ?> 
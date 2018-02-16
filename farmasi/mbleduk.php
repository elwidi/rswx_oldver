<?
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==98){
 $datat = mysql_query("SELECT * FROM supplier3 WHERE id='$id'");
}elseif($a[Level]==6){
 $datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
}else{
 $datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
} 
 $ss = mysql_fetch_array($datat);
 if(!$ss[id]){
 echo "RECORD SET TIDAK LENGKAP,....<br>";
}elseif($dik_dimas[duapuluh]!=1  && $a[Level]==11 || $dik_dimas[duapuluh]!=1 && $a[Level]==6){
 echo "AKSES TIDAK DIIJINKAN ADMIN";
 }else{
 ?>
 <html>
 <head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#009933';
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
	font-size: 24px;
}
.style2 {color: #006666}
.style3 {
	color: #990000;
	font-weight: bold;
}
-->
 </style>
 </head>
 <body alink="#990000" vlink="#990000" link="#990000">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2"> 
 <tr>
 <td width="832" colspan="3">
   <div align="left" class="style1"><span class="style2">YAKIN DATA INI AKAN DI HAPUS? </span><BR>
     <span class="style3">
	 <a href="pak_hamid.php?id=<? echo $id; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"style="text-decoration:none">YA</a></span> || <span class="style3">
	 <a href="" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="window.close()">TIDAK</a></span> </div></td>
 </tr>
 </table>
 </div>
 </body>
 </html>
 <?
 }
 ?>
 

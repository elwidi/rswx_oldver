<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdjdjd = mysql_query("SELECT * FROM dokter WHERE id='$id'");
$uu = mysql_fetch_array($jdjdjd);
if(!$uu[id]){
echo "RECORD SET TIDAK DIKENAL";
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
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
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style3 {
	color: #990000;
	font-style: italic;
}
.style4 {color: #009933}
-->
</style>
</head>
<body>
<div align="left">
<table width="728" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr valign="top">
 <td width="127"><div align="left">
 <img src="../../gambar/aktep.GIF" width="123" height="101" />
 </div></td><td width="596"><div align="left">
 <span class="style1">YAKIN DATA INI AKAN DI NON <?
 if($uu[Stap]==1){
 ?>
 <span class="style4">AKTIFKAN</span> 
 <?
 }else{
 ?>
 <span class="style3">NON AKTIFKAN</span> 
 <? } ?>?</span><br />
 <span class="style2">
 <a href="dfd_dfdfd.php?id=<? echo $id; ?>" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  style="text-decoration:none">YA</a> || 
 <a href="" onClick="window.close()" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  style="text-decoration:none">TIDAK</a></span></div></td>
 </tr>
 </table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>
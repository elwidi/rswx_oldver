<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];

$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
echo "RECORD SET TIDAK LENGKAP,....";
}else{
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	color: #0033CC;
	font-size: 24px;
}
-->
</style>
</head>
<body bgcolor="#CCCCCC">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="884" colspan="3">
  <div align="left" class="style1"><span class="style2">YAKIN DATA INI AKAN DIHAPUS?</span><br />
    <a href="f_fff123.php?id=<? echo $id; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || 
	<a href="" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
	 onClick="window.close()">TIDAK</a>  </div></td>
</tr>
</table>
</body>
</html>
<? 
}
?>
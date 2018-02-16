<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$mas = $_GET["mas"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCC33';
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
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head> 
<body bgcolor="#666666" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
<span class="style1"><?
if($mas=='mitra'){
?>YAKIN materai INI AKAN DISERTAKAN<? 
}else{
?>YAKIN materai INI AKAN DI BATALKAN
<? } ?> ?<br />
<a href="8um.php?mas=<? echo $mas; ?>&id=<? echo $id; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >YA</a> || 
<a href="#"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none" onClick="window.close()">TIDAK</a></span>
</body>
</html>
<?
}
?>
<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
////////////////////
$LFKLGFKG = mysql_query("SELECT * FROM tambahdokter WHERE id='$IdDetil'");
$ud = mysql_fetch_array($LFKLGFKG);
if(!$ud[id]){
header("Location:../../keluar2.php");
}elseif(!$x[id]){
header("Location:../../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {color: #006699}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
-->
</style>
</head>
<body bgcolor="#E0FFC0">
<span class="style2"><strong>YAKIN DATA INI AKAN DIBATALKAN?</strong><br />
<span class="style1">
<?
echo "$ud[NamaDokter]"; 
?>
.</span><br>

<strong><a href="xz.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >YA </a> || 
<a href="#" style="text-decoration:none" onClick="window.close()"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >TIDAK</a></strong></span> 
</body>
</html>
<?
}
?>
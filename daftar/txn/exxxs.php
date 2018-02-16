<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
//
$kikik = mysql_query("SELECT * FROM materai WHERE id='$IdDetil'");
$oo = mysql_fetch_array($kikik);
if(!$oo[id]){
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
	</script></head>  
<body>
<font size="4" face="Arial, Helvetica, sans-serif"><strong>YAKIN DATA INI AKAN DI HAPUS?</strong></font><br />
<font color="#990000"><?
echo strtoupper($oo[Keterangan]);
?></font><br />
<font size="4" face="Arial, Helvetica, sans-serif">
<a href="3po.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >YA</a> || 
<a href="#" onClick="window.close()"style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >TIDAK</a></font>
</body>
</html>
<? 
}
?>

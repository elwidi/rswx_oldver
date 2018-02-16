<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$skdjksjkdsjkds = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$aa = mysql_fetch_array($skdjksjkdsjkds);
if(!$aa[id]){
header("Location:../../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
<body>
<div align="center">
YAKIN DATA INI AKAN DIHAPUS?<br />
<?
echo strtoupper($aa[NamaPasien]);
echo "<br>";
echo $aa[KetRuangan];
?><br />
<a href="s_Dd.php?id=<? echo $id; ?>"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">YA</a> || <a href="../fito_sayangku.php" style="text-decoration:none"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">TIDAK</a>
</div>
</body>
</html>
<?
}
?>
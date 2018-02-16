<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$kdjkl = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$bb = mysql_fetch_array($kdjkl);
if(!$bb[id]){
header("Location:../keluar2.php");
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
	font-size: 19px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
}
-->
</style>
</head>
<body>
<span class="style1">YAKIN DATA INI AKAN DI DAFTAFKAN KE RAWAT JALAN?<br />
<span class="style2">
<?
echo strtoupper($bb[NamaPasien]); echo "($bb[NoPasien])";
 ?>
.</span><br>
<a href="4e_G.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || 
<a href="asa_s.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">BATALKAN</a> || <a href="#"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none"
 onclick="window.close()">TIDAK</a></span>
</body>
</html>
<? 
}
?>
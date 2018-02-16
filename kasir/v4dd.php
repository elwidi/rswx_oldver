<?php
session_start();
include "../konek.php";
include "../hari.php";
include "../ceke.php";
$iin = $_GET["iin"];
$dimas = $_GET["dimas"];
$hasil = $_GET["hasil"];
$tres = $_GET["tres"];
  $id = $_GET [ "id" ];
  $NamaBarang = $_GET["NamaBarang"];
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
$kikdidk = mysql_query("SELECT COUNT(id) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]' AND JenisDP=1");
$ff =  mysql_fetch_array($kikdidk);
if($ff[jj]==0){
echo "BELUM ADA PEMBAYARAN PENUTUP";
}elseif(!$x[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC66';
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
	font-size: 24px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000033;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>
<body>
<span class="style1">YAKIN DATA PASIEN<br />
AN : 
<?
echo strtoupper($x[NamaPasien]); echo " ($x[NoPasien]) <br>";
?> 
AKAN DI PULANGKAN? </span><br />
<span class="style2">
<a href="b6t.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || 
<a href="#" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="window.close()" >TIDAK</a></span> 
</body>
</html>
<?
}
?>
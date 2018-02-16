<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
//
$lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);
if(!$kk[id] || !$yh[id]){
echo "RECORD SET TIDAK LENGKAP,... ";
}else{
?><html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>
<body bgcolor="#333333" alink="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF">
<span class="style1">YAKIN DATA INI AKAN DI CLOSING ?<br /><?
echo "$kk[NoPo]";
?><br>
<a href="juju_kj.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >YA</a> || 
<a href="" style="text-decoration:none" onClick="window.close()"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >TIDAK</a></span>
</body>
</html>
 <? } ?>
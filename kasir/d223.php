<?
session_start();
include "../salaman.php";
 include "../konek.php";
 $kdjfkdjkfd = mysql_query("SELECT * FROM vaksin_pasien WHERE id='$id'");
 $y= mysql_fetch_array($kdjfkdjkfd);
 if(!$y[id]){
 echo "RECORD SET TIDAK DIKENAL";
 }else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
	font-weight: bold;
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<div align="left">
<span class="style1">YAKIN DATA INI AKAN DIHAPUS?</span><br />
<span class="style2">
<a href="d03.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>&id=<? echo $id; ?>" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || <a href="#" onClick="window.close()" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">TIDAK</a></span></div>
</body>
</html>
<? } ?>
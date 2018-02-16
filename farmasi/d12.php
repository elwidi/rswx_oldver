<?
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="d09_0.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>";
self.close();
//-->
} 
</SCRIPT> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC00';
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
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body bgcolor="#990000" alink="#FFFFFF" vlink="#FFFFFF" link="#CCCCCC">
<span class="style1">YAKIN DATA INI AKAN DIPROSES KE PENJUALAN?
<br /> 
<a href="ddfd_Df.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >YA</a> || 
<a href="#" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onclick="window.close()">
TIDAK</a></span>
</body>
</html>
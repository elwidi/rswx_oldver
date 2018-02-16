<?
session_start();
include "../ceke.php";
 include "../konek.php";
 $kjd_ddd = mysql_query("SELECT * FROM persalinan WHERE IdRj='$id'");
$ya = mysql_fetch_array($kjd_ddd);
if(!$ya[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
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
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>
<body bgcolor="#006666"alink="#FFFF33" vlink="#FFFF33" link="#FFFF33">
<div align="left">
<table border="1">
<tr>
<td width="743" colspan="3"><div align="left">
<span class="style1">YAKIN DATA INI AKAN DIHAPUS?</span><br />
<span class="style2" style="color: #FFFF99"><a href="e_eva.php?id=<? echo $id; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">YA </a> || 
<a href=""   onClick="window.close()" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none" >TIDAK</a></span>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
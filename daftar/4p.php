<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ujdjj = mysql_query("SELECT * FROM rwtjalan_btl WHERE id='$id'");
$un = mysql_fetch_array($ujdjj);
if(!$un[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {color: #FFFFFF}
-->
</style><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#0000CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
</head>
<body alink="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" bgcolor="#D2FBD2">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3" bgcolor="#993300"><div align="center" class="style1">
  <span class="style3">YAKIN PROSES REVERSAL DATA DILAKUKAN<br />
  <a href="3a.php?id=<? echo $id; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">YA</a> || 
  <a href="#"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none" onClick="window.close()">TIDAK</a></span>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="339" border="0" cellpadding="2" cellspacing="2" class="style2">

<tr>
<td>REG ID</td><td>:</td><td><div align="left"><? echo $un[RegId]; ?></div></td>
</tr>
<tr>
<td width="108">NO RM</td>
<td width="8">:</td>
<td width="206"><div align="left"><? echo $un[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($un[NamaPasien]); ?></div></td>
</tr>
<tr>
  <td>ALASAN BATAL </td>
  <td>:</td>
  <td><div align="left"><? echo strtoupper($un[Alasan]); ?></div></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>
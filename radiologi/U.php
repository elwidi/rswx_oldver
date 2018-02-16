<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$IdDetil=$_GET["IdDetil"];
$dimas = $_GET["dimas"];
$NoBukti = $_GET["NoBukti"];
if($dimas=='ela'){
$ujs = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
}else{
 $ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
 }
$ii = mysql_fetch_array($ujs);
$jujhuh = mysql_query("SELECT * FROM txnjalan WHERE id='$IdDetil'");
$bk = mysql_fetch_array($jujhuh);
if(!$bk[id]){
//header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #003399;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
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
</head>
<body alink="#993300" vlink="#993300" link="#993300">
<div align="left">
<table border="0" cellpadding="3" cellspacing="3">
<tr>
<td width="443" colspan="3"><div align="left">
<span class="style2">YAKIN DATA INI AKAN DI HAPUS?</span><br />
<span class="style1"><?
echo strtoupper($bk[NamaBiaya]);
?>
 </span></tr>
<tr>
  <td colspan="3">
    <div align="left" class="style3">
	<a href="d4_f.php?dimas=<? echo $dimas; ?>&id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none" >YA</a> || 
	<a href="#" onClick="window.close()"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">TIDAK</a>	</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>

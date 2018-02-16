<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $Bus = mysql_query("SELECT * FROM txnrad WHERE id=$hari");
$x = mysql_fetch_array($Bus);
 $JJHDFDF_K = mysql_query("SELECT * FROM txnjalan WHERE id='$IdDetil'");
$hh = mysql_fetch_array($JJHDFDF_K);
if(!$hh[id] || !$x[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==16){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#990000';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
<body bgcolor="#0000CC" alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
<div align="left">
<table border="0" cellpadding="3" cellspacing="3">
<tr>
<td width="735" colspan="3"><div align="left">
<font color="#FFFF99" size="3" face="Geneva, Arial, Helvetica, sans-serif">YAKIN DATA <B><I>
<U><br><?
echo strtoupper($hh[NamaBiaya]);
?><br>
</U></I></B>  DATA INI AKAN DI HAPUS?</font><br /> 
</div></td>
</tr>
<tr>
  <td colspan="3">
    <div align="left"><font color="#FFFFFF" size="3" face="Georgia, Times New Roman, Times, serif"><strong>
	<a href="ela_makan_mi.php?hari=<? echo $hari; ?>&IdDetil=<? echo $IdDetil; ?>"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">YA</a> || 
	<a href="" onClick="window.close()" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >TIDAK</a></strong>    </font></div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}else{
echo "ANDA TIDAK BERHAK MELAKUKAN AKSES HALAMAN INI ";
}?>

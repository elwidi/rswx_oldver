<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$Bus = mysql_query("SELECT * FROM txnrad WHERE id=$id");
$x = mysql_fetch_array($Bus);
$cek_ck = mysql_query("SELECT RegId FROM kwitansirj WHERE RegId ='$x[RegId]'");
$ss = mysql_fetch_array($cek_ck);
if(!$x[id]){
header("Location:./d2_D.php?hari=$id");
}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="drd_l.php?hari=<? echo $id; ?>&xe=<? echo $xe; ?>";
self.close();
//-->
} 
</SCRIPT>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style5 {color: #FFFFFF; font-weight: bold; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body bgcolor="#CCCCCC" <? if($pe==1){ ?> onLoad="win44()"<? } ?>>
<div align="center">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="461" colspan="3"><div align="center" class="style2">
LIST DATA TARIF RADIOLOGI
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style1">
<tr>
<td width="23" bgcolor="#000066"><span class="style5">NO</span></td>
<td width="62" bgcolor="#FFFFFF">KODE</td>
<td width="227" bgcolor="#000066"><span class="style5">NAMA BIAYA</span></td>
<td width="50" bgcolor="#000066"><div align="right" class="style5">HARGA</div></td>
</tr>
<?
$nomer=1;
$kdikdidkdik = mysql_query("SELECT * FROM  tabelri WHERE KodeKelompok='3' AND NamaBiaya LIKE '$NamaBiaya%' LIMIT 0,120");
while($xx = mysql_fetch_array($kdikdidkdik)){
?>
<tr onClick="location.href='rft_rt.php?pe=1&id=<? echo $id; ?>&xe=<? echo $xx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td bgcolor="#FFFFFF"><div align="left"><? echo $xx[KodeBiaya]; ?></div></td>
<td><div align="left"><? echo strtoupper($xx[NamaBiaya]);?></div></td>
<td><div align="right"><? echo number_format($xx[Tiga]); ?></div></td>
</tr>
<? $nomer++; } ?><tr>
  <td colspan="4" bgcolor="#000066">&nbsp;</td>
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
}else{
header("Location:../keluar2.php");
}?>
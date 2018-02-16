<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
echo "Record Set Tidak Dikenal";
}else{
$hajahajha = mysql_query("SELECT * FROM NoRadBaru WHERE IdRj='$id'");
$gp = mysql_fetch_array($hajahajha);

?>
<html>
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
	</script><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body  >
 <input type="hidden" name="id" value="<? echo $id; ?>" />
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="left"><strong>
</strong></div></td>
</tr>
<tr valign="top">
<td width="581" colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="62"><div align="center">
<img src="../gb/gb.png" width="92" height="73">
</div></td><td width="261" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="247">Rs Yadika Kebayoran Lama</td>
</tr>
<TR>
<td>Instalasi Radiologi</td>
</TR>
</table>
</div>
</td>
</tr>
<tr valign="top">
  <td colspan="2"><table cellspacing="0" cellpadding="0" class="style1">
     <tr height="12">
      <td height="12" width="85">No. MR</td>
      <td width="20">:</td>
      <td width="117"><? echo $hh[NoPasien]; ?></td>
      <td width="11"></td>
      <td rowspan="2" width="32">AR</td>
      <td width="99">&nbsp;</td>
    </tr>
    <tr height="12">
      <td height="12">No. R&ouml;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>:</td>
      <td><? echo $gp[NoRad]; ?></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr height="12">
      <td height="12">Tanggal</td>
      <td>:</td>
      <td><?
	  echo "$hh[TglMasuk]-";
	  $bln = $hh[BlnMasuk];
	  include "../bulan.php";
	  echo " $hh[ThnMasuk]"; 
	  ?></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr height="12">
      <td height="12">Nama&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>:</td>
      <td><div align="left"><?
	  echo $hh[NamaPasien];
	  ?></div></td>
      <td>,</td>
      <td><? echo $hh[Umur]; ?></td>
      <td>Thn</td>
    </tr>
    <tr height="12" valign="top">
      <td colspan="6"><div align="left">
	  <table border="1" class="style22">
     <?
	$ni=1;
$kdidkdikdid = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]' order by id limit 0,1");
while($bx= mysql_fetch_array($kdidkdikdid)){
?><tr valign="top" height="26">
          <td width="26"><div align="center"><? echo $ni; ?></div></td>
    <td width="317"><div align="left"><? echo  ($bx[NamaBiaya]); ?></div></td> 
    
    </tr>
	<? $ni++; } ?>
   </table>
	  </div></td>
    </tr>
  </table></td>
  </tr>
</table>

</div></td>
</tr>
 </table>
</body>
</html>
<?
}
?>
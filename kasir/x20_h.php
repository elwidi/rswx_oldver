<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdikkdfd_Dffd =  mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$dapa =  mysql_fetch_array($kdikkdfd_Dffd);
if(!$dapa[id]){
 echo "RECORD SET TIDAK LENGKAP"; 
 }elseif($a[Level]==9){
?>
<html>
<head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #0033FF;
}
-->
</style><script language="JavaScript">
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
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="576" colspan="3"><div align="left">
  <span class="style3"><font face="Arial, Helvetica, sans-serif">DETAIL HITORY PASIEN RAJAL<br />
  <?
echo ucfirst(strtolower($dapa[NamaPasien])); ?>
  ( <font color="#0033FF"> <? echo "($dapa[NoPasien])"; ?> )  </font></font></span>
 
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="18" bgcolor="#FFCCCC"><strong>NO</strong></td>
<td width="67" bgcolor="#FFCCCC"><strong>TGL</strong></td>
<td width="51" bgcolor="#FFCCCC"><strong>REGID</strong></td>
<td width="107" bgcolor="#FFCCCC"><strong>BAGIAN</strong></td>
<td width="84" bgcolor="#FFCCCC"><strong>DOKTER</strong></td>
<td width="199" bgcolor="#FFCCCC"><strong>PENJAMIN</strong></td> 
</tr>
<?
$nomer=1;
$kdjkfdfd_DFdfdf = mysql_query("SELECT * from rwtjalan WHERE NoPasien='$dapa[NoPasien]'");
while($ye  = mysql_fetch_array($kdjkfdfd_DFdfdf)){
$na = $nomer%2;
if($na ==1){
$warna  = 'bgcolor="#B8FEA7"';
}else{
$warna  = '';
} ?>
<tr valign="top" <? echo $warna; ?> >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="right"><? echo "$ye[TglMasuk]-$ye[BlnMasuk]-$ye[ThnMasuk]"; ?></div></td>
<td><div align="left"><? echo $ye[RegId]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ye[Bagian])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ye[NamaDokter])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ye[NamaPer])); ?></div></td>
</tr>
<?
$nomer++; } ?>
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
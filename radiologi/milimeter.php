<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?><html>
<head>
<style type="text/css">
<!--
.style6 {font-family: Arial, Helvetica, sans-serif}
.style7 {font-size: 12px}
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #000000; }
.style11 {
	color: #000000;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
</head>
<body>
<div align="center">
<table border="0" cellpadding="1" cellspacing="2">
<tr bgcolor="#9966CC">
<td width="24" height="22" bgcolor="#D4D0C8"><span class="style10">NO</span></td>
<td width="457" bgcolor="#D4D0C8"><span class="style10">NAMA BIAYA</span></td>
<td width="103" bgcolor="#D4D0C8"><div align="right"><span class="style10">HARGA</span></div></td>
<td width="115" bgcolor="#D4D0C8"><span class="style10">OPR</span></td>
</tr>
<?
$cek_ck = mysql_query("SELECT RegId FROM kwitansirj WHERE RegId ='$RegId' ");
$ssS = mysql_fetch_array($cek_ck);

$nni = 1;
$hjh = mysql_query("SELECT * FROM txnjalan WHERE RegId='$RegId'");
while($ss = mysql_fetch_array($hjh)){ ?>
<?
if($ssS[RegId]){
?>
<tr class="style6"  valign="top"> 
<? 
}else{
?><tr  onClick="wCompare_pam3 = window.open('../Kasir/makan_dimana_mas.php?hari=<? echo $bapak; ?>&IdDetil=<? echo $ss[id]; ?>',  
  'wCompare_pam3', 'width=920,height=140,left=90,Top=184,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_pam3.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    valign="top">
<? } ?>
<td><div align="center" class="style6 style7"><? echo  $nni; ?></div></td>
 <td><div align="left" class="style8"><? echo ucfirst(strtolower($ss[NamaBiaya])); ?></div></td>
<td><div align="right" class="style8"><? echo number_format($ss[Harga]); 
$tHarga= $tHarga + $ss[Harga];
?></div></td><td><div align="left" class="style8"><?  echo ucfirst(strtolower($ss[Opr])); ?></div></td>

</tr>
<? $nni++; } ?>
<tr bgcolor="#9966CC" class="style8">
<td colspan="2" bgcolor="#D4D0C8"><div align="center" class="style11">TOTAL</div></td>
<td bgcolor="#D4D0C8"><div align="right" class="style11"><? echo number_format($tHarga); ?></div></td>
</tr>
</table>
</div>
</body>
</html>
<? 
}else{
//header("Location:./keluar.php");
}
?>
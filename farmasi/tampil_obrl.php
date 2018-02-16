<?
session_start();
include "../konek.php";
include "../ceke.php";
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  	 $kdidkdifd_dfdf = mysql_query("select * from racikembal where id=1");
	 $hbgb= mysql_fetch_array($kdidkdifd_dfdf);?>

 <html>
<head>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style7 {font-style: italic; color: #000000;}
.style8 {color: #000000; font-size: 12px; font-style: italic;}
.style9 {
	color: #000000;
	font-weight: bold;
}
.style10 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
.style11 {	font-family: Arial, Helvetica, sans-serif;
font-size: 10px;color: #FF0000}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
	color: #990000;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC99';
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
  <table width="479" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
   
    <tr  bgcolor="#FFCCCC">
      <td width="27"><div align="center" class="style7"><span class="style1">NO</span></div></td>
     
     <td width="207"><div align="center" class="style7">
       <div align="left"><span class="style1">NAMA OBAT</span></div>
     </div></td>
    <TD width="46"><div align="center" class="style7"><span class="style1">QTY</span></div></TD>
    <td width="68"><div align="center" class="style7">
      <div align="right"><span class="style1">HARGA</span></div>
    </div></td>
    <td width="99"><div align="center" class="style7">
      <div align="right"><span class="style1">JUMLAH</span></div>
    </div></td>
    </tr>
    <?
$noo=1;
$daat =mysql_query("SELECT * FROM  jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual!=1 ORDER BY id desc");
while($sw = mysql_fetch_array($daat)){
$de = explode(":",$sw[KodeObat]);
$ped  = $noo%2;
if($ped==1){
$warna='bgcolor="#FFCCFF"';
}else{
$warna='';
}
?> <tr  <? echo $warna; ?> class="style3"  valign="top"<? if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){}else{?>onClick="location.href='crit.php?RegId=<? echo $RegId; ?>&NoResep=<? echo $NoResep; ?>&IdRLOB=<?  echo $IdRLOB; ?>&id=<?  echo $sw[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>> 
      <td><div align="center" class="style3"><? echo $noo; ?></div></td>
 
    <td><div align="left" class="style3"><? echo $sw[NamaObat]; ?></div></td>
    <td><div align="center" class="style3"><? echo $sw[Qty]; ?></div></td>
    <td><div align="right" class="style3"><? 
echo number_format($sw[Harga]); 
?></div></td>
    <td><div align="right" class="style3"><? 
echo number_format($sw[JumlahHarga]);
$nini  = $nini + $sw[JumlahHarga];
?></div></td>
    </tr>
    <? $noo++; } ?>
	<?
	$raa = 0;
	$racikan_1 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=1");
	while($yas = mysql_fetch_array($racikan_1)){
	$tRacik_1 = $tRacik_1 + $yas[JumlahHarga];
$raa++;	}
	if($tRacik_1>0){
	$tRacik_1 = $tRacik_1  +$hbgb[Racikan];
	?><tr bgcolor="#FFFFCC" class="style3"  onClick="wComparew3www_d1236b = window.open('ca_9.php?stata=1&NoResep=<? echo $RegId; ?>&id=<? echo $id;?>', 
  'wComparew3www_d1236b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<td><div align="center"><? echo $noo; ?></div></td>
	<td ><div align="left">Racikan 1</div></td>
	<td ><div align="center"><? echo $raa;  ?></div></td>
	<td colspan="2"><div  align="right"><? echo number_format($tRacik_1); ?></div></td> 
	</tr>
	<? } ?>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	      <table width="327" border="0" cellpadding="1" cellspacing="1" class="style11">
            <?
	$nop=1;
	$racikan_1x = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=1");
	while($yasx = mysql_fetch_array($racikan_1x)){?>
            <tr>
	<td width="46"><div align="right"><? echo $nop; ?></div></td>
	<td width="219"><div align="left"><? echo ucfirst(strtolower($yasx[NamaObat])); ?></div></td>
	<td width="40"><div align="center"><? echo number_format($yasx[Qty],2); ?></div></td>
	</tr>
	<? $nop++; } ?>
	</table>
	</div></td>
	</tr>
	
	<?
	$raa2 = 0; $noo++; 
	$racikan_2 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=2");
	while($yas2 = mysql_fetch_array($racikan_2)){
	$tRacik_2 = $tRacik_2 + $yas2[JumlahHarga];
$raa2++;	}
	if($tRacik_2>0){
	$tRacik_2 = $tRacik_2  +$hbgb[Racikan];
	?><tr bgcolor="#FFFFCC"  class="style3"  onClick="wComparew3www_d1236b = window.open('ca_9.php?stata=2&NoResep=<? echo $RegId; ?>&id=<? echo $id;?>', 
  'wComparew3www_d1236b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<td><div align="center"><? echo $noo; ?></div></td>
	<td ><div align="left">Racikan 2</div></td>
	<td ><div align="center"><? echo $raa2;  ?></div></td>
	<td colspan="2"><div  align="right"><? echo number_format($tRacik_2); ?></div></td> 
	</tr>
	<? } ?>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	      <table width="327" border="0" cellpadding="1" cellspacing="1" class="style11">
            <?
	$nopx=1;
	$racikan_1x2 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=2");
	while($yasx2 = mysql_fetch_array($racikan_1x2)){?>
            <tr>
	<td width="46"><div align="right"><? echo $nopx; ?></div></td>
	<td width="219"><div align="left"><? echo ucfirst(strtolower($yasx2[NamaObat])); ?></div></td>
	<td width="40"><div align="center"><? echo number_format($yasx2[Qty],2); ?></div></td>
	</tr>
	<? $nopx++; } ?>
	</table>
	</div></td>
	</tr>
	
	<?
	$raa3 = 0; $noo++; 
	$racikan_3 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=3");
	while($yas3 = mysql_fetch_array($racikan_3)){
	$tRacik_3 = $tRacik_3 + $yas3[JumlahHarga];
$raa3++;	}
	if($tRacik_3>0){
	$tRacik_3 = $tRacik_3  +$hbgb[Racikan];
	?><tr  onClick="wComparew3www_d1236b = window.open('ca_9.php?stata=3&NoResep=<? echo $RegId; ?>&id=<? echo $id;?>', 
  'wComparew3www_d1236b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FFFFCC"  class="style3">
	<td><div align="center"><? echo $noo; ?></div></td>
	<td ><div align="left">Racikan 3</div></td>
	<td ><div align="center"><? echo $raa3;  ?></div></td>
	<td colspan="2"><div  align="right"><? echo number_format($tRacik_3); ?></div></td> 
	</tr>
	<? } ?>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	      <table width="327" border="0" cellpadding="1" cellspacing="1" class="style11">
            <?
	$nopx3=1;
	$racikan_1x3 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=3");
	while($yasx3 = mysql_fetch_array($racikan_1x3)){?>
            <tr>
	<td width="46"><div align="right"><? echo $nopx3; ?></div></td>
	<td width="219"><div align="left"><? echo ucfirst(strtolower($yasx3[NamaObat])); ?></div></td>
	<td width="40"><div align="center"><? echo number_format($yasx3[Qty],2); ?></div></td>
	</tr>
	<? $nopx3++; } ?>
	</table>
	</div></td>
	</tr>
	
	<?
	$raa4 = 0; $noo++; 
	$racikan_4 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=4");
	while($yas4 = mysql_fetch_array($racikan_4)){
	$tRacik_4 = $tRacik_4 + $yas4[JumlahHarga];
$raa4++;	}
	if($tRacik_4>0){
	$tRacik_4 = $tRacik_4  +$hbgb[Racikan];
	?><tr  onClick="wComparew3www_d1236b = window.open('ca_9.php?stata=4&NoResep=<? echo $RegId; ?>&id=<? echo $id;?>', 
  'wComparew3www_d1236b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FFFFCC" class="style3">
	<td><div align="center"><? echo $noo; ?></div></td>
	<td ><div align="left">Racikan 4</div></td>
	<td ><div align="center"><? echo $raa4;  ?></div></td>
	<td colspan="2"><div  align="right"><? echo number_format($tRacik_4); ?></div></td> 
	</tr>
	<? } ?>
	<tr>
	<td colspan="5" valign="top"><div align="left">
	      <table width="327" border="0" cellpadding="1" cellspacing="1" class="style11">
            <?
	$nopx4=1;
	$racikan_1x4 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=4");
	while($yasx4 = mysql_fetch_array($racikan_1x4)){?>
            <tr>
	<td width="46"><div align="right"><? echo $nopx4; ?></div></td>
	<td width="219"><div align="left"><? echo ucfirst(strtolower($yasx4[NamaObat])); ?></div></td>
	<td width="40"><div align="center"><? echo number_format($yasx4[Qty],2); ?></div></td>
	</tr>
	<? $nopx4++; } ?>
	</table>
	</div></td>
	</tr>
	<?
	$raa5 = 0; $noo++; 
	$racikan_5 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=5");
	while($yas5 = mysql_fetch_array($racikan_5)){
	$tRacik_5 = $tRacik_5 + $yas5[JumlahHarga];
$raa5++;	}
	if($tRacik_5>0){
	$tRacik_5 = $tRacik_5  +$hbgb[Racikan];
	?><tr   onClick="wComparew3www_d1236b = window.open('ca_9.php?stata=5&NoResep=<? echo $RegId; ?>&id=<? echo $id;?>', 
  'wComparew3www_d1236b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_d1236b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FFFFCC" class="style3">
	<td><div align="center"><? echo $noo; ?></div></td>
	<td ><div align="left">Racikan 5</div></td>
	<td ><div align="center"><? echo $raa5;  ?></div></td>
	<td colspan="2"><div  align="right"><? echo number_format($tRacik_5); ?></div></td> 
	</tr>
	<? } ?>
<tr>
	<td colspan="5" valign="top"><div align="left">
	      <table width="327" border="0" cellpadding="1" cellspacing="1" class="style11">
            <?
	$nopx5=1;
	$racikan_1x5 = mysql_query("SELECT * FROM jual_ob_rl_tmp  WHERE RegId='$RegId' AND TypeJual=1 and stat=5");
	while($yasx5 = mysql_fetch_array($racikan_1x5)){?>
            <tr>
	<td width="46"><div align="right"><? echo $nopx5; ?></div></td>
	<td width="219"><div align="left"><? echo ucfirst(strtolower($yasx5[NamaObat])); ?></div></td>
	<td width="40"><div align="center"><? echo number_format($yasx5[Qty],2); ?></div></td>
	</tr>
	<? $nopx5++; } ?>
	</table>
	</div></td>
	</tr>	<tr class="style1"> 
	<td colspan="3"><div align="center">Sub Tot Racikan</div></td><td><div align="left"><?
	$totak = $tRacik_1+$tRacik_2+$tRacik_3+$tRacik_4+$tRacik_5;
	echo number_format($totak);
	$nas = $nini + $totak;
	 ?></div></td>
	</tr>
    <tr  bgcolor="#FFCCCC">
      <td colspan="4"><div align="center" class="style1 style9"><span class="style12">.</span>TOTAL</div></td>
    <TD><div align="right" class="style10"><? echo number_format($nas,2); ?></div></TD>
    </tr>
  </table>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>
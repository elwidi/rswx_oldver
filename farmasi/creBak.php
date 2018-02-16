<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$h = $_GET["h"];
$NoResep = $_GET["NoResep"];
$id = $_GET["id"];
 $umbu = mysql_query("SELECT * FROM rl_resep WHERE NoResep='$RegId'");
$ii = mysql_fetch_array($umbu);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
$JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);

?>
<html>
<head><script language="JavaScript">
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
	</script><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style11 {font-size: 10}
.style12 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-size: 10px}
.style14 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.style15 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.style16 {
	color: #666666;
	font-weight: bold;
	font-style: italic; 
}
-->
</style><script type="text/javascript">
window.onload = function(){
	//window.print();
}
</script> 
</head>
<body>
<table border="0">
<tr   onClick="location.href='../Daftar/ed_d.php?ade=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style3">
<td colspan="3"><div align="center" class="style12 style13">
BUKTI TRANSAKSI RAWAT JALAN <br />
REG: <? echo $ii[RegId]; ?>
</div></td>
</tr>
 <tr class="style3">
<td width="127"><span class="style8">NO RESEP</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8"><? echo $ii[NoResep]; ?></div></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">STATUS</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8">1</div></td>
</tr>
<tr class="style3">
<td><span class="style8">NAMA PASIEN</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class="style8"><? echo $ii[NamaPasien]; ?></div></td>
</tr>
<tr class="style3">
<td><span class="style8">JENIS </span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class="style8">RESEP LUAR</div></td>
</tr>
<tr class="style3">
<td colspan="3"><span class="style16">.</span></td>
</tr>
<tr>
<td colspan="3">
<table border="0" cellpadding="2" cellspacing="2">
<tr    onClick="location.href='makan_pisang_mentah_pedes.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td colspan="4"><div align="center" class="style15">
DETAIL DATA OBAT</div></td>
</tr>
<tr class="style3">
<td width="17"><div align="center" class="style3"><span class="style15">NO</span></div></td>
<td width="214"><div align="center" class="style3">
  <div align="left"><span class="style15">NAMA OBAT</span></div>
</div>  <div align="center" class="style3"></div></td>
<td width="20"><div align="center" class="style3"><span class="style15">QTY </span></div></td>
<TD width="63"><div align="center" class="style3"><span class="style15">JUMLAH</span></div></TD>
</tr>
<?
 
$juyX = 1; $nomX=1;
$ddtx = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=1"); 
while($ssx = mysql_fetch_array($ddtx)){
 ?>
<tr bordercolor="#000000"  class="style3" >
<td><div align="center" class="style8"><?  
if($nomX==1){
echo $juyX; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssx[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ssx[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssx[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
 
if($ssx[TypeJual]==1){ echo "<i>"; echo number_format($ssx[Qty],2); echo "</i>"; 
}else{ echo number_format($ssx[Qty],2); } 

  ?></div></td>
<td><div align="right" class="style8"><? if($ssx[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssx[JumlahHarga]); } 
$sayangx = $sayangx + $ssx[JumlahHarga];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomX++; } 

  if($sayangx>0){
$sayang_1 = $sayangx+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 1</div></td><td><div align="right"><? echo number_format($sayang_1); ?></div></td>
</tr>
<? } 

$juyZ = 2; $nomZ=1;
$ddtz = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=2");
while($ssz = mysql_fetch_array($ddtz)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ==1){
echo $juyZ; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ssz[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz[TypeJual]==1){ echo "<i>"; echo number_format($ssz[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssz[JumlahHarga]); } 
$sayangz = $sayangz + $ssz[JumlahHarga];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomZ++; } 
  if($sayangz>0){
$sayang_2 = $sayangz+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 2</div></td><td><div align="right"><? echo number_format($sayang_2); ?></div></td>
</tr>
<? } 
$juyZ2 = 3; $nomZ2=1;
$ddtz2 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=3");
while($ssz2 = mysql_fetch_array($ddtz2)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ2==1){
echo $juyZ2; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz2[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ssz2[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz2[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz2[TypeJual]==1){ echo "<i>"; echo number_format($ssz2[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz2[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz2[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssz2[JumlahHarga]); } 
$sayangz2 = $sayangz2 + $ssz2[JumlahHarga];//+$gu[Racikan];
 ?></div></td>
</tr>
 
<?  $nomZ2++; }
  if($sayangz2>0){
$sayang_3 = $sayangz2+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 3</div></td><td><div align="right"><? echo number_format($sayang_3); ?></div></td>
</tr>
<? } 
$juyZ3 = 4; $nomZ3=1;
$ddtz3 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=4");
while($ssz3 = mysql_fetch_array($ddtz3)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ3==1){
echo $juyZ3; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz3[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ssz3[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz3[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz3[TypeJual]==1){ echo "<i>"; echo number_format($ssz3[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz3[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz3[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssz3[JumlahHarga]); } 
$sayangz3 = $sayangz3 + $ssz3[JumlahHarga];//+$gu[Racikan];
?></div></td>
</tr>
 
<?  $nomZ3++; }
  if($sayangz3>0){
$sayang_4 = $sayangz3+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 4</div></td><td><div align="right"><? echo number_format($sayang_4); ?></div></td>
</tr>
<? } 
$juyZ5 = 5; $nomZ5=1;
$ddtz5 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=5");
while($ssz5 = mysql_fetch_array($ddtz5)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nomZ5==1){
echo $juyZ5; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ssz5[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ssz5[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ssz5[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ssz5[TypeJual]==1){ echo "<i>"; echo number_format($ssz5[Qty],2); echo "</i>"; 
}else{ echo number_format($ssz5[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ssz5[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssz5[JumlahHarga]); } 
$sayangz5 = $sayangz5 + $ssz5[JumlahHarga];//+$gu[Racikan];
?></div></td>
</tr>
 
<?  $nomZ5++; }
  if($sayangz5>0){
$sayang_5 = $sayangz5+$gu[Racikan];
?>
<tr class="style3">
<td colspan="3"><div align="center">Tot Racikan 5</div></td><td><div align="right"><? echo number_format($sayang_5); ?></div></td>
</tr>
<? }  
 if($sayangz5>0){
 $sayangz5= $sayangz5+$gu[Racikan];
 }
  if($sayangx>0){
 $sayangx= $sayangx+$gu[Racikan];
 }
   if($sayangz>0){
 $sayangz= $sayangz+$gu[Racikan];
 }
    if($sayangz2>0){
 $sayangz2= $sayangz2+$gu[Racikan];
 }
     if($sayangz3>0){
 $sayangz3= $sayangz3+$gu[Racikan];
 }
$sub_rac = $sayangx+$sayangz+$sayangz2+$sayangz3+$sayangz5;
   $juy2=1;
 if($sub_rac>0){  ?>
   <tr class="style8">
   <td colspan="3"><div align="center">Sub Tot</div></td><td><div align="right"><? 
   echo number_format($sub_rac); 
   ?></div></td>
   </tr><? 
   } 
$ddt2 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual!=1");
while($ss2 = mysql_fetch_array($ddt2)){
$lkkldffd_dfdfd = mysql_query("SELECT * FROM retur_inap2 where IdJual='$ssx[id]'");
 

?>
<tr bordercolor="#000000"  class="style3" >
<td><div align="center" class="style8"><?  echo $juy2; ?></div></td>
<td><div align="left" class="style8"><? if($ss2[TypeJual]==1){ 
echo "<i>"; echo strtoupper($ss2[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ss2[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
 if($ss2[TypeJual]==1){ echo "<i>"; echo number_format($ss2[Qty],2); echo "</i>"; 
}else{ echo number_format($ss2[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ss2[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ss2[JumlahHarga]); } 
$sayang2 = $sayang2 + $ss2[JumlahHarga];
?></div></td>
</tr>
 
<? $juy2++; } 
?> 
<?
 $han=1;
$lkkldffd_dfdfd = mysql_query("SELECT * FROM retur_inap2 where NoPasien='$ii[id]'");
while($yap = mysql_fetch_array($lkkldffd_dfdfd)){
?>
<tr class="style16">
<td><div align="center"><? echo $han; ?></div></td>
<td><div align="left"><? echo $yap[NamaObat]; ?></div></td>
<td><div align="center"><? echo number_format($yap[Qty]); ?></div></td>
<td><div align="center"><? echo number_format($yap[Total]);
$t_han = $t_han + $yap[Total];
?></div></td></tr>
<?
$han++; } ?>
<tr>
<td colspan="3" class="style3"><div align="center"><strong>SUBTOT</strong></div></td><td class="style5"><div align="right"><strong>
<? echo number_format($sayang2-$t_han); ?>
</strong></div></td>
</tr>
<tr>
<td colspan="3" class="style3"><div align="center"><strong>BAYAR</strong></div></td><td class="style5"><div align="right"><strong>
  <? $Bay = $Ppn+$sub_rac+$sayang2-$t_han;
echo number_format($Bay); ?>
</strong></div></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">
<div align="right">
<table border="0">
<tr>
<td class="style3"><span class="style10">JAKARTA ,
    <? 
$tg = date("d"); $bl =date("m"); $th = date("Y");
echo "$tg/$bl/$th";
?>
</span></td>
</tr>
<tr>
<td height="41" class="style11">&nbsp;</td>
</tr>
<tr>
<td><div align="right" class="style10">( <? echo strtoupper($a[Nama]); ?> )<br>
<? echo date("H:i:s"); ?> </div>
</tr>
</table>
</div>
 </td>
</tr>

</table>
<p class="style3">&nbsp;</p>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>
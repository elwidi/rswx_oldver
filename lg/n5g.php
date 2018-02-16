<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdjjd = mysql_query("SELECT * FROM supplier WHERE id='$id'");
$ii = mysql_fetch_array($jdjjd);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body>
<div align="left">
<table width="842" border="0" cellpadding="2" cellspacing="2">
<tR>
<td width="587" colspan="3"><div align="left" class="style1">
DETAIL DATA PEMBELIAN <br />
<?
echo $ii[NamaSuplier]; 
?>
</div></td>
</tR>
<tR valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="18" bgcolor="#ECE9D8"><strong>NO</strong></td><td width="127" bgcolor="#ECE9D8"><strong>NO TX</strong></td><td width="40" bgcolor="#ECE9D8"><strong>TGL</strong></td><td width="106" bgcolor="#ECE9D8"><strong>NO FAKTUR</strong></td><td width="63" bgcolor="#ECE9D8"><div align="right"><strong>TGL FAKTUR</strong></div></td>  <td width="64" bgcolor="#ECE9D8"><div align="right"><strong>PPN</strong></div></td>
  <TD width="63" bgcolor="#ECE9D8"><div align="right"><strong>NILAI</strong></div></TD>
   <TD width="63" bgcolor="#ECE9D8"><div align="right"><strong>TOTAL</strong></div></TD>
  </tr>
  <?
  $nomer = 1;
  $ldkfldklfd  = mysql_query("SELECT * FROM polog77x WHERE IdSupplier='$id'  AND Bln='$Bln' AND Thn='$Thn' ORDER BY id");
  while($bb = mysql_fetch_array($ldkfldklfd  )){
    $kjdkjksjkd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$bb[id]'");// LIMIT $awal,$dara");
	while($pp =  mysql_fetch_array($kjdkjksjkd)){
	  if($pp[PotRp]>0){
  
	$hass = ($pp[Harga]-($pp[Harga]-$pp[PotRp]))/$pp[Harga]*100;
$Harga=($hass/$pp[Qty]/$pp[Pengali]);   //echo "%"; 
	 }elseif($pp[PotPrc]>0){
$Harga=$pp[PotPrc];
	}else{
 	} 
	//////
 		$Diskon2 =$Diskon2+ $pp[Total];
		 
 	///////
	}  ?>
  <tr>
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? echo "$bb[NamaSupplier]"; ?></div></td>
    <td><div align="right"><? echo "$bb[Tgl]-$bb[Bln]-$bb[Thn]"; ?></div></td>
    <td><div align="left">
      <?
	$ldjfdkfd = mysql_query("SELECT * FROM fakturpo WHERE IdPo='$bb[id]'");
	$ub = mysql_fetch_array($ldjfdkfd);
	echo $ub[NoFaktur];
	?>
    </div></td>
    <td><div align="right"><? echo $ub[Tgl]; ?></div></td>
    <td><div  align="right"><?
 $Disko = $Diskon2*10/100;
   $tot_1 = $tot_1 + $Disko;
echo number_format($Disko);
 ?></div></td>
 <td><div  align="right"><?
 echo number_format($Diskon2);
  $tot_2 = $tot_2 + $Diskon2;

 ?></div></td>
 <td><div align="right"><?
 $tot  = $Disko  + $Diskon2; 
 $tot_3 = $tot_3 + $tot;
 echo number_format($tot);
 $Disko=0;
$Diskon2=0;
 ?></div></td>
  </tr>
  <?
  $nomer++; } ?>
  <tr>
    <td colspan="5" bgcolor="#ECE9D8"> 
      <div align="center"><strong>TOTAL</strong></div></td>
     <td bgcolor="#FFCCCC"><div align="right"><strong>
       <?
   echo number_format($tot_1);
   ?>
     </strong></div></td>
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo number_format($tot_2);
   ?>
  </strong></div></td>  
  <td bgcolor="#FFCCCC"><div align="right"><strong>
    <?
   echo number_format($tot_3);
   ?>
  </strong></div></td>  </tr>
  </table>
  </div></td>
</tR>
</table>
</div>
</body>
</html>
<? } ?>
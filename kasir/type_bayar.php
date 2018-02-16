<?
session_start();
 include "../konek.php";
include "../ceke.php";
 $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<select name="TypeBayar" class="style3">
  <option value="0">--PILIH TYPE BAYAR--</option>
  <? 
   
	if($bala==2){
	$kisopa = mysql_query("SELECT id FROM bank WHERE Stak=0  
	AND id!=11 AND id!=6 AND id!=13 AND id!=18 AND id!=25 AND id!=23 AND id!=26  AND id!=32 ORDER BY NamaBank");
	}else{
	$kisopa = mysql_query("SELECT id FROM bank WHERE  Stak=0 ORDER BY NamaBank");
	}
	while($h = mysql_fetch_array($kisopa)){
	if($bala==3){
	?>
	 <option value="<? echo $h[id]; ?>" >
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);  
	?>
  </option><? 
	}elseif($bala==2){
	?>
	 <option value="<? echo $h[id]; ?>"  onclick="location.href='kn_u.php?dimas=1&aku=pria&wido=<? echo $h[id]; ?>&id=<? echo $id; ?>&iin=cantik';">
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);    
	?>
  </option>
	<? 
	}elseif($bala==1){
	?>
	 <option value="<? echo $h[id]; ?>"  onclick="location.href='mas_budi_baik_bgt.php?nugi=<? echo $h[id]; ?>&wido=<? echo $h[id]; ?>&id=<? echo $id; ?>&iin=cantik';">
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);  
	?>
  </option>
	<? 
	}else{?>
  <option value="<? echo $h[id]; ?>"  onclick="location.href='uij_k.php?totale=<? echo $totale; ?>&pilih=<? echo $pilih; ?>&amp;id=<? echo $id; ?>&amp;dimas=<? echo $dimas; ?>&amp;nugi=<? echo $h[id]; ?>';"> 
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   //echo "($h[id])";
	?>
  </option>
  <? } //end of bala
  ?>
  <? } ?>
</select>
</body>
</html>

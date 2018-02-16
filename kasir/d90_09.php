<?
session_start();
include "../konek.php";
include "../ceke.php";
include "../terbilang.php";    $bala=2;

$jdhfkdj = mysql_query("SELECT * FROM rl_resep WHERE id='$id'");
$ya  = mysql_fetch_array($jdhfkdj);
//
 $kdjfdkfld   = mysql_query("SELECT id FROM kwitansirj where NoPasien='RL-$ya[id]' ");
 $dapat = mysql_fetch_array($kdjfdkfld);
 if($dapat[id]){
 header("Location:./cd09.php?id=$dapat[id]");
 }elseif(!$ya[id]){
echo "DATA RECORD TIDAK DIKENAL";
}elseif($a[Level]==9){
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
	font-size: 12px;
 }
-->
</style>
</head>
<body>
<div align="left">
<!-- <form action="d9909.php"> -->
<form action="f_2.php"> 
<table border="1">
<tr>
<td width="726" colspan="3"><div align="left" class="style1">
HALAMAN PEMBAYARAN OBAT RESEP LUAR<br />
<?
echo "$ya[NoResep]";
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top"><div align="left">
<table border="0" class="style2" cellpadding="2" cellspacing="2">
<TR>
<TD width="150">PEMBAYAR</TD>
<td width="8">:</td>
<td width="374"><div align="left"><input name="Pembayar" type="text" class="style2" value="<? echo $ya[NamaPasien]; ?>" size="23" maxlength="120">
</div></td>
</TR>
<tr>
	<td>SARANA BAYAR</td>
	<td>:</td>
	<td><div align="left"><select name="Type" class="style3">
  <option value="-">--PILIH TYPE BAYAR--</option>
  <? 
 	if($bala==2){
	$kisopa = mysql_query("SELECT id FROM bank WHERE Stak=0  
	AND id!=11 AND id!=6 AND id!=13 AND id!=18 AND id!=25 AND id!=23 AND id!=26  AND id!=32  AND id!=31
	AND id!=11  AND id!=30 ORDER BY NamaBank");
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
	 <option value="<? echo $h[id]; ?>">
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   // echo "($h[id])";   
	?>
  </option>
	<? 
	}elseif($bala==1){
	?>
	 <option value="<? echo $h[id]; ?>"   >
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]);   
	?>
  </option>
	<? 
	}else{?>
  <option value="<? echo $h[id]; ?>"  > 
  <?  
	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$h[id]'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]); // echo "($h[id])";
	?>
  </option>
  <? } //end of bala
  ?>
  <? } ?>
</select>
 	</div></td>
	</tr>
	<tr>
	<td>NO KARTU</td>
	<td>:</td>
	<td><div align="left">
	<input type="text" name="NoKartu" maxlength="50" size="15">
	</div></td>
	</tr>
<tr>
<td>SEJUMLAH</td><td>:</td><td><div align="left">
                    <? 
 	 
 echo number_format($Bay);
 $ada3[jj] =$Bay;
?><br>
<?
$pj = strlen($ada3[jj])-3;
$ambil = substr($ada3[jj],$pj,3);
$ambil = $ambil-0;
if($ambil<500 && $ambil>0){
$bul=(500-$ambil);
$Tunai =  $ada3[jj]+$bul;
}elseif($ambil>500){
$bul=(1000-$ambil);
 $Tunai = $ada3[jj]+(1000-$ambil);
}elseif($ambil==500){
 $Tunai = $ada3[jj];
}elseif($ambil==0){
$Tunai = $ada3[jj];
}

?>
<input type="hidden" name="Asli" value="<? echo $ada3[jj]; ?>">
<input type="hidden" name="BulatE" value="<? echo $Tunai; ?>">

                  </div></td>
</tr>
<tr>
<td>TUNAI</td><td>:</td>
<td><div align="left">
<input type="text" name="Tunai" maxlength="12" size="12" value="<? echo  ($Tunai); ?>"> 
</div></td>
</tr>
<tr>
<td>DEBET</td><td>:</td>
<td><div align="left">
<input type="text" name="Db" maxlength="12" size="12" value="<? echo  ($Db); ?>">
</div></td>
</tr>
<tr>
<td>K KREDIT</td><td>:</td>
<td><div align="left">
<input type="text" name="Kk" maxlength="12" size="12" value="<? echo  ($Kk); ?>">
</div></td>
</tr>
<tr>
<td>TERBILANG</td><td>:</td><td><div align="left"><?
$kali = terbilang($ada3[jj]);
echo $kali; 
?></div></td>
</tr>
<tr valign="top">
<td>KETERANGAN</td><td>:</td><td><div
 align="left"><textarea name="Keterangan" cols="40" rows="3" class="style2">PEMBAYARAN PENEBUSAN RESEP : <? echo $ya[NoResep]; ?> AN : <?  echo $ya[NamaPasien]; ?>
 </textarea>
 <input type="hidden" name="id" value="<? echo $id; ?>">
</tr>
</table>
</div></td>
</tr> 
<tr>
<td colspan="3"><div align="left">
<input   type="submit" value="Simpan" name="fgfg">
<input type="button" name="fgfg" value="Selesai" onClick="location.href='../Farmasi/sulistiono.php';">
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>
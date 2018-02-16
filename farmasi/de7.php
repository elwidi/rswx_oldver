<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";
if(!$nom){
$nom=1;
}else{
$nom=$nom;
}
 if(!$awal){
 $awal=0;
}else{
 $awal=$awal;
}
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold; font-size:14px
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	  font-size:12px
}
.style43 {
	font-family: Arial, Helvetica, sans-serif;
	  font-size:10px; color:#999999
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
}
-->
</style><script language="JavaScript">
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
	</script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr  onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td width="662" colspan="3" valign="top">
<div align="left">
<table width="485" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
 <td width="263"><div align="left" class="style1"> RS YADIKA
<br>
<?
echo "$fkd[Jalan]";
?><br>
<?
echo "Telp : $fkd[Telp], Fax : $fkd[Fax]";
?>
</div></td><td width="112"><u><span class="style1">Surat Pesanan</span></u><BR />
  <span class="style2">(<i>Purchase Order</i>)</span><br /></td>
</tr>
</table>
</div></td>
</tr>
 <tr >
  <td colspan="3" valign="top"><div align="left">
  <table width="668" border="0" cellpadding="2" cellspacing="2">
  <tr  onClick="location.href='de7.php?nom=<? echo $nom+1; ?>&id=<? echo $id; ?>&awal=<? echo $awal+7; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top">
  <td width="348"><div align="left">
  <table  border="0" class="style3" cellpadding="2" cellspacing="2">
    <tr>
    <td>NoPo</td>
    <td>:</td>
    <td><?
echo $kk[NoPo];
?></td>
  </tr>
  </table>
  </div></td><td width="304"><div align="left">
  <table class="style3" border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td width="60">Kepada</td>
  <td width="8">:</td>
  <td width="216"><div align="left"><?
  $dkldkldf = mysql_query("SELECT * FROM supplier WHERE id='$kk[IdSupplier]'");
  $oo = mysql_fetch_array($dkldkldf);
  echo strtoupper($oo[NamaSuplier]);
  ?></div></td>
  </tr>
  <tr valign="top">
    <td>Alamat</td>
    <td>:</td>
    <td><div align="left"><?
	echo $oo[Alamat]; echo ", $oo[Kota]";
	?></div></td>
  </tr>
  <tr valign="top">
    <td>Hal</td>
    <td>:</td>
    <td><div align="left">
<?
	$row=mysql_query("SELECT COUNT(id) AS hh FROM podetil77 WHERE IdPo77='$id'");
	$hi = mysql_fetch_array($row);
	$baris=$hi[hh]/7;
	$bulat = ceil($baris);
echo "Hal : $nom dari $bulat";
?>	</div></td>
  </tr>
  </table>
  </div></td>
  </tr>
  <tr  valign="top">
    <td colspan="2"><div align="left">
	<table border="1" cellpadding="0" cellspacing="1">
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<table border="0" cellpadding="1" cellspacing="1" class="style3">
	<tr>
	<td width="22" bgcolor="#999999"><strong>NO</strong></td>
	<td width="155" bgcolor="#999999"><strong>NAMA BARANG</strong></td>
	<td width="103" bgcolor="#999999"><strong>MERK</strong></td>
	<td width="46" bgcolor="#999999"><div align="center"><strong>VOL</strong></div></td>
	<td width="129" bgcolor="#999999"><div align="center"><strong>SATUAN</strong></div></td>
	<td width="75" bgcolor="#999999"><div align="center"><strong>HARGA</strong></div></td>
	<td width="75" bgcolor="#999999"><div align="center"><strong>DISKON</strong></div></td>
 	<td width="74" bgcolor="#999999"><div align="center"><strong>JML RP </strong></div></td>
	</tr>
	<?
	$nomer=$awal;
	$kjdk  = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' LIMIT $awal,7");
	while($hh = mysql_fetch_array($kjdk)){
	?>
	<tr valign="top">
	<td><div align="center"><? echo $nomer+1; ?></div></td>
	<td><div align="left"><? echo $hh[NamaBarang]; ?></div></td>
	<td><div align="left"><?
	$jjs_Dfd = mysql_query("SELECT  NamaMerk  FROM dataobat WHERE id='$hh[IdBarang]'");
	$hv= mysql_fetch_array($jjs_Dfd);
if($hv[NamaMerk]!="0"){
	echo $hv[NamaMerk];
}else{
echo ".";
}	?></div></td>
	<td><div align="center"><? echo $hh[Qty]; ?></div></td>
	<td><div align="center"><? echo $hh[NamaSatuan]; ?></div></td>

			<td><div align="center"><?   $Hs = $hh[Total]/$hh[Qty];
			echo number_format($Hs); $Hs=0;
			 ?></div></td>
<td><div align="center">
	  <? if($hh[PotPrc]>0){
	echo number_format($hh[PotPrc]); echo "%"; 
	}else{
	echo ".";
	} ?>
	  </div></td>
 		 
		<td><div align="center"><?
		if($hh[PotPrc]>0){
		$Baye = $hh[Total]-($hh[Total]*$hh[PotPrc]/100);
		}else{
		$Baye = $hh[Total];
		}
		 echo number_format($Baye);
	$toto = $toto + $Baye;
	$TotRp = $TotRp + $hh[PotRp];
	 ?></div></td>
	</tr>

	<?
	$nomer++; } ?>
		<tr>
	  <td colspan="7" bgcolor="#999999"><div align="center"><strong>TOTAL</strong></div></td>
	  <td bgcolor="#999999"><div align="right"><strong><? echo number_format($toto); ?></strong></div></td>
	  </tr></table>
	</div>
	</td>
	</tr>
	</table>
	</div></td>
   </tr>
  <tr  valign="top">
    <td colspan="2"><div align="right">
	<table width="651" border="0" align="center" cellpadding="1" cellspacing="1">
	<tr valign="top">
	<td width="450"><b class="style3"><u>Syarat - Syarat :</u></b><br>
	<table border="0" cellpadding="1" cellspacing="1" class="style43">
	<tr>
	<td width="8">1</td>
	<td width="443">Kondisi Barang</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>1.1 Expired Date Kurang dari 1 tahun tidak akan diterima </td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>1.2 Barang rusak dalam proses pengantaran barang tidak akan kami terima </td>
	  </tr>
	<tr>
	  <td>2</td>
	  <td>Penyerahan Barang </td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>2.1 Faktur Penjualan yang diterima rangkap 3 memakai stempel </td>
	  </tr>
	</table>	 </td>
	<td width="194"  ><div align="right">
		<table width="190" border="0" align="right" cellpadding="1" cellspacing="1" class="style3">
	<tr>
	<td width="69">Bruto</td>
	<td width="8">:</td>
	<td ><div align="right"><? echo number_format($toto); ?></div></td>
	</tr>
	<tr>
	<td>Diskon</td><td>:</td><td><div align="right"><? echo number_format($TotRp);?></div></td>
	</tr>
	<?
	if($kk[Ppn]==1){
	?>
	<tr>
	<td>Ppn</td><td>:</td><td><div align="right">
	  <?
	$Ppn = ($toto-$TotRp)*10/100;
	echo number_format($Ppn);
 	?>
	  </div></td>
	</tr>
	<? } ?>
	<tr>
	  <td>Nett</td>
	  <td>:</td>
	  <td><div align="right"><?
	  	$nett = $toto-$TotRp+$Ppn; 

	  echo number_format($nett);
	  ?></div></td>
	  </tr>
	</table>
	</div></td>
	</tr>
	</table>

	</div></td>
  </tr>
  <tr  valign="top">
    <td colspan="2"><div align="center">
	<table width="640" border="0" cellpadding="1" cellspacing="1">
	<tr valign="top">
	<td width="618" colspan="3">
	<div align="center">
	<table width="648" border="1" cellpadding="0" cellspacing="0" class="style3">
	<tr>
	<td width="211"><div align="center">Dibuat Oleh</div></td><td width="230"><div align="center">Verifikasi</div></td> <td width="193"><div align="center">Di Setujui</div></td>
	</tr>
	<tr>
	  <td height="43">&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td height="21">  <div align="center">???</div></td>
	  <td><div align="center">????</div></td>
	  <td><div align="center">????</div></td>
	  </tr>
	</table>
	</div>
	</td>
	</tr>
	</table>
	</div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
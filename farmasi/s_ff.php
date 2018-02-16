<?php 
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 3');

?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF66CC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
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
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="906" colspan="3"><div align="left" class="style1">
LAPORAN BIAYA STOK AKHIR DAN BIAYA PENGELUARAN INSTALASI FARMASI RSIA YADIKA<br />
PERIODE : <? // echo date("d"); 
if($bln>0){
$bln=$bln; $thn1 =$thn; 
}else{
$bln=date("m")-0; $thn1 =date("Y"); 
} include "../bulan.php"; ?>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="690" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="111">Biaya Stok Akhir</td>
  <td width="3">:</td>
  <td width="423">&nbsp;</td>
  </tr>
  <tr valign="middle">
  <td>Biaya Pengeluaran</td><td>:</td><td><div align="left"></div></td>
  </tr>
  <tr valign="middle">
    <td colspan="3"> <input onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  name="fgfgf"  type="button" class="style1" onClick="location.href='index.php ';" value="Kembali"> || 
	  <input type="button"     name="fgf2" class="style1" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  value="Cek By Periode"  onClick="wCompare = window.open('x_d.php', 
  'wCompare', 'width=380,height=150,left=270,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" ></td>
    </tr>
  </table>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2"> 
  <tr>
  <td width="16" rowspan="2" bgcolor="#F0F0F0"><strong>No</strong></td>
   <td width="16" rowspan="2" bgcolor="#F0F0F0"><strong>KodeObat</strong></td>
   <td width="150" rowspan="2" bgcolor="#F0F0F0"><strong>Nama Obat</strong></td><td width="137" bgcolor="#F0F0F0"><strong>Satuan</strong></td><td width="65" bgcolor="#F0F0F0"><strong>Harga<br>
    Terakhir</strong></td>
   <td width="72" bgcolor="#F0F0F0"><div align="center"><strong>Stok <br>
      Awal</strong></div></td><td width="70" bgcolor="#F0F0F0"><div align="center"><strong>Stok <br>
        Masuk</strong></div></td>
		<td width="70" bgcolor="#F0F0F0"><div align="center"><strong>Stok <br>
		  Keluar</strong></div></td><td width="71" bgcolor="#F0F0F0"><div align="center"><strong>Stok <br>
		    Rusak</strong></div></td><td width="55" bgcolor="#F0F0F0"><div align="center"><strong>Stok<br>
		      Akhir</strong></div></td>
  <td width="73" bgcolor="#F0F0F0"><div align="center"><strong>Persediaan Akhir </strong></div></td>
  <td width="71" bgcolor="#F0F0F0"><div align="center"><strong>HPP</strong></div></td>
  </tr>
  <tr>
    <td bgcolor="#F0F0F0"><strong>A</strong></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>B</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>C</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>D</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>E</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>F</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>G</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>H</strong></div></td>
    <td bgcolor="#F0F0F0"><div align="center"><strong>I</strong></div></td>
  </tr>
  <?
  $nomer=1;
      $d_D = mysql_query("SELECT * FROM catat_obat WHERE Bln=$bln AND Thn=$thn1 ");
  while($ff = mysql_fetch_array($d_D)){ 
 $pre = $nomer%2;
 if($pre==1){
 $warna=' bgcolor="#FFFFCC"';
 }else{
 $warna='';
 } 
 $kdjfd_Dfdf =  mysql_query("SELECT SUM(Qty) as kk FROM stok_opm WHERE IdObat='$ff[IdObat]'");
$bz_2 = mysql_fetch_array($kdjfd_Dfdf);
$LFGFG_FGF = mysql_query("SELECT KodeObat,NamaObat,Hna FROM dataobat WHERE id='$ff[IdObat]'");
$bp = mysql_fetch_array($LFGFG_FGF);
  ?><tr <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer;  //echo "($ff[id])";
//  echo "$ff[Bln]-$ff[Thn]";  ?></div></td>
  <td><div align="left"><?   echo $bp[KodeObat]; ?></div></td>
  <td><div align="left"><?   echo ucfirst(strtolower($bp[NamaObat])); ?></div></td>
    <td><div align="left"><?  
	$kjdfdD_dfd2 = mysql_query("SELECT NamaSatuan FROM settingsatuan where IdBarang='$ff[IdObat]' AND Pengali=1");
	$bp2 =  mysql_fetch_array($kjdfdD_dfd2);
	if($bp2[NamaSatuan]){
	 echo ucfirst(strtolower($bp2[NamaSatuan])); 
	 }else{
	 ?><font color="#990000"><i>???</i></font><? 
	 } ?></div></td>
	 <td><div align="right"><?
	 $jujujs = mysql_query("SELECT Harga FROM podetil77x WHERE IdBarang='$ff[IdObat]' AND Stat=2 ORDER BY id desc");
	 $hgp= mysql_fetch_array($jujujs);
	 
	  echo number_format($hgp[Harga]); ?></div></td>
	 <td><div align="center"><?  if($bz_2[kk]>0){
	 echo number_format($bz_2[kk]);
	 }else{
	 echo "-";
	 }  ?></div></td><?
 	 	 $kdjfkdfd_Dfdfds = mysql_query("SELECT Total,Qty,IdBarang,Pengali FROM podetil77x where IdBarang='$ff[IdObat]' AND Stat=2 "); //and Bln='$bln' AND Thn=$thn1 ");
	 while($dap  = mysql_fetch_array($kdjfkdfd_Dfdfds)){
$totk = $totk  +$dap[Total];
$tah = $tah + ($dap[Qty]*$dap[Pengali]);
 	 }
	 ?>
	 <td <?  if($tah>0){?> onClick="wCompare1122_981adp0 = window.open('ca.php?Bln=<? echo $bln; ?>&Thn=<? echo $thn1; ?>&id=<? echo $ff[id]; ?>', 
  'wCompare1122_981adp0', 'width=680,height=400,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare1122_981adp0.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?> ><div align="center">
	   <? 
	 // AND Stat=2
 	 $iudfd_DFdfd7878 = mysql_query("SELECT SUM(Qty) as kk FROM returobatjalan WHERE IdObat='$ff[IdObat]'");
	 $trt  = mysql_fetch_array($iudfd_DFdfd7878);
	 //
	 $isuids_Sdsmdsm_9987878hjhjjh = mysql_query("SELECT SUM(Qty) as hh FROM retur_inap WHERE IdObat='$ff[IdObat]'");
$ddd_kkdikdidk_hari_bojo_iin =  mysql_fetch_array($isuids_Sdsmdsm_9987878hjhjjh);

echo $tah;  
  $tah=0;
  ?> 
	 </div></td>
	 <?
	   $djkfddD_dfdfdfd444545  = mysql_query("SELECT SUM(Qty) as jj FROM jualobat WHERE KodeObat='$ff[IdObat]' AND Bln='$bln' AND Thn='$thn1'");
	  $jl = mysql_fetch_array($djkfddD_dfdfdfd444545);
 	  $ikdid_Dfdfd454545 = mysql_query("SELECT SUM(Qty) as pp FROM jualobat2 WHERE KodeObat='$ff[IdObat]' AND Bln='$bln' AND Thn='$thn1'");
	  $hk = mysql_fetch_array($ikdid_Dfdfd454545);
	  //
	  
	  $a_01mz518aeuddfjdhdf_dfdlfkldkld = mysql_query("SELECT SUM(Qty) AS hh FROM jual_ob_rl WHERE IdObat='$ff[IdObat]' AND NamaObat not like 'Paket%'");
$p10x3_dd_d2jdd = mysql_fetch_array($a_01mz518aeuddfjdhdf_dfdlfkldkld);

//

 $ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalanX= mysql_query("SELECT IdObat,IdPaket,Qty  FROM isipaketdetil
 WHERE IdObat='$ff[IdObat]'");
while($dapat_pertamaX = mysql_fetch_array($ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalanX)){
//
 $kdikd_Dfd= mysql_query("SELECT SUM(Qty) as jj  FROM jualobat WHERE KodeObat='$dapat_pertamaX[IdPaket]'");
$k_454545454dfdfdfd_dfdfd  = mysql_fetch_array($kdikd_Dfd);
//
  $totototototot_gfhghghg54h5 = $totototototot_gfhghghg54h5+( $dapat_pertamaX[Qty]*$k_454545454dfdfdfd_dfdfd[jj]);
 }
 	  $kelua = $jl[jj]+$hk[pp]-$trt[kk]-$ddd_kkdikdidk_hari_bojo_iin[hh]-$p10x3_dd_d2jdd[hh]-$totototototot_gfhghghg54h5;
	  $totototototot_gfhghghg54h5=0;
	 ?> <td <?  /*if($kelua>0 || $kelua<0){ ?> onClick="wCompare_981adp0 = window.open('x9a_s.php?id=<? echo $ff[id]; ?>', 
  'wCompare_981adp0', 'width=580,height=400,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_981adp0.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } */
	?> ><div align="center"><?
	$pcsx = explode(".",$kelua);
	if($pcsx[1]>0){
 	  echo number_format($kelua,2); 
	  }else{
	  echo number_format($kelua); 
	  }
	//  $kelua=0;
	  ?></div></td>
	<?
	  $kjdf_Dfdfd_kjkk = mysql_query("SELECT SUM(Qty) AS kk FROM returbeli WHERE IdBarang='$ff[IdObat]'");
	  $c_oap = mysql_fetch_array($kjdf_Dfdfd_kjkk);
	?>  <td <?  if($c_oap[kk]>0){ ?>  onClick="wCompare_981adp0 = window.open('albertus_kakaku.php?id=<? echo $ff[id]; ?>', 
  'wCompare_981adp0', 'width=580,height=400,left=270,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_981adp0.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   <? } ?>><div align="center"><?
	 
	 if($c_oap[kk]>0){
	  echo number_format($c_oap[kk]);
	 }else{
	 echo "-";
	 }   ?></div></td>
	 <td><div align="center">
	   <?
 $c[id] = $ff[IdObat];
   	include "huting.php";
	 ?></div></td><td><div align="right"><?
  $totkd=$ff[Sta];//-$ff[Hpp];
  echo number_format($totkd); 
  $taka = $taka + $totkd;
 $totkd=0; 	  ?></div></td>
	  <td><div align="right"><?
	  //echo " ($ff[id])";
	  echo number_format($ff[Hpp],2);
  	  ?></div></td>
  </tr><?
 $nomer++; } ?>
 
  <tr>
    <td colspan="4" bgcolor="#F0F0F0"><div align="center">Total</div></td>
    <td bgcolor="#F0F0F0"><div align="right"></div></td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0"><div align="right"></div></td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
    <td bgcolor="#F0F0F0"><div align="right"><? echo number_format($taka); ?></div></td>
    <td bgcolor="#F0F0F0"><div align="right"><? echo number_format($tot_2);
	$KeyID = "$bln-$thn1";
	$pf = strlen($KeyID);
	if($pf>0){
	$us_d = mysql_query("INSERT INTO `biay_keluar_1` (`id`, `KeyID`, `Nilai`, `Nilai2`)
	 VALUES (NULL, '$KeyID', '$tot_1', '$tot_2')");
	 //
	 $uopda  = mysql_query("UPDATE  `biay_keluar_1` SET `Nilai` = '$tot_1',
`Nilai2` = '$tot_2' WHERE  `KeyID` ='$KeyID'");
	 
	}
	 ?></div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>

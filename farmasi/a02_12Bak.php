<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../alamat.php";
//
	 	$kdjfidi_Dfdd = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'");
	$uh2 = mysql_fetch_array($kdjfidi_Dfdd);
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
//
  $lsoks_dfd_0092jal232  = mysql_query("SELECT * FROM int_sup WHERE IdSuplier='$kk[IdSupplier]'");
 $hp_01mb = mysql_fetch_array($lsoks_dfd_0092jal232);
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
.style44 {
	color: #FFFFCC;
	font-weight: bold;
}
.style45 {color: #999999}
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
<body alink="#FFFFFF" vlink="#FFFFFF" link="#FFFFFF">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr  <? if($bas==23 || $anak=='dimas'){}else{?>onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?>>
<td width="662" colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
 <?
 if($kk[Stak]==2){
 ?> <tr onClick="location.href='XW_9.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">

 <? }else{ ?>
 <tr onClick="location.href='x23.php?kembang=<? echo $kembang; ?>&id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? } ?>
 <td width="44"><img  src="../gb/gb.png" width="87" height="66"></td>
 <td width="378" valign="top"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="368"><span class="style1"><?
 echo strtoupper($fkd[Nama]);
 ?></span></td>
 </tr>
 <tr>
   <td><span class="style2"><? echo strtoupper($fkd[Jalan]); ?></span></td>
 </tr>
 <tr>
   <td class="style2"> Telp.  <? echo $fkd[Telp]; ?> 
	  FAX : <? echo $fkd[Fax]; ?></td>
 </tr>
 <tr>
   <td class="style2">e-mail : <? echo $fkd[email]; ?></td>
 </tr>
 </table>
 </div></td>
 </tr>
 </table>
</div></td>
</tr>
 <tr >
  <td colspan="3" valign="top"><div align="left">
  <table width="849" border="0" cellpadding="2" cellspacing="2">
  <tr <?
  if($bas==23 || $anak=='dimas'){}else{
  ?> onClick="location.href='index.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?> valign="top">
  <td width="350"><div align="left">
  <table  border="0" class="style3" cellpadding="2" cellspacing="2">
    <tr>
    <td width="61">NoPo</td>
    <td width="8">:</td>
    <td width="186"><?
echo $kk[NoPo];
?></td>
  </tr>
    <tr  >
      <td>Faktur</td>
      <td>:</td>
      <td><div align="left"><? echo $uh2[NoFaktur]; ?></div></td>
    </tr>
  </table>
  </div></td><td width="485"><div align="left">
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
  <!-- <? /*<tr valign="top">
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
  */ ?> -->
  </table>
  </div></td>
  </tr>
  <?
  if($anak=='dimas' && $hp_01mb[id]){
  ?>
  <tr bgcolor="#990000" >
  <td colspan="3"><div align="left" class="style44">
  YAKIN DATA INI AKAN DIJOURNAL ?<br>
 <a href="../Akuntansi/ipin_upin.php?dimas=<? echo $dimas; ?>&id=<? echo $id; ?>" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">YA</a> || 
  <a href="" style="text-decoration:none" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
  onClick="window.close()">TIDAK</a>
  </div></td>
  </tr>
  <?
  }
  ?>
  <tr  valign="top">
    <td colspan="2"><div align="left">
	<table border="1" cellpadding="0" cellspacing="1">
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<table border="0" cellpadding="1" cellspacing="1" class="style3">
	<?
if($anak=='dimas' && $hp_01mb[id]){
	$color='bgcolor="#66CCCC"';
}else{
	$color='bgcolor="#FFCC99"';
} 	?><tr <? echo $color; ?>  >
	<td width="22" rowspan="2"  ><strong>NO</strong><strong> </strong></td>
	<td width="155" rowspan="2" ><strong>NAMA BARANG</strong><strong> </strong></td>
	<td width="103" rowspan="2" ><strong>NO BATCH</strong><strong> </strong></td>
		<td width="103" rowspan="2" ><strong>MERK</strong><strong> </strong></td>
	<td width="46" rowspan="2" ><div align="center"><strong>VOL</strong></div>	  <div align="center"><strong> </strong></div></td>
	<td width="129" rowspan="2" ><div align="center"><strong>SATUAN</strong></div>	  <div align="center"><strong> </strong></div></td>
	<td colspan="2" > <div align="center"><strong>HARGA+Ppn</strong></div></td>
	<td width="75" rowspan="2"  ><div align="center"><strong>DISKON</strong></div></td>
 	<td width="74" rowspan="2" > <div align="center"><strong>JML RP </strong></div></td>
	<td width="74" rowspan="2" > <div align="center"><strong>DISKON RP </strong></div></td>
	</tr>
	<tr <? echo $color; ?>>
	<td width="75" ><div align="center"><strong>SEBLUM</strong></div></td>
	<td width="75" ><div align="center"><strong>SESUDAH</strong></div></td>
	</tr>
	<?
	$nomer=$awal;
	if($dimas>0){
	$kjdk  = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' and IdFaktur='$dimas'");// LIMIT $awal,7");
 	}else{
	$kjdk  = mysql_query("SELECT * FROM podetil77 WHERE IdPo77='$id' "); //LIMIT $awal,7");
	} while($hh = mysql_fetch_array($kjdk)){
	?>
	<tr valign="top">
	<td><div align="center"><? echo $nomer+1; ?></div></td>
	<td><div align="left"><? echo $hh[NamaBarang]; ?></div></td>
	<td><div align="left"><?
	 echo "$hh[Bacth]";
	?></div></td>
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
 			<td><div align="center"><?
			 if($kk[Ppn]==0){
			 $Hs2 = ($hh[Total]/$hh[Qty]);
			  }elseif($kk[Ppn]==1){
			 $Hs2 = ($hh[Total]/$hh[Qty]);
			 }else{
			 $Hs2 = ($hh[Total]/$hh[Qty])*100/110;
			 }
echo number_format($Hs2,2); 
$belian = $Hs2*$hh[Qty];
$bas_r = $bas_r + $belian;
 //=========================================
if($anak=='dimas' && $hp_01mb[id]){
  $kiksisk_sds_00000000000  = mysql_query("SELECT * FROM int_pembelian WHERE id=1");
  $ua_d098 = mysql_fetch_array($kiksisk_sds_00000000000);
  ///
  
 $TglJamK=date("d.m.Y-H:i:s");
 
//============================================
 $iskia = mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d098[IdAkunt]', '$ua_d098[KodeAkunt]','$ua_d098[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'PEMBELIAN OBAT $hh[NamaBarang]', '$a[Nama]', '$TglJamK', 'D', '$belian', '0', 'B.$hh[id]','HPP-$dimas')");
  ///
  $kiksisk_sds_00000000000_09  = mysql_query("SELECT * FROM int_pembelian WHERE id=5");
  $ua_d098q = mysql_fetch_array($kiksisk_sds_00000000000_09);
/*
$iskiaD = mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d098q[IdAkunt]', '$ua_d098q[KodeAkunt]','$ua_d098q[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'PEMBELIAN OBAT $hh[NamaBarang]', '$a[Nama]', '$TglJamK', 'K', '$Hs2', '0', 'HB.$hh[id]','HPP-$dimas')");
*/
}   //  ?>
</div></td>
			 <td><div align="center"><?  
			if($kk[Ppn]==1){
			 $Hs = ($hh[Total]/$hh[Qty]);
			}else{
			 $Hs = ($hh[Total]/$hh[Qty]);
			}
			echo number_format($Hs,2); 
			 ?></div></td>
<td><div align="center">
	  <? if($hh[PotPrc]>0){
	echo number_format($hh[PotPrc],2); echo "%"; 
	}else{
	echo ".";
	} ?>
	  </div></td>
 		 
		<td><div align="center"><?
		$Baye = $hh[Total];
 		 echo number_format($hh[Total],2);
	$toto = $toto + $Baye;
	$TotRp = $TotRp + $hh[PotRp];
	 ?></div></td>
	 <td><div align="right"><?
	 if($hh[PotPrc]>0){
		$Disko = $hh[Total]*$hh[PotPrc]/100;
 		}else{
		$Disko =0;
		}
		echo number_format($Disko,2); 
		$tDisko = $tDisko+$Disko;
					 $HsP=0;  $Hs=0; $Disko=0;

	 ?></div></td>
	</tr>

	<?
	$nomer++; } ?>
		<tr <? echo $color; ?>>
	  <td colspan="9"  ><div align="center"><strong>TOTAL</strong></div></td>
	  <td  ><div align="right"><strong><? echo number_format($toto); ?></strong></div></td>
	  <td bgcolor="#99FF66"><div align="right"><? echo number_format($tDisko); ?></div></td>
	  </tr></table>
	</div>
	</td>
	</tr>
	</table>
	</div></td>
   </tr>
  <tr  valign="top">
    <td colspan="2"><div align="right">
	<table width="853" border="0" align="center" cellpadding="1" cellspacing="1">
	<tr valign="top">
	<td width="482"><b class="style3"><u>Syarat - Syarat :</u></b><br>
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
	<td width="364"  ><div align="right">
		<table width="277" border="0" align="right" cellpadding="1" cellspacing="1" class="style3">
	<tr>
	<td><span class="style45">A</span></td>
	<td width="128">Jml HargaJual(+Ppn) </td>
	<td width="10">:</td>
	<td width="102" ><div align="right"><?
	
if($yh[Diskon]>0){
	   $tDisko= $yh[Diskon];   
 	}elseif($uh2[Diskon]>0){
	$tDisko=$uh2[Diskon];  
	  }elseif($kk[Diskon]>0){
	   $tDisko= $kk[Diskon];     
	 }else{
	 $tDisko=$TotRp;  
	 }
	   if($kk[Ppn]==0){
	$toto=$toto;
 	$totos =0; 
	}elseif($kk[Ppn]==1){
	$toto=$toto;
 	 //
	 	 $kdjfkjdfd_Dfdfd1034= mysql_query("SELECT COUNT(id) AS hh FROM podetil77 WHERE IdPo77='$id' AND Kait=2");
		 $apik = mysql_fetch_array($kdjfkjdfd_Dfdfd1034);
	$lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);
  
 	 if($kk[SetPpn]==0 && $uh2[Diskon]>0){
	 $totos =($toto*10/100); 
	 }elseif($kk[SetPpn]==1 && $uh2[Diskon]>0){
	 $totos =($toto-$tDisko)*10/100;   
	}elseif($apik[hh]>=1){
	 $totos =($toto-$TotRp)*10/100; 
	}else{
	 $totos =($toto-$tDisko)*10/100;  
	} 
	}elseif($kk[Ppn]==2){
	$toto=$toto;
//   	$totos =($toto-$tDisko)*100/110*10/100;    
   	$totos =($toto)*100/110*10/100;    
 	}else{ 
	 $totos = ($toto*100/110*10/100);
	 $toto = $toto-$totos;
 	} 
	if($kk[Bulat]==1){
	echo number_format($toto); 
	}else{
	 echo number_format($toto,2); 
	} 
	 ?></div></td>
	</tr>
	 <?
 if($kk[SetPpn]!=14){
  ?> 
 <tr>
	<td><span class="style45">B</span></td>
	<td>Diskon        </td>
	<td>:</td><td><div align="right"><? 
 
	 
	 echo number_format($tDisko,2);
	 //
	 
	 if($anak=='dimas' && $hp_01mb[id]){
	 
	 ////////////////////////////////////////////
	   $kiksisk_sds3_1232_9kasmh  = mysql_query("SELECT * FROM int_pembelian WHERE id=3");
  $ua_d3_1212 = mysql_fetch_array($kiksisk_sds3_1232_9kasmh);
	 
	 $iskiadd= mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d3_1212[IdAkunt]', '$ua_d3_1212[KodeAkunt]','$ua_d3_1212[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'Diskon Pembelian No $kk[NoPo]', '$a[Nama]', '$TglJamK', 'K', '$tDisko', '0', 'D.$dimas','HPP-$dimas')");
//
  /*$kiksisk_sds3_1232_9kasmhX  = mysql_query("SELECT * FROM int_pembelian WHERE id=6");
  $ua_d3_1212X = mysql_fetch_array($kiksisk_sds3_1232_9kasmhX);
	 $totosS=$totos*10;
	 $iskiadd= mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d3_1212X[IdAkunt]', '$ua_d3_1212X[KodeAkunt]','$ua_d3_1212X[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'TXN PEMBELIAN OBAT $kk[NoPo]', '$a[Nama]', '$TglJamK', 'K', '$totosS', '0', 'TBL.$id','HPP-$dimas')");
	*/ /////////////////////////////////////////////
	 }
	 //
	 ?></div></td>
	</tr>
	 <?
	 if($kk[Ppn]==2){
	 ?>
	<tr>
	<td><span class="style45">C</span></td>
	<td>Total Awal (A-B) </td>
	<td>:</td><td><div align="right"><? 
 
	$Dpp = $toto -$tDisko;
	if($kk[Bulat]==1){
	echo number_format($Dpp); 
	}else{
	echo number_format($Dpp,2); 
	} 
	$Dpp = $toto;?></div></td>
	</tr>
	<tr>
	<td><span class="style45">D</span></td>
	<td>Dpp(100/110)*JmlHrgJual</td>
	<td>:</td><td><div align="right"><? 
	$Dpp2 = $Dpp*100/110;
	if($kk[Bulat]==1){
	echo number_format($Dpp2); 
	}else{
	echo number_format($Dpp2,2); 
	} ?></div></td>
	</tr>
	<? } ?>
	<tr>
	<td><span class="style45">E</span></td>
	<td>Ppn     </td>
	<td>:</td><td><div align="right"><?
	
 	 if($kk[Bulat]==1){
	 echo number_format($totos); 
	}else{
	 echo number_format($totos,2);  
	}

	 if($anak=='dimas' && $hp_01mb[id]){
	 ////////////////////////////////////////////
	   $kiksisk_sds3_1232_9kasmh2  = mysql_query("SELECT * FROM int_pembelian WHERE id=2");
  $ua_d3_12102 = mysql_fetch_array($kiksisk_sds3_1232_9kasmh2);
	 
	 $iskiadd= mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d3_12102[IdAkunt]', '$ua_d3_12102[KodeAkunt]','$ua_d3_12102[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'Ppn Pembelian No $kk[NoPo]', '$a[Nama]', '$TglJamK', 'D', '$totos', '0', 'P.$dimas','HPP-$dimas')");
	 /////////////////////////////////////////////
	 }

?></div></td>
	</tr>
 <?
 }else{	?>
	<tr>
<td><span class="style45">F</span></td>	
<td>Ppn</td><td>:</td><td><div align="right"><?
	if($kk[Bulat]==1){
	echo number_format($totos); 
	}else{
	 echo number_format($totos,2); 
	}?></div></td>
	</tr>
	<tr>
	<td><span class="style45">G</span></td>
	<td>Diskon</td><td>:</td><td><div align="right"><? 
	 if($kk[Diskon]>0){
	   $tDisko= $kk[Diskon];
	 }else{
	 $tDisko=$TotRp;
	 }
	 if($kk[Bulat]==1){
	 echo number_format($tDisko);
	 }else{
	 echo number_format($tDisko,2);
	 }?></div></td>
	</tr>
	 <? } ?>
	<?
	if($kk[Materai]>0){
	?>
	 <tr>
	<td><span class="style45">I</span></td> 
	<td>Materai</td><TD>:</TD><TD><div align="right"><?
	 if($kk[Bulat]==1){
	 
	 }else{
	 echo number_format($kk[Materai]); 
	 } 
	 	 if($anak=='dimas' && $hp_01mb[id]){
	 ////////////////////////////////////////////
	   $kiksisk_sds3_1232_9kasmhwee  = mysql_query("SELECT * FROM int_pembelian WHERE id=4");
  $ua_d3_12102s3 = mysql_fetch_array($kiksisk_sds3_1232_9kasmhwee);
	 
	 $iskiadd= mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$ua_d3_12102s3[IdAkunt]', '$ua_d3_12102s3[KodeAkunt]','$ua_d3_12102s3[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'Materai Atas Pembelian No $kk[NoPo]', '$a[Nama]', '$TglJamK', 'D', '$kk[Materai]', '0', 'M.$dimas','HPP-$dimas')");
	 /////////////////////////////////////////////
	 }
?></div></TD>
	 </tr>
	 <? } ?><tr>
	<td><span class="style45">J</span></td>  
	<td>Nett (C+I) </td>
	  <td>:</td>
	  <td><div align="right"><?
	  if($kk[Ppn]==2){
	  $nett=$toto-$tDisko+$kk[Materai]; 
	  }elseif($kk[SetPpn]==1){
	  	$nett = $toto+$Ppn-$tDisko +$totos+($kk[Materai]);  
 	  }else{
	  	$nett = $toto-$tDisko+$Ppn+$totos+($kk[Materai]);  
 }
	 if($kk[Bulat]==1){
	  echo number_format($nett);
	 }else{
	  echo number_format($nett,2);
	 }
	  if($anak=='dimas' && $hp_01mb[id]){
	  $catat_piutang = mysql_query("INSERT INTO  `journal_tmp` (`id`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, `IdPo`, `NoPo`, `TglPo`, `BlnPo`, `ThnPo`, `IdSuplier`, `NamaSuplier`, `Keterangan`, `Opr`, `TglJam`, `DK`, `Nilai`, `Stat`, `IdPost`, `NoTxn`) VALUES 
(NULL, '$hp_01mb[IdAkunt]', '$hp_01mb[KodeAkunt]','$hp_01mb[NamaAkunt]', '$id', '$kk[NoPo]', '$kk[Tgl]', '$kk[Bln]', 
'$kk[Thn]', '$kk[IdSupplier]', '$kk[NamaSupplier]', 'TRANSAKSI PEMBELIAN PO : $kk[NoPo] ', '$a[Nama]', '$TglJamK', 'K', '$nett', '0', 'TB.$dimas','HPP-$dimas')");
}  ?></div></td>
	  </tr>
	</table>
	</div></td>
	</tr>
	</table>

	</div></td>
  </tr>
  <tr  valign="top">
    <td colspan="2"><div align="center"></div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
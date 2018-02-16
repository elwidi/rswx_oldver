<?
header('Refresh: 3');
$tgl1 = $_GET["tgl1"];
$tgl2 = $_GET["tgl2"];
$bln1 = $_GET["bln1"];
$bln2 = $_GET["bln2"];
$thn1 = $_GET["thn1"];
$thn2 = $_GET["thn2"];
$mbak = $_GET["mbak"];
session_start();
include "../konek.php";
include "../ceke.php";
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
 ?>
<html>
<head><script language="JavaScript">
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
<style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
 <table  cellpadding="2" cellspacing="2" border="0"> 
<tr>
<td width="915"   colspan="3"><div align="center" class="style2"> 
  <div align="left"> LIST HISTORY DATA OBAT<br />
  <font color="#990000"><? echo $ii[NamaObat]; ?></font><br>
    PERIODE : 
  <?
echo "$tgl1 ";
$bln=$bln1;
include "../bulan.php";
 echo " sd $tgl2";
 $bln=$bln2;
include "../bulan.php";
 ?>
  </div>
</div></td>
</tr>
 <tr>
 <td colspan="3"><div align="left">
 <a href="#" onClick='toCompare_009122 = window.open("n65_01.php?id=<? echo $id; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&bln1=<? echo $bln1; ?>", "toCompare_009122", "width=880,height=440,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    toCompare_009122.focus();' style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">CEK ALTER</a> || <a href="#" style="text-decoration:none" onClick="window.close()"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">TUTUP</a>
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
  <table border="0" cellpadding="0" cellspacing="0"  class="style3">
 <tr>
 <td width="1129" colspan="3" valign="top">
 <div align="left">
   <table width="1109" border="0" cellpadding="2" cellspacing="2"  class="style3">
 <TR>
 <td width="30" bgcolor="#99CCCC"><strong>NO</strong></td>
 <td width="60" bgcolor="#99CCCC"><strong>TGLPO</strong></td>
 <td width="161" bgcolor="#99CCCC"><strong>NOPO</strong></td>
 <td width="224" bgcolor="#99CCCC"><strong>PABRIK</strong></td>
 <td width="66" bgcolor="#99CCCC"><div align="right"><strong>PEMBELIAN</strong></div></td>
 <td width="41">HARGA</td>
 <td>TOTAL</td>
 <td width="68" bgcolor="#99CCCC"><strong>PEMAKAIAN</strong></td>
 <td width="63" bgcolor="#99CCCC"><strong>NO RM </strong></td>
 <td width="340" bgcolor="#99CCCC"><strong>DOKTER</strong></td>
 </TR>     <?
$nomer = 1;  $noma=1; $batas=1;
  $banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$bln1/$tgl1/$thn1");
  $sekar = ceil(($comp-$kini)/86400);
  $mulai=0;
 $disik=1;
  while($mulai<=$sekar){
    $compare = date("d/m/Y",$kini +$mulai*86400);
 $peca=explode("/",$compare);
 $Tgl=$peca[0]-0;
 $Bln=$peca[1]-0;
  $Thn=$peca[2]-0;
  $beli = mysql_query("SELECT * FROM podetil77 WHERE IdBarang='$id' AND Tgl=$Tgl AND Bln=$Bln AND Thn='$Thn' AND Stat=2");
  while($cc = mysql_fetch_array($beli)){
 $ni = $nomer%2;
 if($ni==1){
 $warna='bgcolor="#FFFF99"';
 }else{
 $warna='';
 }?>
 <tr <? echo $warna; ?>>
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo $compare; ?></div></td>
 <td <? if($cc[Jenis]==1){?>  bgcolor="#FF6666"<? } ?>><div align="left"><? 
  $iskjs = mysql_query("SELECT NamaSupplier,NoPo FROM polog77 WHERE id='$cc[IdPo77]'");
 $na = mysql_fetch_array($iskjs);    
 echo $na[NoPo]; ?></div></td>
 <td><div align="left"><? 

 echo ucfirst(strtolower($na[NamaSupplier])); 
  ?></div></td> 
  <td><div align="right"><? echo number_format($cc[Qty]); ?></div></td>
 
  <td  ><div align="left"><? echo number_format($cc[Harga]); ?></div></td>
  <TD><div align="center"><?
  $tot_1 = $cc[Qty]*$cc[Harga];
  echo number_format($tot_1); 
  $te = $te + $tot_1;
   ?></div></TD>
 </tr>
 <? $nomer++; } 
    $mulai++;  } ?>
  <?
 $kdjfkjdkf_jdfjdf = mysql_query("SELECT * FROM jualobat WHERE KodeObat='$id'");
 while($bn = mysql_fetch_array($kdjfkjdkf_jdfjdf)){
 ?>
 <tr valign="top">
   <td><div align="center"><?  echo $nomer; ?></div></td>
   <td>&nbsp;</td>
   <td colspan="2">&nbsp;</td>
   <td ><div align="center"><? echo number_format($bn[Qty],2); 
   $Qty = $bn[Qty];
   ?></div></td>
   <td><div align="right"> <table border="0" cellpadding="2" cellspacing="2" class="style3">
   <tr>
  <td width="18" bgcolor="#FFCCFF"><strong>NO</strong></td>
  <td width="133" bgcolor="#FFCCFF"><strong>SUMBER</strong></td>
  <td width="85" bgcolor="#FFCCFF"><strong>HARGA</strong></td>
   </tr>
   <?
   $Qty2=$Qty-1+1;
   $nos =1;
    $jjsds_Sds  = mysql_query("SELECT * FROM hpp WHERE IdObat='$bn[KodeObat]' AND Stat=0 ORDER BY id asc LIMIT 0,$Qty2");
   while($vv = mysql_fetch_array($jjsds_Sds)){
   $ew = $nos%2;
   if($ew==1){
   $warna='bgcolor="#D3FECD"';
   }else{
   $warna='';
   }?>
   <tr <? echo $warna; ?>  >
   <td><div align="center"><? echo $nos; ?></div></td>
   <td><div align="left"><? echo $vv[NoUnik]; ?></div></td>
   <td><div align="left"><? echo number_format($vv[Harga]); ?></div></td>
   <td width="65"><div align="left"><?
   //
   if($dimas=='baik'){
   $psd = mysql_query("UPDATE hpp SET Stat=1 WHERE id='$vv[id]'"); 
     $kiksisk_sds  = mysql_query("SELECT * FROM int_pembelian WHERE id=1");
  $ua_d = mysql_fetch_array($kiksisk_sds);
   //
   $TglJam=date("d.m.Y-H:i:s");
   $iao =  mysql_query("INSERT INTO  `txnakunt` (`id`, `Tgl`, `Bln`, `Thn`, `NoTxn`, `NoBukti`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, 
   `NoInv`, `NoFak`, `DK`, `Nilai`, `Keterangan`, `IdOpr`, 
   `KodeBagian`, `NamaBagian`, `Opr`, `Stat`, `TglJam`, `Type`, `IdFaktur`) VALUES 
   (NULL, '$pp[0]', '$pp[1]', '$pp[2]', 'Hpp.$NoResep', 'Hpp:$id-$nos.$X', '$ua_d[IdAkunt]', 
   '$ua_d[KodeAkunt]', '$ua_d[NamaAkunt]', 
   'INV-$id-$nos', '', 'K', '$vv[Harga]', 'HPP: PENJUALAN $NoResep : $vv[NamaObat]', '$a[id]',
    '-', '-', '$a[Nama]', '0', '$TglJam', 'P', 'HPP.$id-$vv[id]')");
	//////
	$kiksisk_sds111  = mysql_query("SELECT * FROM int_pembelian WHERE id=111");
  $ua_d111 = mysql_fetch_array($kiksisk_sds111);
  
	 $idSao =  mysql_query("INSERT INTO  `txnakunt` (`id`, `Tgl`, `Bln`, `Thn`, `NoTxn`, `NoBukti`, `IdAkunt`, `KodeAkunt`, `NamaAkunt`, 
   `NoInv`, `NoFak`, `DK`, `Nilai`, `Keterangan`, `IdOpr`, 
   `KodeBagian`, `NamaBagian`, `Opr`, `Stat`, `TglJam`, `Type`, `IdFaktur`) VALUES 
   (NULL, '$pp[0]', '$pp[1]', '$pp[2]', 'Hpp.$NoResep', 'Hpp:J$id-$nos.$X', '$ua_d111[IdAkunt]', 
   '$ua_d111[KodeAkunt]', '$ua_d111[NamaAkunt]', 
   'INV-$id-$nos', '', 'D', '$vv[Harga]', 'HPP: PENJUALAN $NoResep : $vv[NamaObat]', '$a[id]',
    '-', '-', '$a[Nama]', '0', '$TglJam', 'P', 'HPP.J.$id-$vv[id]')");
	} ?></div></td>
   </tr>
   <?
   $nos++; } ?>
   </table></div></td>
   <td><div align="center"></div></td>
   <td><div align="left"><? echo ucfirst(strtolower($bn[NamaPasien]));   ?> </div></td>
   <td><div align="center"><font color="#009966"><i><? echo "($bn[NoPasien])"; ?></i></font><? ?></div></td>
   <td><div align="left"><? echo ucfirst(strtolower($bn[NamaDokter]));   ?> </div></td>
 </tr>
 
 <? $nomer++; } 
 if($tdd>0){?> 
  <tr>
   <td colspan="6"><div align="center">TOTAL</div></td>
   <td><div align="center"><? echo number_format($tdd); ?></div></td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <? } ?>
 
   </table>
 </div> </td>
 </tr>
</table> 
</body>
</html> 
<? } ?>
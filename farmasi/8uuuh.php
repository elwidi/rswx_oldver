<?
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 3');
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD); 
 $lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);

if(!$kk[id]){
header("Location:./index.php");
}else{
?>
<html>
<head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66CC33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script></head>
<body>
<div align="left">
<table border="1">
   <tr>
   <td width="905" colspan="3"><div align="left">
   <table width="867" border="0" cellpadding="1" cellspacing="1" class="style1">
   <tr>
   <td width="27" rowspan="2" bgcolor="#D4D0C8"><div align="center"><strong> </strong></div>     <div align="center"><strong>NO</strong></div></td>
   <td width="109" rowspan="2" bgcolor="#D4D0C8"><strong> </strong><strong>NAMA BARANG </strong></td>
   <td width="105" rowspan="2" bgcolor="#D4D0C8"><strong>  </strong><strong>NO BACTH/EO</strong></td>
   <td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong> </strong><strong>SATUAN</strong><strong> </strong></div></td>
   <td width="78" rowspan="2" bgcolor="#D4D0C8"><strong>SUBTOTAL</strong></td>
   <td colspan="2" bgcolor="#D4D0C8"><div align="center"><strong> </strong><strong>POTONGAN</strong></div></td>
   <td width="73" rowspan="2" bgcolor="#D4D0C8"><div align="right"><strong>JML RP</strong></div></td>
   <td width="80" rowspan="2" bgcolor="#D4D0C8"><div align="left"><strong>FAKTUR</strong></div></td>
   <td width="77" rowspan="2" bgcolor="#D4D0C8"><div align="left"><strong>INV</strong></div></td>
     <td width="77" rowspan="2" bgcolor="#D4D0C8"><div align="left"><strong>KET</strong></div></td>
    </tr>
	 <tr>
   <td width="69" bgcolor="#D4D0C8"><strong>UNIT</strong></td>
   <td width="38" bgcolor="#D4D0C8"><div align="center"><strong>JML</strong></div></td>
   <td width="51" bgcolor="#D4D0C8"><strong>HARGA</strong></td>
   <td width="67" bgcolor="#D4D0C8"><div align="center"><strong>%</strong></div></td>
   <td width="56" bgcolor="#D4D0C8"><div align="right"><strong>NILAI</strong></div></td>
   </tr>
   <?
  
   $no =1;
   if($v==3){
    $kkkfg = mysql_query("SELECT * FROM podetil77x WHERE IdPox='$id' AND IdFaktur='$dimas' ORDER BY id DESC");
   }else{
    $kkkfg = mysql_query("SELECT * FROM podetil77x WHERE IdPox='$id' ORDER BY id DESC");
    } 
	while($gg = mysql_fetch_array($kkkfg)){
	//
 	$kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT * FROM ket_det_po WHERE IdDetil='$gg[id]'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);

	//
 $kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT *
FROM `ket_det_po`
WHERE `IdDetil` = '$gg[id]'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);
 
 if($gg[TglEd]>0 && $gg[BlnEd]>0 && $gg[ThnEd]>0){
 $warna='bgcolor="#FFFF99"'; 
 }else{
  $warna='';
 }
  if($gg[Stat]==2){
  ?><tr bgcolor="#FF99CC" valign="top" ><? 
   }elseif($dimas>0){    ?>
   <tr <?
   echo $warna; 
   ?>onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd34343d = window.open('xass.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&IdDetil=<? echo $gg[id]; ?>&id=<? echo $id; ?>', 
  'wComparecdd34343d', 'width=580,height=400,left=70,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34343d.focus();"  valign="top"  >
	<? }else{   ?>
	<tr bgcolor="#99FFFF" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd34343d = window.open('xass.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&IdDetil=<? echo $gg[id]; ?>&id=<? echo $id; ?>', 
  'wComparecdd34343d', 'width=580,height=400,left=70,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34343d.focus();" ><? } ?> 
   <td><div align="center"><? echo $no; ?></div></td>
   <td <? if($yape[id]>0){ ?> bgcolor="#FF99CC"<? } ?>><div align="left"><? echo strtoupper($gg[NamaBarang]); 
   ?> </div></td>
   <td><div align="left"><? echo "$gg[Bacth]"; ?></div></td>
   <td><div align="left"><? echo strtoupper($gg[NamaSatuan]); ?></div></td>
   <td><div align="left"><? echo number_format($gg[Qty],2); ?></div></td>
   <td><div align="center"><? 
 $Hs = ($gg[Harga]*$gg[Pengali]);
  echo number_format($gg[Harga],2);  
  ?></div></td>
   <td><div align="center"><? echo number_format($gg[Total],2); ?></div></td>
   <td><div align="center"><?
   $pcu = explode(".",$gg[PotPrc]);
    if($gg[PotPrc]==0){
	echo "";
	}elseif($gg[PotPrc]>0 && $pcu[1]-0==0){
echo number_format($gg[PotPrc],2); echo "%";
	}elseif($gg[PotPrc]>0 && $pcu[1]-0>0){
    echo $gg[PotPrc]; echo "%";
	}else{ echo $gg[PotPrc]; echo "%"; } ?></div></td>
   <td><div align="right"><? 
      $prc= ($gg[Total]*$gg[PotPrc]/100);
	  if($kk[Bulat]==1){
echo  number_format($prc);    	  }elseif($prc>0){
	echo  number_format($prc,2);   
	  }else{
    echo  number_format($gg[PotRp],2);
   } ?></div></td>
   <td><div align="right"><? 
if($prc>0){
$totale = $gg[Total]-$prc;
}else{
$totale = $gg[Total]-$gg[PotRp];
}
echo  number_format($totale); 
$Totot = $Totot + $totale;
   ?></div></td>
   <td><? 
   $lsds_Dsds = mysql_query("SELECT NoFaktur,NoInv FROM fakturpo WHERE id='$gg[IdFaktur]'");
   $ik = mysql_fetch_array($lsds_Dsds);
   echo $ik[NoFaktur];
   ?></td>
   <td><? 
   echo $ik[NoInv]; ?></td>
   <td><div align="left"><?
  echo ucfirst(strtolower($yape[Keterangan])); ?></div></td>
    </tr>
  
   <? $no++; } ?> <tr>
     <td colspan="9" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
	 <td bgcolor="#D4D0C8"><div align="center"><? echo number_format($Totot); ?></div></td>
     </tr>
   </table>
   </div>
   </tr>
   </table>
</div>
</body>
</html>
<? 
}
?>

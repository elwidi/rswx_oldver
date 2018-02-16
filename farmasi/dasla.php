<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
//header('Refresh: 2');
	 $kdidkdifd_dfdf = mysql_query("select * from racikembal where id=1");
	 $hbgb= mysql_fetch_array($kdidkdifd_dfdf);?>
 <html>
<head><style type="text/css">
<!--
.style23 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style24 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: italic;
}
.style224 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
}
-->
</style> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2" class="style23">
  <tr>
		<td width="30" bgcolor="#6CB969"><div align="center"><strong>NO</strong></div></td>
		<td width="328" bgcolor="#6CB969"><strong>NAMA OBAT</strong></td>
		<td width="51" bgcolor="#6CB969"><div align="center"><strong>QTY</strong></div></td>
		<td width="94" bgcolor="#6CB969"><div align="right"><strong>HARGA</strong></div></td>
		<td width="65" bgcolor="#6CB969"><div align="right"><strong>TOTAL</strong></div></td>
		</tr> 
		<?
 		$nomer=1;
 		$sdsjksjkds  = mysql_query("SELECT * FROM jualobat_tmp2 WHERE JamTran='$NoResep' 	and apa_r!=1 order by id asc");
		while($xx = mysql_fetch_array($sdsjksjkds)){
		if($xx[R_racik]==1){
		$warna='class="style24"';
		}else{
  		$warna='';
		}
		$ter = $nomer%2;
  if($ter==1){
  $warna=' bgcolor="#DEFEE6"';
  }else{
  $warna=' bgcolor="#FFFF99"';
  } 
		?>
 		<tr <? echo $warna; ?> onClick="wComparew3www = window.open('hsa_3v.php?id=<? echo $id;?>&IdDetil=<? echo $xx[id]; ?>', 
  'wComparew3www', 'width=430,height=190,left=370,Top=212,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
		  <td><div align="center"><? echo $nomer; ?></div></td>
		  <td><div align="left"><? echo strtoupper($xx[NamaObat]); ?></div></td>
		  <td><div align="center"><?
		  echo number_format($xx[Qty],2);
		  ?></div></td>
		  <td><div align="right"><? echo number_format($xx[HargaBeli]); ?></div></td>
		  <td><div align="right"><? echo number_format($xx[JmlHargaBeli]);
		  $to = $to + $xx[JmlHargaBeli];
		   ?></div></td>
		  </tr>
				<? $nomer++; }?>
<?
 $dud=0;
 $kdodkddddodk = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=1 AND apa_r=1");
while($hh = mysql_fetch_array($kdodkddddodk)){

 $totSz = $totSz + $hh[JmlHargaBeli];
$dud++; }
 if($dud>0){
?>
 <tr bgcolor="#DDDDDD"  onClick="wComparew3www_6b = window.open('x_sef_2.php?urr=1&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>', 
  'wComparew3www_6b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_6b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left">Racikan 1</div></td>
    <td><div align="center"><? echo $dud; ?>
     </div></td>
	 <td colspan="2"><div align="right"><?
	 //
 
	 $totSz2 = $totSz +$hbgb[Racikan];
	 //
	  echo number_format($totSz2); ?></div></td>
 </tr>
  <tr>
 <td colspan="4" valign="top"><div align="left">
  <div align="left">
  <table width="304" border="0" cellpadding="1" cellspacing="1" class="style223">
  <?
 $noc=1;
   $kdodkddddodk_jhjhj = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=1 AND apa_r=1");
while($sa = mysql_fetch_array($kdodkddddodk_jhjhj)){
$pasky = $noc%2;
if($pasky==1){
$warna='bgcolor="#FFCCFF"';
}else{
$warna=' bgcolor="#EAFFEF"';
}
?>
  <tr  <? echo $warna; ?> class="style224">
  <td width="34"><div align="right"><? echo $noc; ?></div></td>
  <td width="226"><div align="left"><? echo ucfirst(strtolower($sa[NamaObat])); ?></div></td>
  <td width="34"><div align="center"><? echo $sa[Qty]; ?></div></td>
  </tr>
  <? $noc++; } ?>
  </table>
  </div>
 </div></td>
 </tr><? } ?>
 
 <?
  $kdodkddddodk2 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=2 AND apa_r=1");
while($hh2x = mysql_fetch_array($kdodkddddodk2)){
  $totSzx = $totSzx + $hh2x[JmlHargaBeli];
$dud2++; }
 if($dud2>0){
?>
 <tr bgcolor="#DDDDDD"  onClick="wComparew3www_6b = window.open('x_sef_2.php?urr=2&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>', 
  'wComparew3www_6b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_6b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <td><div align="center"><? echo $nomer+1; ?></div></td>
 <td><div align="left">Racikan 2</div></td>
    <td><div align="center"><? echo $dud2; ?>
     </div></td>
	 <td colspan="2"><div align="right"><?
	 //
 	 $totSz2x = $totSzx +$hbgb[Racikan];
	 //
	  echo number_format($totSz2x); ?></div></td>
 </tr>
  <tr>
 <td colspan="4" valign="top"><div align="left">
  <div align="left">
  <table width="304" border="0" cellpadding="1" cellspacing="1" class="style224">
  <?
 $nocx=1;
   $kdodkddddodk_jhjhjx = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=2 AND apa_r=1");
while($sax = mysql_fetch_array($kdodkddddodk_jhjhjx)){
$paskyx = $nocx%2;
if($paskyx==1){
$warnaz='bgcolor="#FFCCFF"';
}else{
$warnaz=' bgcolor="#EAFFEF"';
}
?>
  <tr  <? echo $warnaz; ?>>
  <td width="34"><div align="right"><? echo $nocx; ?></div></td>
  <td width="226"><div align="left"><? echo ucfirst(strtolower($sax[NamaObat])); ?></div></td>
  <td width="34"><div align="center"><? echo $sax[Qty]; ?></div></td>
  </tr>
  <? $nocx++; } ?>
  </table>
  </div>
 </div></td>
 </tr>
 <? } ?>
    <?
   $nomer=$nomer+1;
  $kdodkddddodk4 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=3 AND apa_r=1");
while($hh2x4 = mysql_fetch_array($kdodkddddodk4)){
  $totSzx4 = $totSzx4 + $hh2x4[JmlHargaBeli];
$dud4++; }
 if($dud4>0){
?>
 <tr  onClick="wComparew3www_6b = window.open('x_sef_2.php?urr=3&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>', 
  'wComparew3www_6b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_6b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" bgcolor="#DDDDDD">
 <td><div align="center"><? $nomer= $nomer+1; 
 echo $nomer; ?></div></td>
 <td><div align="left">Racikan 3</div></td>
    <td><div align="center"><? echo $dud4; ?>
     </div></td>
	 <td colspan="2"><div align="right"><?
	 //
 	 $totSz2x4 = $totSzx4 +$hbgb[Racikan];
	 //
	  echo number_format($totSz2x4); ?></div></td>
 </tr>
   <tr>
 <td colspan="4" valign="top"><div align="left">
  <div align="left">
  <table width="304" border="0" cellpadding="1" cellspacing="1" class="style224">
  <?
 $nocx3=1;
   $kdodkddddodk_jhjhjx3 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=3 AND apa_r=1");
while($sax3 = mysql_fetch_array($kdodkddddodk_jhjhjx3)){
$paskyx3 = $nocx3%2;
if($paskyx3==1){
$warnax='bgcolor="#FFCCFF"';
}else{
$warnax=' bgcolor="#EAFFEF"';
}
?>
  <tr  <? echo $warnax; ?>>
  <td width="34"><div align="right"><? echo $nocx3; ?></div></td>
  <td width="226"><div align="left"><? echo ucfirst(strtolower($sax3[NamaObat])); ?></div></td>
  <td width="34"><div align="center"><? echo $sax3[Qty]; ?></div></td>
  </tr>
  <? $nocx3++; } ?>
  </table>
  </div>
 </div></td>
 </tr><? } ?>
 
    <?
   $nomer=$nomer+1;
  $kdodkddddodk5 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=4 AND apa_r=1");
while($hh2x5 = mysql_fetch_array($kdodkddddodk5)){
  $totSzx5 = $totSzx5 + $hh2x5[JmlHargaBeli];
$dud5++; }
 if($dud5>0){
?>
 <tr  onClick="wComparew3www_6b = window.open('x_sef_2.php?urr=4&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>', 
  'wComparew3www_6b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_6b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" bgcolor="#DDDDDD">
 <td><div align="center"><? $nomer= $nomer+1; 
 echo $nomer; ?></div></td>
 <td><div align="left">Racikan 4</div></td>
    <td><div align="center"><? echo $dud5; ?>
     </div></td>
	 <td colspan="2"><div align="right"><?
	 //
 	 $totSz2x5 = $totSzx5 +$hbgb[Racikan];
	 //
	  echo number_format($totSz2x5); ?></div></td>
 </tr>
   <tr>
 <td colspan="4" valign="top"><div align="left">
  <div align="left">
  <table width="304" border="0" cellpadding="1" cellspacing="1" class="style224">
  <?
 $nocx4=1;
   $kdodkddddodk_jhjhjx4 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=4 AND apa_r=1");
while($sax4 = mysql_fetch_array($kdodkddddodk_jhjhjx4)){
$paskyx4 = $nocx4%2;
if($paskyx4==1){
$warnax4='bgcolor="#FFCCFF"';
}else{
$warnax4=' bgcolor="#EAFFEF"';
}
?>
  <tr  <? echo $warnax4; ?>>
  <td width="34"><div align="right"><? echo $nocx4; ?></div></td>
  <td width="226"><div align="left"><? echo ucfirst(strtolower($sax4[NamaObat])); ?></div></td>
  <td width="34"><div align="center"><? echo $sax4[Qty]; ?></div></td>
  </tr>
  <? $nocx4++; } ?>
  </table>
  </div>
 </div></td>
 </tr>
 <? } ?>
 
     <?
   $nomer=$nomer+1;
  $kdodkddddodk6 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=5 AND apa_r=1");
while($hh2x6 = mysql_fetch_array($kdodkddddodk6)){
  $totSzx6 = $totSzx6 + $hh2x6[JmlHargaBeli];
$dud6++; }
 if($dud6>0){
?>
 <tr bgcolor="#DDDDDD"  onClick="wComparew3www_6b = window.open('x_sef_2.php?urr=5&NoResep=<? echo $NoResep; ?>&id=<? echo $id;?>', 
  'wComparew3www_6b', 'width=730,height=290,left=170,Top=112,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparew3www_6b.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 <td><div align="center"><? $nomer= $nomer+1; 
 echo $nomer; ?></div></td>
 <td><div align="left">Racikan 5</div></td>
    <td><div align="center"><? echo $dud6; ?> </div></td>
	 <td colspan="2"><div align="right"><?
	 //
 	 $totSz2x6 = $totSzx6 +$hbgb[Racikan];
	 //
	  echo number_format($totSz2x6); ?></div></td>
 </tr>
  <tr>
 <td colspan="4" valign="top"><div align="left">
  <div align="left">
  <table width="304" border="0" cellpadding="1" cellspacing="1"  class="style224"
  >
  <?
 $nocx5=1;
   $kdodkddddodk_jhjhjx5 = mysql_query("SELECT *  FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND stat=5 AND apa_r=1");
while($sax5 = mysql_fetch_array($kdodkddddodk_jhjhjx5)){
$paskyx5 = $nocx5%2;
if($paskyx5==1){
$warnax5='bgcolor="#FFCCFF"';
}else{
$warnax5=' bgcolor="#EAFFEF"';
}
?>
  <tr  <? echo $warnax5; ?>>
  <td width="34"><div align="right"><? echo $nocx5; ?></div></td>
  <td width="226"><div align="left"><? echo ucfirst(strtolower($sax5[NamaObat])); ?></div></td>
  <td width="34"><div align="center"><? echo $sax5[Qty]; ?></div></td>
  </tr>
  <? $nocx5++; } ?>
  </table>
  </div>
 </div></td>
 </tr> <? }
 $tot2 = $to+$totSz2+$totSz2x+$totSz2x4+$totSz2x5+$totSz2x6;
  ?><tr>
		  <td colspan="4" bgcolor="#6CB969"><div align="center">TOTAL</div></td>
		  <td bgcolor="#6CB969"><div align="right"><? echo number_format($tot2); ?></div></td>
  </tr>
		</table>
</body>
</html>
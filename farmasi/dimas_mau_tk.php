<?
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
include "../terbilang.php";
$awal = $awal-0;
$dara = $dara-0;
 if(!$no){
$no=1;
}else{
$no=$no;
}


if(!$dara){
$dara=8;
}else{
$dara=$dara;
}
if(!$awal){
$awal=0;
}else{
$awal=$awal;
}
 $KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
$ii = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD);
//
$KDJFKDJF_090kdjfkdjfdfkdfdKDs = mysql_query("SELECT * FROM polog77 WHERE id='$ii[IdPo]'");
$ii2 = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKDs);

if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP,....<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style15 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	font-weight: bold;
}
.style16 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style17 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style18 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style182 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style19 {font-size: 1px}
.style20 {font-family: Arial, Helvetica, sans-serif; font-size: 3px; }
.style22 {font-size: 7px}
.style24 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #999999; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCFFCC';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
 <div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
   onClick="location.href='dimas_mau_tk.php?no=<? echo $no+1; ?>&awal=<? echo $awal+8; ?>&id=<? echo $id; ?>';"  >
 <td width="817" colspan="3"><div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr valign="top">
 <td width="303"><div align="left">
 <table border="0" cellpadding="1" cellspacing="1">
 <tr class="style17">
 <td width="303"><div align="left"><?
 echo strtoupper($fkd[Nama]); 
  ?>
 .</div></td>
 </tr>
 <tr class="style24">
 <td><div align="left" ><?
   echo ($fkd[Npwp]); 
  ?>.</div></td>
   </tr>
 <tr class="style24">
 <td><div align="left" ><?
   echo ($fkd[Jalan]); 
  ?>.</div></td>
   </tr>
 <tr class="style24">
    <td><div align="left">Telp/Fax: <?
  echo $fkd[Telp];  echo ", "; 
echo $fkd[Fax];
  ?></div></td>
   </tr>
  </table>
 </div></td><td width="262"><div align="right">
 <table width="233" border="0" cellpadding="0" cellspacing="0">
 <tr>
 <td><span class="style15">Purchase Order</span></td>
 </tr>
 <tr>
 <td><hr></td>
 </tr>
 <tr>
 <td><span class="style16">Po No:<? echo $ii[NoPo]; ?></span></td>
 </tr>
 </table>
 </div></td>
 </tr>
 </table>
 </div></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="0" cellpadding="0" cellspacing="0">
   <tr    valign="top">
   <td width="288"><div align="left">
    <table border="1" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td width="282"><div align="left">
	<table border="0" onClick="wComparecdd_09_009_d = window.open('susu_kambing_liar.php?iin=bca&id=<? echo $id; ?>', 
  'wComparecdd_09_009_d', 'width=500,height=330,left=270,Top=86,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd_09_009_d.focus();" width="320"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" cellpadding="1" cellspacing="1" class="style182">
	<?
	$kjkfdjfd_Dfdfd998989 = mysql_query("SELECT * FROM apoteker WHERE id=1");
	$ga = mysql_fetch_array($kjkfdjfd_Dfdfd998989);
	?>
	<tr>
	<td><div align="left">
	  <?
	echo $ga[Satu];
	?>
	</div></td>
	</tr>
	<tr>
	 <td><div align="left"><?
	echo $ga[Dua];
	?></div></td> </tr>
	<tr>
	<td width="268">&nbsp;</td>
	</tr><tr>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td><span class="style22">.</span></td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  </tr>
	</table>
	</div></td>
	</tr>
	</table>
   </div></td>
 <td width="282"><div align="left">
	<table border="1" cellpadding="0" cellspacing="0">
	<tr valign="top">
<td><div align="left">
<table width="282" border="0" cellpadding="1" cellspacing="1" class="style182">
   <tr>
   <td width="289"><strong>Supplier</strong></td>
   </tr>
   <tr>
   <td><? 
   $kjdjkfdfd_Dfdfd = mysql_query("SELECT * FROM supplier WHERE id='$ii[IdSupplier]'");
   $yh = mysql_fetch_array($kjdjkfdfd_Dfdfd);
   echo ucfirst(strtolower($yh[NamaSuplier])); ?></td>
   </tr>
   <tr>
   <td>Attn: <?  echo ucfirst(strtolower($yh[CP])); ?></td>
   </tr>
   <tr>
   <td><?  echo ucfirst(strtolower($yh[Alamat]));  ?></td>
   </tr>
   <tr>
   <td>Telp:<?  echo  $yh[Telp];  ?></td>
   </tr>
   </table>
</div></td>
</tr>	 
	</table>
	</div></td>
   <td width="140"><div align="left">
   <table width="238" border="0" cellpadding="1" cellspacing="1" class="style182">
   <tr>
   <td width="43">No Spp</td>
   <td width="8">:</td>
   <td width="165"><div align="left"><?
   echo $ii2[NoPo];
   ?></div></td>
   </tr>
   <tr>
     <td>Tanggal</td>
     <td>:</td>
     <td><div align="left"><?
	 echo "$ii[Tgl] ";
	 $bln = $ii[Bln]; $thn1=$ii[Thn];
	 include "../bulan.php";
	 ?></div></td>
   </tr>
   <tr>
     <td>Hal</td>
     <td>:</td>
      <td><div align="left"><?
	    $kjdkjdfdfdfd_88_ddksjkd = mysql_query("SELECT COUNT(id) as ff FROM podetil77x WHERE   IdPox='$ii[id]'");
		$dapat = mysql_fetch_array($kjdkjdfdfdfd_88_ddksjkd);
 		$hal = $dapat[ff]/8;
		$hale = ceil($hal);
		echo "$no / "; echo $hale; 
	?></div></td>
   </tr>
   </table>
   </div></td>
   </tr>
   </table>
   </div></td>
 </tr>
 <tr>
 <td colspan="3"><span class="style19">.</span></td>
 </tr>
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table border="1" cellpadding="0" cellspacing="0">
   <tr valign="top">
   <td width="777" colspan="3">
   <div align="left">
   <table border="0" cellpadding="1" cellspacing="1" class="style182">
   <tr>
   <td     style="BORDER-RIGHT: #CCCCCC 1px solid"
    width="21"><div align="center">No</div></td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid"  width="308">Nama Barang</td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid" width="79">Merk</td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid" width="22">Qty</td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid" width="73">Satuan</td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid" width="64"><div align="right">HargaSatuan</div></td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid" width="71"><div align="right">Diskon</div></td>
   <td  style="BORDER-RIGHT: #CCCCCC 1px solid"  width="114"><div align="right">Jumlah</div></td>
   </tr>
  <tr>
  <td  style="BORDER-BOTTOM: #CCCCCC 1px solid" colspan="8"><span class="style19">.</span></td>
  </tr>
   <?
  $nomer=$awal+1;
  if($dimas>0){
    $kjdkjksjkd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$ii[id]' AND IdFaktur='$dimas' LIMIT $awal,$dara");
  }else{
    $kjdkjksjkd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$ii[id]' LIMIT $awal,$dara");
   }
  while($pp = mysql_fetch_array($kjdkjksjkd)){
  ?>
                <tr valign="top"  <? if($dik_dimas[delapanbelas]==1){ ?>onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd34343d = window.open('dimas_masih_batuk.php?id=<? echo $id; ?>&IdDetil=<? echo $pp[id]; ?>', 
  'wComparecdd34343d', 'width=580,height=400,left=70,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34343d.focus();" <? }else{   } ?>> 
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="center"><? echo $nomer; ?></div></td>
                 <td style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="left">
                      <?
  echo ucfirst(strtolower($pp[NamaBarang]));
  ?>
                    </div></td>
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="left"> 
                      <?
  $jjs_Dfd = mysql_query("SELECT  NamaMerk  FROM dataobat WHERE id='$pp[IdBarang]'");
	$hv= mysql_fetch_array($jjs_Dfd);
if($hv[NamaMerk]!="0"){
	echo $hv[NamaMerk];
}else{
echo ".";
}
  ?>
                    </div></td>
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="center"><? echo number_format($pp[Qty]); ?></div></td>
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="left"><? echo ucfirst(strtolower($pp[NamaSatuan])); ?></div></td>
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="center"> 
                      <?
	$Harga=$pp[Pengali]*$pp[Harga];
  echo  number_format($pp[Harga]);
  ?>
                    </div></td>
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid" ><div align="center">
                      <? 
     if($pp[PotRp]>0){
  
	$hass = ($pp[Harga]-($pp[Harga]-$pp[PotRp]))/$pp[Harga]*100;
 	 echo number_format($hass/$pp[Qty]/$pp[Pengali]);   echo "%"; 
	 }elseif($pp[PotPrc]>0){
	echo number_format($pp[PotPrc]); echo "%";
	}else{
	echo ".";
	}  ?>
                    </div></td>
                  <td><div align="right">
                      <?
 	 if($pp[PotRp]>0){
		$Disko =$pp[PotRp]; 
  	 }elseif($pp[PotPrc]>0){
		$Disko = $pp[Total]*$pp[PotPrc]/100;
 		}else{
		$Disko =0;  
		}
 		 
		$Diskon2 = $pp[Total]-$Disko;
		 echo number_format($Diskon2);  
		//$tot = $tot+$Diskon2;
	 
		$Diskon2=0;
		$Diskon=0;
     ?>
                    </div></td>
                </tr>
                <?
  $nomer++; } ?>
               </table>
  </div></td>
</tr>
   </table>
</div>   </td>
   </tr>
   <tr>
   <td colspan="3" class="style20">.</td>
   </tr>
 <?
 if($no==$hale){
 ?> 
 <tr valign="top">
   <td colspan="3"><div align="left">
   <table width="779"  border="0" cellpadding="0" cellspacing="0">
   <tr valign="top">
			     <td width="642"><div align="left">
				 <table width="629" border="0" cellpadding="0" cellspacing="1">
				 <tr>
				 <td width="318" class="style16"><a href="#" style="text-decoration:none"
				  onClick="wComparecdd_sss_0_09_009_d = window.open('harsono_bapak_ku.php?iin=bca&id=<? echo $id; ?>', 
  'wComparecdd_sss_0_09_009_d', 'width=300,height=220,left=270,Top=186,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd_sss_0_09_009_d.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Cara Pembayaran :</a>  <? 
	if($ii[Stap]==0){
	echo "Cash";
	}elseif($ii[Stap]==1){
	echo "Hutang";
	}else{
	echo "?";
	} ?></td>
				 <td width="305"><div align="right" class="style16">ESTIMASI BIAYA </div></td>
				 </tr>
				 </table>
				 </div></td><td width="137"   colspan="2">
			         <div align="right">
					 <table border="1" cellpadding="0" cellspacing="0">
					 <tr valign="top">
					 <td><div align="left">
					 <table width="134" border="0" cellpadding="1" cellspacing="1" class="style182">
			             <tr valign="top"> 
			               <td ><div align="left">Total</div></td>
						   <td width="10"><strong>:</strong></td>
						   <?
						    if($dimas>0){
    $kjdkjksjkddddddsdsdsd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$ii[id]' AND IdFaktur='$dimas'  ");
  }else{
    $kjdkjksjkddddddsdsdsd = mysql_query("SELECT * FROM podetil77x WHERE   IdPox='$ii[id]'  ");
  }
  while($pp2 = mysql_fetch_array($kjdkjksjkddddddsdsdsd)){
   if($pp2[PotRp]>0){
		$DiskoX =$pp2[PotRp]; 
  	 }elseif($pp2[PotPrc]>0){
		$Disko = $pp2[Total]*$pp2[PotPrc]/100;
 		}else{
		$Disko =0;  
		}
 		 
		$Diskon2 = $pp2[Total]-$Disko;
	//	 echo number_format($Diskon2);  
		$tot = $tot+$Diskon2;
	 
		$Diskon2=0;
		$Diskon=0;
  }
						   ?>
                        <td width="54"><div align="right"><? echo number_format($tot); ?></div></td>
                      </tr>  <?
 if($ii[Ppn]==1){ 
  ?>
			             <tr valign="top"> 
			               <td ><div align="left">Ppn(10%)</div></td>
						   		   <td><strong>:</strong></td>
                        <td><div align="right">
                          <?
	 $Ppn = $tot*10/100;
	 echo number_format($Ppn);  
	 ?>
                          </div></td>
                      </tr>
					  
					  <tr>
					  <td >Tot+Ppn</td>
					  <td><strong>:</strong></td><td>
					    <div align="right">
					      <?
					  $TotPpn = $tot+$Ppn; 
					  echo number_format($TotPpn); 
					  ?>
					        </div></td>
					  </tr>
			             <?  } ?>
	                   </table>
              </div></td></tr>  
          </table>
					 </div></td>
					 </tr>
   <tr valign="top" class="style182">
     <td colspan="3"><div align="right">Terbilang : <i><?
if($ii[Ppn]==1){
 $kalimat =terbilang($TotPpn);
}else{	
 $kalimat =terbilang($tot);
	 }
	 echo ucfirst(strtolower($kalimat));
	 ?></i></div></td>
     </tr>
   <tr valign="top" class="style182">
     <td colspan="3"><div align="left">
	 <table border="0">
	 <tr valign="top">
	 <td width="774" colspan="3">
	 
	   <div align="left">
	     <table width="776" border="0" cellpadding="0" cellspacing="0">
	       <tr valign="top">
	         <td width="305">
			 <div align="left">
			 <table width="282" height="101" border="0" cellpadding="1" cellspacing="1" class="style182">
   <tr>
   <td width="289"><strong>Alamat Kirim </strong></td>
   </tr>
   <tr>
   <td><?
   echo ($fkd[Jalan]); 
   ?></td>
   </tr>
   <tr>
   <td><?
   echo ($fkd[Telp]); 
   ?></td>
   </tr>
   <tr>
 <td>Bag:Logistik</td>
   </tr>
   <tr>
   <td>&nbsp; </td>
   </tr>
   </table>
			 </div>
			 </td>
	      <td width="452" ><div align="right">
	        <table width="410" border="1" cellpadding="0" cellspacing="0" class="style182">
	          <tr><?
			  $kjdkjskdsd_dsdl =  mysql_query("SELECT * FROM pejabat_nya WHERE id=1");
			  $upa = mysql_fetch_array($kjdkjskdsd_dsdl);
			  ?>
	            <td><div align="center">Dipesan Oleh </div></td>
	     <td colspan="2"><div align="center">Disetujui Oleh </div></td>
	     <td><div align="center">Diterima Oleh </div></td>
	     </tr>
	          <tr>
	            <td height="41">&nbsp;</td>
	       <td>&nbsp;</td>
	       <td>&nbsp;</td>
	       <td>&nbsp;</td>
	       </tr>
	          <tr>
	            <td><div align="center"><? echo $upa[NamaSatu]; ?></div></td>
	        <td><div align="center"><? echo $upa[NamaDua]; ?></div></td>
	        <td><div align="center"><? echo $upa[NamaTiga]; ?></div></td>
	       <td><div align="left"></div></td>
	       </tr>
	          <tr>
	            <td><div align="center"><? echo $upa[JabatSatu]; ?></div></td>
	            <td><div align="center"><? echo $upa[JabatDua]; ?></div></td>
	            <td><div align="center"><? echo $upa[JabatTiga]; ?></div></td>
	       <td>
	         <div align="left">
	           <?
	    echo ucfirst(strtolower($yh[NamaSuplier]));
	   ?>
	           </div></td>
	       </tr>
	          </table>
	      </div></td>
	      </tr>
	        </table>
	     </div></td>
	 </tr>
	 </table>
	 </div></td>
   </tr>
		  </table>
					 
			            
			  </div>			  </td>
    </tr>
   </table>
   </div></td>
 </tr>
   </table>
</div></td>
 </tr>
 <? } ?>
 </table>
 </div>
</body>
</html>
<? 
}
?>
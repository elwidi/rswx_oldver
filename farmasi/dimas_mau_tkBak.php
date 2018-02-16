<?
session_start();
include "../konek.php";
include "../ceke.php";
include "../alamat.php";
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style5{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px; color:#999999
 }

.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#000000
 }
.style14 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px; color:#000000
 }
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
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr >
<td width="719" colspan="3" valign="top">
<div align="left">
<table width="677" border="0" cellpadding="2" cellspacing="2">
<tr >
 <td width="379" valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style5">
<td width="371"><div align="left"><?
echo strtoupper($fkd[Nama]); 
?></div></td>
</tr>
<tr>
<td class="style4">Npwp : 01.593.103.3.432.000</td>
</tr>
<tr class="style4">
  <td><div align="left"><?
   echo ($fkd[Jalan]); 
  ?></div></td>
</tr>
<tr class="style4">
  <td><div align="left">Telp/Fax: <?
  echo $fkd[Telp];  echo ", "; 
echo $fkd[Fax];
  ?></div></td>
</tr>
</table>
</div></td><td width="346" valign="top">
  <div align="left">
    <table width="246" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="238"><span class="style1">SURAT PESANAN</span></td>
    </tr>
      <tr class="style2">
        <td>(Purchase Order)</td>
    </tr>
      <tr class="style2">
        <td><div align="left"><?
  echo $ii[NoPo];
  ?></div></td>
    </tr><?
	$kdjfkdjfkd = mysql_query("SELECT NoFaktur,id FROM fakturpo WHERE id='$dimas'");
	$ika = mysql_fetch_array($kdjfkdjfkd);
	if($ika[id]){
	?>
	<tr class="style2">
	 <td><div align="left"><?
	echo $ika[NoFaktur];
	?></div></td>
	</tr><?
	}
	?>
    </table>
  </div></td> 
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
  <td width="594" colspan="3"><div align="left">
                      <table width="647" border="1" cellpadding="0" cellspacing="0">
                        <tr valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
   onClick="location.href='dimas_mau_tk.php?no=<? echo $no+1; ?>&awal=<? echo $awal+8; ?>&id=<? echo $id; ?>';" >
  <td width="302"><div align="left">
                              <table width="351" border="0" cellpadding="2" cellspacing="2" class="style4">
                                <tr>
  <td width="69">Apoteker</td>
  <td width="5">:</td>
  <td width="166"><div align="left">
  Nova Rozayana S.Si.Apt
  </div></td>
  </tr>
  <tr>
  <td>No Sp</td><td>:</td><td><div align="left"><?
  echo $ii2[NoPo];
  ?></div></td>
  </tr>
    <tr>
  <td>No Po</td><td>:</td><td><div align="left"><?
  echo $ii[NoPo];
  ?></div></td>
  </tr>
  </table>
  </div></td><td width="288"><div align="right">
                              <table width="348" class="style4" border="0" cellpadding="2" cellspacing="2">
                                <tr valign="top">
  <td width="65">Kepada</td>
  <td width="8">:</td>
  <td width="302"><div align="left"><?
  echo $ii[NamaSupplier]; 
  $kidkdidk = mysql_query("SELECT Alamat FROM supplier WHERE id='$ii[IdSupplier]'");
  $yy = mysql_fetch_array($kidkdidk);
   ?></div></td>
  </tr>
  <tr valign="top">
    <td>Alamat</td>
    <td>:</td>
    <td><div align="left"><?
	  echo $yy[Alamat]; 

	?></div></td>
  </tr>
  <tr valign="top">
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
  </table>
  </div></td>
  </tr>
<tr valign="top">
  <td colspan="3"><div align="left">
              <table border="1" cellpadding="0" cellspacing="0">
			  <tr>
			  <td width="705" valign="top">
			  <div align="left">
			  <table width="705" border="0" cellpadding="1" cellspacing="1" class="style4">
                <tr> 
                  <td width="21" bgcolor="#ECE9D8"><div align="center"><strong>No</strong></div></td>
                  <td width="263" bgcolor="#ECE9D8"><div align="left"><strong>Nama 
                    Barang</strong></div></td>
                  <td width="77" bgcolor="#ECE9D8"><div align="left"><strong>Merk</strong></div></td>
                  <td width="35" bgcolor="#ECE9D8"><div align="center"><strong>Vol</strong></div></td>
                  <td width="78" bgcolor="#ECE9D8"><div align="left"><strong>Satuan</strong></div></td>
                  <td width="84" bgcolor="#ECE9D8" ><div align="center"><strong>Harga 
                      satuan <br>
                      </strong></div></td>
                  <td width="39" bgcolor="#ECE9D8"><div align="center"><strong>Diskon</strong></div></td>
                  <td width="83" bgcolor="#ECE9D8"><div align="right"><strong>Total</strong></div></td>
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
                  <td  style="BORDER-RIGHT: #CCCCCC 1px solid"><div align="center"><? echo $nomer; ?></div></td>
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
		$tot = $tot+$Diskon2;
	 
		$Diskon2=0;
		$Diskon=0;
     ?>
                    </div></td>
                </tr>
                <?
  $nomer++; } ?>
               <tr valign="top">
			     <td colspan="8">
			         <div align="right">
			           <table border="0" cellpadding="1" cellspacing="1" class="style4">
			             <tr valign="top"> 
			               <td colspan="7"><div align="right">Total</div></td>
						   <td width="8"><strong>:</strong></td>
                        <td width="74"><div align="right"><? echo number_format($tot); ?></div></td>
                      </tr>  <?
 if($ii[Ppn]==1){ 
  ?>
			             <tr valign="top"> 
			               <td colspan="7"><div align="right">Ppn(10%)</div></td>
						   		   <td><strong>:</strong></td>
                        <td><div align="right">
                          <?
	 $Ppn = $tot*10/100;
	 echo number_format($Ppn);  
	 ?>
                          </div></td>
                      </tr>
			             <?  } ?>
			             
			             <?
 if($ii[Ppn]==1){ 
  ?>
			             <tr valign="top"> 
			               <td colspan="7"><div align="right">Total+Ppn</div></td>
						   		   <td><strong>:</strong></td>
                        <td><div align="right">
                          <?
	 $TotPpn = $tot+$Ppn;
	 echo number_format($TotPpn); 
	 ?>
                          </div></td>
                      </tr>
			               </table>
			           </div></td></tr>  <? } ?>
              </table>
			  </div>
			  </td>
			  </tr>
			  </table>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
              <table width="731" border="0" cellpadding="1" cellspacing="1" class="style4">
                <tr valign="top">
  <td width="585" colspan="3"><div align="left">
  <u><b>Syarat-Syarat</b></u>
  </div></td>
  </tr>
  <tr valign="top">
    <td colspan="3"><div align="left">
	                  <table width="405" border="0" cellpadding="1" cellspacing="1" class="style14">
                        <tr> 
                          <td width="16">1</td>
                          <td><div align="left"> Kondisi Barang Expired Date &lt; 
                              1 Thn Tidak Akan diterima </div></td>
                        </tr>
                        <tr> 
                          <td>2</td>
                          <td>Barang Rusak dalam Proses pengantaran Tidak Akan 
                            diterima </td>
                        </tr>
                        <tr> 
                          <td>3</td>
                          <td>Faktur Penjualan yang diterima rangkap 3, memakai 
                            stempel </td>
                        </tr>
                        <tr> 
                          <td>4</td>
                          <td>Kondisi Diskon sesuai perjanjian pada waktu kontrak 
                          </td>
                        </tr>
                      </table>
	</div></td>
  </tr>
  <tr valign="top">
    <td colspan="3"><div align="left">
	                  <table width="703" border="1" cellpadding="0" cellspacing="0">
                        <tr valign="top">
	<td width="200"><div align="left">
	<table border="0" cellpadding="1" cellspacing="1" class="style14">
	<tr>
	<td width="152"><div align="center">Dibuat</div></td>
	</tr>
	<tr>
	  <td height="36">&nbsp;</td>
	  </tr>
	<tr>
	  <td><div align="center">( Dewi Puspitasari)</div></td>
	  </tr>
	</table>
	</div></td><td width="283"><div align="center"><table width="162" border="0" cellpadding="1" cellspacing="1" class="style14">
	<tr>
	<td width="140"><div align="center">Verifikasi</div></td>
	</tr>
	<tr>
	  <td height="36">&nbsp;</td>
	  </tr>
	<tr>
	  <td><div align="center">( Nova Rozayana S.Si.Apt)</div></td>
	  </tr>
	</table></div></td>
	<td width="212"><div align="right">
	  <table width="164" border="0" cellpadding="1" cellspacing="1" class="style14">
	    <tr>
	      <td><div align="center">Di Setujui </div></td>
	    </tr>
	    <tr>
	      <td height="36">&nbsp;</td>
	      </tr>
	    <tr>
	      <td><div align="center">( Dwi Mitasari SE, MBA)</div></td>
	      </tr>
	    </table>
	  </div></td>
	
	 
  </tr>
  </table>
  </div></td>
  
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>
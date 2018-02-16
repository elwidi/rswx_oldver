<?
session_start();
 include "../konek.php";
include "../ceke.php";
 $jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
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
	</script><script language="JavaScript">
 	function formatAngka(objek, separator) {
 	  a = objek.value;
 	  b = a.replace(/[^\d]/g,"");
 	  c = "";
   panjang = b.length;
 	  j = 0;
   for (i = panjang; i > 0; i--) {
     j = j + 1;
     if (((j % 3) == 1) && (j != 1)) {
       c = b.substr(i-1,1) + separator + c;
     } else {
 	      c = b.substr(i-1,1) + c;
     }
 	  }
 	  objek.value = c;
 }
 </script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style6 {color: #FFFFFF}

-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("10_i.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>&fito=<? echo $fito; ?>", "wCompare", "width=580,height=440,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; </script>
</head>
<body alink="#333333" vlink="#333333" link="#333333" <? if($iin=='slk'){ ?> onLoad="toCompare()"<? }?>>
<div align="left">
<?
if($nugi>0 && $bb[id]){
?>
<form action="8uuu.php">
<? 
}elseif($nugi>0 && !$bb[id]){
?>
<form action="jbv.php">
<? 
}else{
?>
 <form target="_self">
 <? }?>
 <table width="454" border="0" cellpadding="2" cellspacing="2" >
 
<tr>
  <td colspan="2" valign="top">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style1" width="423">
   <tr>
    <td width="415" colspan="3" valign="top" bgcolor="#FFFFFF"> 
	<div align="left">
	<?
	if($dimas==3){
	?>
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<?
	if($bb[id]){
	?>
	<tr bgcolor="#003366" class="style6">
	<td colspan="3"><div align="left">
	PROSES PEMBAYARAN ODC
	</div></td>
	</tr>
	<? 
	}else{
	?>
	<?
	if($nugi>0){ }else{
	?>
	<tr>
	<td height="24" colspan="3" bgcolor="#000000"><div align="left" class="style6">
	PROSES PEMBAYARAN
	</div></td>
	</tr>
	<? } ?>
	<? } ?>
	<?
	if($nugi>0){
	?>
	<tr>
	<td colspan="3" bgcolor="#000000"><div align="left" class="style6"><strong>
	<?
		$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$nugi'");
	$jop= mysql_fetch_array($kj_kdjf);
	echo strtoupper($jop[NamaBank]); 
	?>
	.</strong></div></td>
	</tr>
	<tr class="style1">
	<td colspan="3" bgcolor="#990000">.</td>
	</tr>
	<? 
	}
	?>
	<tr>
	<td>TYPE BAYAR</td><td>:</td><td><div align="left">
	 <?
	 include "type_bayar.php";
	 ?>
	 <input type="hidden" name="nugi" value="<? echo $nugi; ?>">
	<input type="hidden" name="id" value="<? echo $id; ?>">
	</div></td>
	</tr>
	<tr>
	<td colspan="3" bgcolor="#D4D0C8">TOTAL TXN : <? 
 
 	$rep = $totale;
	//echo "jj $rep<br>";
	if($bb[id]>0){
	$jdjdj_Ff = mysql_query("SELECT SUM(Tunai) AS jj FROM penerimaandp2 WHERE MstKey='$hh[RegId]'");
	$np = mysql_fetch_array($jdjdj_Ff);
//
	$jdjdj_Ff2 = mysql_query("SELECT SUM(Db) AS jj FROM penerimaandp2 WHERE MstKey='$hh[RegId]'");
	$np2 = mysql_fetch_array($jdjdj_Ff2);

//
	$jdjdj_Ff3 = mysql_query("SELECT SUM(Kk) AS jj FROM penerimaandp2 WHERE MstKey='$hh[RegId]'");
	$np3 = mysql_fetch_array($jdjdj_Ff3);
//
	$jdjdj_Ff4 = mysql_query("SELECT SUM(Jam) AS jj FROM penerimaandp2 WHERE MstKey='$hh[RegId]'");
	$np4 = mysql_fetch_array($jdjdj_Ff4);

//
$Tela=$np[jj]+$np2[jj]+$np3[jj]+$np4[jj];
$rep=$totale-$Tela;
$totale=$totale-$Tela;

 	}else{
$rep=$rep;
	}	$pir =  ceil($rep);
	?>
	  <input type="hidden" name="toto" value="<? echo $rep; ?>">
	  <? 
	  $totaldd =strlen($pir)-3;
 $total2 = (substr($pir,$totaldd,3))-0;
// echo "$total2<br>";
 if($total2>500){
 $susu=1000-$total2;
  }elseif($total2<500){
 $susu =500-$total2;
 }	// echo "has $susu<br>";
	
	 if($pilih==1){
	 $totale =$rep+$susu;
	 }else{
	 $totale =$totale;
	 } 
	 //
	 if($nugi==12 || $nugi==19){
	  $Db=ceil($totale);
	  $jajan=ceil($totale);
	 }elseif($nugi==15 || $nugi==14 || $nugi==21 || $nugi==20 || $nugi==17){
	  $Db=ceil($totale);
	  $Kk=ceil($totale);
	}elseif($nugi==11 || $nugi==13 || $nugi==18){
	  $Db=ceil($totale);
	  $Jam = ceil($totale);
	 }elseif($nugi==8 || $nugi==9 ||  $nugi==10 || $nugi==16){
	  $Db=ceil($totale);
	   $jajan = ceil($totale);
	  }elseif($nugi==6){
	 $Jam= ceil($totale);
	 }elseif($nugi==1 || $nugi==2 ||  $nugi==3 || $nugi==9  || $nugi==10  || $nugi==16  || $nugi==28){
	 $Db=ceil($totale);
	 }elseif($nugi==4 ){
	 $jajan = ceil($totale);
	 }elseif($nugi==5 || $nugi==7  || $nugi==27  || $nugi==29 ){
	 $Kk = ceil($totale);
	 }elseif($nugi==25 || $nugi==23 ){
	  $Kk = ceil($totale);
	  $Jam = ceil($totale);
	  }elseif($nugi==24 || $nugi==22){
	  $Kk = ceil($totale);
	   $jajan = ceil($totale);
	   }elseif($nugi==26){
	   $jajan=ceil($totale);
	   	  $Jam = ceil($totale);
	 }else{
	 $jajan=0;
	 }
	 //
	 if($tb==2){
	 $cas = ($totale*2.5/100);
	 }elseif($tb==3){
	 $cas = ($totale*3/100);
	 }
	/////////////////////////////////////////////
	$kkddfD_dfd = mysql_query("SELECT Sum(NonJam) AS jj FROM pecah_kwt WHERE IdPasien='$id'");
	$ha = mysql_fetch_array($kkddfD_dfd);
	//
	$kkddfD_dfd2 = mysql_query("SELECT Sum(Jam) AS jj FROM pecah_kwt WHERE IdPasien='$id'");
	$ha2 = mysql_fetch_array($kkddfD_dfd2);
 	if($ha[jj]>0){
	$totale=$ha[jj];
 	}else{
	$totale=$totale;
	}
	if($ha2[jj]>0){
	$Jaminan=$ha2[jj];
 	}else{
	$Jaminan=$totale;
	}echo number_format(ceil($rep));
	?></td>
	</tr>
	<?
	if($nugi>0){
	?>
	<tr>
	<td>PEMBAYAR</td><td>:</td><td><div align="left">
	<input name="Pembayar" type="text" class="style3" value="<? echo strtoupper($hh[NamaPasien]); ?>" size="30" maxlength="100">
	 <input type="hidden" name="sumbe3r" value="<? echo ceil($totale); ?>">
	</div></td>
	</tr>
	<tr>
	<td>NOMER KARTU</td><td>:</td><td><div align="left">
	<input name="NoKartu" type="text" class="style3" size="30" maxlength="60">
	</div></td>
	</tr>
<?
if($dimas==3 && $nugi==11){ }elseif($dimas==3 && $nugi==6){}elseif($dimas==3 && $nugi==28){ }elseif($dimas==3 && $nugi==1){ }elseif($dimas==3 && $nugi==25){
}elseif($dimas==3 && $nugi==30){ }elseif($dimas==3 && $nugi==29){}elseif($dimas==3 && $nugi==5){}elseif($dimas==3 && $nugi==31){}else{
?>	 
	<tr>
	<td width="89"> TUNAI</td>
	<td width="3">:</td>
	<td width="180"><div align="left">
	<?
	 
	?>
	<input type="hidden" name="totale" value="<? echo $totale; ?>">
	<input name="Tunai" type="text" class="style3" size="12" maxlength="12" value="<? echo ceil($totale); ?>" style="text-align: right;" onKeyUp="formatAngka(this, '.')"> 
	<input type="hidden" name="id" value="<? echo $hh[id]; ?>">
	<input type="hidden" name="nugi" value="<? echo $nugi; ?>">
	</div></td>
	</tr>
	<? } ?>
	<?
if($dimas==3 && $nugi==11){}elseif($dimas==3 && $nugi==4){}elseif($dimas==3 && $nugi==6){}elseif($dimas==3 && $nugi==28){ }elseif($dimas==3 && $nugi==1){ }elseif($dimas==3 && $nugi==8){}elseif($dimas==3 && $nugi==31){}elseif($dimas==3 && $nugi==26){}else{
?>	<tr>
	  <td>KARTU KREDIT</td>
	  <td>:</td>
	  <td><input name="Kk" type="text" class="style3" id="Kk" size="12" maxlength="12" style="text-align: right;" onKeyUp="formatAngka(this, '.')"  value="<? echo ceil($totale); ?>" ></td>
	  </tr>
	  <? } 
	   if($dimas==3 && $nugi==25){ }elseif($dimas==3 && $nugi==4){}elseif($dimas==3 && $nugi==29){}elseif($dimas==3 && $nugi==5){}elseif($dimas==3 && $nugi==6){}elseif($dimas==3 && $nugi==26){}elseif($dimas==3 && $nugi==30){ }elseif($dimas==3 && $nugi==24){ }else{?>
	<tr>
	  <td>DEBET</td>
	  <td>:</td>
	  <td><input name="Db" type="text" class="style3" id="Db" size="12" maxlength="12"style="text-align: right;" onKeyUp="formatAngka(this, '.')"  value="<? echo ceil($totale); ?>"></td>
	  </tr>
	  <?  } ?>
	 <? if($dimas==3 && $nugi==8){ }elseif($dimas==3 && $nugi==4){}elseif($dimas==3 && $nugi==29){}elseif($dimas==3 && $nugi==5){}elseif($dimas==3 && $nugi==24){ }elseif($dimas==3 && $nugi==28){
	 }elseif($dimas==3 && $nugi==31){ }elseif($dimas==3 && $nugi==1){}else{ ?> <tr>
	  <td>JAMINAN</td><td>:</td><td><div align="left">
	  <?
	  $poksa = explode(":",$Jam);
	  if($poksa[1]>0){
	  $Jam=0;
	  }else{
	  $Jam=$Jam;
	  }
	  ?>
	  <input name="Jam2" type="text" class="style1" size="12" maxlength="12" style="text-align: right;" onKeyUp="formatAngka(this, '.')" value="<? echo ceil($Jaminan); ?>">
	  <?
	  $dlfldfdl = mysql_query("SELECT SUM(JumlahHarga) AS hh FROM txnjalan WHERE RegId='$hh[RegId]'");
	  $ye = mysql_fetch_array($dlfldfdl);
	  $dlfldfdl2 = mysql_query("SELECT SUM(Total) AS hh FROM txnjalan2 WHERE RegId='$hh[RegId]'");
	  $ye2 = mysql_fetch_array($dlfldfdl2);
	  ?>
	  <input type="hidden" name="kaki" value="<? echo $ye[hh]; ?>">
	  <input type="hidden" name="TxnJalan" value="<? echo $ye2[hh]; ?>">
	  </div></td>
	  </tr>
	  <? } ?>
	  <? } //end off nugi ?>
	  <tr valign="top">
	  <td>Keterangan</td>
	  <td>:</td>
	  <td><div align="left">
	  <textarea rows="4" cols="30" name="Keterangan">Pembayaran Atas Pemeriksaan Pasien No Rm : <? echo $hh[NoPasien];  ?>
	   An : <? echo ucfirst(strtolower($hh[NamaPasien])); ?></textarea>
	  </div></td>
	  </tr>
	  <?
	  if($tb==3 || $tb==2){
	  ?>
	  <tr>
	  <td bgcolor="#FFCCCC">CHARGE TAMBAHAN</td>
	  <td bgcolor="#FFCCCC">:</td>
	  <td bgcolor="#FFCCCC"><div align="left"><? echo number_format($cas); ?>
	  <input type="hidden" name="cas" value="<? echo $cas; ?>"></div></td>
	  </tr>
	  <? 
	  }
	  ?>
	  <tr>
	  <td colspan="3"><div align="left">
	<?
if($pilih==1){
?>  
<input type="radio" value="1" name="Bulat" checked="checked" onClick="location.href='uij_k.php?totale=<? echo $totale; ?>&pilih=1&id=<? echo $id; ?>&dimas=<? echo $dimas; ?>&nugi=<? echo $nugi; ?>';"> Bulatkan
<? }else{ ?>
<input type="radio" value="1" name="Bulat"   onClick="location.href='uij_k.php?totale=<? echo $totale; ?>&pilih=1&id=<? echo $id; ?>&dimas=<? echo $dimas; ?>&nugi=<? echo $nugi; ?>';"> Bulatkan
<? } ?>
<?
if($pilih==2){
?>
 <input type="radio" name="Bulat" value="0" checked="checked" onClick="location.href='uij_k.php?totale=<? echo $totale; ?>&pilih=2&id=<? echo $id; ?>&dimas=<? echo $dimas; ?>&nugi=<? echo $nugi; ?>';"> Normal
<? 
}else{
?>	
  <input type="radio" name="Bulat" value="0"  onClick="location.href='uij_k.php?totale=<? echo $rep; ?>&pilih=2&id=<? echo $id; ?>&dimas=<? echo $dimas; ?>&nugi=<? echo $nugi; ?>';"> 
  Normal
<? } ?>
 		<?
	  if($bb[id]){
	  ?>
	  || 
	  <input type="radio" name="JenisDp" value="0" checked="checked"> 
	  Dp || 
	  	  <input type="radio" name="JenisDp" value="1"> 
	  	  Pulang 
	  <? 
	  }else{} 
	  ?>   
	   </div></td>
	  </tr>
	<?
	if($dimas==3 && $nugi==5 || $dimas==3 && $nugi==24 ||  $dimas==3 && $nugi==29
	||  $dimas==3 && $nugi==30 ||  $dimas==3 && $nugi==25 ){
	?>    <tr>
	  <td colspan="3"><div align="left">
	  <input type="radio" value="1" name="crg" checked="checked">+3%
	   || 
	   	  <input type="radio" value="0" name="crg" >-3%
	  </div></td>
	  </tr> 
	  <? } ?>
<?
	if($bb[id]){
	?>
	<tr bgcolor="#003366" class="style6">
	<? }else{
	?>
		<tr bgcolor="#000000" class="style6">
	<? } ?>	  <td colspan="3" >
	  <div align="left">
	  <input name="fgf" type="submit" class="style1" value="Simpan">
	  <input type="button" name="ffg" class="style3" onClick="window.close()" value="Tutup">
	  </div>
	  </td>
	  </tr>
	</table>
	<? 
	}else{
	?>
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
	<?
	
	if($dad[id]){
if($fito>0){
?>
<tr >
<? 
}else{?>
<tr>
<? } ?>
<td bgcolor="#DBFFFF">NAMA BIAYA</td>
<td bgcolor="#DBFFFF">:</td>
<td bgcolor="#DBFFFF"><div align="left"><? echo strtoupper($dad[NamaBiaya]); ?> 

<?
if($fito>0){

}else{
?><input type="hidden" name="iin" value="slk">
<? } ?>
	<input type="hidden" name="id" value="<? echo $id;?>">
	<input type="hidden" name="fito" value="<? echo $fito; ?>">
	<input type="hidden" name="ban" value="serep">
	</div></td>
</tr>
<?
if($fito>0){
?>
<tr>
<? 
}else{?>
<tr>
<? } ?>
<td>HARGA</td><td>:</td><td><div align="left"><? 

 $ksjkdsds090j = mysql_query("SELECT IdObat FROM PaketObat WHERE IdBiaya='$dad[id]'");
while($cp = mysql_fetch_array($ksjkdsds090j)){
//echo "$cp[IdObat]<br>";
 $jujh909 = mysql_query("SELECT  HargaBeli FROM dataobat WHERE id='$cp[IdObat]'");
$vo = mysql_fetch_array($jujh909);
$uisernerk = $uisernerk + $vo[HargaBeli];
} 
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16 || $a[KodeBagian]==29){
$dadal = $dad[Total];
}else{
$dadal = $dad[Total];
}
echo number_format($dadal,2); ?></div></td>
</tr>
<?
if($fito>0){
?>
<tr>
<? 
}else{?>
<tr>
<? } ?>
<td>QTY</td><td>:</td><td><div align="left"><input name="Qty" type="text" class="style1" value="1" size="3" maxlength="3">
</div></td>
</tr>
  
<? 	
	}else{
	?><tr>
	<td width="123">NAMA BIAYA</td>
	<td width="3">:</td>
	<td width="216"><div align="left"><input name="NamaBiaya" type="text" class="style1" size="20" maxlength="20">
	<?
	if($fito>0){}else{
	?><input type="hidden" name="iin" value="slk"> 
	<? } ?>
	<input type="hidden" name="id" value="<? echo $id;?>">
	<input type="hidden" name="fito" value="<? echo $fito; ?>">
	</div></td>
	</tr>
	<? } ?>
	<tr>
	  <td colspan="3"><div align="left">
	 
	  <?
	  if($fito>0){
	  ?><input name="fgf" type="submit" class="style3" value="Simpan"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? }else{ ?>
	   <input name="fgf" type="submit" class="style3" value="Cari"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? } ?>
	   <?
	   if($fito>0){
	   ?>
	   <input type="button" name="fg" value="Reset" onClick="location.href='uij_k.php?id=<? echo $id; ?>';" class="style3">
	   <? 
	   }
	   ?>
	   <?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{
	  ?> <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    type="button" name="df" value="Reset" onClick="location.href='uij_k.php?id=<? echo $id; ?>';" class="style3">
	  <input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    name="df" type="button" class="style3" onClick="location.href='../apotik/wahit.php?id=<? echo $id; ?>';" value="Inpt Obat">
	  <? } ?>	  <?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){ ?>
	  <!-- <input type="button" name="fgfggf" value="Input Hasil Pemeriksaan" class="style3"  onClick="wCompare = window.open('../radiologi/er_945.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   > -->
	  <? } ?>
	   <input name="df" type="button" class="style3" onClick="location.href='../daftar/r.php?id=<? echo $id; ?>';" value="Kembali"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >

	  </div></td> 
	<?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{
	?>  </tr>
	  <tr>
	  <td colspan="3" bgcolor="#7AE57A"><div align="left">
	    <input name="fgg45" type="button" class="style3" onClick="location.href='ek.php?id=<? echo $id; ?>';" value="Cek List Data Pasien Rawat Jalan"
		 onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  </div></td>
	  </tr>
	  <? } ?>
	  <?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{
	  ?>
	  <tr>
	    <td colspan="3" bgcolor="#99FF66">
	        <div align="left">
			<input name="dffd" type="button" class="style3"  onClick="wCompare = window.open('uij_k.php?id=<? echo $id; ?>&dimas=3', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Tampil Cetak Kwitansi">
	          <!-- <input name="fgfg" type="button" class="style3" onClick="location.href='u.php?id=<? //echo $id; ?>&dimas=3';" value="TAMPIL CETAK KWITANSI">
			  -->
	            </div></td></tr>
				<? } ?>
 	</table>
	<? }  // end of dimas ==3 ?>
	</div>	</td>
  </tr>
  </table>
  </div>  </td> <td width="231" valign="top">
  <div align="left">
  <?
  if($ban=='serep'){
  ?>
  <? 
  }
  ?>
  <?
  $kkk9099_sdjfkdf009 = mysql_query("SELECT COUNT(id) AS jj FROM txnjalan WHERE RegId='$hh[RegId]'");
  $repo = mysql_fetch_array($kkk9099_sdjfkdf009);
  if($repo[jj]>0){
  ?>
  <? } ?>
  <br>
  <?
  if($mas=='zaki'){
  ?>
  <br>
  <? 
  }
  ?>
</div>
  </td>
</tr>
 </table>
</form>
</div></body>
</html>
 
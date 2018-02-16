<?
session_start();
 include "../konek.php";
include "../ceke.php";

///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
$jdfdfdfdkj = mysql_query("SELECT * FROM kwitansirj WHERE RegId='$hh[RegId]'");
$xxs = mysql_fetch_array($jdfdfdfdkj);
if($xxs[id]){
echo "Transaksi Sudah Selesai<br>";
?>
<input type="button" name="ffgfgf" value="Cek Kwt" onClick="location.href='rp.php?id=<? echo $xxs[id]; ?>';">
<input type="button" name="fgfg" value="Kembali" onClick="location.href='index.php';"><?
}else{
?>
<html> 
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
.style122 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 15px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 17px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style7 {color: #000000}
.style8 {
	color: #990000;
	font-weight: bold;
}
<? //10_i.php ?>
-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("x33.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>&fito=<? echo $fito; ?>", "wCompare", "width=580,height=440,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; </script>
</head>
<body alink="#333333" vlink="#333333" link="#333333" <? if($iin=='slccck' || $iin=='slk'){ ?> onLoad="toCompare()"<? }?>>
<div align="left">

 <form target="_self">
 <table border="0" cellpadding="2" cellspacing="2" >
<?
 if($bb[id]){
?>
<tr class="style5" bgcolor="#990000"> 
<td colspan="3"><div align="center">
DETAI DATA TRANSAKSI<br>
ONE DAY CARE
</div></td>
</tr>
<? 
}else{
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?>
<tr bgcolor="#003399" class="style122">
<? 
}else{
  if($a[KodeBagian]>=68 && $a[KodeBagian]<=71){
?><tr bgcolor="#99CCFF"><?
}elseif($a[KodeBagian]==29){
   ?><tr bgcolor="#6633FF" class="style122"><? 
   }else{?><tr bgcolor="#333333" class="style2"> <? } ?>
<? } ?>
<td colspan="3" ><div  align="left">
 
 </div></td>
</tr>
<?  } ?>
<tr>
  <td colspan="2" valign="top">
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style1" width="662">
  <?
   $ldfldfdD_Dfdfd =  mysql_query("SELECT * FROM induk_karyawan WHERE NoPasien='$hh[NoPasien]'");
$jp = mysql_fetch_array($ldfldfdD_Dfdfd);
//
$dlfkdldfdDFd = mysql_query("SELECT Nama,id,Plafond FROM karyawan WHERE id='$jp[IdKaryawan]'");
$yahp = mysql_fetch_array($dlfkdldfdDFd);
if($jp[id]){
?> <tr>
  <td  colspan="3" bgcolor="#FFCCCC"><div align="left">
  Pasien Ini Adalah Kelg Karyawan Dengan Nik  : <? echo $yahp[Nama]; ?>
  </div></td>
  </tr><?

}
   if($yx2[id]){
  ?>
  <tr>
  <td  colspan="3" bgcolor="#FFCCCC"><div align="left">
  Pasien Ini Adalah Karyawan Dengan Nik  : <? echo $yx2[Nik]; ?>
  </div></td>
  </tr><?
  }
  ?><tr>
  <td width="181">Tgl / Jam masuk </td>
  <td width="13">:</td>
  <td width="448"><div align="left"><? echo "$hh[TglMasuk]/$hh[BlnMasuk]/$hh[ThnMasuk] - $hh[JamMasuk]"; ?>
  </div></td>
  </tr>
  <tr>
  <td>No Rm </td>
  <td>:</td><td><div align="left">
  <? echo $hh[NoPasien]; ?>
  </div></td>
  </tr>
  <tr>
  <td bgcolor="#DFFFEE">Umur (Thn:Bln:Hari)</td>
  <td bgcolor="#DFFFEE">:</td>
  <td bgcolor="#DFFFEE"><div align="left"><? echo "$hh[Umur]:$hh[BlnUmur]"; ?></div></td>
  </tr>
  <tr>
  <td>Nama Pasien </td>
  <td>:</td><td><div align="left"><? echo ucfirst(strtolower($hh[NamaPasien])); ?></div></td>
  </tr>
  <tr>
  <td bgcolor="#CCFFFF"><span class="style8">Penjamin</span></td>
  <td bgcolor="#CCFFFF"><span class="style8">:</span></td>
  <td bgcolor="#CCFFFF"><div align="left" class="style8"><? echo ucfirst(strtolower($hh[NamaPer])); ?></div></td>
  </tr><?
  if($hh[LB]=='L'){
  $warnax='bgcolor="#FF6666"';
  }else{
  $warnax='bgcolor="#F1F991"';
  }
  ?>
  <tr <? echo $warnax; ?> >
  <td>Lama/Baru</td><td>:</td><td><div align="left"><?
  if($hh[LB]=='B'){
  echo "Baru";
  }else{
  echo "Lama";
  } 
  ?></div></td>
  </tr>
  <tr>
  <td>Nama Bagian </td>
  <tD>:</tD><td><div align="left"><? echo ucfirst(strtolower($hh[Bagian])); ?></div></td>
  </tr>
  <tr>
  <td>Dokter</td>
  <td>:</td><td><div align="left"><? echo ucfirst(strtolower($hh[NamaDokter])); ?></div></td>
  </tr>
  <?
   if($yx2[id] || $yahp[id]){
  ?><tr bgcolor="#FFCCCC">
  <td>Plafond</td><td>:</td><td><div align="left"><?
  //
  $djfdkfd_dfdfd99= mysql_query("SELECT SUM(Jam) as jj FROM kwitansirj WHERE IdPasien='$hh[IdPasien]'");
  $yp = mysql_fetch_array($djfdkfd_dfdfd99);
  //
  if($yahp[id]){
  $sisa_pla  = $yahp[Plafond]-$yp[jj];
  }else{
  $sisa_pla  = $yx2[Plafond]-$yp[jj];
} echo number_format($sisa_pla);   
 ?></div></td>
  </tr>
  
  <? } ?><tr>
  <td>Pendaftar</td>
  <td>:</td><td><div align="left"><? echo ucfirst(strtolower($hh[Operator])); ?></div></td>
  </tr>
<?
  $kikidkdik = mysql_query("SELECT SUM(Harga-rp_dis) AS jj FROM txnugd WHERE IdPasien='$hh[id]'");
  $cc = mysql_fetch_array($kikidkdik);
//
 //
if($cc[jj]>0){ ?>  <tr>
  <td bgcolor="#ACFA9E">Txn Rwt Jalan </td>
  <td bgcolor="#ACFA9E">:</td>
  <td bgcolor="#ACFA9E"><div align="left"><? 
  echo number_format($cc[jj]);
  ?> || 
  <a href="#"
   onClick="wCompare = window.open('VGT.php?x=99&id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=920,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none">CEK DETAIL</a>
   ||  
   <?
	   $KDKJDF_DDF4 = mysql_query("SELECT COUNT(id) as jj FROM pecah_kwt WHERE IdDetil Not Like 'F%'
	   and IdDetil Not Like 'R%' and IdDetil Not Like 'L%' and IdPasien='$id' ");
	   $hap4 = mysql_fetch_array($KDKJDF_DDF4);
	   ?>  ( <font color="#990000"><i><?  echo " $hap4[jj]"; ?>  </i></font><? 
	   ?> )</div></td>
  </tr>
  <? }
  
  
	 
	   
	  ?>
  <tr>
  <td bgcolor="#FFFF99">Total Farmasi </td>
  <td bgcolor="#FFFF99">:</td>
  <td bgcolor="#D4D0C8"><div align="left"><? 
  $bada=12;
 	 include "harga_obat.php";
	// echo "$hh[KodePer]";
  	 $sayang = $ta_s;
 echo " ( $balse )"; 

$TglJame=date("d.m.y-H:i:s");
$kalopoi_Dfg="TRANSAKSI OBAT $hh[NoPasien] / $hh[NamaPasien]";
  
?> ||<?
if($mas=='zaki'){
?><a href="u.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >VERIFIKASI</a><? 
}else{
?> <a href="#" style="text-decoration:none"  onClick="wCompare = window.open('34_iii.php?id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=580,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >CEK DETIL</a>
<? } ?>  <?
$jdjdjdjdjdjdjdj = mysql_query("SELECT SUM(JmlHargaBeli) AS jj FROM jualobat_tmp WHERE RegId='$hh[RegId]'");
$noo = mysql_fetch_array($jdjdjdjdjdjdjdj );
if($noo[jj]>0){
$bale = $noo[jj];
?>|| 
Rp.<? echo number_format($noo[jj]);  ?>
 
<? } ?> ||  <a href="" onClick="wCompare_eeee = window.open('x10_as.php?Tot=<? echo $sayang; ?>&param=FARMASI&id=<? echo $id; ?>', 
  'wCompare_eeee', 'width=580,height=240,left=500,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_eeee.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">VERIFIKASI</a> 
	 || <?
	   $KDKJDF_DDF3 = mysql_query("SELECT COUNT(id) as jj FROM pecah_kwt WHERE IdDetil Like 'F%' and IdPasien='$id' ");
	   $hap3 = mysql_fetch_array($KDKJDF_DDF3);
	   ?>  ( <font color="#990000"><i><?  echo " $hap3[jj]"; ?>  </i></font><? 
	   ?> )</div></td>
  </tr><?
  
    $kdjfkdjfkdf  = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$hh[RegId]'");
  $js = mysql_fetch_array($kdjfkdjfkdf);
if($js[kk]>0){
?>
  <tr>
  <td bgcolor="#FFFF99">Total Lab </td>
  <td bgcolor="#FFFF99">:</td>
  <td bgcolor="#D4D0C8"><div align="left"><? 
   echo number_format($js[kk]);
  ?> || 
<?
if($mas=='budi'){
?><a href="u.php?id=<? echo $id; ?>" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >NORMAL DETIL</a><? 
}else{
?>  <a href="#" style="text-decoration:none"    onClick="wCompare = window.open('VGT.php?wsa=3&id=<? echo $hh[id]; ?>', 
  'wCompare', 'width=580,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >VERIFIKASI</a>
<? } ?>
    || <?
	   $KDKJDF_DDF2 = mysql_query("SELECT COUNT(id) as jj FROM pecah_kwt WHERE IdDetil Like 'L%' and IdPasien='$id' ");
	   $hap2 = mysql_fetch_array($KDKJDF_DDF2);
	   ?>  ( <font color="#990000"><i><?  echo " $hap2[jj]"; ?>  </i></font><? 
	   ?> )</div></td>
  </tr>
  <?
  } ?>
  <?
     $ksiskisks_334343  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Rad'");
  $h_12 = mysql_fetch_array($ksiskisks_334343);
  if($h_12[jj]>0){
  ?>
  <tr>
  <td bgcolor="#FFFF99">Radiologi</td>  
  <td bgcolor="#FFFF99">:</td><?
   $ldkfldkfl = mysql_query("SELECT * FROM noradman WHERE NoTxn='$hh[RegId]'");
 $mj = mysql_fetch_array($ldkfldkfl);
// echo $mj[NoMan];
$warnae ='bgcolor="#CDFEC5"';
$warnae3 ='bgcolor="#CDFEC5"';
  ?>
  <td <? if($mj[NoMan]>0){ echo $warnae3; }else{ echo $warnae; } ?>><div align="left"><? 
 
  echo number_format($h_12[jj]); 
?><? 
  ?> || <? //er_45.php
 ?>  <a href="#"  onClick="wCompare = window.open('VGT.php?x=12&id=<? echo $id; ?>', 
  'wCompare', 'width=880,height=340,left=300,Top=144,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">VERIFIKASI</a> ||
	 <a href="#"  onClick="wCompare = window.open('E_YUY.php?id=<? echo $id; ?>',    
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">CETAK STRUK</a> 
	   || <?
	   $KDKJDF_DDF = mysql_query("SELECT COUNT(id) as jj FROM pecah_kwt WHERE IdDetil Like 'R%' and IdPasien='$id' ");
	   $hap = mysql_fetch_array($KDKJDF_DDF);
	   ?>  ( <font color="#990000"><i><?  echo " $hap[jj]"; ?>  </i></font><? 
	   ?> )</div></td> 
  </tr>
  <? }
    $ksiskisks_334343x  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$hh[RegId]' AND KodeKelompok='Fis'");
  $h_12x = mysql_fetch_array($ksiskisks_334343x);
  if($h_12x[jj]>0){ ?>
    <tr>
  <td bgcolor="#FFFF99">Fisiotherapy</td>  
  <td bgcolor="#FFFF99">:</td><?
   ?>
  <td ><div align="left"><? 
  
  echo number_format($h_12x[jj]); 
?><? 
  ?> || 
  <a href="#"  onClick="wCompare = window.open('VGT.php?x=51&aku=rela&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none">VERIFIKASI</a>  
	 
	 </div></td> 
  </tr>
  <? } ?>
  
  <?
   if($bb[id]>0){
  ?>
   <? 
  }else{
   ?>
	<tr> 
	<td colspan="3"><div class="3">
	  <div align="left">
	   <A  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="../Farmasi/wahit.php?id=<? echo $id; ?>" style="text-decoration:none">INPUT TRANSAKSI OBAT / ALKES</A>
	 
	    </div>
	  </div></td>
	</tr>
	<? } //end of //$bb[id] ?>
  <?
//  $kiki_009_0o = mysql_query("SELECT IdPasien FROM KetKwt WHERE IdPasien='$id'");
 // $apo= mysql_fetch_array($kiki_009_0o);
  //echo "ff v $apo[IdPasien]"; 
  if($apo[IdPasien]){
  ?>
  <tr bgcolor="#999966">
  <? 
  }else{
  ?>
  <tr bgcolor="#FFFF00">
  <? } ?>
    <td colspan="3"  ></td> 
    </tr>
  <tr>
    <td colspan="3" bgcolor "#FFFFFF" valign="top"> 
	<div align="left">
	<?
	 
	?>
	<table border="0" cellpadding="2" cellspacing="2" class="style1">
 	<tr>
	<td colspan="3" bgcolor="#D4D0C8">TOTAL TXN : <? 
	$KDI99090KJK1 = mysql_query("SELECT SUM(JumlahHarga) AS kk FROM txnjalan WHERE RegId='$hh[RegId]'");
	$bc1 = mysql_fetch_array($KDI99090KJK1);
	//
	$KDI99090KJK = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$hh[RegId]'");
	$bc = mysql_fetch_array($KDI99090KJK);
	
	//////////////////////////////////////////////////////////////////////////////
	if($bb[id]){

	$dfjk_00000 = mysql_query("SELECT Nilai FROM materaiInap2 WHERE IdPasien='$id'");
	$kjuj = mysql_fetch_array($dfjk_00000);
	$rep = $bc[kk]+$bc1[kk]+$sayang+$dta[kk]+$cc[jj]+$kjuj[Nilai];
	}else{
	  $rep = $bc[kk]+$bc1[kk]+$sayang+$dta[kk]+$cc[jj];
	}
	if($mas==4){
$rep = $rep+$noo[jj];
	}else{
$rep = $rep;

	}
	//echo number_format($kjuj[Nilai]); 
	///////////////////////////////////////////////////////////////////////////
	
	
 	 
	//echo "jj $rep<br>";
	$pir = ceil($rep);
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
	 $totale =$rep;
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
	 }elseif($nugi==5 || $nugi==7  || $nugi==27 ){
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
	echo number_format($totale);
	?> </td>
	</tr>
	<?
	if($nugi>0){
	?>
 	  <?
	  $dlfldfdl = mysql_query("SELECT SUM(JumlahHarga) AS hh FROM txnjalan WHERE RegId='$hh[RegId]'");
	  $ye = mysql_fetch_array($dlfldfdl);
	  $dlfldfdl2 = mysql_query("SELECT SUM(JumlahHarga) AS hh FROM txnjalan2 WHERE RegId='$hh[RegId]'");
	  $ye2 = mysql_fetch_array($dlfldfdl2);
	  ?>
	  
	  <? } //end off nugi ?>
	  <?
	  if($tb==3 || $tb==2){
	  ?>
	  <tr>
	  <td width="119" bgcolor="#FFCCCC">CHARGE TAMBAHAN</td>
	  <td width="3" bgcolor="#FFCCCC">:</td>
	  <td width="39" bgcolor="#FFCCCC"><div align="left"><? echo number_format($cas); ?>
	  <input type="hidden" name="cas" value="<? echo $cas; ?>"></div></td>
	  </tr>
	 
	  
	<tr>
	  <td colspan="3">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="3" bgcolor="#7AE57A">
	  <div align="left">
	  <input name="fgf" type="submit" class="style3" value="Simpan">
	  <input name="fgfg" type="button" class="style3" onClick="location.href='u.php?id=<? echo $id; ?>';" value="Reset">
	  <input name="dffg" type="button" class="style3" onClick="location.href='../daftar/r.php';" value="Kembali">
	  </div>	  </td>
	  </tr>
	</table>
	<? 
	}else{
	?>
	<table width="656" height="180" border="0" cellpadding="2" cellspacing="2" class="style1">
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
		<input type="hidden" name="IdBiaya" value="<? echo $fito; ?>">
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
?>
<input name="Hargaa" type="text" class="style1" value="<? echo $dadal;?>" size="12" maxlength="14">
<?  //echo number_format($dadal,2); ?></div></td>
</tr>
<?
if($fito>0){
?>
<tr>
<? 
}else{?>
<tr>
<? } ?>
<td>QTY</td><td>:</td><td><div align="left"><input name="Qty" type="text" class="style3" value="1" size="3" maxlength="3">
</div></td>
</tr>
  
<? 	
	}else{
	?><tr height="2" valign="top">
	                    <td width="123">NAMA TARIF	<input type="hidden" name="iin" value="slccck"> 
 </td>
	                    <td width="3">:</td>
	<td  ><div align="left"><?
 	if($fito>0){}else{
	?>
	<input type="text" class="style3"  name="NamaBiaya" autofocus="autofocus"  />
	<? } ?>
	<input type="hidden" name="id" value="<? echo $id;?>">
	<input type="hidden" name="fito" value="<? echo $fito; ?>">
	 || 
	<?
	/* <a href="#" style="text-decoration:none"
	   onClick="wCompare_1899kha = window.open('xsds.php?id=<? echo $id; ?>', 
  'wCompare_1899kha', 'width=460,height=460,left=360,Top=144,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_1899kha.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"> Tarif Per Poli</a></div></td>
	</tr>
	<? */  } ?>
  <tr height="2" valign="top">
	  <td colspan="3" height="2" bgcolor="#FFFFFF"><div align="left">
	 
	  <?
	  if($fito>0){
	  ?><input name="fgf" type="submit" class="style3" value="Simpan"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? }else{ ?>
	   <input name="fgf" type="submit" class="style3" value="Cari"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	  <? } ?>
	     	  <?
	  if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==16){ ?>
	  <!-- <input type="button" name="fgfggf" value="Input Hasil Pemeriksaan" class="style3"  onClick="wCompare = window.open('../radiologi/er_945.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   > -->
	  <? } ?>
	  <input name="df" type="button" class="style3" onClick="location.href='../Daftar/ed_d.php?ade=3&id=<? echo $id; ?>';" value="Kembali"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   >
	  

	  <?
	  if($a[KodeBagian]==6){ ?>
	  <input type="button" name="fgfgf" class="style3" value="Isi Icd" onClick="location.href='../Daftar/7w.php?id=<? echo $id; ?>';">
	  <? }  
	  ?><input name="dffd3" type="button" class="style3"  onClick="wCompare = window.open('uij_k.php?totale=<? echo $totale; ?>&id=<? echo $id; ?>&dimas=3', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Tampil Cetak Kwitansi">
	 
	  </div></td> 
 	  </tr>
 	<tr valign="top">
	<td  colspan="3"><div align="left">
	<table width="649" height="35" border="1" bordercolor="#00CC66">
	 <? 
 if($a[KodeBagian]>=68 && $a[KodeBagian]<=71){
?>
	 <tr bgcolor="#99CCFF"><?
}elseif($a[KodeBagian]==24){
   ?><tr bgcolor="#6633FF" class="style122"><? 
   }else{?><tr bgcolor="#333333" class="style2"> <? } ?>  <td colspan="3" valign="top"><? 
   if($a[KodeBagian]==24){?>
   <? }else{ ?>&nbsp;
   <input  <? echo $war; ?>  type="button" name="DFFD2" value="Vaksin" class="style3" onClick="wCompares2_0901 = window.open('x10.php?id=<? echo $id; ?>', 
  'wCompares2_0901', 'width=980,height=540,left=200,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_0901.focus();"   >
	   <input  <? echo $war; ?>  type="button" name="DFFD2" value="Anc" class="style3" onClick="wCompares2_01 = window.open('anc.php?id=<? echo $id; ?>', 
  'wCompares2_01', 'width=980,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"   >
	  <input  <? echo $war; ?>  type="button" name="DFFD2" value="Kb" class="style3" onClick="wCompares2_01 = window.open('dimas4thn.php?id=<? echo $id; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"   >
	   
	  <input  <? echo $war; ?>  type="button" name="DFFD2" value="Icd" class="style3" onClick="location.href='../Daftar/7w.php?id=<? echo $id; ?>';"   >
	<input  <? echo $war; ?>  type="button" name="DFFD2" value="Persalinan" class="style3" onClick="wCompares2_01 = window.open('xmb1.php?id=<? echo $id; ?>', 
  'wCompares2_01', 'width=480,height=310,left=400,Top=220,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"   >
	<input type="button" name="ghghg" value="Catat" onClick="location.href='cd_dfd.php?id=<? echo $id; ?>';" class="style3"> 
   <? } ?></td> 
</tr>
	</table>
	</div></td>
	</tr>
	</table>
	<? }  // end of dimas ==3 ?>
	</div>	</td>
  </tr>
  <?  
  // ed of if($ss33[mm]>0){?>
  </table>
  </div>  </td> <td width="382" valign="top"> 
  <div align="left">
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
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td colspan="3"><div align="left">
  LIST DETAIL DATA OBAT
  </div></td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
  <table border="1" class="style1">
  <tr>
  <td bgcolor="#D4D0C8">NO</td>
  <td bgcolor="#D4D0C8">RESEP</td>
  <td bgcolor="#D4D0C8">NAMA OBAT</td>
  <td bgcolor="#D4D0C8">QTY</td>
  <td bgcolor="#D4D0C8">JUMLAH</td>
  <td bgcolor="#D4D0C8">OPR</td>
  <td bgcolor="#D4D0C8">JAM</td>
  </tr>
  <?
  $nes=1;
  $kiki_343 = mysql_query("SELECT * FROM jualobat WHERE RegId='$hh[RegId]'");
  while($cc = mysql_fetch_array($kiki_343)){
  ?>
  <tr>
  <td bgcolor="#F3FEFF"><div align="center"><? echo $nes; ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo $cc[JamTran]; ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo strtoupper($cc[NamaObat]); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="center"><? echo number_format($cc[Qty],2); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="right"><? echo number_format($cc[JmlHargaBeli]);
  $YES = $YES + $cc[JmlHargaBeli];
   ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo strtoupper($cc[Operator]); ?></div></td>
  <td bgcolor="#F3FEFF"><div align="left"><? echo $cc[Jam]; ?></div></td>
  </tr>
   <? $nes++; }  ?><tr>
    <td colspan="4" bgcolor="#D4D0C8"><div align="center">TOTAL</div></td>
    <td bgcolor="#D4D0C8"><div align="right"><? echo number_format($YES); ?></div></td>
    <td colspan="2">&nbsp;</td>
    </tr>
  </table> 
  </div>
  </td>
  </tr>
  
  </table><br>
  <table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
 <td colspan="3"><div align="center">LIST DATA RETUR</div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="1" class="style1">
 <tr>
 <td bgcolor="#FFFFFF">NO</td>
 <td bgcolor="#FFFFFF">NO RESEP</td>
 <td bgcolor="#FFFFFF">NAMA OBAT</td>
 <td bgcolor="#FFFFFF">QTY</td>
 <td bgcolor="#FFFFFF">NILAI</td>
 </tr>
 <?
 $msj=1;
 $kik_0k = mysql_query("SELECT * FROM jualobat_batal WHERE RegId='$hh[RegId]'");
 while($vv= mysql_fetch_array($kik_0k)){
 ?>
 <tr>
 <td bgcolor="#E6FDFF"><div align="center"><? echo $msj; ?></div></td>
 <td bgcolor="#E6FDFF"><div align="left"><? echo $vv[JamTran]; ?></div></td>
 <tD bgcolor="#E6FDFF"><div align="left"><? echo strtoupper($vv[NamaObat]); ?></div></tD>
 <td bgcolor="#E6FDFF"><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
 <td bgcolor="#E6FDFF"><div align="right"><? echo number_format($vv[JmlHargaBeli]);
 $TOTO = $TOTO + $vv[JmlHargaBeli];
  ?></div></td>
 </tr>
 <? $msj++; } ?> <tr>
   <td colspan="4" bgcolor="#FFFFFF"><div align="center">TOTAL</div></td>
   <td bgcolor="#FFFFFF"><div align="right"><? echo number_format($TOTO); ?></div></td>
 </tr>

 </table>
 </div>
 </td> 
 </tr>
 </table>
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
 <? } ?>
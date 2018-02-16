<?
session_start();
include "../ceke.php";
include "../rake.php";
include "../konek.php";
include "../alamat.php";
  $jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if( $a[Level]==3 ){
include "../terbilang.php";
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;  
}
.style3223 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px; color:#999999
}
.style4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;}
.style5 {font-size: 3px}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; }
.style11 {font-family: "Times New Roman", Times, serif; font-size: 14px; font-weight: bold; }
.style12 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>

<div align="left">
  <table width="691" border="0" cellpadding="2" cellspacing="2"
  >
    <tr  onClick="location.href='../Daftar/ed_d.php';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td width="123"> <div align="center"><span class="style1"><img   src="../gb/gb.png" alt="logo" width="45" height="45"></span></div></td>
    <td colspan="3"><span  class="style11"><?
	echo strtoupper($fkd[Nama]); 
	?></span><span class="style3223"><br>
<? echo strtoupper($fkd[Jalan]); ?><br />
      Telp.  <? echo $fkd[Telp]; ?>.<br>
	  FAX : <? echo $fkd[Fax]; ?> </span> </td>
    </tr>
    <tr>
      <td colspan="4"><span class="style5"><hr></span></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center" class="style12"><b>KWITANSI</b></div></td>
    </tr>
    <tr class="style3">
      <td colspan="2"><div align="left" class="style21 style22 style12">NO KWT</div></td>
        <td width="6"><div align="center" class="style20 style12">
          <div align="left">:</div>
      </div></td>
        <td width="424">
      <div align="left" class="style12"  ><?
		  //echo $hh[RegId];
		  echo "KWT:$id";
		  ?> </div></td>
    </tr>
     <tr bordercolor="#000000" class="style3">
       <td colspan="2"><div align="left" class="style12"  >SUDAH TERIMA DARI</div></td>
       <td width="6"><div align="left" class="style12"><strong>:</strong></div></td>
       <td width="424">
       <div align="left" class="style12"  ><?
	   if($a[Level]==11){
	     echo strtoupper($hh[Pembayar]); 
	   }else{
	   ?> <a href="#" 
	   onClick="wCompare = window.open('65yhy_0.php?id=<? echo $id;?>', 
  'wCompare', 'width=380,height=440,left=500,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none" >
	   <? echo strtoupper($hh[Pembayar]); ?></a>
	   <? } ?></div></td>
    </tr>
     <tr bordercolor="#000000" class="style3">
       <td colspan="2"><span class="style12"  >NAMA PASIEN</span></td>
       <td><div align="left" class="style12"><strong>:</strong></div></td>
       <td><div align="left" class="style12"  >
           <? 
echo strtoupper($hh[NamaPasien]);
?>
       </div></td>
    </tr>
     <tr class="style3">
       <td colspan="2"><span class="style12">TERBILANG</span></td>
       <td><div align="left" class="style12"><strong>:</strong></div></td>
       <td><div align="left" class="style12"><i><?
 
$atu2=$hh[Bulat];
$kalimat = terbilang($atu2);
echo strtoupper($kalimat);
 ?></i></div></td>
     </tr>
     <tr bordercolor="#000000" class="style3">
       <td colspan="2"><div align="left" class="style12"  >KETERANGAN</div></td>
       <td><div align="left" class="style12"><strong>:</strong></div></td>
       <td><div align="left" class="style12"  ><?
	    // $kiki_009_0o33 = mysql_query("SELECT * FROM KetKwt WHERE IdPasien='$ii[id]'");
 // $apo33= mysql_fetch_array($kiki_009_0o33);

	   if($apo33[IdPasien]){
	   echo strtoupper($apo33[Keterangan]);
	   }else{
	   ?> PEMBAYARAN TRANSAKSI RAWAT JALAN PASIEN : AN : <? echo "$hh[NoPasien] / $hh[NamaPasien]"; 
	   
	   } ?></div></td>
    </tr>
     
     <tr bordercolor="#000000" class="style3">
       <td colspan="4"><span class="style7">.</span></td>
    </tr>
     <tr bordercolor="#000000" class="style3">
       <td colspan="4" valign="top">
         <div align="left">
           <table border="1" cellpadding="1" cellspacing="1" >
             <tr class="style3">
               <td width="18"><span class="style12">NO</span></td>
		  <td width="262"><span class="style12">NAMA BIAYA</span></td>
		  <td width="33"><div align="center" class="style12">QTY</div></td>
		  <td width="92"><div align="right" class="style12">JUMLAH</div></td>
		  </tr>
             <?
		$no=1; $but=1;
 		$ksiki = mysql_query("SELECT * FROM txnjalan WHERE RegId='$ii[RegId]' ORDER BY KodeKelompok");
		while($tp = mysql_fetch_array($ksiki)){
		if($Kel !=$tp[KodeKelompok]){
		?>
             <tr class="style4">
               <td><div align="center" class="style12"><? echo $no; ?></div></td>
		  <td><div align="left" class="style12"><?
		if($tp[KodeKelompok]=='Rad'){
echo "Radiologi";
}else{
		$ju_dkf = mysql_query("SELECT NamaKelompok FROM kelompok WHERE id='$tp[KodeKelompok]'");
		$nama = mysql_fetch_array($ju_dkf);
		echo ucfirst(strtolower($nama[NamaKelompok])); 
		}
		 ?></div></td>
		  <td><div align="center" class="style12"><?
		 $jdkj_009mm = mysql_query("SELECT SUM(Qty) AS jj FROM txnjalan WHERE RegId='$ii[RegId]'");
		 $hd = mysql_fetch_array($jdkj_009mm);
 echo number_format($hd[jj]); 
		?></div></td>
		  <td><div align="right" class="style12"> <?  
		$djkdjfkdf = mysql_query("SELECT SUM(JumlahHarga) AS kk FROM txnjalan WHERE RegId='$ii[RegId]' AND KodeKelompok='$tp[KodeKelompok]'");
		$jkj = mysql_fetch_array($djkdjfkdf);
		echo number_format($jkj[kk]);
		$atu = $atu + $jkj[kk]; ?></div></td>
		  </tr>
             <? $Kel=$tp[KodeKelompok]; $but++;
		 $no++;}?>
             <? }?>
           <?
		    $dkjkd334_42 = mysql_query("SELECT *  FROM txnugd WHERE IdPasien='$ii[id]'");
		   while($dd = mysql_fetch_array($dkjkd334_42)){

		   ?>
		   <tr class="style3">
		   <td><div align="center" class="style12"><? echo $no; ?></div></td>
		   <td><div align="left" class="style12">
		  <?
		  echo ucfirst(strtolower($dd[NamaBiaya]));
		  ?>
		   </div></td>
		   <td><div align="center" class="style12">1</div></td>
		   <td><div align="right" class="style12"><? echo number_format($dd[Harga]);	
		   $toto5 = $toto5 + $dd[Harga]; ?></div></td>
		   </tr>
		     <?
			 $no++; }
		$KJD = mysql_query("SELECT SUM(Qty) AS jj FROM txnjalan2 WHERE RegId='$ii[RegId]'");
		$hx = mysql_fetch_array($KJD);
		$but=$no;
		if($hx[jj]>0){
		?><tr class="style3">
               <td><div align="center" class="style12"><? echo $but; ?></div></td>
		  <td><div align="left" class="style12">Laboratorium</div></td>
		  <td><div align="center" class="style12"><? 
		 
		echo number_format($hx[jj]); 
		?></div></td>
		  <td><div align="right" class="style12"><? 
	$KJD2 = mysql_query("SELECT SUM(Total) AS jj FROM txnjalan2 WHERE RegId='$ii[RegId]'");
		$hx2 = mysql_fetch_array($KJD2);	 
		echo number_format($hx2[jj]);
		$atu2 = $atu+ $hx2[jj];
		?></div></td>
		  </tr>
             <? } ?>
             <tr class="style3">
               <td height="23" colspan="4"><div align="left" class="style12">LIST DATA OBAT</div></td>
		  </tr><? 
		$nisa=1;
		 $ddt = mysql_query("SELECT * FROM jualobat WHERE RegId='$hh[RegId]'   AND Qty>0 AND NoPasien='$hh[NoPasien]'  AND Jam NOT like 'r-%'");
while($ss = mysql_fetch_array($ddt)){?><tr class="style3">
		    <td><div align="center" class="style12">
		      <? echo $nisa; ?>
		      </div></td>
		    <td><div align="left" class="style12"><? 
		
$sayang = $sayang + $ss[JmlHargaBeli];
   
  $jkjioi = mysql_query("SELECT COUNT(id) AS jh FROM jualobat WHERE RegId='$hh[RegId]'  AND apa_r=1");
$okw = mysql_fetch_array($jkjioi);
if($okw[jh]>0){ 
  $selele = mysql_query("SELECT SUM(persen) AS hh FROM `racik` WHERE IdPas='$id'");
 $we= mysql_fetch_array($selele);

 $sayang = $sayang +($gu[Nilai_Racik]*$we[hh]);
 
}  
$sayang = $sayang -($sayang *$kp_i[Diskon]/100);
 $TglJame=date("d.m.y-H:i:s");echo ucfirst(strtolower($ss[NamaObat]));
 $nisa++; ?></div></td>
   <td><div align="center" class="style12"><? echo number_format($ss[Qty]); ?></div></td>
   <td><div align="right" class="style12"><?  echo number_format($ss[JmlHargaBeli]); ?></div></td>
		   </tr>
             <? }  
//		 $juy=$nisa;
		 $kjkdjkdjdkf3 = mysql_query("SELECT sum(JmlHargaBeli) as jj FROM jualobat WHERE RegId='$hh[RegId]'  AND Jam  like 'r-%'");
$ro3 = mysql_fetch_array($kjkdjkdjdkf3);
if($ro3[jj]>0){
?>
  <tr class="style3">
    <td colspan="2"><div align="left" class="style12">JASA RESEP</div></td>
    <td><div  align="center" class="style12"><? 
$kjkdjkdjdkf32 = mysql_query("SELECT count(id) as jj FROM jualobat WHERE RegId='$ii[RegId]'  AND Jam  like 'r-%'");
$ro32 = mysql_fetch_array($kjkdjkdjdkf32);
echo number_format($ro32[jj]); 
?></div></td>
  <td><div align="right" class="style12"><? echo number_format($ro3[jj]); ?></div></td>
  </tr>
  <? 
}
 		  ?><tr class="style3">
    <td colspan="3"><div align="center" class="style12">TOTAL</div></td>
		    <td><div align="right" class="style12"><? $atu3 = $hh[Asli];
		    $atu3 = $hh[Asli];
		 /* if($hh[TypeBayar]==5){
		  $atu2 = $hh[Kk];
		  }elseif($hh[TypeBayar]==6){
		  $atu2 = $hh[Jam];
		  }elseif($hh[TypeBayar]==15 || $hh[TypeBayar]==21  || $hh[TypeBayar]==17 || $hh[TypeBayar]==20){
		  $atu2=$hh[Db]+$hh[Kk];		  
		   }elseif($hh[TypeBayar]==11 ||  $hh[TypeBayar]==13 ||  $hh[TypeBayar]==18){
		  $atu2=$hh[Db]+$hh[Jam];
		  }elseif($hh[TypeBayar]==2 || $hh[TypeBayar]==1 || $hh[TypeBayar]==3){
		  $atu2=$hh[Db];
		  }elseif($hh[TypeBayar]==16 || $hh[TypeBayar]==9 || $hh[TypeBayar]==10){
		  $atu2=$hh[Tunai]+$hh[Db];
		  }elseif($hh[TypeBayar]==8 || $hh[TypeBayar]==19){
		  $atu2=$hh[Tunai]+$hh[Db];
		  		  }elseif($hh[TypeBayar]==4){
		  $atu2=$hh[Tunai];
		  }else{
		  $atu2 = $atu+$ati;
		  }
		  */
		  echo number_format($hh[Bulat]);  ?></div></td>
		    </tr>
			<?
			if($hh[crg]>0){
			?>
			<tr class="style3">
			<td colspan="3"><div align="center">CHARGE (3%)</div></td> <td><div align="right"><?
			echo number_format($hh[crg]);
			?></div></td>
			</tr>
			<?
			}
			$Tot = $hh[Tunai]+$hh[Db]+$hh[Kk]+$hh[Jam];
			?>
             <tr onClick="wComparex22 = window.open('s3z.php?id=<? echo $id;?>', 
  'wComparex22', 'width=580,height=240,left=200,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparex22.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style3">
               <td colspan="3"><div align="center" class="style12">BAYAR</div></td>
 		    <td><div align="right" class="style12"><? echo number_format($Tot); ?></div></td>
 		    </tr>
           </table>
       </div>		</td>
    </tr>
     <tr>
     <td colspan="4"><div align="center">
	 <table width="573" border="0" cellpadding="2" cellspacing="2">
	 <tr valign="top">
	 <td width="374" ><span class="style10">* Terimakasih atas kepercayaan anda terhadap pelayanan RS YADIKA, <br>
	      Bila ada biaya yang belum masuk di Rincian ini akan di tagihkan kemudian </span></td>
	 <td width="184"><div align="right">
       <table width="179" border="0" cellpadding="2" cellspacing="2" class="style4"  >
         <tr valign="bottom">
          <td width="171" height="35"><div align="center" class="style12">BEKASI, 
            <? 	  echo "$ii[TglMasuk]/$ii[BlnMasuk]/$ii[ThnMasuk]";
	  //echo date("d-"); echo strtoupper(date("F")); echo date("-Y");  ?>          
          </div></td>
         </tr> 
         <tr>
           <td height="33"><span class="style12"></span></td>
	    </tr>
         <tr>
           <td   valign="bottom"> <div align="center" class="style12">(  <? echo strtoupper($a[Nama]); ?> )<br>
          <? echo date("H:i:s"); ?></div>	  
         </tr>
         <tr>
          <td height="2">	    </tr>
        </table>
      </div></td>
	 </tr>
	 </table>
	 </div></td>
    </tr>
  </table>
</div>
 <div align="left"></div></body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>
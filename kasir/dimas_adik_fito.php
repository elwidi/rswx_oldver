<?
session_start();
include "../salaman.php";
 include "../konek.php";
 //header('Refresh: 22');
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
	font-size: 11px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	color: #999999;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1280" colspan="3"><div align="left" class="style1">
LAPORAN VAKSIN<BR />
RS YADIKAPERIODE : <? 
echo "$tgl1 ";
$bln=$bln1;
 include "../bulan.php"; echo " SD $tgl2 "; 
$bln=$bln2; 
include "../bulan.php";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="FGFG" value="Kembali" onClick="location.href='index.php';" class="style1"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
 <input type="button" name="fgfgfg"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   value="Export Ke Excel" onClick="location.href='p2.php?bln2=<? echo $bln2; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>';" class="style1">
 <?
 if($ela_fito=='baik'){
  ?><input type="button" name="gfgf" value="Hide Detail Vaksin" onClick="location.href='dimas_adik_fito.php?bln2=<? echo $bln1; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>';" class="style1"   style="background:#FFCC99"> 
 <?
 }else{
 ?><input type="button" name="gfgf" value="Detail Vaksin" onClick="location.href='dimas_adik_fito.php?ela_fito=baik&bln2=<? echo $bln1; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>';" class="style1" style="background:#CCFF66"> 
 <? } ?>
 <span class="style3">.</span></div></td>
</tr><tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="0" cellspacing="0" class="style1">
  <tr>
  <td width="18" rowspan="2" bgcolor="#DEFEEB">NO </td>
  <td rowspan="2" bgcolor="#DEFEEB">TGL PERIKSA</td>
  <td rowspan="2" bgcolor="#DEFEEB">NO RM</td>
  <td width="103" rowspan="2" bgcolor="#DEFEEB">NAMA ORANG TUA </td>
  <td width="59" rowspan="2" bgcolor="#DEFEEB">NAMA BAYI </td>
  <td width="77" rowspan="2" bgcolor="#DEFEEB">USIA </td>
  <td width="344" rowspan="2" bgcolor="#DEFEEB">ALAMAT </td>
  <td width="26" rowspan="2" bgcolor="#DEFEEB"> BCG</td>
    <td rowspan="2" bgcolor="#DEFEEB">PENTABIO</td>
  <td colspan="4" bgcolor="#DEFEEB"><div align="center">POLIO</div></td>
  <td colspan="3" bgcolor="#DEFEEB"><div align="center">DPT</div></td>
 
  <td colspan="2" bgcolor="#DEFEEB"><div align="center">HEB-B</div></td>
  <td colspan="3" bgcolor="#DEFEEB"><div align="center">HEB-B</div></td>
  <td colspan="3" bgcolor="#DEFEEB"><div align="center">DPT-HB KOMBO </div></td>
  <td width="48" rowspan="2" bgcolor="#DEFEEB">CAMPAK</td>
  <td width="308" rowspan="2" bgcolor="#DEFEEB">KETERANGAN</td>
  </tr>
    <tr>
  <td width="18" bgcolor="#DEFEEB"><div align="center">1</div></td> 
  <td width="19" bgcolor="#DEFEEB"><div align="center">2</div></td>
  <td width="19" bgcolor="#DEFEEB"><div align="center">3</div></td>
  <td width="24" bgcolor="#DEFEEB"><div align="center">4</div></td>
  <td width="28" bgcolor="#DEFEEB"><div align="center">1</div></td>
  <td width="21" bgcolor="#DEFEEB"><div align="center">2</div></td>
  <td width="28" bgcolor="#DEFEEB"><div align="center">3</div></td>
  <td width="48" bgcolor="#DEFEEB"><div align="center">0-7 HR </div></td>
  <td width="43" bgcolor="#DEFEEB"><div align="center">8-28HR</div></td>
  <td width="23" bgcolor="#DEFEEB"><div align="center">1</div></td>
  <td width="28" bgcolor="#DEFEEB"><div align="center">2</div></td>
  <td width="29" bgcolor="#DEFEEB"><div align="center">3</div></td>
  <td width="31" bgcolor="#DEFEEB"><div align="center">1</div></td>
  <td width="32" bgcolor="#DEFEEB"><div align="center">2</div></td>
  <td width="29" bgcolor="#DEFEEB"><div align="center">3</div></td>
  </tr>
  <?
    $nomer=1;

  $gambar ='<img src="../gb/centang.jpg" width="12" height="11">'; 
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
 
   $kdjfkdjkd= mysql_query("SELECT * FROM vaksin_pasien WHERE TglMasuk=$Tgl AND  BlnMasuk=$Bln AND ThnMasuk=$Thn");
  while($un = mysql_fetch_array($kdjfkdjkd)){
  //
  $kdjfkd_dfd = mysql_query("SELECT NamaOrtu,Alamat FROM datapasien WHERE NoPasien='$un[NoPasien]'");
  $yh = mysql_fetch_array($kdjfkd_dfd);
  //
  $ksjdks_sds = mysql_query("SELECT Umur,BlnUmur FROM rwtjalan WHERE id='$un[IdPasen]'");
  $ya = mysql_fetch_array($ksjdks_sds);
 if($ya[Umur]>1){
 $clas=' class="style3"';
 }else{
 $clas=' class="style1"';
 }
 $ans = $nomer%2;
 if($ans==1){
 $warna=' bgcolor="#FCF8C7"';
 }else{
 $warna='';
 }
  if($ya[Umur]<=5){
  ?>
    <tr <? 
	echo $warna; 
	?>valign="top"  <? echo $clas; ?>   <?  echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   onClick="wCompares2_01 = window.open('../Kasir/pei.php?id=<? echo $un[IdPasen]; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();" >
      <td><div align="center"><? echo $nomer; ?></div></td> 
	  <td><div align="right"><?
	  echo "$un[TglMasuk]-$un[BlnMasuk]-$un[ThnMasuk]";
	  ?></div></td>
      <td><div align="left"><? echo $un[NoPasien]; ?></div></td>
      <td><div align="left"><? echo $yh[NamaOrtu]; ?></div></td>
      <td><div align="left"><? echo $un[NamaPasien]; ?></div></td>
      <td><div  align="center"><?
	  $pc = explode(":",$ya[BlnUmur]);
	  echo "$ya[Umur] Thn $pc[0] Bln $pc[1] Hr";
	  ?></div></td>
      <td><div align="left"><? echo $yh[Alamat]; ?></div></td>
      <td><div align="center"><?
	  if($un[Bcg]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
	  if($un[Pentabio]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
 <td><div align="center"><?
	  if($un[Polio1]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Polio2]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Polio3]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Polio4]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Dpt1]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Dpt2]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Dpt3]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
  //echo "$ya[Umur] Thn $pc[0] Bln $pc[1] Hr";
	  if($ya[Umur]==0 && $pc[1]<=7 && $pc[0]==0){
	  echo "$gambar";
	  }else{ echo "-";
	  }
	  ?></div></td>
	   <td><div align="center"><?
	  //echo "$ya[Umur] Thn $pc[0] Bln $pc[1] Hr";
	  if($ya[Umur]==0 && $pc[1]<=28 && $pc[1]>=8 && $pc[0]==0){
	  echo "$gambar";
	  }else{ echo "-";
	  }
	  ?></div></td>
 	   <td><div align="center"><?
	  if($un[Heb1]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="center"><?
	  if($un[Heb2]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
	  if($un[Heb3]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
	  if($un[DptKombo]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
	  if($un[DptKombo2]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="center"><?
	  if($un[DptKombo3]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td><td><div align="center"><?
	  if($un[Campak]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  <td><div align="left"><?
 	  if($ela_fito=='baik'){
	   $kjdfd_Dfdfdfd = mysql_query("SELECT * FROM bacth_vaksin WHERE IdRj='$un[IdPasen]'");
	   $hp = mysql_fetch_array($kjdfd_Dfdfdfd);
	   if($hp[Bcg]!=''){
	   echo "Bact No: $hp[Bcg]";
	   }  if($hp[Pentabio_1]!=''){
	   echo "<br>Bact No: $hp[Pentabio_1]";
	   }
	    if($hp[Polio_1]!=''){
	   echo "<br>Bact No: $hp[Polio_1]";
	   }
	    if($hp[Polio_2]!=''){
	   echo "<br>Bact No: $hp[Polio_2]";
	   }
	    if($hp[Polio_3]!=''){
	   echo "<br>Bact No: $hp[Polio_3]";
	   }
	    if($hp[Polio_4]!=''){
	   echo "<br>Bact No: $hp[Polio_4]";
	   }
	     if($hp[Dpt_1]!=''){
	   echo "<br>Bact No: $hp[Dpt_1]";
	   }
	   if($hp[Dpt_2]!=''){
	   echo "<br>Bact No: $hp[Dpt_2]";
	   }
	    if($hp[Dpt_3]!=''){
	   echo "<br>Bact No: $hp[Dpt_3]";
	   }
	     if($hp[Hb0]!=''){
	   echo "<br>Bact No: $hp[Hb0]";
	   }
	   if($hp[Hb1]!=''){
	   echo "<br>Bact No: $hp[Hb1]";
	   }
	   if($hp[Hb2]!=''){
	   echo "<br>Bact No: $hp[Hb3]";
	   }
	     if($hp[Kombo_1]!=''){
	   echo "<br>Bact No: $hp[Kombo_1]";
	   }
	     if($hp[Kombo_2]!=''){
	   echo "<br>Bact No: $hp[Kombo_2]";
	   }
	      if($hp[Kombo_3]!=''){
	   echo "<br>Bact No: $hp[Kombo_3]";
	   }
	      if($hp[Campak]!=''){
	   echo "<br>Bact No: $hp[Campak]";
	   }
	  
	  }else{
	  echo $un[Keterangan];
	  }
	   ?></div></td>
    </tr>
     
	<?
	$nomer++;
	}  } 
	$mulai++; } ?><tr valign="top">
      <td colspan="26" bgcolor="#FFCCCC">&nbsp;</td>
      </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
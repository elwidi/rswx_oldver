<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $Tgl=$_GET["tgl1"]-0;
 $Bln =$_GET["bln1"]-0;
 $Thn= $_GET["thn1"];
if($tag=='harapan'){
header("Location:./z09_a.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='ubah'){
header("Location:./dimas_temenin_ayah.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='iklas'){
header("Location:./a723_d.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='jos'){
header("Location:../Lab/z12.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='doaku'){
header("Location:./harsono_ayah_ku.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='piye'){
header("Location:./puasa_tg_di_mmtra.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($tag=='sabar'){
header("Location:./kesabaran_itu_indah.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($iin=='hari'){
header("Location:./dimas_adik_fito.php?bln2=$bln2&tgl1=$tgl1&tgl2=$tgl2&bln1=$bln1&thn1=$thn1");
}elseif($a[Level]==3){
//header('Refresh: 2');
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#ABFCDA';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>

<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="833" colspan="3"><div align="left">
 <table width="361" border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td colspan="3"><div align="left">
LAPORAN HARIAN KASIR 
 RAWAT JALAN </div></td>
</tr>
<tr>
<td width="103">KASIR</td>
<td width="7">:</td>
<td width="229"><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
</tr>
<tr>
<td>PERIODE</td><td>:</td><td><div align="left">
 <?
$bln=$Bln; echo "$Tgl ";
include "../bulan.php";
?>
</div></td>
</tr>
<tr>
  <td>SHIFT</td>
  <td>:</td>
  <td><?
  if($Shift==1){
  echo "SATU";
  }elseif($Shift==2){
  echo "DUA";
  }elseif($Shift==3){
  echo "TIGA";
  }else{
  echo "SEMUA";
  }
  ?></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td><div align="left"> <span class="style1"><a href="index.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">KEMBALI</a> 
          || <font color="#990000"><b><i>RWT JALAN</i></b></font> || <a href="z_s.php?Shift=<? echo $Shift; ?>&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >ALTER</a> 
          || <a href="js_d.php?Shift=<? echo $Shift; ?>&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">RWT 
          INAP</a> </span></div></td>
</tr> 
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="17" rowspan="2" bgcolor="#D4D0C8"><strong> </strong><strong>NO</strong></td>
  <td width="47" rowspan="2" bgcolor="#D4D0C8"><strong> </strong><strong>NO KWT</strong></td>
  <td width="62" rowspan="2" bgcolor="#D4D0C8"><strong>  </strong><strong>NO RM</strong></td>
  <td width="222" rowspan="2" bgcolor="#D4D0C8"><strong> </strong><strong>NAMA PASIEN</strong></td>
  <td colspan="2" bgcolor="#D4D0C8"><div align="center"><strong>DEBET</strong></div></td>
  <td colspan="2" bgcolor="#D4D0C8"> <div align="center"><strong>KREDIT</strong></div></td>
     <td width="63" rowspan="2" bgcolor="#D4D0C8"><div align="center"><strong>ATM BERSAMA</strong></div></td>
  <td width="65" bgcolor="#D4D0C8"><div align="right"><strong> </strong></div></td><td width="66" rowspan="2" bgcolor="#D4D0C8"><div align="right"><strong> </strong></div>    <div align="right"><strong>JAMINAN</strong></div></td>
  <td rowspan="2">BULAT</td>
  <td rowspan="2">CHARGE</td>
  <td rowspan="2">TOTAL</td>
  <td rowspan="2" bgcolor="#D4D0C8"><strong>  </strong><strong>TYPE BAYAR</strong></td>
  <td width="174" rowspan="2" bgcolor="#D4D0C8"><strong> </strong><strong>PENJAMIN</strong></td>
  </tr>
   <tr>
  <td width="68" bgcolor="#D4D0C8"><div align="right"><strong>BCA</strong></div></td>
  <td width="68" bgcolor="#D4D0C8"><div align="right"><strong>MANDIRI</strong></div></td>
  <td width="63" bgcolor="#D4D0C8"><div align="right"><strong>BCA</strong></div></td>
  <td width="63" bgcolor="#D4D0C8"><div align="right"><strong>MANDIRI</strong></div></td>
     <td width="65" bgcolor="#D4D0C8"><div align="right"><strong>TUNAI</strong></div></td>
   </tr>
  <?
  $nomer=1;
    $kdjfkdjfd = mysql_query("SELECT * FROM kwitansirj WHERE  TglBayar='$Tgl' AND BlnBayar='$Bln' AND ThnBayar='$Thn' order by id desc");
   while($zz = mysql_fetch_array($kdjfkdjfd)){
  ?>
  <tr  valign="top" onClick="wCompare = window.open('x2q.php?id=<? echo $zz[id]; ?>', 
  'wCompare', 'width=380,height=200,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? echo "KWT:$zz[id]";  ?></div></td>
    <td><div align="center"><? echo $zz[NoPasien]; ?></div></td>
    <td><div align="left"><? echo strtoupper($zz[NamaPasien]); ?></div></td>
    <td><div align="right"><? 
	if($zz[TypeBayar]==1 || $zz[TypeBayar]==8 || $zz[TypeBayar]==11){
	echo number_format($zz[Db]);
	$to_1 = $to_1 + $zz[Db];
	}else{
	echo "-"; 
	} ?></div></td>
    <td><div align="right"><? 
 	if($zz[TypeBayar]==28){
	echo number_format($zz[Db]);
	$to_2 = $to_2 + $zz[Db];
	}else{
	echo "-"; 
	}
		 ?></div></td>
    <td><div align="right"><?
	if($zz[TypeBayar]==5 || $zz[TypeBayar]==25  || $zz[TypeBayar]==24){
	echo number_format($zz[Kk]-$zz[crg]);
	$to_3 = $to_3 + ($zz[Kk]-$zz[crg]);;
	}else{
	echo "-"; 
	} ?></div></td>
    <td><div align="right"><? if($zz[TypeBayar]==29 || $zz[TypeBayar]==30){
	echo number_format($zz[Kk]-$zz[crg]);
	$to_4 = $to_4 + ($zz[Kk]-$zz[crg]);
	}else{
	echo "-"; 
	}
		 ?></div></td>
		 <td><div align="center"><?
		 
		 ?></div></td>
		 <td><div align="right"><?
if($zz[TypeBayar]==26 || $zz[TypeBayar]==8 || $zz[TypeBayar]==24 || $zz[TypeBayar]==4){
echo number_format($zz[Tunai]);
	$to_5 = $to_5 + $zz[Tunai];
}else{
echo "-";
}
		 ?></div></td>
		 <td><div align="right"><?
		 if($zz[TypeBayar]==26 || $zz[TypeBayar]==25 || $zz[TypeBayar]==6
		 || $zz[TypeBayar]==11 || $zz[TypeBayar]==30){
echo number_format($zz[Jam]);
	$to_6 = $to_6 + $zz[Jam];
}else{
echo "-";
}
		 ?></div></td>
		 <td><div align="center"><?
		  $bulat = $zz[Bulat]-$zz[Asli]; 
 		  if($bulat<100 && $bulat>-100){
		  $bulat = $bulat;
		  }else{
		  $bulat=0;
		  } 
		 echo number_format($bulat); 
		 $tbul = $tbul + $bulat;
		  ?></div></td>
		  <td><div align="center">
		    <?
		 echo number_format($zz[crg]); 
		 $t_crg = $t_crg + $zz[crg];
		  ?>
		  </div></td>
		  <td><div align="center"><?
		  $tot = $zz[Db]+$zz[Kk]+$zz[Jam]+$zz[Tunai];
echo number_format($tot);
$tak = $tak + $tot;
		  ?></div></td>
    <td><div align="left"><? echo strtoupper($zz[NamaType]); ?></div></td>
    <td><div align="left"><? 
	if(!$zz[KodePer]){
	echo "None";
	}else{
	echo strtoupper($zz[NamaPer]);
	}  ?></div></td>
  </tr>
  <?
  $nomer++; }
 ?>
  <tr>
    <td colspan="4" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_1); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_2); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_3); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_4); ?></strong></div></td>
   <td bgcolor="#D4D0C8"><div align="center"></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_5); ?></strong></div></td> 
	<td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_6); ?></strong></div></td> 
	 
	 	<td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tbul); ?></strong></div></td> 
	 	<td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($t_crg); ?></strong></div></td> 
		<td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tak); ?></strong></div></td> 
 </tr>
  </table>
  </div> </td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
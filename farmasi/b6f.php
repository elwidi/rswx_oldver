<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($anak==3){
$kdjfkdjfkd_fkgjfkgjfk = mysql_query("SELECT * FROM jualobat2 WHERE JamTran='$NoResep'");
$ii = mysql_fetch_array($kdjfkdjfkd_fkgjfkgjfk);
//
$kdjkfdjdk_flfklgf = mysql_query("SELECT * FROM keluarmasukpasien WHERE MstKey='$ii[RegId]'");
$un = mysql_fetch_array($kdjkfdjdk_flfklgf);
}
?>
<html>
<head><script language="JavaScript">
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
<form target="_self">
<table width="1166" border="0" cellpadding="1" cellspacing="1"  >
<tr>
<td colspan="3"><div align="left">
	<?
  	if($a[Level]==1){
	       $file='../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../gambar/cust ser.gif';
		   }elseif($a[Level]==11){
		   $file='../gambar/farmasi.gif';
		   }elseif($a[Level]==112){
		   $file='../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../gambar/keuangan.gif';
		   }elseif($a[Level]==12){
		   $file='../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../gambar/poli.gif';
		    }elseif($a[Level]==16){
		   $file='../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../gambar/rm.gif';
		    }elseif($a[Level]==9){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
</div></td>
</tr>
<tr valign="top">
<td colspan="2"><span class="style1">HALAMAN RETUR RAWAT INAP
  </span>
  <div align="left">
<br />
<table width="270" border="0" cellpadding="2" cellspacing="2" class="style2">
<?
if($anak==3){
 ?>
<tr>
<td>TGL MASUK</td><td>:</td><td><div align="left"><?
echo "$un[TglMasuk]-$un[BlnMasuk]-$un[ThnMasuk]";
?></div></td>
</tr>
<tr>
<td>NO RM</td><td>:</td><td><div align="left"><?
echo $ii[NoPasien];
?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><?
echo strtoupper($ii[NamaPasien]); 
?></div></td>
</tr>
<?
}else{
?><tr>
<td width="126">NO TXN </td>
<td width="8">:</td>
<td width="274"><div align="left">
<input type="text" name="NoResep" maxlength="60" size="20" />
<input type="hidden" name="anak" value="3">
</div></td>
</tr>
<?
}
?>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Sort" name="dfdfd">
  <?
  if($anak==3){
  ?>
  <input type="button" name="kdjfkdjfkdf" value="Reset" onClick="location.href='b6f.php';" class="style1">
  <?
  }
  ?><input type="button" name="ffg" value="Kembali" onClick="location.href='index.php';">
  </div></td>
  </tr>
</table>
</div></td><td   valign="top">
<div align="left">
<?
if($anak==3){
?>
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tR>
<td width="18" bgcolor="#FFFF66"><strong>NO</strong></td>
<td width="203" bgcolor="#FFFF66"><strong>NAMA OBAT</strong></td>
<td width="42" bgcolor="#FFFF66"><div align="center"><strong>QTY</strong></div></td>
<td width="66" bgcolor="#FFFF66"><div align="right"><strong>HARGA</strong></div></td>
<td width="74" bgcolor="#FFFF66"><div align="right"><strong>TOTAL</strong></div></td><td width="44" bgcolor="#FFFF66">&nbsp;</td>
</tR>
<?
$nomer=1;
 $jdkfjkdjkdf = mysql_query("SELECT * FROM jualobat2 WHERE JamTran='$NoResep'");
while($nn = mysql_fetch_array($jdkfjkdjkdf)){
//
$idufiduifdjdkfd_Dfdf = mysql_query("SELECT id FROM retur_inap WHERE IdJual='$nn[id]'");
$nb= mysql_fetch_array($idufiduifdjdkfd_Dfdf);
//
$pc = $nomer%2;
if($nb[id]){
$warna='bgcolor="#FF6666"';
}elseif($pc==1){
$warna='';
}else{
$warna='bgcolor="#CCFFCC"';
}
?>
<tR   <? echo $warna; ?> valign="top"> 
<td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><?
echo $nn[NamaObat];
?></div></td>
<td><div align="center"><? echo number_format($nn[Qty]); ?></div></td>
<td><div align="right"><? echo number_format($nn[HargaBeli]);  ?></div></td>
<td><div align="right"><? echo number_format($nn[JmlHargaBeli]); ?></div></td>
<td onClick="wCompare3p90 = window.open('xu_3.php?NoResep=<? echo $NoResep; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare3p90', 'width=480,height=380,left=370,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3p90.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><div align="center">
	<?
	if($nb[id]){
	?>
	<input type="button" name="fgfg" value="Cek"  class="style2" onClick="wCompare3p90 = window.open('xu_3.php?NoResep=<? echo $NoResep; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare3p90', 'width=380,height=300,left=370,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3p90.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<?
	}else{
	?><em>
<a href="#"   style="text-decoration:none"><strong>Retur</strong></a>
</em><? } ?></div></td>
</tR>
<?
$toto = $toto + $nn[JmlHargaBeli];
?>
<? $nomer++; } ?><tR>
  <td colspan="4" bgcolor="#FFFF66"><div align="center"><strong>TOTAL</strong></div></td> 
  <td bgcolor="#FFFF66"><div align="right"><strong>
    <?
  echo number_format($toto); 
  ?>
  </strong></div></td>
</tR>
</table>
<? 
}
?>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
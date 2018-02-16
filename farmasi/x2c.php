<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==11){
?>
<html>
<head>
<style type="text/css">
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
	which.style.background='#00FFCC';
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
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
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
<tr>
<td colspan="2" valign="top">
 <div align="left">
   <span class="style1">HALAMAN  RETUR RESEP LUAR   </span>
   <table width="301" border="0" cellpadding="2" cellspacing="2" class="style1">
<?
$KDJFKDJFKD = mysql_query("SELECT * FROM rl_resep WHERE id='$NoResep'");
$ii = mysql_fetch_array($KDJFKDJFKD);
if($anak==3 && $ii[id]){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style1">
<tr>
<td width="100">NO TXN</td>
<td width="8">:</td>
<td width="143"><div align="left"><?
echo "$ii[NoResep]";
?></div></td>
</tr>
<tr>
  <td>NAMA  </td>
  <td>:</td>
  <td><div align="left"><? echo $ii[NamaPasien]; ?></div></td>
</tr>
<tr>
  <td>TGL</td>
  <td>:</td>
  <td><div align="left"><? echo $ii[Tgl]; ?></div></td>
</tr>
<tr>
  <td>JAM</td>
  <td>:</td>
  <td><div align="left"><? echo $ii[Jam]; ?></div></td>
</tr>
</table>
</div>
</td>
</tr>
<?

}else{
?> <tr>
 <td width="70">NO TXN</td>
 <td width="8">:</td>
 <td width="206"><div align="left">
 <input name="NoResep" type="text" class="style1" size="20" maxlength="30" />
 <input type="hidden" name="anak" value="3">
 </div></td>
 </tr>
 <? } ?>
 <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <tr>
   <td colspan="3"><div align="left">
   <input type="submit" value="Proses" name="fgfg" class="style1">
   <?
   if($anak==3){
   ?>
   <input type="button" name="ffgf" value="Reset" onClick="location.href='x2.php';" class="style1">
   <?
   }
   ?>
   <input type="button" name="fkjhfjgjkf" value="Cetak" onClick="location.href='cre.php?RegId=<? echo $ii[NoResep]; ?>';" class="style1">
   <input type="button" name="fkjhfjgjkf" value="Kembali" onClick="location.href='index.php';" class="style1">
   </div></td>
   </tr>
 </table>
 </div>
</td><td width="901"   valign="top" ><div align="left">
<?
if($anak==3 && $NoResep!=''){
?><table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="18" bgcolor="#FFFF66"><strong>NO</strong></td>
<td width="262" bgcolor="#FFFF66"><strong>NAMA OBAT</strong></td>
<td width="55" bgcolor="#FFFF66"><div align="center"><strong>QTY</strong></div></td>
<td width="87" bgcolor="#FFFF66"><div align="right"><strong>HARGA</strong></div></td>
<td width="68" bgcolor="#FFFF66"><div align="right"><strong>TOTAL</strong></div></td>
<td width="49">&nbsp;</td>
<td>JM RET</td><td>TOT RET</td>
</tr>
<?
$nomer=1;
 $kdjfkdjfkd = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]'");
while($up = mysql_fetch_array($kdjfkdjfkd)){
$idufiduifdjdkfd_Dfdf = mysql_query("SELECT * FROM retur_inap2 WHERE IdJual='$up[id]'");
$nb= mysql_fetch_array($idufiduifdjdkfd_Dfdf);
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
<td><div align="left"><? echo $up[NamaObat]; ?></div></td>
<td><div align="center"><? echo $up[Qty]; ?></div></td>
<td><div align="right"><? echo number_format($up[Harga]); ?></div></td>
<td><div align="right"><? echo number_format($up[JumlahHarga]); 
$to = $to + $up[JumlahHarga];

?></div></td>
<td   ><div align="center">
	<?
	if($up[stat]!=0){
	//echo "Rck : $up[stat]";
	}elseif($nb[id]){
	?>
	<input type="button" name="fgfg" value="Cek"  class="style2" onClick="wCompare3p90 = window.open('xu_3z.php?NoResep=<? echo $NoResep; ?>&IdDetil=<? echo $up[id]; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare3p90', 'width=380,height=300,left=370,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3p90.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<?
	}else{
	?><em>
<a href="#" onClick="wCompare3p90_0 = window.open('xu_3z.php?NoResep=<? echo $NoResep; ?>&id=<? echo $id; ?>&IdDetil=<? echo $up[id]; ?>', 
  'wCompare3p90_0', 'width=380,height=300,left=370,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3p90_0.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none"><strong>Retur</strong></a>
</em><? } ?></div></td>
<TD><div align="center"><? echo number_format($nb[Qty]); ?></div></TD>
<TD><div align="center"><? echo number_format($nb[Total]); 
 
$teta = $teta +$nb[Total];
?></div></TD>
</tr>

<?
$nomer++; } ?><tr>
  <td colspan="7" bgcolor="#FFFF66"><div align="center">TOT</div></td>
  <TD><div align="right"><?
  echo number_format($teta);
  ?></div></TD>
  </tr>
</table>
<? } ?>
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}else{

}?>
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($anak==10){
$kskjdksjksjs = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien'");
}else{
$kskjdksjksjs = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien'");
}
$ya = mysql_fetch_array($kskjdksjksjs);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #000099;
}
-->
</style><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
</head>
<body>
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
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
<td colspan="3" class="style2">HALAMAN RETUR RAWAT JALAN </td>
</tr>
<tr>
<td height="70" colspan="2" valign="top">
<div align="left">
<table width="414" border="0" cellpadding="2" cellspacing="2"  class="style1">
<?
if($mas=='supran'){
?><tr>
<td width="121">NAMA PASIEN</td>
<td width="8">:</td>
<td width="263"><div align="left">
<input name="NamaPasien" type="text" class="style1" size="20" maxlength="100">
<input type="hidden" name="anak" value="3">
</div></td>
</tr>
<? }else{?>
<tr>
<td width="121">NO RM </td>
<td width="8">:</td>
<td width="263"><div align="left">
<input name="NoPasien" type="text" class="style1" size="20" maxlength="100">
<input type="hidden" name="anak" value="10">
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
  <input type="submit" value="Sort" name="fgffg" class="style1">
  <?
  if($ya[id]){
  ?><input type="button" name="dfdfd" value="Input Resep" onClick="location.href='wahit.php?id=<? echo $ya[id]; ?>';" class="style1">
  <? } ?>
  <input type="button" name="dfdfd" value="Selesai" onClick="location.href='index.php';" class="style1">
  </div></td>
  </tr>
</table>
</div>
</td><td valign="top" width="1061"><div align="left">
 <?
 if($anak==3 || $anak==10){
 ?>
 <table width="563" border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
 <td width="24" bgcolor="#AACAB5"><div align="center"><strong>NO</strong></div></td>
 <td width="45" bgcolor="#AACAB5"><strong>TGL MASUK</strong></td>
  <td width="45" bgcolor="#AACAB5"><strong>NO RM</strong></td>
 <td width="321" bgcolor="#AACAB5"><strong>NAMA PASIEN</strong></td>
 <td width="53" bgcolor="#AACAB5"><div align="center"><strong>ITEM</strong></div></td>
  </tr>
 <?
 $nomer=1;
  if($anak==10){
 $djfkdjkd_Dfd = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien'");
  }else{
 $djfkdjkd_Dfd = mysql_query("SELECT * FROM rwtjalan WHERE NamaPasien LIKE '$NamaPasien%' limit 0,50");
 }
 while($xx = mysql_fetch_array($djfkdjkd_Dfd)){
 $ksiksisk = mysql_query("SELECT COUNT(id) as jj FROM rj_resep WHERE IdPasien='$xx[id]'");
$ub = mysql_fetch_array($ksiksisk);
//
$ksiks_SDs = mysql_query("SELECT COUNT(id) AS hh FROM returobatjalan WHERE IdPasien='$xx[id]'");
$ih = mysql_fetch_array($ksiks_SDs);
//
if($ih[hh]>0){
$warna='bgcolor="#FFCCCC"';
}else{
$warna='';
}
if($ub[jj]>0){
?>
 <tr <? echo $warna; ?>  onClick="wCompare = window.open('e3mb.php?id=<? echo $xx[id]; ?>', 
  'wCompare', 'width=880,height=500,left=270,Top=189, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
   <td><div align="center"><? echo $nomer; ?></div></td>
   <td><div align="right"><? echo "$xx[TglMasuk]-$xx[BlnMasuk]-$xx[ThnMasuk]"; ?></div></td>
   <td><div align="left"><? echo $xx[NoPasien]; ?></div></td>
   <td><div align="left"><? echo strtoupper($xx[NamaPasien]); ?></div></td>
   <td><div align="left"><? 
echo $ub[jj];
   ?></div></td>
  </tr>
 <?
 $nomer++; 
 } } ?>
 <tr>
   <td colspan="4" bgcolor="#AACAB5">&nbsp;</td>
   <td bgcolor="#AACAB5">&nbsp;</td>
 </tr>
 </table>
 <?
 }
 ?>
 </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
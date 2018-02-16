<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
$kdkjdkjdkjf_dfkdld2  = mysql_query("SELECT * FROM polog77x WHERE IdPo='$id'");
$vg2 = mysql_fetch_array($kdkjdkjdkjf_dfkdld2);
$kdkjdkjdkjf_dfkdld  = mysql_query("SELECT * FROM fakturpo WHERE IdPo='$vg2[id]'");
$vg = mysql_fetch_array($kdkjdkjdkjf_dfkdld);
//secho " fgfg $vg[id] ";
if($kk[Stak]==2){
header("Location:./de7.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11  || $a[Level]==98){

?>
<html>
<head>
<?
include "s12_09.php";
?>
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
	which.style.background='#FFFF00';
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
<form action="2f_Ffdf.php">
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td colspan="3"><div align="left">
<?
	if($dik_dimas[delapanbelas]==1){
$file='../gambar/log_far.gif';
   	}elseif($a[Level]==1){
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
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="136"><span class="style1">NoPo</span></td>
<td width="11">:</td>
<td width="662"><div align="left">
<?
echo "$kk[NoPo]";
?> || 
<a href="#"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd_11093d = window.open('x9_119.php?id=<? echo $id; ?>', 
  'wComparecdd_11093d', 'width=400,height=150,left=270,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd_11093d.focus();" style="text-decoration:none"><strong>
UPDATE NO PERMINTAAN </strong></a>
</div></td>
</tr>
<tr>
<td>Supplier</td>
<td>:</td><td><div align="left">
  <p>
    <?
	if($para==22){
	
	}else{
$oksos_sds = mysql_query("SELECT * FROM supplier WHERE id='$kk[IdSupplier]'");
$bv = mysql_fetch_array($oksos_sds);
echo ucfirst(strtolower($bv[NamaSuplier]));
?> <a onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="x23.php?id=<? echo $id; ?>&para=22" style="text-decoration:none"><strong>Ganti</strong></a>
<input type="hidden"  name="IdSupplier" value="<? echo $kk[IdSupplier]; ?>">
 <?
} ?> 
    
    <?
	if($para==22){
	?>
    <input type="text" class="style123" id="suggest" />
	<? } ?>
  ||  <font color="#0000FF"><i><? 
  $kjksd_Sds = mysql_query("SELECT * FROM suplier_akunt WHERE IdSupplier='$kk[IdSupplier]'");
  $iin = mysql_fetch_array($kjksd_Sds);
  echo " || ($iin[KodeAkunt] ) $iin[NamaAkunt]"; 
  ?></i></font></div></td> 
</tr>
<?
/*
if($kk[IdSupplier]>0){
?>
<tr>
<td>Jenis Txn </td>
<td>:</td><td><div align="left">
<select name="Jenis" class="style1">
  <option value="<? echo $kk[Jenis]; ?>"><?  if($kk[Jenis]==1){
  echo "Hutang";
  }else{
  echo "Cash";
  }
     ?></option>
 <option value="0">Cash</option>
<option value="1">Hutang</option>
</select>
</div></td>
</tr>
<?
}*/
?>
<tr>
  <td>Tgl Po</td>
  <td>:</td>
  <td><div align="left">
  <input name="Tgl" type="text" class="style1" value="<? echo $kk[Tgl]; ?>" size="2" maxlength="2"> - 
  <input name="Bln" type="text" class="style1"  value="<? echo $kk[Bln]; ?>" size="2" maxlength="2"> -
  <input name="Thn" type="text" class="style1"  value="<? echo $kk[Thn]; ?>" size="4" maxlength="4"> 
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
</tr>
<?
if($kk[Ppn]==1){
$warna=' bgcolor="#CCCCCC"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>>
<td>Ppn</td><td>:</td><td><div align="left">
<input  type="radio" name="dfd" value="1" <? if($kk[Ppn]==1){ ?>checked="checked"  <? } ?>onClick="location.href='s_123.php?id=<? echo $id; ?>&Ppn=1';">Ya
<input  type="radio" name="dfd" value="1" <? if($kk[Ppn]==0){ ?>checked="checked"  <? } ?> onClick="location.href='s_123.php?id=<? echo $id; ?>&Ppn=0';">Tidak
</div></td>
</tr>
<?
if($kk[Materai]==3000){
$bentuk=' bgcolor="#FF99CC"';
}elseif($kk[Materai]==6000){
$bentuk=' bgcolor="#C7FEEC"';
}else{
$bentuk='';
}
?>
<tr  <? echo $bentuk; ?>>
<td>Materai</td><td>:</td><td><div align="left">
<input type="radio" name="Materai" value="3000" <? if($kk[Materai]==3000){ ?> checked="checked"<? } ?>onClick="location.href='s_123.php?hari=sabar&id=<? echo $id; ?>&Materai=3000';">3000
 
<input type="radio" name="Materai" <? if($kk[Materai]==6000){ ?> checked="checked"<? } ?> value="6000" onClick="location.href='s_123.php?hari=sabar&id=<? echo $id; ?>&Materai=6000';">6000
<input type="radio" <? if($kk[Materai]==0){ ?> checked="checked"<? } ?> name="Materai" value="0"   onClick="location.href='s_123.php?hari=sabar&id=<? echo $id; ?>&Materai=0';">None
</div></td>
</tr>
<?
if($kk[Cek]==2){
?>
 <tr>
 <td colspan="3"><div align="left">
 Data Sudah Dicek Bu Nova
 : <? echo "$kk[TglCek]"; ?></div></td>
 </tr> 
 <? } ?>
<tr>
  <td colspan="3" valign="top">&nbsp;</td>
  </tr>
<?
if($kk[Jenis]==1){
$rupa=' bgcolor="#A8FD99"';
}else{
$rupa='';
}
?><tr <? echo $rupa; ?>  >
  <td colspan="3" valign="top"><div align="left">
  <input type="hidden" name="kembang" value="<? echo $kembang; ?>" >
  <input name="dd" type="submit" class="style1" value="Update" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <input name="fgf" type="button" class="style1"  onClick="wCompare = window.open('30o.php?iin=bca&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=400,left=370,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="IsibBarang">
	<?
	 /*  $fffkkkfg = mysql_query("SELECT COUNT(id) AS mm FROM PoDetil77 WHERE IdPo77='$id'");
		$tt = mysql_fetch_array($fffkkkfg);
	?><input name="fgf" type="button" class="style1"  onClick="wComparecddd = window.open('c233.php?iin=bca&id=<? echo $id; ?>', 
  'wComparecddd', 'width=580,height=300,left=370,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecddd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Cek Data : <? echo $tt[mm]; ?>">
	 */ ?>
   
     
    <input name="fgf" type="button" class="style1" onClick="location.href='XW_9.php';" value="Order Farmasi" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
    <input name="fgf" type="button" class="style1" onClick="location.href='semoga_ela_cepet_sembuh.php';" value="Order Gudang" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <input <? if($dik_dimas[delapanbelas]==1){ }else{ ?> disabled="disabled"<? } ?> name="fgf" type="button" class="style1"  onClick="wComparecdd_d = window.open('a10_m.php?iin=bca&id=<? echo $id; ?>', 
  'wComparecdd_d', 'width=1200,height=300,left=70,Top=186,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd_d.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Follow Up Po">
  <input type="button" name="fgfgf" value="Cetak" onClick="location.href='makan_ubi_mentah_enak.php?id=<? echo $id; ?>';" class="style1"><?
  if($vg[id]){
  ?>
  <input type="button" name="fgfgf" value="Cetak Bukti" onClick="wComparecdd1209aj_0_d = window.open('dimas_mau_tk.php?dimas=<? echo $vg[id]; ?>&id=<? echo $id; ?>&anak=desa', 
  'wComparecdd1209aj_0_d', 'width=870,height=450,left=270,Top=186,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd1209aj_0_d.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <? 
  }
  ?>
  <input name="fgf" type="button" class="style1" onClick="location.href='index.php';" value="Kembali" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  </div></td>
  </tr>
  <?
  $dkjfdjkfdfk_0000 =  mysql_query("SELECT Stak FROM   hirarki_apt WHERE id=1");
$h_apa = mysql_fetch_array($dkjfdjkfdfk_0000);

  if($kk[Cek]!=2 &&  $h_apa[Stak]==0){
  ?>
  <tr>
  <td colspan="3" bgcolor="#FFCCCC"><div align="left">
  Data Belum Diperiksa Ibu Nova
  </div></td>
  </tr>
  <? 
  }else{
  ?>
   
  <? } ?>
<tr>
  <td colspan="3" valign="top"><div align="left">
  <iframe src="q2x23.php?id=<? echo $id; ?>" width="800" height="300" frameborder="0"></iframe>
  </div></td>
</tr>
 </table></div>
</td>
</tr>
</table>
  </form>
</div>
</body>
</html>
<? 
} ?>
<?
session_start();
include "../konek.php";
include "../ceke.php";
//header('Refresh: 2');
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66CC00';
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
<tr>
<td width="681" colspan="3"><div align="left" class="style1">
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
<form target="_self">
<table border="0" cellspacing="2" class="style2">
<tr>
<td width="98">NO PO</td>
<td width="8">:</td>
<td width="903"><div align="left">
<input name="NoPo" type="text" class="style2" size="30" maxlength="50">
<input type="hidden" name="hari" value="ok">
|| 
<input name="fgf" type="submit" class="style2" value="Submit">
 <? if($dik_dimas[delapanbelas]==1){ }else{ ?>
 <input name="ffg" type="button" class="style2" onClick="location.href='xsw_99.php';" value="Po Baru">
<? } ?><input name="ffg2" type="button" class="style2" onClick="location.href='XW_9.php';" value="Po Farmasi" style="background:#CC99CC"> 
  
<input name="ffg2"  disabled="disabled" type="button" class="style2" onClick="location.href='semoga_ela_cepet_sembuh.php';" value="Po Far.Gudang"  >
 
 <input name="fgfgfgf" type="button" class="style4" style="background:#FFFF00" onClick="location.href='minum_kopi_makan_gorengan.php';" value="List Faktur">
<input  type="button" value="Cek Periode" name="fgfg2" class="style4" style="background:#99FF66"    onClick="wCompare_0834m = window.open('../Radiologi/kCik_09.php?kaps=2&dimasx=sayang', 
  'wCompare_0834m', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0834m.focus();" >
<input name="ffg" type="button" class="style2" onClick="location.href='index.php';" value="Kembali">
</div></td>
</tr>
 </table>
</form>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="1018" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="20" bgcolor="#993333"><span class="style3">NO</span></td>
<td width="177" bgcolor="#993333"><span class="style3">NO PO </span></td>
<td width="87" bgcolor="#993333"><span class="style3">TGL PERMINTAAN </span></td>
<td width="167" bgcolor="#993333"><span class="style3">SUPPLIER</span></td>
<td width="58" bgcolor="#993333"><div align="center" class="style3">ITEM</div></td>
<td width="45" bgcolor="#0000CC"><span class="style3">FAKTUR</span></td>
<td width="45" bgcolor="#0000CC"><span class="style3">REFF</span></td>
<td  colspan="3" bgcolor="#993333"><div align="left" class="style3">KAIT FARMASI</div></td>
</tr>
<?
$nomer=1;
if($hari=='taqwa'){
$kkm = mysql_query("SELECT * FROM polog77x WHERE Tgl>=$tgl1 AND Tgl<=$tgl2 AND Bln=$bln1 AND Thn=$thn1");  
}elseif($hari=='doa'){
$kkm = mysql_query("SELECT * FROM polog77x WHERE Cek=2 AND  NoPo LIKE '$NoPo%' ORDER BY id desc LIMIT 0,200");  
 }elseif($hari=='gondrong'){
$kkm = mysql_query("SELECT * FROM polog77x WHERE Stak=2 AND  NoPo LIKE '$NoPo%' ORDER BY id desc LIMIT 0,200");
}else{
 $kkm = mysql_query("SELECT * FROM polog77x WHERE  NoPo LIKE '%$NoPo%' ORDER BY id desc LIMIT 0,200"); 
  }
 while($mm = mysql_fetch_array($kkm)){
 if($Bln!=$mm[Bln]){
 $nomer=1;
 }
 $hb= $nomer%2;
 if($hb==1){
 $warna='bgcolor="#CEFDE2"';
 }else{
 $warna='';
 }
 ?><tr <? echo $warna;  ?>   > 
<td><div align="center"><? echo $nomer; 
 //echo "$dik_dimas[sembilanbelas]"; ?></div></td>
<td <? if($mm[Jenis]==1){ ?> bgcolor="#CCFF99"<? } ?>><div align="left"><?
//
 //
$uah ="$nomer/$pck[1]/LOG-FAR/$pck[3]";
$pck = explode("/",$mm[NoPo]);
// $pakas = mysql_query("UPDATE polog77x SET NoPo='$uah' WHERE  id='$mm[id]'");
echo $mm[NoPo];
  ?></div></td>
<td><div align="left"><? if($mm[Cek]==2){
?><font color="#0000CC"><b><i><? echo "$mm[Tgl]-$mm[Bln]-$mm[Thn]";
?></i></b></font><?
}else{
echo "$mm[Tgl]-$mm[Bln]-$mm[Thn]";
} ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($mm[NamaSupplier])); ?></div></td>
<td><div align="center"><? 
   $fffkkkfg = mysql_query("SELECT COUNT(id) AS mm FROM podetil77x WHERE IdPox='$mm[id]'");
		$tt = mysql_fetch_array($fffkkkfg); 
		echo $tt[mm]; ?></div></td>
 		<td bgcolor="#FFFF99"><div align="center"><?
		$kdjfkdfd_Dfd = mysql_query("SELECT COUNT(id) as jj FROM fakturpo WHERE IdPo='$mm[id]'");
		$hap= mysql_fetch_array($kdjfkdfd_Dfd);
		if($hap[jj]>0){
		echo $hap[jj]; 
		}else{
		echo ".";
		} ?></div></td>
				<td><div align="center"><?
	$pfd = explode("/",$mm[NoPo]);
 	$pke ="$nomer/$pfd[1]/$pfd[2]/$pfd[3]";
		if($pfd[0]>0){
		$plea= "$nomer-$mm[Bln]-$mm[Thn]";
 //	$ddf = mysql_query("UPDATE polog77x SET KeyID='$plea',NoPo='$pke' WHERE id='$mm[id]'");
 echo $mm[KeyID];
	
	}else{
	echo "-";
	}  	?></div></td>
<td width="278"><div align="left"><?
$jah = mysql_query("SELECT NoPo FROM polog77 WHERE id='$mm[IdPo]'");
$ba = mysql_fetch_array($jah);
echo $ba[NoPo];  
?></div></td>
<td width="93"  onClick="wComparecdd1209aj_0_d = window.open('dimas_mau_tk.php?id=<? echo $mm[id]; ?>&anak=desa', 
  'wComparecdd1209aj_0_d', 'width=870,height=450,left=270,Top=186,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd1209aj_0_d.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >Ctk Bukti</td>
<td  onClick="wComparecddd = window.open('cX3.php?kembang=<? echo $kembang; ?>&id=<? echo $mm[id]; ?>', 
  'wComparecddd', 'width=980,height=500,left=370,Top=56,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecddd.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  width="77">TerimaBrgDtg</td>
</tr>
<?
 $nomer++;
 $Bln = $mm[Bln];
 } ?><tr>
  <td colspan="9" bgcolor="#993333">&nbsp;</td>
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
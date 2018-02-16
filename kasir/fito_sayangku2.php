<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $makan = $_GET [ "makan" ];
  $aku = $_GET [ "aku" ];
//  header('Refresh: 2');

  $kambing = $_GET [ "kambing" ];
$NamaPasien = $_GET [ "NamaPasien" ];
$NoPasien = $_GET [ "NoPasien" ];
$KeyID=$_GET["KeyID"];
$id = $_GET [ "id" ];
$anak = $_GET["anak"];
$Var1= $_GET["Var1"];
$NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
 ?>
</head><body background="../gambar/bag.jpg">
<div align="center">
<script language="JavaScript">
	
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
<style type="text/css">
<!--
.style6 {font-size: 11px;font-family: Arial, Helvetica, sans-serif;}
.style16 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style17 {color: #FFFFFF}
.style19 {color: #FFFF00; }
.style20 {color: #FFFFFF; font-weight: bold; }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head><body background="../gambar/bag.jpg">
<div align="center">
 
<div align="left">
  <table width="1210" border="0" cellpadding="2" cellspacing="2">
    <tr valign="top">
      <td width="1340" colspan="3" bgcolor="#5ABB52" >
        <div align="left">
 	<?
if($a[KodeBagian]==6){
$file='../gambar/ok.gif';
 }elseif($a[KodeBagian]==29){
 	       $file='../gambar/ugd.gif';
}elseif($a[KodeBagian]==21){
	       $file='../gambar/cs.gif';
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
		    }elseif($a[Level]==10){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
          </div></td></tr>
   <tr>
   <TR>
   <TD colspan="3" bgcolor="#CCCCCC"><div align="left" class="style16">
LIST HALAMAN PASIEN RAWAT INAP
   <br>
   <?
   echo "LEVEL : $a[Level]";
   ?></div></TD>
   </TR> 
   <td colspan="12" valign="top">
    <form target="_self">
	<table width="1125" border="0" cellpadding="0" cellspacing="0" class="style6">
	<?
	$s = $_GET["s"];
	if($s==3){
	$Var1="NamaPasien";
	}else{
	$Var1="NoPasien";	
	}
	?>
	<tr>
	<td width="99" height="26"><?
	echo $Var1; 
	?></td>
	<td width="8">:</td>
	<td width="996"><div align="left">
	<input type="text" name="<? echo $Var1; ?>" maxlength="20" size="20" class="style6">
	<input type="hidden" name="Var1" value="<? echo $Var1; ?>">
	<input  type="hidden" name="anak" value="3">
	<input type="hidden" name="s" value="<? echo $s; ?>">
	</div></td>
	</tr>
	<tr>
	  <td colspan="3"><div align="left">
	  <input type="submit" value="Sort" name="fgf" class="style6"  style="background:#CCFFCC">
	 <?
	 if($s==3){
	 ?><input type="button" name="fgf" value="Cr Bds NoPasien" onClick="location.href='fito_sayangku.php';" class="style6" 
	  style="background:#FFFF66"><?
	 }else{
	 ?> <input type="button" name="fgf" value="Cr Bds NamaPasien" onClick="location.href='fito_sayangku.php?s=3';" class="style6"   style="background:#CCFFCC">
	 <? } ?>
	  <input type="button" name="dfdfdf" value="List Rinap" onClick="location.href='../Daftar/fito_sayangku.php';"  class="style6"  style="background:#66CC00"  >
	  <input type="button" name="fgf" value="Kembali" onClick="location.href='../3w.php';" class="style6"   style="background:#CCFFCC">
	  </div></td>
	  </tr>
	</table>
	</form>
	</td>
   </tr>
    <tr valign="top">
      <td colspan="3"><div align="left">
	  <table border="0" cellpadding="2" cellspacing="2" class="style6">
	  <tr bgcolor="#FAEE0E" >
	  <td width="18" rowspan="2" bgcolor="#666666"><span class="style17">NO </span></td>
	  <td width="58" rowspan="2" bgcolor="#666666"><span class="style17">NO RM  </span></td>
	  <td width="152" rowspan="2" bgcolor="#666666"><span class="style17">NAMA PASIEN  </span></td>
	  <td   colspan="4" bgcolor="#666666"> <div align="center" class="style19">JML RESEP</div></td>
	  <td colspan="3" bgcolor="#666666"><div align="center"><span class="style17">DIAGNOSA</span></div></td>
	  <td width="60" rowspan="2" bgcolor="#666666"> <span class="style17">KELAS</span></td>
	  <td colspan="3" bgcolor="#666666"> <div align="center"><strong><span class="style17"> MASUK   </span></strong></div></td>
	  <td colspan="2" bgcolor="#666666">    <div align="center" class="style17">RUANGAN </div></td>
	  <td width="42" rowspan="2" bgcolor="#666666"> <span class="style17">NO BED </span></td>
	  <td width="155" rowspan="2" bgcolor="#666666"> <span class="style17">DOKTER</span></td>
   <td width="130" rowspan="2" bgcolor="#666666"> <span class="style17">PENJAMIN</span></td>
	  <td colspan="2" bgcolor="#666666"><span class="style17">KELUAR   </span></td>
	  <td width="133" rowspan="2" bgcolor="#666666"> <span class="style17">PENDAFTARAN</span></td>
	   <td width="133" rowspan="2" bgcolor="#666666"> <span class="style17">DIET</span></td
	  ></tr>
	   <tr bgcolor="#FAEE0E" >
	  <td width="60" bgcolor="#666666"><div align="center" class="style19">APT </div></td>
	    <td width="60" bgcolor="#666666"><div align="center" class="style19">NON APT </div></td>
		 <td width="60" bgcolor="#666666"><div align="center" class="style19">RETUR </div></td>
		 	 <td width="60" bgcolor="#666666"><div align="center" class="style19">OBT<br>
			 KMBR </div></td>
	  <td width="60" bgcolor="#666666"><span class="style17">AWAL </span></td>
	    <td width="60" bgcolor="#666666"><span class="style17">TENGAH </span></td>
	  <td width="60" bgcolor="#666666"><span class="style17">AKHIR </span></td>
	  <td width="60" bgcolor="#666666"><div align="center" class="style20">TGL </div></td>
	  <td width="91" bgcolor="#666666"><div align="center" class="style20">JAM </div></td>
	   <td width="91" bgcolor="#666666"><div align="center" class="style20">LAMA <br>
	   Bln : Hari</div></td>
	  <td width="156" bgcolor="#666666"><span class="style17">NAMA </span></td>
	  <td width="42" bgcolor="#666666"><span class="style17">NO  </span></td>
	   <td width="74" bgcolor="#666666"><span class="style17">TGL </span></td>
	  <td width="59" bgcolor="#666666"><span class="style17">JAM </span></td>
	  </tr>
	  <?
	  $nomer=1;
	  
	 if($Var1=='NoPasien' && $anak==3){
	   $kdjfkdjfkd =  mysql_query("SELECT * FROM keluarmasukpasien WHERE NoPasien ='$NoPasien' ORDER BY id DESC LIMIT 0,50");
	  }elseif($Var1=='NamaPasien'  && $anak==3){
	  $kdjfkdjfkd =  mysql_query("SELECT * FROM keluarmasukpasien WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY id DESC LIMIT 0,50");
	  }else{
	  $kdjfkdjfkd =  mysql_query("SELECT * FROM keluarmasukpasien WHERE TglKeluar=0 AND JamKeluar=0 ORDER BY id DESC");
 }
	  while($nn = mysql_fetch_array($kdjfkdjfkd)){
	$splo = explode("-",$nn[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
$pre = $nomer%2;
if($pre==1){
$warna='bgcolor="#CEFCBF" valign="top"';
 }else{
$warna=' valign="top" ';
}
if($j[NamaKelas]=='kaber'){
if($a[Level]==98){
?><tr <? echo $warna; ?> onClick="wCompare_01bz = window.open('../Kasir/x10_m.php?id=<? echo $nn[id]; ?>', 
  'wCompare_01bz', 'width=580,height=300,left=270,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01bz.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    ><?
}elseif($a[Level]==91 ||  $a[Level]==3 || $a[Level]==112){
?> <tr <? echo $warna;  ?> onClick="location.href='../Kasir/sabar_itu_baik.php?id=<? echo $nn[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
<? 
 }elseif($a[Level]==91 || $a[Level]==16){
 ?>
 <tr <? echo $warna;  ?> onClick="location.href='../Radiologi/sabar_itu_baik.php?id=<? echo $nn[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
 <? }elseif($a[Level]==11){
 ?>
 <tr <? echo $warna;  ?> onClick="location.href='../Farmasi/nando.php?id=<? echo $nn[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
 <? }elseif($a[Level]==91 || $a[Level]==12){
 ?>
 <tr <? echo $warna;  ?> onClick="location.href='../Lab/h.php?id=<? echo $nn[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > 
 <?
 }else{ ?> 
	  <tr   <? echo $warna;?> onClick="wCompare = window.open('../Daftar/txn/h2.php?id=<? echo $nn[id]; ?>', 
  'wCompare', 'width=880,height=130,left=470,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<? } ?><td ><div align="center"><? echo $nomer; ?></div></td>
	  <td><div align="left"><? echo $nn[NoPasien];?></div></td>
	  <td><div align="left"><? echo strtoupper($nn[NamaPasien]); 
	  //
	  $jsujsuj = mysql_query("SELECT COUNT(id) AS hh FROM transfer WHERE MstKey='$nn[id]'");
	  $jm = mysql_fetch_array($jsujsuj);
	  if($jm[hh]>0){?> &nbsp; <font color="#999999"><i><?
echo "($jm[hh])";	  ?></i></font><? } 
	  //
	  ?></div></td><?
	  $kdikd_sds = mysql_query("SELECT COUNT(id) AS hh FROM ri_resep WHERE IdPasien='$nn[id]' and IdUnit=23");
	  $bb = mysql_fetch_array($kdikd_sds);
	  $kdikd_sdsx = mysql_query("SELECT COUNT(id) AS hh FROM ri_resep WHERE IdPasien='$nn[id]' and IdUnit!=23");
	  $ff_3 = mysql_fetch_array($kdikd_sdsx);
 	  ?>
	  <td <? if($bb[hh]>0){ ?> bgcolor="#FFFFCC" <?  } ?>><div align="center"><?
		  echo $bb[hh];
 	  ?></div></td>
	  <td <? if($ff_3[hh]>0){ ?> bgcolor="#FFCCFF" <? } ?>><div align="center"><?
		  echo $ff_3[hh];
 	  ?></div></td>
	  <td><div align="center"><? 
	  $mjmjdmdjm  = mysql_query("SELECT COUNT(id) AS kk FROM retur_inap WHERE IdPasien='$nn[id]'");
	  $mps =  mysql_fetch_array($mjmjdmdjm);
	 if($mps[kk]>0){
	  echo $mps[kk]; 
	 }else{
	 echo "-";
	 }  ?></div></td>
	 <td><div align="center"><?
	 $sisi=0;
	 $jsus_sdds = mysql_query("SELECT KodeObat,JamTran FROM jualobat2 WHERE RegId='$nn[MstKey]' order by KodeObat");
	while($vv = mysql_fetch_array($jsus_sdds)){
	if($KodeObat==$vv[KodeObat]){
	//echo " $vv[JamTran]<br>";
	$sisi++;
	}
	 
	$KodeObat=$vv[KodeObat]; } echo $sisi;   ?></div></td>
	  <td bgcolor="#99FF66"><div align="left"><?
	  $jsuj_s= mysql_query("SELECT Diagnosa,id FROM icd_ri WHERE IdPasien='$nn[id]'");
	  $bo = mysql_fetch_array($jsuj_s);
echo strtoupper($bo[Diagnosa]);
	  ?></div></td>
	  <td><div align="left"><?
	  $jsuj_s3X= mysql_query("SELECT Diagnosa,KodeIcd FROM icd_ri2 WHERE IdPasien='$nn[id]' AND id!='$bo[id]'");
	  while($bo3X = mysql_fetch_array($jsuj_s3X)){
echo strtoupper($bo3X[Diagnosa]); echo ",";
}  
	  ?></div></td>
	  <td><div align="left"><?
	  $jsuj_s3= mysql_query("SELECT Diagnosa,KodeIcd FROM icd_ri WHERE IdPasien='$nn[id]' AND id!='$bo[id]'");
	  while($bo3 = mysql_fetch_array($jsuj_s3)){
echo strtoupper($bo3[Diagnosa]); echo ",";
}  
	  ?></div></td>
	  <td bgcolor="#FFCC99"><div align="center"><?
	  echo $j[NamaKelas];
	  ?></div></td>
	  <td><div align="left"><? echo "$nn[TglMasuk]-$nn[BlnMasuk]-$nn[ThnMasuk]"; ?></div></td>
	  <td><div align="center"><? echo $nn[JamMasuk]; ?></div></td>
<td  bgcolor="#FFFFFF"><div align="center"><? 
if($nn[TglKeluar]==0){
	$birth = gregoriantojd($nn[BlnMasuk],$nn[TglMasuk],$nn[ThnMasuk]);
 $cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
 $Usio = ($cal['year']-1);
 $BlnIm = ($cal['month']-1);
 $Har = ($cal['day']-1);
//echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
 $ujuka = "$BlnIm :$Har ";
}else{

}
echo $ujuka; 
?></div></td>
	  <td><div align="left"><? echo strtoupper($j[NamaRuangan]); ?></div></td>
	  	  <td><div align="center"><? echo strtoupper($j[NoRuangan]); ?></div></td>
	  	  <td><div align="center"><? echo strtoupper($j[NoBed]); ?></div></td>
		  <td><div align="left"><? echo strtoupper($nn[KetDokter]);
		  $duj_0 = mysql_query("SELECT COUNT(id) as jj FROM tambahdokter WHERE IdPasien='$nn[id]'");
		  $is = mysql_fetch_array($duj_0);
if($is[jj]>0){
?> <font color="#666666"> <i> ( <? echo $is[jj]; ?> ) </i></font><?
}
		   ?></div></td>
		  <td><div align="left"><? echo strtoupper($nn[NamaPer]); ?></div></td>		  
		  <td><div align="left"><? echo "$nn[TglKeluar]"; ?></div></td>
		  		  <td><div align="left"><? echo "$nn[JamKeluar]"; ?></div></td>
	 		  <td><div align="left"><? echo strtoupper($nn[Opr]); ?></div></td>	
			  <td><div align="left"><?
			  $kikisds_Sdsds = mysql_query("SELECT Keterangan FROM diet WHERE IdPasien='$nn[id]'");
			  $hao = mysql_fetch_array($kikisds_Sdsds);
			  echo ucfirst(strtolower($hao[Keterangan])); 
			  ?></div></td>	  
 </tr>
 	  <?
	  $nomer++; 
	  } //end of !=kaber 
	  } ?> <tr>
	  
	    <td colspan="23" bgcolor="#5ABB52">&nbsp;</td>
	    </tr>
	  </table>
	  </div></td>
   </tr>
   
  </table>
</div>
</body>
</html>
 
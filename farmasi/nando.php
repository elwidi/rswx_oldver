<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";  
/* if($IdObat>0){
?>
 <iframe src="ingat_min.php?IdObat=<? echo $IdObat; ?>" width="0" height="0"></iframe>
<?

}*/ 
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
 	$splo = explode("-",$ii[transferKe]);
 $Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
 if(!$ii[id]){
 header("Location:../3w.php");
 }else{
     ?>
<html>
<head> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wComparea2ww = window.open("susu_inp.php?RegId=<? echo $ii[MstKey]; ?>&id=<? echo $id; ?>&aku=<? echo $aku; ?>&TypeJual=<? echo $TypeJual; ?>&cebok=<? echo $cebaok; ?>&NamaObat=<? echo $NamaObat; ?>&IdGudang=<? echo $IdGudang; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>&TypeObat=<? echo $TypeObat; ?>", "wCompare", "width=580,height=440,left=340,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wComparea2ww.focus(); 
}; 

 //--></script> 
 <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style4 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style7 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style13 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 12px;
}
.style14 {font-size: 12px}
.style15 {color: #990000}
.style16 {color: #FF0000}
.style17 {
	color: #009933;
	font-weight: bold;
	font-style: italic;
}
.style18 {font-size: 14px}
.style19 {font-weight: bold}
.style20 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style23 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style24 {color: #000000}
.style26 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #ECE9D8; }
.style28 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; }
-->
</style>

<body alink="#333333" vlink="#333333" link="#333333"  <? if($ads==1){ ?>onLoad="toCompare()"<? } ?>>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#6CB969"><div  align="left">
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
		    }elseif($a[Level]==10){
		   $file='../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
	  </div></td>
    </tr>
 <tr>
 <td colspan="5" valign="Top">
 <div align="left" class="style20">
 TXN OBAT RAWAT INAP </div> </td> 
 </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" class="style26"><div align="center" class="style17 style18">
        <div align="left"><span class="style24">.
          <? 

 ?>
          || <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="nando.php?id=<? echo $id; ?>&aku=" style="text-decoration:none ">RESET</a> </span>
           
||
<?
if($Panjang>2){}else{
?> 
||
 <select name="fgfg" class="style4">
 <option value="-">-Rsp Blm Kirim-</option>
 <?
 $nod=1;
$dlkldf2 = mysql_query("SELECT * FROM ri_resep WHERE IdPasien='$id' order by id");
while($xx2 = mysql_fetch_array($dlkldf2)){ 
$dkdld_Ffg2 = mysql_query("SELECT COUNT(id) AS kk FROM jualobat2 WHERE JamTran='$xx2[NoResep]'");
$vx2 = mysql_fetch_array($dkdld_Ffg2);
if($vx2[kk]==0){ ?>
<option value="<? ?>" onClick="location.href='nando.php?blm=dibayar&NoResep=<? echo $xx2[NoResep]; ?>&TpRL=RI&id=<? echo $id; ?>&Rc=0';"><? echo "$nod."; echo $xx2[NoResep]; ?></option>
<?   $nod++; }  } ?>
 </select>
 <? } ?>
|| 
<select name="Is" class="style4">
<option value="">--Resep Selesai--</option>
<?
$nox=1;
$dlkldf = mysql_query("SELECT * FROM ri_resep WHERE IdPasien='$id' order by id");
while($xx = mysql_fetch_array($dlkldf)){
$dkdld_Ffg = mysql_query("SELECT COUNT(id) AS kk FROM jualobat2 WHERE JamTran='$xx[NoResep]'");
$vx = mysql_fetch_array($dkdld_Ffg);
if($vx[kk]>0){
?>
<option value="<? echo $xx[id]; ?>" onClick="location.href='as.php?id=<? echo $id; ?>&NoResep=<? echo $xx[NoResep]; ?>';"><? echo"$nox."; echo $xx[NoResep]; ?></option>
<?
$nox++;} //end of vx
 }
?>
</select> 
 </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" class="style26"><div align="center" class="style24 style4">
        <div align="left">
          <?
 
 if($Rc!=''){
  if($Rc==1){ echo "RACIK"; }else{ echo "NON RACIK "; ?> || <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="nando.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=1" style="text-decoration:none ">RACIK</a> <?  } 
}else{
?> 
          <? if($NoResep){ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="nando.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=1" style="text-decoration:none ">RACIK</a> || 
          <? }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="buat_nomer_resep2.php?aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=1" style="text-decoration:none ">RACIK</a>
          <? } ?>
          <span class="style24"> ||
            <? } ?>
            <? if($NoResep){ ?> 
            </span>
          <? if($Rc==0){ }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="nando.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=0" style="text-decoration:none ">NON RACIK</a>
          <? } ?>
          <? }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="buat_nomer_resep2.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=0" style="text-decoration:none ">NON RACIK</a>
          
          <? } 
 ?>
           <a href="../d_Df.php?id=<? echo $id; ?>" style="text-decoration:none"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >TAMPILKAN TAGIHAN</a>
		    || 
			<a href=""   onClick="wCompare0_79s = window.open('kodok_ga_enak_dimakan.php?id=<? echo $id; ?>', 
  'wCompare0_79s', 'width=780,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare0_79s.focus();"  style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">CEK OBAT KEMBAR</a>
	||
		<a href=""   onClick="wCompare0_7ccc9s = window.open('lihat_balap_kuda.php?id=<? echo $id; ?>', 
  'wCompare0_7ccc9s', 'width=480,height=400,left=470,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare0_7ccc9s.focus();"  style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">UPDATE TGL TXN</a>
          || <a href="../3w.php" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KEMBALI</a>           </div>
      </div></td>
    </tr>
    
    <tr>
      <td colspan="4" bgcolor="#FFFFFF" class="style26"><div align="left">
        <? if($id>0){
?>
      </div>
        <div align="center" class="style23"> 
          <div align="left"><!-- <a href="pacar_aku_ayu_iin.php?aku=<? //echo $aku; ?>&id=<? //echo $id; ?>" style="text-decoration:none ">
 -->
          </div>
        </div>
        <div align="left">
          <? }else{ } ?>
      </div></td><td width="1029" rowspan="2" valign="top"> 
	    <div align="left"> 
		<iframe src="dasla.php?id=<? echo $id; ?>&NoResep=<? echo $NoResep; ?>" width="500" height="300" frameborder="0"></iframe>
	    </div></td>
    </tr>
    
    <tr valign="top">
      <td colspan="4">
        <?
if($IdObat!=''){
?>
        <form action="z12a.php"> 
        <? }else{ ?>
		<form target="_self">
      <!--   <form action="susu2.php">  -->
          <? } ?>
          <table width="562" border="0" cellpadding="2" cellspacing="2">
		  
            <tr class="style13"><td width="193"><div align="left"><span class="style4">Nomer Register </span></div></td>
    <td width="3"><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td width="346"><div align="left"><span class="style4">
      <input type="hidden" name="RegId" maxlength="30" size="30" value="<? echo $ii[RegId]; ?>"><strong><? echo $ii[RegId]; ?></strong>
      <input type="hidden" name="id" value="<? echo $id; ?>"> <? echo "#$id"; ?>
      <input type="hidden" name="aku" value="<? echo $aku; ?>">
      <input type="hidden" name="TypeJual" value="<? echo $aku; ?>">
      </span></div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style7 style14">Tgl Masuk/Jam </div></td>
    <td><div align="left" class="style4 style19">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk]/$ii[JamMasuk]"; ?></div></td>
    </tr>
            
            <tr class="style4">
              <td><div align="left" class="style4">No Rm </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td>
      <div align="left" class="style4">
        <? echo $ii[NoPasien];  ?>
        .  </div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style4">Nama Pasien </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4"><? echo $ii[NamaPasien]; ?>.
      <input type="hidden" name="cebok" value="<? echo $cebok; ?>">
      </div></td>
    </tr>
            <tr class="style4">
              <td>Umur</td>
              <td>:</td><td><div align="left">
                <?
$jxp = explode(":",$ii[BlnUmur]);
echo "$ii[Umur] Thn $jxp[0] Bln $jxp[1] Hari";
?></div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style4">Dokter Tujuan </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4"><? echo $ii[KetDokter]; ?>.</div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style4">Assuransi / Penjamin </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4 style16"><strong><? echo $ii[NamaPer]; ?>.</strong></div></td>
    </tr>
            <tr class="style4">
              <td height="21"><div align="left" class="style4">Rujukan Dari </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4"><? 
	echo ucfirst(strtolower($ii[NamaRujukan])); ?>.</div></td>
    </tr>
               
                  <?
if($IdObat!=''){
?>    <?
////
$KeyID="$a[KodeBagian]-$IdObat";

 ///
?>
             <tr>
              <td colspan="3"><div align="center"><? 
 $uy = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
$g1 = mysql_fetch_array($uy);
echo $g1[NamaObat]; //echo "$IdObat";
?> 
                <input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
              <? 
?> || <?  
$peka = mysql_query("SELECT Upper FROM golobat WHERE id='$g1[IdGol]'"); 
	$yg = mysql_fetch_array($peka);
	  echo "$yg[Upper]%";
?>   </div></td>
    </tr>
	  
	<tr  bgcolor="#666666">
	<td class="style26">Satuan</td>
	<td class="style4">:</td>
	<td class="style4"><div align="left">
	<select name="IdSatuan">
<?
$jjdjdjdjdjd_Dffdfddfddf = mysql_query("SELECT id,NamaSatuan FROM settingsatuan WHERE IdBarang='$g1[id]' AND Pengali=1");
$xsq = mysql_fetch_array($jjdjdjdjdjd_Dffdfddfddf);
?> <option value="<? echo $xsq[id]; ?>"><? 
echo ucfirst(strtolower($xsq[NamaSatuan]));
?></option>
<?
$yahaa_dd =  mysql_query("SELECT id FROM settingsatuan WHERE Pengali>0 AND IdBarang='$g1[id]' AND Pengali!=1 ORDER BY Pengali");
while($gb = mysql_fetch_array($yahaa_dd)){
?>
<option value="<? echo $gb[id]; ?>"><? 
$jjdjdjdjdjd_Dfdf = mysql_query("SELECT NamaSatuan FROM settingsatuan WHERE id='$gb[id]'");
$hb = mysql_fetch_array($jjdjdjdjdjd_Dfdf);
echo ucfirst(strtolower($hb[NamaSatuan]));
?></option>
<?
}
?>
</select>
	<span class="style26"> ||
	 <a href="#" style="text-decoration:none"  onClick="wCompare_001129 = window.open('bhg.php?id=<? echo $g1[id]; ?>', 
  'wCompare_001129', 'width=580,height=500,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_001129.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >++Set++</a></span></div></td>
	</tr>
            <tr bgcolor="#333333">
              <TD bgcolor="#006666" class="style26"><div align="left" class="style26" >Harga</div></TD>
    <td bgcolor="#006666" class="style26"><div align="center"  class="style26">:</div></td>
    <td bgcolor="#006666" class="style26"><div align="left" class="style26">
      <!--<a href="intini.php?ela=<? //echo $IdObat; ?>" style="text-decoration:none "> --> 
     <?
  if($j[NamaKelas]=='I'){
	  $Habeli=($g1[Satu]);
	  }elseif($j[NamaKelas]=='II'){
	  $Habeli=($g1[Dua]);
	  }elseif($j[NamaKelas]=='III'){
	  $Habeli=($g1[Tiga]);
	  }elseif($j[NamaKelas]=='VIP'){
	  $Habeli=($g1[Vip]);
	  }elseif($j[NamaKelas]=='SVIP'){
	 $Habeli=($g1[Svip]);
	  }else{
	  $Habeli=($g1[HargaJual]);
	  } 
   ?><input name="Habeli" type="text" class="style4" value="<? echo $Habeli;   ?>" size="15" maxlength="15"> 
      <font color="#FFFF66">
       
        <input type="hidden" name="gana"  value="<? echo $g1[Prc]; ?>">
        </font>  
  ||
	 
      </div></td>
    </tr>
            <? }?>
            <?
if($IdObat!=''){

}else{ ?>
            
            <tr bgcolor="#333333" class="style4">
              <td bgcolor="#006666" class="style26"><div align="left" class="style24"><span class="style26">Nama Obat </span></div></td>
    <td bgcolor="#006666" class="style26"><div align="center" class="style16 style24"><strong><span class="style4">:</span></strong></div></td>
    <td bgcolor="#006666" class="style26"><div align="left" class="style24">
      <? if($NoResep){ ?> <input name="NamaObat" type="text" class="style4" size="20" maxlength="20"> 
	  <input type="hidden" name="ads" value="1">
      <input type="hidden" name="IdGudang" value="<? echo $IdGudang; ?>">
      <? }else{ } ?>
      <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
      <input type="hidden"  name="Rc" value="<? echo $Rc; ?>">
      
      
      <input type="hidden" name="TypeObat" value="<? echo $hy[id]; ?>">
      || <?
 $selele = mysql_query("SELECT persen,id FROM `racik` WHERE  NoResep='$NoResep' AND IdPas='$id'");
 $we= mysql_fetch_array($selele);
 if($we[persen]){
?><a href="gigit_ular_gatal.php?NoResep=<? echo $NoResep; ?>&IdAsli=<? echo $we[id]; ?>&aku=<? echo $aku;
 ?>&id=<? echo $id;  ?>&Rc=<? echo $Rc; ?>" style="text-decoration:none "><?  echo "$we[persen] Racikan"; ?></a><? 
 }else{
  if($NoResep){ ?><? } ?>
      <? if($Rc!=''){ echo "$NoResep"; } else{ }} ?>
      </div></td>
    </tr>
            <? } ?>
            <?
if($IdObat!=''){
?>
            
            <tr class="style4">
              <td><div align="left"><span class="style4">Qty<span class="style15"></span></span></div></td>
    <td><div align="center" class="style16"><strong><span class="style4">:</span></strong></div></td>
    <td><div align="left">
      <? if($NoResep){ 
 ?> <input name="Qty" type="text" class="style4" size="11" maxlength="11">
      <input type="hidden" name="IdGudang" value="<? echo $IdGudang; ?>">
      <?   }else{ } ?>
      <input type="hidden" name="budi_h" value="<? echo $arum; ?>"> 
      <input type="hidden"  name="Rc" value="<? echo $Rc; ?>">
      <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
      <input type="radio" value="1" name="Mingo" <? if($Rc==0){ ?>checked<? } ?>>
                  +Embalase|| 
                  <input type="radio" value="0" name="Mingo"  <? if($Rc==1){ ?>checked<? } ?>>
                  -Non Embalase</div></td>
    </tr>
	<?
	if($Rc==1){
	?>
	<tr class="style4">
	<td bgcolor="#FFCCCC">Racikan Ke</td>
	<td bgcolor="#FFCCCC">:</td>
	<td bgcolor="#FFCCCC"><div align="left">
	<input name="RacKe" type="text" class="style4" value="1" size="3" maxlength="3">
	</div></td>
	</tr>
	<?
	}
	?>
            <?
if($sy[IdObat]){
  ?>
            <tr class="style4">
              <td><div align="left">Harga Tambahan </div></td><td><div align="center" class="style16"><strong>:</strong></div></td>
    <td><div align="left">Rp.
      <? //$bbu = $sy[harga1]+$sy[harga2]+$sy[harga3]+$sy[harga4]; 
 
 ?>
      <input type="hidden" name="bbu" value="0">
      </div></td>
    </tr>
            
            <? }else{ ?>
            
            <? } ?>
            <? }else{ } ?>
            <!-- <tr bgcolor="#FFFF66" class="style4">
<td><div align="left">RACIKAN / NON RACIKAN</div></td><td><div align="center" class="style16"><strong>:</strong></div></td><TD><div align="left">||
      <input type="radio" value="1" name="Mingo2">
  Ya ||
  <input type="radio" value="0" name="Mingo2" checked>
  No</div></TD>
</tr> 
<tr bgcolor="#FFFF66" class="style4">
<td><div align="left">TAMPILKAN BAHAN RACIKAN</div></td><td><div align="center" class="style16"><strong>:</strong></div></td><TD><div align="left">||
      <input type="radio" value="1" name="Mingo3">
  Ya ||
  <input type="radio" value="0" name="Mingo3" checked>
  No</div></TD>
</tr>-->
<?
$posk = strlen($NoResep);
if($posk<=3){
?>
<tr  bgcolor="#990000">
<td colspan="3"><div align="center" class="style28">
SILAHKAN KLIK / PILIH RACIKAN / NON RACIKAN
</div></td>
</tr>
<? 
}else{
?>
            <tr bgcolor="#000099">
              <td colspan="3" bgcolor="#000000">
                <div align="left">
                 <?
				 if($IdObat>0){
				 ?><input name="simpan" type="submit" class="style23" value="Simpan">
				 <? }else{ ?>
				 <input name="simpan" type="submit" class="style23" value="Cari">
				 <? } ?>
                  <span class="style24">
                  <!--<input name="ddff" type="button" class="style23" onClick="location.href='jas_jus.php?aku=<? /*echo $aku;
 ?>&id=<? echo $id;  ?>&Rc=<? echo $Rc; ?>&NoResep=<? echo $NoResep; ?>';" value="Tentukan Jml Racik"> <? */ ?> -->
                  </span>
                   
                   
				   
                  <input name="kmeb" type="button" class="style23" onClick="location.href='../Daftar/fito_sayangku.php';" value="Kembali">
                <? 
if($IdObat!=''){
?>
                   
                  <? } ?> 
              </div></td></tr>
	<? } ?>
            <tr bgcolor="#000099">
              <td colspan="3" bgcolor="#D4D0C8">
                <div align="left">
                  <?
  if($NoResep!=''){
 /*
  onClick="location.href='z090.php? ';" 
 */ ?>
                  <input name="Jad" type="button" class="style23"  onClick="wCompare = window.open('d12x.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>', 
  'wCompare', 'width=580,height=130,left=370,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Proses Ke Penjualan ?">
                     <input type="button" name="fgfg" value="Reset" onClick="location.href='nando.php?IdGudang=<? echo $IdGudang; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>&arum=<? echo $arum; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>';" class="style23" style="background:#FFCC33">
                  <? }else{ } ?>
				
              </div></td></tr>
          </table>
    </form>    </td>
    </tr>
    <tr>
      <td height="23" colspan="3" bgcolor="#FFFFFF"><div align="center"></div></td>
    </tr>
  </table>
</div>
</body>
</html>
 <? } ?>
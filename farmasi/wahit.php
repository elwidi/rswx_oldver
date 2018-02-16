<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
$kjksds_ffd = mysql_query("SELECT id FROM kwitansirj where RegId='$ii[RegId]'");
$as45 = mysql_fetch_array($kjksds_ffd);
$Panjang = strlen($NoResep);
 
  if(!$a[id]){
echo "session sudah berakhir";
}elseif($iin_hari[Sembilan]!='on' && $a[Level]==9){
header("Location:../Kasir/u.php?id=$id");
 }elseif(!$ii[id]){
 header("Location:../3w.php");
 }else{
     ?>
<html>
<head> <script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wComparea2ww = window.open("susu2.php?RegId=<? echo $RegId; ?>&id=<? echo $id; ?>&aku=<? echo $aku; ?>&TypeJual=<? echo $TypeJual; ?>&cebok=<? echo $cebaok; ?>&NamaObat=<? echo $NamaObat; ?>&IdGudang=<? echo $IdGudang; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>&TypeObat=<? echo $TypeObat; ?>", "wCompare", "width=580,height=440,left=340,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
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
.style4 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
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
.style26 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 11px; color: #ECE9D8; }
.style28 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; }
.style29 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<body alink="#ffffff" vlink="#ffffff" link="#ffffff"  <? if($ads==1){ ?>onLoad="toCompare()"<? } ?>>

<div align="left">
  <table width="697" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#6CB969"><div  align="left"> 	
	Halaman Penjualan Farmasi
		  </div></td>
    </tr>
 
    <tr>
      <td colspan="5" bgcolor="#FFFFFF" class="style26"><div align="center" class="style17 style18">
        <div align="left"><span class="style24">.
        User Log : <? echo ucfirst(strtolower($a[Nama])); ?> : <? 

$mono = mysql_query("SELECT NamaDepo,Persen FROM depo where id='$aku'");
$hy = mysql_fetch_array($mono);
echo strtoupper($hy[NamaDepo]); if($hy[Persen]){ echo " ($hy[Persen] %)"; }else{ 
 echo number_format($uyp[Persen]); echo "%";
 }
?>
          || <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="wahit.php?id=<? echo $id; ?>&aku=" style="text-decoration:none ">RESET</a> </span>
           
||
<?

if($Panjang>2){}else{
?> 
||
<select name="IdResep" class="style4">
  <option value="">--Resep Tmp--</option>
  <?
  $ldfldkldfld = mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$id'");
  while($cc = mysql_fetch_array($ldfldkldfld)){
  //
  $kfjkgjfkf_lll = mysql_query("SELECT id FROM jualobat where JamTran='$cc[NoResep]'");
  $ubc = mysql_fetch_array($kfjkgjfkf_lll);
if(!$ubc[id]){  ?>
  <option value="<? echo $cc[id]; ?>" onClick="location.href='wahit.php?NoResep=<? echo $cc[NoResep]; ?>&aku=&id=<? echo $id; ?>&Rc=<? echo $Rc; ?>';"><? echo $cc[NoResep]; ?></option>
  <? } ?>
  <? } ?>
</select>
<? } ?>
|| 
<select name="Is" class="style4">
<option value="">--Resep Selesai--</option>
<?
$dlkldf = mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$id'");
while($xx = mysql_fetch_array($dlkldf)){
$dkdld_Ffg = mysql_query("SELECT COUNT(id) AS kk FROM jualobat WHERE JamTran='$xx[NoResep]'");
$vx = mysql_fetch_array($dkdld_Ffg);
if($vx[kk]>0){
?>
<option value="<? echo $xx[id]; ?>" onClick="location.href='abung2.php?id=<? echo $id; ?>&NoResep=<? echo $xx[NoResep]; ?>';"><? echo $xx[NoResep]; ?></option>
<?
} //end of vx
}
?>
</select>
 ( <?  echo "$a[KodeBagian]"; ?>)</div>
      </div></td>
    </tr>
 <?
if($as45[id]>0){
?>
<tr>
<td colspan="5" bgcolor="#990000"><div align="left" class="style29">
TRANSAKSI INI SUDAH SELESAI DENGAN KWT NO : <? echo "KWT:$as45[id]"; ?> || 
<a href="../Daftar/ed_d.php" style="text-decoration:none">KEMBALI</a>
</div></td>
</tr>
<?
}else{ ?>  <tr>
      <td colspan="5" bgcolor="#3333CC" class="style26"><div align="center" class="style24 style4">
        <div align="left">
          <?
 
 if($Rc!=''){
  if($Rc==1){ echo "RACIK"; }else{ echo "NON RACIK"; } 
}else{
?> 
          <? if($NoResep){ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="wahit.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=1" style="text-decoration:none ">RACIK</a>
          <? }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   href="buat_nomer_resep.php?aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=1" style="text-decoration:none ">RACIK</a>
          <? } ?>
          <span class="style24"> ||
            <? } ?>
            <? if($NoResep){ ?> 
            </span>
          <? if($Rc==0){ }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="wahit.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=0" style="text-decoration:none ">NON RACIK</a>
          <? } ?>
          <? }else{ ?>
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="buat_nomer_resep.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>&Rc=0" style="text-decoration:none ">NON RACIK</a>
          
          <? } 
 ?>
          ||  
          <a   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="wahit.php?NoResep=<? echo $NoResep; ?>&aku=<? echo $aku; ?>&id=<? echo $id; ?>" style="text-decoration:none ">RESET</a>
         || 
		<!--  <a href="#" style="text-decoration: none"
		 onClick="wCompare = window.open('b5r.php?id=<? // echo $id; ?>', 
  'wCompare', 'width=580,height=300,left=470,Top=123,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > NOMORI RESEP</a> -->
 		  <a href="../3w.php" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >KEMBALI</a>           </div>
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
      </div></td><td width="933" rowspan="2" valign="top"> 
	    <div align="left"> 
		<!-- <? /* <iframe src="dala.php?id=<? echo $id; ?>&NoResep=<? echo $NoResep; ?>" width="700" height="200" frameborder="0"></iframe>
		*/ ?> -->
		<?
		include "dala.php";
		?>
	    </div></td>
    </tr>
    
    <tr>
      <td colspan="4">
        <?
if($IdObat!=''){
?>
        <form action="garam2.php"> 
        <? }else{ ?>
		<form target="_self">
      <!--   <form action="susu2.php">  -->
          <? } ?>
          <table width="562" border="0" cellpadding="2" cellspacing="2">
            <tr class="style13"><td width="193" height="27"><div align="left"><span class="style4">No Reg</span></div></td>
    <td width="3"><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td width="346"><div align="left"><span class="style4">
      <input type="hidden" name="RegId" maxlength="30" size="30" value="<? echo $ii[RegId]; ?>"><strong><? echo $ii[RegId]; ?></strong>
      <input type="hidden" name="id" value="<? echo $id; ?>"> <? echo "#$id"; ?>
      <input type="hidden" name="aku" value="<? echo $aku; ?>">
      <input type="hidden" name="TypeJual" value="<? echo $aku; ?>">
      </span></div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style7 style14">TglMasuk/Jam</div></td>
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
    <td><div align="left" class="style4"><? echo $ii[NamaDokter]; ?>.</div></td>
    </tr>
            <tr class="style4">
              <td><div align="left" class="style4">Assuransi/Penjamin</div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4 style16"><strong><? echo $ii[NamaPer]; ?>  </strong></div></td>
    </tr>
      <?
	  if($hab[id]){
	  ?><tr class="style4"> 
	  <td bgcolor="#D8FDC6">Karyawan</td>
	  <td bgcolor="#D8FDC6">:</td>
	  <td bgcolor="#D8FDC6"><div align="left">
	  <?
	  echo $hab[Nama]; 
	  ?>
	  / <?
	  $kdjfdDf_Dfdfd = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$hab[KodeBagian]'");  
	  $ug = mysql_fetch_array($kdjfdDf_Dfdfd);
	  echo ucfirst(strtolower($ug[NamaBagian])); 
	  ?></div></td>
	  </tr>
	  <tr class="style4">
	  <td bgcolor="#D8FDC6">Plafon</td>
	  <td bgcolor="#D8FDC6">:</td>
	  <td bgcolor="#D8FDC6"><div align="left">
	  <?
  	   $djfdkfd_dfdfd99= mysql_query("SELECT SUM(Jam) as jj FROM kwitansirj WHERE IdPasien='$hh_1[IdPasien]' AND IdPasien!=''");
  $yp = mysql_fetch_array($djfdkfd_dfdfd99);
  //
  if($yahp[id]){
  $sisa_pla  = $hab[Plafond]-$yp[jj];
  }else{
  $sisa_pla  = $hab[Plafond]-$yp[jj];
} echo number_format($sisa_pla);   ?>
	  </div></td>
	  </tr><?
	  }
	  ?>      <tr class="style4">
              <td height="21"><div align="left" class="style4">Rujukan Dari </div></td>
    <td><div align="left" class="style20">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style4"><? echo $ii[RujukanDari]; ?>.</div></td>
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
 //
 $kdjfdkfjkdfjkdfjdkdfjkdfk = mysql_query("SELECT * FROM golobat WHERE id='$g1[IdGol]'");
 $iv = mysql_fetch_array($kdjfdkfjkdfjkdfjdkdfjkdfk);
 //
echo $g1[NamaObat];  echo "($iv[Upper]% - $g1[NamaGolongan])";//echo "$IdObat";
?>
<input type="hidden" name="Upper" value="<? echo $iv[Upper]; ?>">
<?
?> 
                <input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
              <? 
?> || <?
//$akan_sp = mysql_query("SELECT * FROM persen_type_jual WHERE Type='$g1[Type]'");
//$yek_p = mysql_fetch_array($akan_sp);
 ?> </div></td>
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
<tr  class="style4">
<td>Harga</td>
<td>:</td><td><div align="left"><?
 	 ?><font color="#0000FF"><i><? 
	 
	$Tiga2 = $g1[Tiga]-($g1[Tiga]*$persen_1/100);
if($ii[KodePer]==83){
	 //echo number_format($Tiga2);
	?>
	 <input name="regane" type="text" class="style4" value="<? echo $Tiga2; ?>">
<?  }else{
	//  echo number_format($g1[Tiga]);
	?>
 	 <input name="regane" type="text" class="style4" value="<? echo $g1[Tiga]; ?>">
<? 
   }
?>
 <input type="hidden" name="regane2" value="<? echo $g1[Tiga]; ?>">
</div></td>
</tr>          
<tr class="style4">
<td>Stok</td>
<td>:</td><td><div align="left"><?
$c=$g1;
include "huting.php";
?>
<input type="hidden" name="Stok" value="<? echo $Stok; ?>">
</div></td>
</tr>            <? }?>
            <?
if($IdObat!=''){

}else{ ?>
            
            <tr bgcolor="#333333" class="style4">
              <td bgcolor="#D4D0C8"><div align="left" class="style24"><span class="style4">Nama Obat </span></div></td>
    <td bgcolor="#D4D0C8"><div align="center" class="style16 style24"><strong><span class="style4">:</span></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="left" class="style24">
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
      +E ||  
      <input type="radio" value="0" name="Mingo"  <? if($Rc==1){ ?>checked<? } ?>>
      -E  </div></td>
    </tr>
      <?
	  if($Rc==1){
	  ?>
	        <tr bgcolor="#FFCCCC"  class="style4"> 
              <td>Racikan Ke</td>
              <td>:</td>
	          <td> 
                <div align="left"><input  class="style4" type="text" name="RacKe" maxlength="3" size="3" value="1"></div></td>
	  </tr>
	  <?
	  }
	  ?>      <?
if($sy[IdObat]){
  ?>
            <tr class="style4">
              <td><div align="left">HARGA TAMBAHAN</div></td><td><div align="center" class="style16"><strong>:</strong></div></td>
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
              <td colspan="3" bgcolor="#72C66C">
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
                   
                   
				   
                  <input name="kmeb" type="button" class="style23" onClick="location.href='../Daftar/ed_d.php?ade=3';" value="Kembali"><? 
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
  ?>
 
                  <input name="Jad" type="button" class="style23" onClick="wCompare = window.open('d12.php?id=<? echo $id; 
  ?>&aku=<? echo $aku; ?>&NoResep=<? echo $NoResep; ?>&Rc=<? echo $Rc; ?>', 
  'wCompare', 'width=580,height=130,left=370,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Proses Ke Penjualan ?">
                     <input type="button" name="fgfg" value="Reset" onClick="location.href='wahit.php?id=<? echo $id; ?>';" class="style23" style="background:#FFCC33">
                  <? }else{ } ?>
				
              </div></td></tr>
          </table>
    </form>    </td>
    </tr>  <? } ?>
    <tr>
      <td height="23" colspan="3" bgcolor="#FFFFFF"><div align="center"></div></td>
    </tr>
  </table>
</div>
</body>
</html>
 <? } ?>
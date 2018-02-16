<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ade = $_GET["ade"];
$NamaPasien = $_GET["NamaPasien"];
$NoPasien = $_GET["NoPasien"];
   $pcd =explode("-",$a[Nik]);
  $Nik=strtoupper($pcd[0]);
if($Nik=='DR'){
header("Location:../radiologi/565m.php");
} ?>
<html>
<head>
<?
include "../Kasir/s_19.php";
include "../Kasir/s_20.php";
?><script language="JavaScript">
	
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style4 {
	color: #0000FF;
	font-style: italic;font-family: Arial, Helvetica, sans-serif; font-size: 12px;
}
-->
</style>
</head><body background="../gambar/bag.jpg">
<div align="center">
<form target="_self">
  <div align="left">
    <table width="1214" border="0" cellpadding="0" cellspacing="0" bordercolor="#5ABB52"  >
      <tr valign="top">
        <td width="1214" colspan="3"  >
          <div align="left"> 
         <table border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF">
<tr valign="top">
<td width="110"  ><div align="center">Gambar</div></td>
<td width="1224"><div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr valign="top">
<td width="799" height="68" >Halaman Pendaftaran <br>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="59">User</td>
<td width="8">:</td>
<td width="264"><div align="left"><?
echo $a[User];
?></div></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><div align="left"><?
echo $a[Nama];
?></div></td>
</tr>
</table></td>
</tr>
</table>
</div></td>
</tr> 
</table>
            </div></td>
       </tr>
       <tr valign="top">
        <td colspan="3"><div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="142"><?
if($ade==3){
?>NO RM <? 
}else{
?>NAMA PASIEN<? } ?></td>
    <td width="8">:</td>
    <td width="835"><div align="left">
      <?
if($ade==3){
?><input type="text" name="NoPasien" maxlength="60" size="20" autofocus="autofocus"  class="style1"><? 
}else{
?>
      <input type="text" name="NamaPasien" autofocus="autofocus"  maxlength="60" size="20" class="style1">
      <? } ?>
      
      <input type="hidden" name="ade" value="<? echo $ade; ?>">
      &nbsp;&nbsp;
      <input type="submit" value="Submit" name="fgf" class="style1"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <?
if($ade==3){
?><input type="button" name="fgfg" value="NamaPasien" onClick="location.href='ed_d.php';" class="style1" style="background:#99FF66"><?  
}else{
?><input type="button"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fgfg" value="NoRm" onClick="location.href='ed_d.php?ade=3';" class="style1">
      <? } ?>
      <input type="button"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fgf2" class="style1" value="Cek By Periode"  onClick="wCompare = window.open('juj_D.php', 
  'wCompare', 'width=580,height=230,left=470,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >
      <?
 if($FiLaDim[Duabelas]=='on' && $ada==4){?>
      <input name="FGF" type="button" class="style1"  style="background:#FF6699"value="Gabungkan Kwitansi" onClick="wCompare = window.open('../Kasir/x01_2.php', 
  'wCompare', 'width=780,height=300,left=370,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
      <? } ?><input type="button"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" name="fgfg" value="Kembali" onClick="location.href='../3w.php';" class="style1">
      <? //echo $a[Level]; ?></div></td>
    </tr>
           
            </table>
    </div></td>
    </tr>
      <tr>
        <td colspan="3" valign="top">
          <div align="left">
            <table width="1217" border="0" cellpadding="2" cellspacing="2" class="style1">
              <tr  bgcolor="#58BB4F">
                <td width="17" ><span class="style3">NO</span></td>
    <td width="34" ><strong>REGID</strong></td>
    <td width="23" ><strong>TGL</strong></td>
    <td width="44" ><strong>JAM MASUK</strong></td>
    <td width="27" ><strong>NO RM </strong></td>
    <td width="51" ><strong>NAMA PASIEN</strong></td>
    <td width="34" ><strong>POLI</strong></td>
    <td width="55" ><strong>DOKTER</strong></td>
    <td width="27" ><div align="center"><strong>USIA</strong></div></td>
    <td width="98" ><strong>PENJAMIN</strong></td>
    <td width="68" ><strong>BARU/LAMA</strong></td>
     <? /*<td width="31" ><div align="center"><strong>APT</strong></div></td>
     <td width="34" ><div align="right"><strong>POLI</strong></div></td>
     <td width="31" ><div align="right"><strong>LAB</strong></div></td>
    <td width="32" ><div align="right"><strong>RAD</strong></div></td>
    <td width="33" ><div align="right"><strong>FISH</strong></div></td>
	*/ ?>
    <td width="27" ><strong>ICD</strong></td>
    <td width="57" ><strong>KWT</strong></td>
    <td width="57" ><strong>KASIR</strong></td>
    <?
if($a[Level]==98){
?><td width="33" ><strong>DIET</strong></td>
    <? 
}else{
?>
                <td width="45" ><strong>KARTU</strong></td>
                <td width="60" ><strong>RUJUKAN</strong></td>
     <? } ?>  <td width="159" ><strong>OPR</strong></td>
              </tr>
              <?
$nomer=1;
$tgl =date("d");
$bln=date("m");
$thn=date("Y");
$pj = strlen($NamaPasien);
 $pjk2 = strlen($NoPasien);
 $mas = $_GET["mas"];
$tgl1= $_GET["tgl1"];
$tgl2= $_GET["tgl2"];
$bln1= $_GET["bln2"];
$thn1= $_GET["thn1"];

if($mas=='panji'){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' AND KodeDokter='$IdDokter' ORDER BY NamaPasien desc limit 0,30"); 
}elseif($mas=='gatot'){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' AND KodeBagian='$IdBagian' ORDER BY NamaPasien desc limit 0,30") ;
  }elseif($mas=='miduk'){
  $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE 
 TglMasuk>=$tgl1 AND TglMasuk<=$tgl2  AND BlnMasuk=$bln1  AND ThnMasuk=$thn1 ORDER BY NamaPasien desc limit 0,30");
}elseif($pjk2>0){
  $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE NoPasien='$NoPasien' ORDER BY id desc limit 0,3");
}elseif($pj>0){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY NamaPasien desc limit 0,30");
}else{
 $msjsmsm = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk='$tgl' AND BlnMasuk='$bln' AND ThnMasuk='$thn' ORDER BY id desc ");  
 }
while($vv = mysql_fetch_array($msjsmsm)){
//
$kdjfkdjf_Fgf  = mysql_query("SELECT id FROM vaksin_pasien where IdPasen='$vv[id]'");
$np = mysql_fetch_array($kdjfkdjf_Fgf);
//
$pec = $nomer%2;
if($vv[TypeJam]>0){
$clas='class="style4" bgcolor="#FF9999"'; 
}else{
$clas='';

}
if($pec==1){
$warna ='bgcolor="#CCFFCC"';
}else{
$warna ='';
}
$ksisk_Sds = mysql_query("SELECT id,Kasir FROM kwitansirj WHERE RegId='$vv[RegId]'");
$ub = mysql_fetch_array($ksisk_Sds);
if($ub[id]){
$warna =$warna. " ".' class="style4"';
}else{
$warna=$warna;
}
 if($a[Level]==3){
?>
                <tr    valign="top"   <? echo $warna; ?>   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../kasir/u.php?id=<? echo $vv[id]; ?>';"  ><?
}elseif($a[Level]==4){
 ?>
                <tr  valign="top" <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../farmasi/wahit.php?id=<? echo $vv[id]; ?>';"  >
<?
}elseif($a[Level]==16){
?>
                <tr  valign="top"   <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../radiologi/4e.php?id=<? echo $vv[id]; ?>';"  >
 <?
 }elseif($a[Level]==12){ ?>
                 <tr valign="top"  <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='../lab/4e.php?id=<? echo $vv[id]; ?>';"  ><? }else{ ?> 
                <tr  valign="top" <? echo $warna; ?>    onClick="wCompare = window.open('3wza.php?id=<? echo $vv[id]; ?>', 
  'wCompare', 'width=780,height=320,left=370,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
                  <? } ?>
                  <tD <? if($np[id]){ ?> bgcolor="#FF99CC"<? } ?>><div align="center"><? echo $nomer; ?></div></tD>
    <td><div align="left"><? echo $vv[RegId];?></div></td>
    <td><div align="right"><?
echo "$vv[TglMasuk]-$vv[BlnMasuk]-$vv[ThnMasuk]";
?></div></td> 
    <td <? if($vv[Sta]==''){}else{?> bgcolor="#FFFF33"<?  }?>><div align="left"><? echo $vv[JamMasuk];?></div></td>
    <td><div align="left"><? echo $vv[NoPasien];?></div></td><?
$kjkdfd_DFdfdf = mysql_query("SELECT *  FROM  pj_rajal  Where IdRajal='$vv[id]'");
$hgb = mysql_fetch_array($kjkdfd_DFdfdf);
  $kljkdfd_Dfdfd2 = mysql_query("SELECT * FROM karyawan WHERE IdPasien='$vv[IdPasien]'");
$yx2 =  mysql_fetch_array($kljkdfd_Dfdfd2);
if($yx2[id]){
$clas='bgcolor="#FEEADC"';
}else{
$clas=$clas;
}
?>
                  <td   <? echo $clas; ?>><div align="left"><? echo ucfirst(strtolower($vv[NamaPasien])); //
if($hgb[id]){
 ?> (<font color="#990000"><i><? echo $hgb[RmPj]; ?></i></font> )<? 
}
 ?></div></td>
    <td><div align="left"><? echo ucfirst(strtolower($vv[Bagian]));  ?></div></td>
    <td><div align="left"><? echo ucfirst(strtolower($vv[NamaDokter]));  //echo "($vv[KodeDokter])";?></div></td>
    <td><div align="center"><? echo $vv[Umur]; ?></div></td>
    <td><div align="left"><?
 if($vv[KodePer]==38){
 ?><font  color="#003399"><i><?
 echo ucfirst(strtolower($vv[NamaPer]));
 ?></i></font><? 
 }elseif($vv[KodePer]==83){
?><b><i><?   echo ucfirst(strtolower($vv[NamaPer]));
 ?></i></b><? 
}else{ 
 echo ucfirst(strtolower($vv[NamaPer]));
 } ?></div></td>
    <td><div align="center"><? echo $vv[LB]; ?></div></td><?
$kdjkfdfd_Dfdfd = mysql_query("SELECT COUNT(id) AS jj FROM rj_resep WHERE IdPasien='$vv[id]'");
$bp = mysql_fetch_array($kdjkfdfd_Dfdfd);

?>
          <?
		  /*        <td <? if($bp[jj]>0){ ?> bgcolor="#FFFF99"<? } ?> ><div align="center"><?
 echo $bp[jj];
?></div></td> 
    <?
$kikidkdik = mysql_query("SELECT SUM(Harga) AS jj FROM txnugd WHERE IdPasien='$vv[id]'");
  $cc = mysql_fetch_array($kikidkdik);
?>
                  <td <? if($cc[jj]>0){ ?> bgcolor="#FFFFCC" <? } ?>><div align="right"><?
 
  echo number_format($cc[jj]); 
?></div></td>
    <td><div align="right"><?
  $kdjfkdjfkdf  = mysql_query("SELECT SUM(Total) AS kk FROM txnjalan2 WHERE RegId='$vv[RegId]'");
  $js = mysql_fetch_array($kdjfkdjfkdf);
  echo number_format($js[kk]);
?></div></td><?
 $ksiskisks_334343  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$vv[RegId]' AND KodeKelompok='Rad'");
  $h_12 = mysql_fetch_array($ksiskisks_334343);
?>
                  <td <? if($h_12[jj]>0){ ?> bgcolor="#CCCCCC" <? } ?>><div align="right"><?
  
  echo number_format($h_12[jj]); 
?></div></td><?
  $ksiskisks_334343X  = mysql_query("SELECT SUM(JumlahHarga) AS jj FROM txnjalan WHERE RegId='$vv[RegId]' AND KodeKelompok='Fis'");
  $h_12X = mysql_fetch_array($ksiskisks_334343X);
?>
                  <td <? if($h_12X[jj]>0){ ?> bgcolor="#FFCCCC" <?  } ?>><div align="right"><?
   echo number_format($h_12X[jj]); 
?></div></td>
*/ ?>
    <td><div align="left"><?
 $jdsfjdjf = mysql_query("SELECT KodeIcd FROM icd_rj WHERE IdPasien='$vv[id]'");
while($jk = mysql_fetch_array($jdsfjdjf)){
echo "<i>$jk[KodeIcd],</i>";;
}
?></div></td>
    
<td><div align="left">
  <?
 
if($ub[id]){
?><font color="#990000"><? echo "KWT:$ub[id]";?></font><? 
}else{
echo "-";
}
?></div></td>
    <td><div align="left"><?
if($ub[id]){ ?><i><font color="#009900"><? 
echo strtoupper($ub[Kasir]); 	
 ?></font></i><? }
?></div></td><?
if($a[Level]==98){$sjdksjdksjskdds_Sdsds  = mysql_query("SELECT * FROM diet WHERE IdPasien='X.$vv[id]'");
$ha = mysql_fetch_array($sjdksjdksjskdds_Sdsds);
echo $ha[Keterangan];
?>
                  <td><div align="left"><? echo $ha[Keterangan];
 ?></div></td>
     <? }else{?>
                  <td><div align="left"><? echo $vv[Kartu]; ?></div></td>
                  <td><div align="left"><? echo  ucfirst(strtolower($vv[RujukanDari])); ?></div></td>
    <? } ?><td><div align="left"><? echo  ucfirst(strtolower($vv[Operator])); ?></div></td>
                </tr>
              <?
$nomer++; } ?><tr  bgcolor="#58BB4F" valign="top">
                <tD colspan="23" >&nbsp;</tD>
      </tr>
              </table>
    </div>    </td>
    </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
 
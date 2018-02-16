<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($IdBagian>0){
$dkfd_DFdf  = mysql_query("SELECT * FROM bagian WHERE id='$IdBagian'");
}else{
$dkfd_DFdf  = mysql_query("SELECT * FROM dokter WHERE id='$IdDokter'");
}
$ya = mysql_fetch_array($dkfd_DFdf);
//
 //
if($ya[id] && $tgl1>0 && $tgl2>0 && $bln2>=1 AND $bln2<=12 && $thn1>=2012){
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6699';
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
.style4 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
-->
</style></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2"> 
<tr>
<td width="960" colspan="3"><div align="left" class="style4">
  <font size="4" face="Arial, Helvetica, sans-serif">LIST DETAIL  DATA PASIEN RAWAT JALAN <br />
  <?
echo $ya[NamaDokter]; 
?>
  <BR>
PERIODE : <? echo "$tgl1 sd $tgl2 ";
$bln=$bln2; 
include "../bulan.php";
 ?> <BR>
 <a href="ed_d.php" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">KEMBALI</a> || <a href="../Kasir/dimas_adik_fito.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"style="text-decoration:none">
 CEK LAPORAN</a>  
 ||
 <a href="#"  style="text-decoration:none"onClick="wCompares2_02081 = window.open('../Kasir/ela_kakak_dimas.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>', 
  'wCompares2_02081', 'width=1080,height=340,left=100,Top=80,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_02081.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">ANC</a>
 || 
 <a href="#"  style="text-decoration:none"onClick="wCompares2_02081 = window.open('../Kasir/s102b.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>', 
  'wCompares2_02081', 'width=1080,height=340,left=100,Top=80,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_02081.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">KB</a>
 </font></div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="935" border="0" cellpadding="2" cellspacing="2" class="style1">
  <tr>
  <td width="26" bgcolor="#FFFF99"><div align="center"><strong><font face="Arial, Helvetica, sans-serif">NO</font></strong></div></td>
  <td width="63" bgcolor="#FFFF99"><div align="right"><strong>TGL MASUK</strong></div></td>
  <td width="85" bgcolor="#FFFF99"><strong>NO RM</strong></td>
  <td width="142" bgcolor="#FFFF99"><strong>NAMA PASIEN</strong></td>
  <td width="296" bgcolor="#FFFF99"><strong>ALAMAT</strong></td>
  <td width="124" bgcolor="#FFFF99"><strong>POLI</strong></td>
  <td width="56" bgcolor="#ECE9D8"><strong>PETUGAS</strong></td>
  <td width="93" bgcolor="#FFCCCC"><strong>TGL-JAM</strong></td>
  </tr>
  <?
  $nomer=1;
  if($IdBagian>0){
  $kdjfkd = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk>=$tgl1 AND TglMasuk<=$tgl2 AND BlnMasuk=$bln AND ThnMasuk=$thn1
   AND KodeBagian='$IdBagian'");
  }else{
  $kdjfkd = mysql_query("SELECT * FROM rwtjalan WHERE TglMasuk>=$tgl1 AND TglMasuk<=$tgl2 AND BlnMasuk=$bln AND ThnMasuk=$thn1
   AND KodeDokter='$IdDokter'");
   } 
   while($dc = mysql_fetch_array($kdjfkd)){
   $pa = $nomer%2;
   if($pa==1)
  {
  $warna='bgcolor="#DEFDC8"';
  }else{
  $warna='';
  }
  $kdjfkdf_Fgfg = mysql_query("SELECT Opr,TglJam,id FROM vaksin_pasien WHERE IdPasen='$dc[id]'");
  $nb = mysql_fetch_array($kdjfkdf_Fgfg);
  ?>
  <tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  valign="top"  <?  echo $warna; ?> onClick="wCompares2_01 = window.open('../Kasir/x10.php?IdBagian=<? echo $IdBagian; ?>&doa=tobat&id=<? echo $dc[id]; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();" >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="right"><? echo "$dc[TglMasuk]-$dc[BlnMasuk]-$dc[ThnMasuk]"; ?></div></td>
  <td><div align="center"><? echo $dc[NoPasien]; ?></div></td>
  <td><div align="left"><? echo $dc[NamaPasien]; ?></div></td>
  <td><div align="left"><?
  $kkddf_Df= mysql_query("SELECT Alamat FROM datapasien WHERE NoPasien='$dc[NoPasien]'");
  $dap = mysql_fetch_array($kkddf_Df);
  echo $dap[Alamat]; 
  ?></div></td>
  <td><div align="left"><? $Bagian = strtoupper($dc[Bagian]); 
  if($Bagian=='POLI UGD'){
  ?><font color="#993300"><i>UGD</i></font><?
  }else{
  echo ucfirst(strtolower($dc[Bagian]));
  }?></div></td>
 <td><div align="left"><?
 echo "$nb[Opr]";
 ?></div></td>
 <td><div align="center"><? echo $nb[TglJam]; ?></div></td>
  </tr>
  
  <?
  $nomer++; } ?> <tr>
    <td colspan="6" bgcolor="#FFFF99">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body> 
</html>
<? }else{
header("Location:./ed_d.php"); }
?>
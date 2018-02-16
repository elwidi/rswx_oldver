<?
session_start();
include "../salaman.php";
include "../konek.php";
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
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style2">
<td width="1256" colspan="3" valign="top">
<div align="left"><strong>
LAPORAN PELAYANAN KB<br />
BPS/RBS/RS</strong><br>
PERIODE : <? echo "$tgl1 "; 
 $bln=$bln1; include "../bulan.php";
echo " sd $tgl2 "; 
$bln=$bln2; include "../bulan.php";
?></div></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style1">
<input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';" class="style1"> 
|| 
 
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="0" class="style1">
<tr valign="top">
<td width="21" rowspan="2" bgcolor="#BFF398">NO </td>
<td rowspan="2" bgcolor="#BFF398">NO RM</td>
<td width="135" rowspan="2" bgcolor="#BFF398">NAMA   </td>
<td width="140" rowspan="2" bgcolor="#BFF398">SUAMI </td>
<td width="200" rowspan="2" bgcolor="#BFF398">ALAMAT </td>
<td width="52" rowspan="2" bgcolor="#BFF398">TGL<br />   
  DILAYANI</td>
 
<td colspan="2" bgcolor="#BFF398"><div align="center">PIL   </div></td>
<td colspan="2" bgcolor="#BFF398"><div align="center">SUNTIK  </div></td>
<td colspan="2" bgcolor="#BFF398"><div align="center">IMPLAN  </div></td>
<td colspan="2" bgcolor="#BFF398"><div align="center">IUD   </div></td>
<td colspan="2" bgcolor="#BFF398"><div align="center">STERIL  </div></td>
<td width="300" rowspan="2" bgcolor="#BFF398"> KETERANGAN</td>
</tr>
<tr>
<td width="28" bgcolor="#BFF398">  <div align="center">B</div></td>
<TD width="28" bgcolor="#BFF398">  <div align="center">L</div></TD> 
<td width="28" bgcolor="#BFF398">  <div align="center">B</div></td>
<TD width="24" bgcolor="#BFF398">  <div align="center">L</div></TD> 
<td width="28" bgcolor="#BFF398">  <div align="center">B</div></td>
<TD width="28" bgcolor="#BFF398">  <div align="center">L</div></TD> 
<td width="28" bgcolor="#BFF398">  <div align="center">B</div></td>
<TD width="28" bgcolor="#BFF398">  <div align="center">L</div></TD> 
<td width="28" bgcolor="#BFF398">  <div align="center">B</div></td>
<TD width="28" bgcolor="#BFF398">  <div align="center">L</div></TD> 
</tr>
<?
    $nomer=1;
   $gambar ='<img src="../gb/centang.jpg" width="12" height="11">'; 
 
  $idkdikd_Dfdfd = mysql_query("SELECT * FROM kb ORDER BY id desc LIMIT 0,40");
while($vv =  mysql_fetch_array($idkdikd_Dfdfd)){
$par = $nomer%2;
if($par==1){
$warna='';
}else{
$warna=' bgcolor="#FAEFA5"';
 }  ?>
<tr <? echo $warna;  ?> valign="top"   onClick="wCompares2_01 = window.open('dimas4thn.php?aku=belajar_sholat&id=<? echo $vv[IdPasien]; ?>', 
  'wCompares2_01', 'width=780,height=540,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td><div align="center"><? echo $nomer; ?></div></td>
   <td><div align="left"><? echo $vv[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($vv[NamaPasien])); ?></div></td>
  <td><? 
    $kidkidkfdifd_Dfdfd = mysql_query("SELECT Alamat,NamaOrtu FROM datapasien WHERE NoPasien='$vv[NoPasien]'");
$ya  = mysql_fetch_array($kidkidkfdifd_Dfdfd);
if($ya[NamaOrtu]){
 echo ucfirst(strtolower($ya[NamaOrtu])); 
 }else{
 echo ".";
 } 
?></td>
  <td><div align="left"><?
 echo ucfirst(strtolower($ya[Alamat]));  ?></div></td>
  <td><? echo "$vv[TglMasuk]-$vv[BlnMasuk]-$vv[ThnMasuk]"; ?></td>
  <td><div align="center"><?
  $jenis_1 = mysql_query("SELECT count(id) AS mm FROM kb WHERE NoPasien='$vv[NoPasien]' AND JenisKb='Pil'");
  $dap = mysql_fetch_array($jenis_1);
   if($dap[mm]==1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></td>
  <TD><div align="center"><?
  if($dap[mm]>1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></TD>
<td><div align="center"><?
  $jenis_2 = mysql_query("SELECT count(id) AS mm FROM kb WHERE NoPasien='$vv[NoPasien]' AND JenisKb='Suntik'");
  $dap2 = mysql_fetch_array($jenis_2);
   if($dap2[mm]==1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></td>
  <TD><div align="center"><?
  if($dap2[mm]>1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></TD>  
  <td><div align="center"><?
  $jenis_3 = mysql_query("SELECT count(id) AS mm FROM kb WHERE NoPasien='$vv[NoPasien]' AND JenisKb='Implan'");
  $dap3 = mysql_fetch_array($jenis_3);
   if($dap3[mm]==1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></td>
  <TD><div align="center"><?
  if($dap3[mm]>1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></TD>  
  <td><div align="center"><?
  $jenis_4 = mysql_query("SELECT count(id) AS mm FROM kb WHERE NoPasien='$vv[NoPasien]' AND JenisKb='IUD'");
  $dap4 = mysql_fetch_array($jenis_4);
   if($dap4[mm]==1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></td>
  <TD><div align="center"><?
  if($dap4[mm]>1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></TD>  
  <td><div align="center"><?
  $jenis_5 = mysql_query("SELECT count(id) AS mm FROM kb WHERE NoPasien='$vv[NoPasien]' AND JenisKb='Steril'");
  $dap5 = mysql_fetch_array($jenis_5);
   if($dap5[mm]==1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></td>
  <TD><div align="center"><?
  if($dap5[mm]>1){
	  echo "$gambar";
  }else{
  echo ".";
  }
  ?></div></TD>  
  <td><div align="left"><? if($vv[Keterangan]){
   echo ucfirst(strtolower($vv[Keterangan])); 
   }else{
   echo ".";
   } ?></div></td></tr> <?
  $nomer++; 
  }
  ?>

<tr>
  <td colspan="17" bgcolor="#BFF398">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</body>
</html>
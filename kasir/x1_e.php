<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head><?
include "ciprat_1.php";
include "ciprat_2.php";
include "ciprat_3.php";
include "ciprat_4.php";
?><script language="JavaScript">
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
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style3 {font-size: 14}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<span class="style3"></span>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1092" colspan="3" valign="top">
  <span class="style1">LIST DATA PASIEN</span></td>
</tr>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="107">NAMA PASIEN</td>
<td width="3">:</td>
<td width="662"><div align="left">
<input name="text" type="text" class="style8" id="suggest" />
</div></td>
</tr>
<tr>
  <td>NO RM </td>
  <td>:</td>
 <td><div align="left">
  <input name="text" type="text" class="style8" id="suggest4" />
   </div></td></tr>
<tr>
  <td>ALAMAT</td>
  <td>:</td>
  <td><div align="left">
  <input name="text" type="text" class="style8" id="suggest2" />
   </div></td>
</tr>
<tr>
  <td>TELP</td>
  <td>:</td>
 <td><div align="left">
  <input name="text" type="text" class="style8" id="suggest3" />
   </div></td></tr>
<tr>
  <td colspan="3"><div align="left">
  <input  type="button" name="ffg" value="Kembali" onClick="location.href='index.php';">
  </div></td>
  </tr>
</table>
</div></td>
</tr>
<tr>
  <td colspan="3" valign="top"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="18" bgcolor="#999999"><strong>NO</strong></td>
  <td width="64" bgcolor="#999999"><strong>NO PASIEN</strong></td>
  <td width="203" bgcolor="#999999"><strong>NAMA PASIEN</strong></td>
  <td width="356" bgcolor="#999999"><strong>ALAMAT</strong></td>
  <td width="104" bgcolor="#999999"><strong>TGL LAHIR</strong></td>
  <td width="73" bgcolor="#999999"><strong>UMUR<br>
  THN:BLN:HR</strong></td><td width="167" bgcolor="#999999"><strong>TELP</strong></td>
  <td width="58" bgcolor="#000066"><div align="center"><span class="style4">RJ</span></div></td>
  <td width="58" bgcolor="#000066"><div align="center"><span class="style4">RI</span></div></td>
  </tr>
  <?
  $nomer=1;
  if($mas=='hari'){
  $kdjfkdjfd_Dfdfd  = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
   }else{
  $kdjfkdjfd_Dfdfd  = mysql_query("SELECT * FROM datapasien ORDER BY id desc LIMIT 0,100");
  } while($hh = mysql_fetch_array($kdjfkdjfd_Dfdfd)){
  $pc =$nomer%2;
  if($pc==1){
  $warna='bgcolor="#99FFCC"';
  }else{
  $warna='';
  }?>
  <tr <? echo $warna; ?> valign="top">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $hh[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($hh[NamaPasien])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($hh[Alamat])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($hh[tgllhr])); ?></div></td>
  <td><div align="center"><?
   $pecah = explode("-",$hh[tgllhr]);
 $bi = date("m");
 $hi= date("d");
 $ti= date("Y");
 if($pecah[1]<=12 && $pecah[1]>0 && $pecah[0]>0 && $pecah[0]<=31 && $pecah[2]>1900 && $pecah[2]<=2020){
   $birth = gregoriantojd($pecah[1],$pecah[0],$pecah[2]);
 $cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
 $Usio = ($cal['year']-1);
 $BlnIm = ($cal['month']-1);
 $Har = ($cal['day']-1);
//echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
 $ujuka = "$Usio:$BlnIm:$Har";
//END OF UMUR OK
 $jikp = $pecah[1]-0;
   if($jikp<$bi){ //====
   $umur = $ti - $pecah[2];
   $BlnUmur=$bi-$jikp;
   }else{
   $umur =  $ti - $pecah[2]-1;
   $BlnUmur= 12+$bi-$pecah[1];
   }//
   echo "$Usio:$BlnIm:$Har";
   }else{
   ?><font  color="#990000"><i><b> ???</b></i></font><? 
   }
  ?></div></td>
  <td><div align="left"><? echo $hh[Telp]; ?></div></td>
  <td onClick="wCompare_230 = window.open('a_Sd.php?id=<? echo $hh[id]; ?>', 
  'wCompare_230', 'width=1000,height=300,left=70,Top=134,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_230.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   ><div align="center"><?
  $jaikasuas_ddf = mysql_query("SELECT COUNT(id) as jj FROM rwtjalan WHERE NoPasien='$hh[NoPasien]'");
  $ua= mysql_fetch_array($jaikasuas_ddf);
  echo $ua[jj];
  ?></div></td>
  
  </tr>
 
  <?
  $nomer++; } ?>  <tr  >
    <td colspan="9" bgcolor="#999999">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
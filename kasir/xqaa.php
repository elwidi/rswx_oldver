<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdkjdkdjdkd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ee = mysql_fetch_array($kdkjdkdjdkd);
if(!$ee[id]){
echo "MAAF DATA TIDAK DIKENAL,.....<br>";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="1">
<tR>
<td width="718" colspan="3"><div align="left" class="style1">
HISTORY DATA UPDATE <br />
<?
echo "$ee[RegId]";
?>
</div></td>
</tR>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="107">NO RM</td>
<td width="3">:</td>
<td width="435"><div align="left"><?
 echo $ee[NoPasien]; 
 ?></div></td>
 </tr>
 <tr>
 <td>NAMA PASIEN</td><td>:</td><td><div align="left"><?
 echo strtoupper($ee[NamaPasien]); 
 ?></div></td>
 </tr>
 <tr>
 <td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$ee[TglMasuk] "; 
 $bln=$ee[BlnMasuk]; $thn1=$ee[ThnMasuk];
 include "../bulan.php";
  ?></div></td>
 </tr>
 <tr>
 <td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $ee[JamMasuk];?></div></td>
 </tr>
 <tr>
 <td>OPR</td><TD>:</TD><TD><div align="left"><? echo strtoupper($ee[Operator]); ?></div></TD>
 </tr>
 <TR>
 <TD>BAGIAN</TD><td>:</td><td><div align="left"><?
 echo strtoupper($ee[Bagian]); 
 ?>
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <input type="hidden" name="NoPasien" value="<? echo $NoPasien; ?>">
 <input type="hidden" name="NamaPasien" value="<? echo $NamaPasien; ?>">
 </div></td>
 </TR>
 <tr>
 <td>DOKTER</td><td>:</td><td><div align="left"><? echo $ee[NamaDokter]; ?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="17" height="18" bgcolor="#000000"><span class="style3">NO</span></td>
  <td width="79" bgcolor="#000000"><span class="style3">TGL UPDATE</span></td>
  <td width="140" bgcolor="#000000"><span class="style3">JAM</span></td>
  <td width="77" bgcolor="#000000"><span class="style3">OPR</span></td>
  <td width="182" bgcolor="#000000"><span class="style3">ALASAN</span></td>
  <td width="183" bgcolor="#000000"><span class="style3">INFO</span></td>
  </tr>
  <?
  $no=1;
  $sjdksjksjkdsd = mysql_query("SELECT * FROM dataupdate WHERE IdUpdate='$id' AND NamaTabel='rwtjalan'");
  while($bb = mysql_fetch_array($sjdksjksjkdsd)){
 $pe = $no%2;
 if($pe==1){
 $warna='bgcolor="#FFFF99"';
 }else{
  $warna='';
 }
   ?>
   <tr <? echo $warna; ?> valign="top" >
   <td><div align="center"><? echo $no; ?></div></td>
   <td><div align="left"><? echo "$bb[Tgl]";?></div></td>
   <td><div align="center"><? echo $bb[Jam]; ?></div></td>
      <td><div align="center"><? echo $bb[Opr]; ?></div></td>
   <td><div align="left"><? echo $bb[Alasan]; ?></div></td>
   <td><div align="left"><? echo $bb[Info]; ?></div></td>
  </tr>
  
   <?
   $no++; } ?> <tr>
     <td colspan="6" bgcolor="#000000">&nbsp;</td>
     </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html> 
<? 
}
?>

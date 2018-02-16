<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
echo "Record Set Tidak Dikenal";
}else{
?>
<html>
<head><script language="JavaScript">
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
	</script><script type="text/javascript">
window.onload = function(){
	window.print();
}
</script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body  >
 <input type="hidden" name="id" value="<? echo $id; ?>" />
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="left"><strong>
Halaman  Transaksi<br />
Radiologi 
</strong></div></td>
</tr>
<tr valign="top">
<td width="364" colspan="3"><div align="left">
  <table border="1"  class="style1" cellpadding="1" cellspacing="1">
 <tr height="26">
      <td height="26" colspan="2"><span class="style1"><?
	  $hajahajha = mysql_query("SELECT * FROM NoRadBaru WHERE IdRj='$id'");
$gp = mysql_fetch_array($hajahajha);
?><? echo $gp[NoRad]; ?></span></td>
      <td width="28">&nbsp;</td>
      <td width="160"><div align="right"><?
	  echo "$hh[TglMasuk]-";
	  $bln = $hh[BlnMasuk];
	  include "../bulan.php";
	  echo " $hh[ThnMasuk]"; 
	  ?></div></td>
    </tr>
    <tr height="26" valign="top">
      <td width="18" height="26">-</td>
      <td width="122"><div align="left"><?
	  echo $hh[NoPasien];
	  ?></div></td>
      <td colspan="2"><div  align="left"><?
	  echo strtoupper($hh[NamaPasien]); 
	  ?></div></td>
      </tr>
    <tr height="26">
      <td height="26" colspan="2"><div  align="left"><?
	  $pcd = explode(":",$hh[BlnUmur]);
	  echo "$hh[Umur] Thn"; echo " $pcd[0] Bln $pcd[1] Hr";
	  ?></div></td>
      <td>&nbsp;</td>
      <td><div align="left"><?
	  if($hh[Umur]>=12){
	  echo "Dewasa";
	  }else{
	  echo "Anak";
	  }
	  ?></div></td>
    </tr>
    <tr height="27">
      <td height="27" colspan="4"><div align="left">Dari <?
	  echo $hh[Bagian];
	  ?>
      </div></td>
      </tr>
    <tr height="24">
      <td height="24" colspan="4">Radiologi</td>
      </tr>
    <tr height="26">
      <td height="26" colspan="4">Detail Pemeriksaan </td>
      </tr>
   <tr valign="top" class="4">
   <td colspan="4"><div align="left">
   <table border="0" cellpadding="2" cellspacing="2" class="style22">
     <?
	$ni=1;
$kdidkdikdid = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]'");
while($bx= mysql_fetch_array($kdidkdikdid)){
?><tr valign="top" height="26">
          <td width="26"><div align="center"><? echo $ni; ?></div></td>
    <td width="199"><div align="left"><? echo strtoupper($bx[NamaBiaya]); ?></div></td> 
    <td width="99"><div align="right"><? echo  number_format($bx[JumlahHarga]);
	$ftr=$ftr+$bx[JumlahHarga];
	 ?></div></td>
    </tr>
	<? $ni++; } ?> <tR>
                      <td colspan="2" bgcolor="#F0F0F0"><div align="center"><strong>TOTAL</strong></div></td>
                      <td bgcolor="#F0F0F0"><div align="right"><strong><? echo number_format($ftr); ?></strong></div></td>
                    </tR>
   </table>
   </div></td>
   </tr>
  </table>
</div></td>
</tr>
<tr valign="top" >
  <td colspan="3"><div align="left">
  <img src="../gb/rada.jpg">
  </div></td>
</tr>
</table>
</body>
</html>
<?
}
?>
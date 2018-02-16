<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
echo "Record Set Tidak Dikenal";
}else{
$hajahajha = mysql_query("SELECT * FROM NoRadBaru WHERE IdRj='$id'");
$gp = mysql_fetch_array($hajahajha);
if($gp[id]){
$NoRad=$gp[NoRad];
}else{
$NoRad='12G - 1300';
} 
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
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body bgcolor="#CCCCCC">
<form action="swi.php"> 
<input type="hidden" name="id" value="<? echo $id; ?>" />
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="left">
Halaman Input Nomer Transaksi<br />
Radiologi 
</div></td>
</tr>
<tr valign="top">
<td width="352" colspan="3"><div align="left">
  <table border="1"  class="style1" cellpadding="1" cellspacing="1">
 <tr height="26">
      <td height="26" colspan="2"><span class="style1"><input type="text" name="Nomer" value="<? echo $NoRad; ?>" maxlength="120" size="23" /></span></td>
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
   <table border="1" class="style1">
     <?
	$ni=1;
$kdidkdikdid = mysql_query("SELECT * FROM txnjalan WHERE RegId='$hh[RegId]'");
while($bx= mysql_fetch_array($kdidkdikdid)){
?><tr valign="top" height="26">
          <td width="26"><div align="center"><? echo $ni; ?></div></td>
    <td width="199"><div align="left"><? echo strtoupper($bx[NamaBiaya]); ?></div></td> 
    <td width="82"><div align="right"><? echo  number_format($bx[JumlahHarga]);
	$ftr=$ftr+$bx[JumlahHarga];
	 ?></div></td>
    </tr>
	<? $ni++; } ?> <tR>
                      <td colspan="2" bgcolor="#A7F99C"><div align="center"><strong>TOTAL</strong></div></td>
                      <td bgcolor="#A7F99C"><div align="right"><strong><? echo number_format($ftr); ?></strong></div></td>
                    </tR>
   </table>
   </div></td>
   </tr>
  </table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input  type="submit" value="Simpan" name="fgfgf" />
  <input   value="Cetak I"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="button" name="fgf" class="style1"   onClick="wCompare = window.open('au2.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" />
  <input  name="fgfgf" value="Cetak II"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="button"   class="style1"   onClick="wCompare = window.open('au3.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" />
  <input type="button" name="fgfgf" value="Kembali" onClick="location.href='kik_de.php?id=<? echo $id; ?>';" />
  <input type="button" name="fgfgf" value="Depan" onClick="location.href='index.php';" />
  </div></td>
</tr>
</table>
</form>
</body>
</html>
<?
}
?>
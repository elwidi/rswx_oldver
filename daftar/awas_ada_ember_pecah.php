<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];

$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
	  $kjkdfd_DFdfdf = mysql_query("SELECT *  FROM  pj_rajal  Where IdRajal='$id'");
$xw = mysql_fetch_array($kjkdfd_DFdfdf);

if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script><?
$jkjk_jbnjknkjn = mysql_query("SELECT * FROM datapasien WHERE id='$IdPasien'");
$pp = mysql_fetch_array($jkjk_jbnjknkjn);
include "ciprat_4.php";
include "ciprat_1.php";
?><style type="text/css">
 
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style4 {color: #FFFFFF}
-->
</style></head>
<body>
<form action="s_soe.php"> 
<table border="0" cellpadding="2" cellspacing="2">
  <tr class="style1">
<td background="../gambar/bg.jpg" width="699" colspan="3"><div align="left">
Halaman Menentukan Penanggung Jawab<br>
Untuk <?
echo ucfirst(strtolower($uu[NamaPasien])); echo " ($uu[NoPasien])"; 
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left"> 
        <table width="688" border="0" cellpadding="2" cellspacing="2" class="style2">
          <?
		  if($pp[id]){
		  ?>
          <tr>
		  <td>No Rm</td><td>:</td>
		  <td><div  align="left"><? echo $pp[NoPasien]; ?></div></td>
		  </tr>
		  <tr>
		  <td>Nama Pasien</td><td>:</td>
		  <td><div align="left"><? echo ucfirst(strtolower($pp[NamaPasien])); ?>
		  <input type="hidden" name="id" value="<? echo $id; ?>">
		  <input type="hidden" name="IdPasien" value="<? echo $IdPasien; ?>">
		  </div></td>
		  </tr>
		  
		  <tr>
		  <td>Tgl Lahir</td><td>:</td>
		  <td><div align="left"><? echo $pp[tgllhr]; ?></div></td>
		  </tr>
		  <tr valign="top">
		      <td height="24" >Alamat</td>
              <td>:</td>
		  <td><div align="left"><? echo ucfirst(strtolower($pp[Alamat])); ?></div></td>
		  </tr>
		  <tr valign="top">
		  <td>Keterangan</td><td>:</td>
<td><div align="left">
<textarea rows="3" cols="40" name="Keterangan" <? if($xw[id]){ ?> disabled="disabled"<? } ?> class="style2"><? echo $xw[Keterangan]; ?></textarea>
</div></td>
		  </tr>
		  <tr>
		  <td>Opr</td><td>:</td><td><div align="left"><? 
		  echo ucfirst(strtolower($xw[Opr])); echo " // $xw[TglJam]"; 
		  ?></div></td>
		  </tr>
		  <tr>
		  <td colspan="3">&nbsp;</td>
		  </tr>
		  <tr valign="top" bgcolor="#FFFF99">
		  <td colspan="3"  background="../gambar/bg.jpg" ><div  align="left">
		  <input type="submit" value="Simpan" name="fgfg" class="style2">
		  <input type="button" name="fgfgf" value="Reset" onClick="location.href='awas_ada_ember_pecah.php?id=<? echo $id; ?>';" class="style2">
		  <?
		  if($xw[id]){
		  ?>
		  <input type="button" name="fgfgf" value="Hapus"   onClick="wCompare_98saz = window.open('hari_271275.php?id=<? echo $id; ?>', 
  'wCompare_98saz', 'width=780,height=120,left=370,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_98saz.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style2"> 
		  <?
		  }
		   ?>
		  <input type="button" name="fgfgf" value="Kembali" onClick="location.href='ed_d.php?ade=3';" class="style2">
		  </div></td>
		  </tr>
		  <?
		  
		  }else{
		  ?><tr> 
            <td width="191">No Rm</td>
            <td width="7">:</td>
            <td width="470"><div align="left">  <input name="text" type="text" class="style8" id="suggest4" size="14" maxlength="50" />
 </div></td>
          </tr>
          <tr valign="top">  
            <td>Nama Penanggungjawab</td>
            <td>:</td>
            <td><div align="left"><input name="text" type="text" class="style8" id="suggest" /> </div></td>
          </tr> <tr>
		  <td colspan="3"><div align="left">
		   <input type="button" name="dfddf" value="Kembali Ke Halaman Depan" onClick="location.href='ed_d.php';">
		  </div></td>
		  </tr>
		  <? } ?>
        </table>
      </div>
</td>
</tr>
</table>
</form>
</body>
</html>
<?
}
?>
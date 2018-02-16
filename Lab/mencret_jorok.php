<?
session_start();
 include "../konek.php";
 include "../ceke.php";
$id = $_GET["id"];
if($id==1){
$buku="NAMA PASIEN";
$var = "NamaPasien";
}elseif($id==2){
$buku="NO RM";
$var = "NoPasien";
}else{
$buku="NAMA PASIEN";
$var = "NamaPasien";

}
 
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000; }
-->
</style><script language="JavaScript">
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
</head>
<body>
<div align="center">
<table width="1031" border="0" align="left" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bgcolor="#000066">
<td colspan="10" bgcolor="#FFFFFF">
<div align="left">
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
<?
if($hari=="manis" || $hari=="oke"){
?>
<tr bgcolor="#9999CC">
<td colspan="10"><div align="center">
<input type="button" name="ffgf" value="R E S E T" onClick="location.href='mencret_jorok.php?id=1';">
</div></td>
</tr>
<? 
}else{
?>
<tr  >
<td colspan="10"><span class="style1">
<div align="left">
<form target="_self">
<table border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="111"><? echo strtoupper($buku); ?></td><td width="8">:</td><td width="273"><div align="left">
<input name="<? echo $var; ?>" type="text" class="style1" size="30" maxlength="30">
<?
if($id==1){
?>
<input type="hidden" name="hari" value="manis">
<? } 
 
if($id==2){
?>
<input type="hidden" name="hari" value="oke">
<? }  ?>
</div></td>
<td width="627"><div align="left"><input name="dffg" type="button" class="style1" onClick="location.href='mak.php';" value="Mundur">
<input name="fgfgf" type="button" class="style1" onClick="location.href='mencret_jorok.php?id=1';" value="Bds Nama">
<input name="fgfgf" type="button" class="style1" onClick="location.href='mencret_jorok.php?id=2';" value="Bds No">
<input name="fgfggf" type="button" class="style1" onClick="location.href='mungkin_lebih_baik.php';" value="Tambah Data">
<input name="dfdffd" type="button" class="style1" onClick="location.href='mencret_jorok.php';" value="All">
</div></td>
</tr>
</table>
</form>
</div>
</span></td>
</tr>
<? } ?>
<tr bgcolor="#000066" class="style1">
<td width="25" bgcolor="#48A743"><span class="style5">NO</span></td>
<td width="46" bgcolor="#48A743"><span class="style5">NO RM <br>
  (LAB)</span></td><td width="64" bgcolor="#48A743"><span class="style5">NO DAFTAR</span></td>
  <td width="58" bgcolor="#48A743"><span class="style5">TGL LHR</span></td>
  <TD width="187" bgcolor="#48A743"><span class="style5">USIA THN/BLN </span></TD>
  <td width="51" bgcolor="#48A743"><span class="style5">JENIS KELAMIN</span></td>
<td width="294" bgcolor="#48A743"><span class="style5">NAMA PASIEN</span></td>
<td width="43" bgcolor="#48A743"><span class="style5">TELP</span></td>
<td width="150" bgcolor="#48A743"><span class="style5">ALAMAT</span></td>
<td width="181" bgcolor="#48A743"><span class="style5">OPR</span></td>
</tr>
<?
if($id==1 ||  $id==2){
///////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>
<tr>
<td colspan="10"><div align="center" class="style1">
MASUKAN <? echo strtoupper($buku); ?>
</div></td>
</tr>
<?
///////////+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
}else{
$no=1;
if($hari=="manis"){
$nurmul = mysql_query("SELECT * FROM labumum2 WHERE NamaPasien like '$NamaPasien%' ORDER BY id DESC  LIMIT 0,400");
}elseif($hari=="oke"){
$nurmul = mysql_query("SELECT * FROM labumum2 WHERE id='$NoPasien%'  LIMIT 0,400");
}else{
$nurmul = mysql_query("SELECT * FROM labumum2 ORDER BY id desc LIMIT 0,400");
}
while($aa = mysql_fetch_array($nurmul)){
?>
<tr   class="style1" valign="top"
  onClick="location.href='jujur_kacang_ijo.php?id=<? echo $aa[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="center"><? echo $aa[id]; ?></div></td>
<td><div align="left"><? echo $aa[RegId]; ?></div></td>
<td><div align="left"><? echo "$aa[TglLahir]/$aa[BlnLahir]/$aa[ThnLahir]"; ?></div></td>
<td><div align="center"><? 
$birth = gregoriantojd($aa[BlnLahir],$aa[TglLahir],$aa[ThnLahir]);
$cal = cal_from_jd(1721426+unixtojd()-$birth, CAL_GREGORIAN);
$ThHu = ($cal['year']-1);
$BlHu=($cal['month']-1);
$HarU = ($cal['day']-1);
echo "$ThHu Thn "; ?>
<font color="#FF0033"><? echo "$BlHu Bln "; ?></font><? echo "$HarU Hr";
 //echo 'Umur : ' . ($cal['year']-1) . ' tahun, ' . ($cal['month']-1) . ' bulan, ' . ($cal['day']-1) . ' hari';
?></div></td>
<td><div align="left"><? echo $aa[JenisKelamin]; ?></div></td>
<td><div align="left"><? echo strtoupper($aa[NamaPasien]); ?></div></td>
<td><div align="left"><? echo $aa[HpTelp]; ?></div></td>
<td><div align="left"><? echo strtoupper($aa[Alamat]);   ?></div></td>
<td><div align="left"><? echo strtoupper($aa[Opr]); ?></div></td>
</tr>
<? $no++; } ?>
<tr bgcolor="#000066">
<td colspan="10" bgcolor="#48A743"><span class="style1">.</span></td>
</tr>
<? } ?>
</table>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?> 
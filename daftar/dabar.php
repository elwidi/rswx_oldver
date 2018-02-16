<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==2){
 $kadal = $_GET [ "kadal" ];
$NamaPasien = $_GET [ "NamaPasien" ];
$NoPasien = $_GET [ "NoPasien" ];
$id = $_GET [ "id" ];
$hari = $_GET [ "hari" ];
$badak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($badak);
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
	</script>
 <style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {color: #000000; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 12px}
.style590 {color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-weight: bold}
-->
 </style>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
  <div align="center">
<form action="gundul.php">
<table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF"  class="style590"> 
<?
if($hari=="bapak"){
	$hysh = mysql_query("SELECT NoOtom FROM no_oto WHERE id=1");
	$i_sd = mysql_fetch_array($hysh);
$tanto = $i_sd[NoOtom];
echo "$tanto<br>";
 $bas = mysql_query("SELECT NoPasien,id FROM datapasien WHERE NoPasien LIKE '$tanto%' ORDER BY NoPasien DESC limit 0,30");// LIKE '1156%' ORDER BY NoPasien DESC");
$ye = mysql_fetch_array($bas);
//$NoPasien=$ye[NoPasien];
?>
<tr bgcolor="#000000"> 
<?
}else{ 
?><tr bgcolor="#349D35">
<? } ?>
  <td  colspan="3" bgcolor="#00FF33">
    <div align="center" class="style2 style3">MENU REGISTRASI PASIEN BARU    </div></td></tr>
 
 <tr bordercolor="#000000" class="style6">
<td width="226"><div align="left" class="style7 style8">
  <div align="left">No Rm </div>
</div></td>
<td width="14"><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td width="277"><div align="left" class="style9">
  <div align="left">
    <?
	if(!$NoPasien){ 
	$djhfjddf= mysql_query("SELECT NoPasien FROM datapasien  ORDER BY id DESC");
	$jj = mysql_fetch_array($djhfjddf);
	$Nomer = $jj[NoPasien]+1;
	?><!-- <input type="text" name="NoPasien" maxlength="20" value="<? echo $Nomer; ?>" size="20"  disabled="disabled"/> --><? 
	}else{
	?><!-- <input type="text" name="NoPasien" maxlength="20" value="<? echo $NoPasien; ?>" size="20" disabled="disabled" /> -->
	<? } ?>OTOMATIS SAAT DISIMPAN || NO TERAKHIR : <? echo $jj[NoPasien]; ?>
</div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Nama Pasien </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="NamaPasien" type="text" class="style590" id="NamaPasien" value="<? echo $NamaPasien; ?>" size="50" maxlength="100"
 autofocus="autofocus" >
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Alamat</div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="Alamat" type="text" class="style590" id="Alamat" value="<? echo $Alamat; ?>" size="50" maxlength="150">
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Jenis Kelamin </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td> <div align="left" class="style8"><span class="style4"><span class="style5"><span class="style6">
<select name="JenisKelamin" class="style590">
<?
if($JenisKelamin=='L'){
?>
<option value="L">PRIA</option>
<? 
}else{
?>
<option value="P">Wanita</option>
<? 
}
?>
<option value="L">Pria</option>
<option value="P">Wanita</option>
</select></span></span></span></div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Tmp Lahir </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="TempatLhr" type="text" class="style590" id="TempatLhr" value="<? echo $TempatLhr; ?>" size="30" maxlength="50" />
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Tgl Lahir </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
  <input type="text" name="tl" maxlength="2" size="2" >-
    <input type="text" name="bl" maxlength="2" size="2" >-
    <input type="text" name="thl" maxlength="4" size="4" >-
 
Tg-Bl-Thn  
</div>
</div></td>
</tr>
<tr>
<td>No Ktp/Identitas</td>
<td>:</td><td><div align="left">
<input  type="text" name="NoKtp" maxlength="100" size="30"   >
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Agama</div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <select name="agama" class="style590">
	<?
	if($agama>0){
	?>
	<option value="<? echo $agama; ?>"><?
	if($agama==3){
	echo "KATOLIK";
	}elseif($agama==2){
	echo "KRISTEN";
	}elseif($agama==2){
	echo "KRISTEN";
	}elseif($agama==1){
	echo "ISLAM";
	}elseif($agama==5){
	echo "BUDHA";
	}elseif($agama==4){
	echo "HINDU";
	}elseif($agama==6){
	echo "LAINNYA";
}
	?></option>
	<? 
	}
	?>	<option value="1">Islam</option>
 	<option value="3">Katholik</option>
	<option value="2">Kristen</option>
 	<option value="5">Budha</option>
	<option value="4">Hindu</option>
		<option value="6">Lainnya</option>
	</select>
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Pendidikan</div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <select name="Pendidikan" class="style590">
	<?
	if($Pendidikan>0){
	?>
	<option value="<? echo $Pendidikan; ?>"><?
	if($Pendidikan==1){
		echo "Lain - lain";
	}elseif($Pendidikan==2){
	echo "SD";
	}elseif($Pendidikan==3){
	echo "SLTP";
	}elseif($Pendidikan==4){
	echo "SLTA";
	}elseif($Pendidikan==5){
	echo "PERG. TINGGI";
	}elseif($Pendidikan==6){
echo "TK";
}
	 ?></option>
	<? 
	}
	?>
		<option  value="6">Lain-Lain</option>
<option value="1">TK</option>
	<option value="2">SD</option>
	<option value="3">SLTP</option>
	<option value="4">SLTA</option>
	<option value="5">PERG. TINGGI</option>
	</select>
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Pekerjaan</div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <!-- <input name="Pekerjaan" type="text" id="Pekerjaan" size="20" maxlength="20" />
	LAIN-LAIN
	PNS
	SWASTA
	PELAJAR / MAHASISWA
	TNI/POLRI
	WIRASWASTA
	PETANI
	BURUH
	PENSIUNAN
	 -->
	 <select name="Pekerjaan" class="style590">
	 <?
	 if($Pekerjaan!=''){
	 ?>
	 <option value="<? echo $Pekerjaan; ?>"><? echo $Pekerjaan; ?></option>
	 <? 
	 }
	 ?>
	 <option value="LAIN-LAIN">LAIN-LAIN</option>
 	 <option value="PNS">PNS</option>
 	 <option value="SWASTA">SWASTA</option>
	 <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
	 <option value="PETANI">PETANI</option>
	 <option value="BURUH">BURUH</option>
	 <option value="PENSIUNAN">PENSIUNAN</option>
	 </select>
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Status Kawin </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <select name="StatusNikah" class="style590" id="StatusNikah">
	<?
	if($StatusNikah>0){
	?>
	<option value="<? echo $StatusNikah; ?>"><?
	if($StatusNikah==2){
	echo "KAWIN"; 
	}elseif($StatusNikah==1){
	echo "BELUM KAWIN";
	}elseif($StatusNikah==3){
	echo "DUDA";
	}elseif($StatusNikah==4){
	echo "JANDA";
	}
	 ?></option>
	<? 
	}
	?>
 	<option value="2">Kawin</option>
	<option value="1">Belum Kawin</option>
	<option value="3">Duda</option>
	<option value="4">Janda</option>
	</select>
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Nama Suami/Istri </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="NamaOrtu" type="text" class="style590" id="NamaOrtu" value="<? echo $NamaOrtu; ?>" size="50" maxlength="150">
  </div>
</div></td>
</tr>
<tr>
<td>Status Penanggung Jawab </td>
<td>:</td><td><div align="left">
<select name="JenisPj" class="style590">
<?
if($JenisPj!=''){
?>
<option value="<? echo $JenisPj; ?>"><? echo $JenisPj; ?></option>
<?
}
?>
<option value="Sendiri">Sendiri</option>
<option value="Orang Tua">Orang Tua</option>
<option value="Suami">Suami</option>
<option value="Istri">Istri</option>
<option value="Anak">Anak</option>
<option value="Saudara">Saudara</option>
<option value="Pihak Lain">Pihak Lain</option>
</select>
</div></td>
</tr>
<tr>
<td>Nama Penanggung Jawab</td><td>:</td><td><div align="left">
<input  type="text" name="NamaPj2" value="<? echo $pp[NamaPj2]; ?>" maxlength="100" size="20">
</div></td>
</tr>
<tr>
<td>Alamat Penanggung Jawab</td>
<td>:</td><td><div align="left">
<input  type="text" name="AlamatPj" value="<? echo $pp[AlamatPj]; ?>" maxlength="100" size="20">
</div></td>
</tr>
<tr>
<td>Nama Ortu</td>
<td>:</td><td><div align="left">
<input name="AlamatOrtu" type="text" class="style590" value="<? echo $AlamatOrtu; ?>" size="30" maxlength="120">
</div></td>
</tr>
<!-- 
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">NO INDEN </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="NoIden"  type="hidden" value="." id="NoIden" size="20" maxlength="20" />
  </div>
</div></td>
</tr> --> <tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Telp</div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="Telp" type="text" class="style590" id="Telp" value="<? echo $Telp; ?>" size="30" maxlength="30">
  </div>
</div></td>
</tr>
<tr>
<td>Gol Darah </td>
<td>:</td><td><div align="left">
<select name="GolDar" class="style590">
<?
if($GolDar>0){
?>
<option value="<? echo $GolDar; ?>"><? 
if($GolDar==1){
echo "A";
}elseif($GolDar==2){
echo "B";
}elseif($GolDar==3){
echo "AB";
}elseif($GolDar==4){
echo "O";
} 
?></option>
<?
}
?>
<option value="0">--GOLONGAN DARAH--</option>
<option value="1">A</option>
<option value="2">B</option>
<option value="3">AB</option>
<option value="4">O</option>
</select>
</div></td>
</tr>

<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">Tgl Masuk </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
  <?
  $nis= date("d"); $maso = date("m"); $ghyt = date("Y");
  ?>
    <select name="tgM" class="style590">
    <option value="<? echo $nis; ?>"><?  echo $nis; ?></option>
     </select>
/
<select name="blM" class="style590">
<option value="<? echo $maso; ?>"><? echo $maso; ?></option>
 </select>
/
<select name="thM" class="style590">
<option value="<? echo $ghyt; ?>"><? echo $ghyt;  ?></option>
 </select>
<input type="hidden" name="bas" value="8">
  </div>
</div></td>
</tr>
<?
/*
<tr>
<td>Penjamin</td>
<td>:</td><td><div align="left">
<select name="KodePer" class="style590">
<?
if($KodePer>0){
?>
<option value="<? echo $KodePer; ?>"><? 
$kjdjd33 = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$KodePer'");
$vk33 = mysql_fetch_array($kjdjd33);
echo strtoupper($vk33[NamaPer]);
?></option>
<? 
}else{
?>
<option value="-">Umum-</option>
<? } ?>
<?
$kkddjdjd  =  mysql_query("SELECT id FROM dataperusahaan Order by NamaPer");
while($xp =  mysql_fetch_array($kkddjdjd)){
?>
<option value="<? echo $xp[id]; ?>"><? 
$kjdjd = mysql_query("SELECT NamaPer FROM dataperusahaan where id='$xp[id]'");
$vk = mysql_fetch_array($kjdjd);
echo strtoupper($vk[NamaPer]);
?></option>
<? } ?>
</select>
</div></td>
<tr>
<td bgcolor="#00FF99"><span class="style5">NO KARTU</span></td>
<td bgcolor="#00FF99">:</td>
<td bgcolor="#00FF99"><div align="left">
<input name="NoKartu" type="text" class="style590" value="<? echo $NoKartu; ?>" size="20" maxlength="50">
</div></td>
</tr>
*/
?><tr bgcolor="#349D35">
<td colspan="3">
<div align="center">
  <input name="Sima" type="submit" class="style590" value="Simpan">
    
  </div></td>
</tr>
</table>
 </form>
 </div> 
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>

<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2 || $a[Level]==77){
 $kadal = $_GET [ "kadal" ];
$NamaPasien = $_GET [ "NamaPasien" ];
$NoPasien = $_GET [ "NoPasien" ];
$id = $_GET [ "id" ];
$hari = $_GET [ "hari" ];
$badak = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$pp = mysql_fetch_array($badak);
?>
<html>
<head><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('search89.php', 
			{
				/*	parameter "parse" pada script ini sebenarnya adalah deklarasi ulang
					dari event parse di library jquery-autocomplete.
					fungsinya adalah untukmenghandle data yang diterima, karena data yang
					diterima adalah Ajax maka penanganannya adalah sebagai berikut: */
				parse: function(data){ 
					var parsed = [];
					for (var i=0; i < data.length; i++) {
						parsed[i] = {
							data: data[i],
							value: data[i].NoPasien // nama field yang dicari
							 // nama field yang dicari
						};
					}
					return parsed;
				},
				/*	pada parameter formatItem, kita dapat mengcustom tampilan yang akan muncul ketika 
					ada result dari hasil pencarian autocomplete, kalau formatItem ini tidak di deklarasikan
					maka hanya akan muncul berupa daftar nama yang terkesan kaku */
				formatItem: function(data,i,max){
					var str = '';
					/* 	tampilkan foto, apabila foto kosong, maka tampilkan default unknown image
						berapapun lebar foto ini, tingginya disesuaikan menjadi 50px agar tidak menghabiskan tempat */
					 
					
					/*  variable "data" merupakan variable dengan tipe json atau array assosiatif javascript 1 dimensi 
						oleh karena itu dalam mengambil setiap pada "data" hanya dengan "data.nama_property" */
str += '<u>'+data.NoPasien+'</u><br />NAMA.'+data.NamaPasien+'<br />Tgl Lhr: '+data.tgllhr+' / '+data.Bln+' / '+data.Thn+'<br>REC : '+data.IdPasien;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.NoPasien+'';;
location.href="x2_9.php?NoPasien=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	
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
<form action="gundulx2.php">
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
  <td height="37" colspan="3" bgcolor="#00FF33">
    <div align="center" class="style2 style3">MENU REGISTRASI PASIEN BARU    </div></td></tr>
 
 <tr bordercolor="#000000" class="style6">
<td width="226"><div align="left" class="style7 style8">
  <div align="left">NO RM </div>
</div></td>
<td width="14"><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td width="277"><div align="left" class="style9">
  <div align="left"><?
  if($NoPasien!=''){
  ?>
  <input type="text" name="NoPasien" maxlength="50"  value="<? echo $NoPasien; ?>">
  <?
  }else{
  ?><input type="text"   id="suggest"  class="style590"/><? } ?></div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">NAMA PASIEN </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <input name="NamaPasien" type="text" class="style590" id="NamaPasien" value="<? echo $NamaPasien; ?>" size="50" maxlength="100">
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">ALAMAT</div>
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
  <div align="left">JENIS KELAMIN</div>
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
<tr bgcolor="#990000">
<td><strong><font color="#FFFFFF">UMUR KIRA-KIRA</font></strong></td>
<td>:</td><td><div align="left">
<input name="UmurKira" type="text" class="style590" id="UmurKira" value="0" size="12" maxlength="12">
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">TMP LAHIR </div>
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
  <div align="left">TGL LAHIR </div>
</div></td>
<td><div align="center" class="style9">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td><div align="left" class="style9">
  <div align="left">
    <select name="tl" class="style590" id="tl">
	<?
	if($tl>0){
	?>
	<option value="<? echo $tl; ?>"><? echo $tl; ?></option>
	<? 
	}
	?><?
	$noo=1;
	while($noo<32){
	?>
	<option value="<? echo $noo; ?>"><? echo $noo;  ?></option>
	<? $noo++; } ?>
	</select> / <select name="bl" class="style590" id="bl">
	<?
	if($bl>0){
	?>
	<option value="<? echo $bl; ?>"><? echo $bl; ?></option>
	<? 
	}
	?>
	<option value="1">Januari</option>
	<option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
			</select>
/
<select name="thl" class="style590" id="thl">
<?
if($thl>0){
?>
<option value="<? echo $thl; ?>"><? echo $thl;?></option>
<?
}
?>
<?
$oopo = date("Y");
$awaa= 1920;
while($oopo>$awaa){
?>
<option value="<? echo $oopo; ?>"><? echo $oopo; ?></option>
<? $oopo--; } ?>
</select> 
Tg/Bl/Thn  
</div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">AGAMA</div>
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
	?><option value="0">--Agama--</option>
	<option value="3">Katholik</option>
	<option value="2">Kristen</option>
	<option value="1">Islam</option>
	<option value="5">Budha</option>
	<option value="4">Hindu</option>
		<option value="6">Lainnya</option>
	</select>
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style9">
  <div align="left">PENDIDIKAN</div>
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
  <div align="left">PEKERJAAN</div>
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
  <div align="left">STS KAWIN </div>
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
  <div align="left">NAMA SUAMI / ISTRI </div>
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
<td>STATUS PENANGGUNG JAWAB</td><td>:</td><td><div align="left">
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
<td>NAMA ORTU </td>
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
  <div align="left">TELP</div>
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
<td>GOL DARAH</td><td>:</td><td><div align="left">
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
  <div align="left">TGL MASUK </div>
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
	  <?
	$noo=1;
	while($noo<32){
	?>
      <option value="<? echo $noo; ?>"><? echo $noo;  ?></option>
      <? $noo++; } ?>
    </select>
/
<select name="blM" class="style590">
<option value="<? echo $maso; ?>"><? echo $maso; ?></option>
  <option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maret</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Agustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
</select>
/
<select name="thM" class="style590">
<option value="<? echo $ghyt; ?>"><? echo $ghyt;  ?></option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
</select>
<input type="hidden" name="bas" value="8">
  </div>
</div></td>
</tr>
<tr>
<td>PENJAMIN</td><td>:</td><td><div align="left">
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
</tr>
 <tr>
<td bgcolor="#00FF99"><span class="style5">NO KARTU</span></td>
<td bgcolor="#00FF99">:</td>
<td bgcolor="#00FF99"><div align="left">
<input <? if($NoPasien!=''){ }else{?> disabled="disabled"<? } ?> name="NoKartu" type="text" class="style590" value="<? echo $NoKartu; ?>" size="20" maxlength="50">
</div></td>
</tr>
<tr bgcolor="#349D35">
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

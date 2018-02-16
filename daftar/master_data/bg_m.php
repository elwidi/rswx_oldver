<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdjdjd = mysql_query("SELECT * FROM dokter WHERE id='$id'");
$uu = mysql_fetch_array($jdjdjd);
 if($a[Level]==2){
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
		$('#suggest').autocomplete('search66.php', 
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
							value: data[i].NamaDokter // nama field yang dicari
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
str += '<u>'+data.NamaDokter+'</u><br />Telp.'+data.Telp+'<br />Hp: '+data.Hp+'  <br> '+data.Alamat+''+data.Alamat+'<br>SIP : '+data.Sik;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="bg_m.php?id=" + Result;
			}
		);
	});
  </script> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
	font-size: 11px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #006600;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="left"> 
<table height="303" border="0" cellpadding="2" cellspacing="2" >
<tr bgcolor="#58BB4F"class="style1">
<td colspan="3" >List Data Dokter</td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style3"><? include "../../kucrit.php"; ?></div></td>
</tr>
<tr valign="top">
<td colspan="2" ><div align="left">
<?
if($uu[id]){
?><form action="eddx.php">
<? }else{
?>
<form action="edd.php">
<? } ?>
<table width="400"  border="0" cellpadding="2" cellspacing="2" class="style2">
<?
if($uu[Stap]==1){
?><tr>
  <td colspan="3" bgcolor="#990000">
    <div align="center" class="style4">Data Ini Sudah Di Non Aktifkan    </div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#000099"><div align="center" class="style5">Oleh  : 
  <?
echo ucfirst(strtolower($uu[Opr])); echo "Tgl/Jam: $uu[TglJam]";
?>
</div></td>
</tr><?
}
?>
<tr valign="top">
<td width="114">Nama Dokter </td>
<td width="8">:</td>
<td width="218"><textarea name="NamaDokter" cols="30" rows="3" class="style2"><? echo $uu[NamaDokter]; ?></textarea>
<input type="hidden" name="mas" value="<? echo $uu[id]; ?>"></td>
</tr>
<tr>
  <td>Specialisasi </td>
  <td>:</td>
  <td><div align="left">
  <select name="Spc" class="style2">
  <?
  if($uu[id]){
  ?>
  <option value="<? echo $uu[KodeSpc]; ?>"><?
    $jujuj = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$uu[KodeSpc]'");
   $bb = mysql_fetch_array($jujuj);
   echo strtoupper($bb[NamaSpc]); ?></option>
  <? 
  }else{
  ?>
  <option value="-">--specialisasi--</option>
  <? } ?>
  <?
  $majam= mysql_query("SELECT * FROM specialisasi ORDER BY NamaSpc");
  while($xx = mysql_fetch_array($majam)){
  ?>
  <option value="<? echo $xx[id]; ?>"><? 
   $jujuj = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$xx[id]'");
   $bb = mysql_fetch_array($jujuj);
   echo ucfirst(strtolower($bb[NamaSpc]));
  ?></option>
  <?
  }?>
  </select>
  </div></td>
</tr>
<tr>
  <td>Bagian</td>
  <td>:</td>
  <td><div align="left">
    <select name="IdBagian" class="style2">
      <?
if($uu[id]){
?>
      <option value="<? echo $uu[IdBagian]; ?>">
        <?
$mjms2 = mysql_query("SELECT * FROM bagian WHERE id='$uu[IdBagian]'");
$nb2 = mysql_fetch_array($mjms2);
echo strtoupper($nb2[NamaBagian]);
 ?>
        </option>
      <?
}else{
?>
      <option value="-">--Bagian--</option>
      <? } ?>
      <?
$mjm = mysql_query("SELECT * FROM bagian ORDER BY NamaBagian");
while($zz = mysql_fetch_array($mjm)){
?>
      <option value="<? echo $zz[id]; ?>">
        <?
$mjms = mysql_query("SELECT * FROM bagian WHERE id='$zz[id]'");
$nb = mysql_fetch_array($mjms);
echo strtoupper($nb[NamaBagian]);
?>
        </option>
      <? } ?>
    </select>
  </div></td>
</tr>
<tr>
  <td>Npwp</td>
  <td>:</td>
  <td><input name="Npwp" type="text" class="style2" id="Npwp" size="12" maxlength="50" value="<? echo $uu[Npwp]; ?>"></td>
</tr>
<tr>
  <td>Telp</td>
  <td>:</td>
  <td><input name="Telp" type="text" class="style2" id="Telp" size="12" maxlength="50" value="<? echo $uu[Telp]; ?>"></td>
</tr>
<tr>
  <td>Hp</td>
  <td>:</td>
  <td><div align="left">
  <input name="Hp" type="text" class="style2" size="12" maxlength="50" value="<? echo $uu[Hp]; ?>">
  </div></td>
</tr>
<tr valign="top">
  <td>ALamat</td>
  <td>:</td>
  <td><textarea name="Alamat" cols="30" rows="3" class="style2" id="Alamat"><? echo $uu[Alamat]; ?></textarea></td>
</tr>
<tr>
<td>Sik</td>
<td>:</td><td><div align="left">
<input type="text" name="Sik" maxlength="120" size="30" value="<? echo $uu[Sik]; ?>" class="style2">
</div></td>
</tr>
<?
if($uu[id] && $uu[Stap]==0){
?>
<tr>
<td colspan="3"><div align="left">UPDATE TERAKHIR OLEH  : <?
echo strtoupper($uu[Opr]); echo "TGL/JAM: $uu[TglJam]";
?></div></td>
</tr>
<? 
}else{
?>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
  <? } ?>
<tr>
  <td colspan="3"><div align="left">
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="submit" value="Simpan" name="fgf" class="style1">
  <?
  if($uu[id]){
  ?>
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="dfd" value="Reset" onClick="location.href='bg_m.php';" class="style1">
  <?
  }
  ?>
   <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="ffgf" value="Cari "  class="style1"
    onClick="wCompare = window.open('3ss.php', 
  'wCompare', 'width=400,height=140,left=470,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
	<?
	if($uu[Stap]==1){
		$Kalimat='Aktikan';
	$warna='style="background:#FFCC99"';
	}else{
		$warna='style="background:#33FF00"';
$Kalimat='NonAktifkan';
}
	if($uu[id]){
	 ?><input  type="button" name="ffgf" value="<?  echo $Kalimat;  ?>"  class="style1"
    onClick="wCompare_99kkjhn_12m = window.open('c3_d.php?id=<? echo $uu[id]; ?>', 
  'wCompare_99kkjhn_12m', 'width=900,height=140,left=70,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_99kkjhn_12m.focus();" <? echo $warna; ?> >
	<? } ?>
   <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="ffgf" value="Selesai" onClick="location.href='../index.php';" class="style1">
  </div></td>
  </tr>
<tr>
  <td colspan="3"><div align="left">
  <input  onClick="wCompare233 = window.open('x2.php', 
  'wCompare233', 'width=920,height=540,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare233.focus();" type="button" name="fgf" value="Tampilkan Dalam Bentuk Form"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style1">
  </div></td>
</tr>
</table>
</form>
</div></td><td width="948"  valign="top"><div align="left">
 <table width="849" border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td colspan="6" valign="top">
 <div align="left">
 <table border="0" class="style1" cellpadding="2" cellspacing="2">
 <tr>
 <td width="120">Nama Dokter</td>
 <td width="9">:</td>
 <td width="255"><div align="left">
 <input type="text" class="style1" id="suggest" />
 </div></td>
 </tr>
 </table>
 </div>
 </td>
 </tr>
 <tr>
 <td width="25" bgcolor="#58BB4F"><strong>NO</strong></td>
 <td width="196" bgcolor="#58BB4F"><strong>NAMA DOKTER</strong></td>
 <td width="174" bgcolor="#58BB4F"><strong>SPC</strong></td>
 <td width="175" bgcolor="#58BB4F"><strong>BAGIAN</strong></td>
 <td width="175" bgcolor="#58BB4F"><strong>TELP</strong></td>
  <td width="175" bgcolor="#58BB4F"><strong>ALAMAT</strong></td>
</tr>
 <?
 $nomer =1;
 $NamaDokter  = $_GET["NamaDokter"];
 $nas = $_GET["nas"];
 if($nas>0){
 $jsmsjsm = mysql_query("SELECT * FROM dokter WHERE NamaDokter LIKE '%$NamaDokter%' ORDER BY NamaDokter asc LIMIT 0,20");
 }else{
 $jsmsjsm = mysql_query("SELECT * FROM dokter WHERE Stap=0 ORDER BY NamaDokter asc LIMIT 0,20");
 }
 while($vv = mysql_fetch_array($jsmsjsm)){
 $re = $nomer %2;
if($re==1){
$warna ='bgcolor="#FFFF99"';
}else{
$warna ='';
}
 ?> 
 <tr  <? echo $warna; ?> onClick="location.href='bg_m.php?id=<? echo $vv[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
 <td><div align="center"><? echo $nomer; ?></div></td>
  
 <td><div align="left"><? echo $vv[NamaDokter]; ?></div></td>
 <td><div align="left"><?
 $nama = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$vv[KodeSpc]'");
 $hn = mysql_fetch_array($nama);
 echo ucfirst(strtolower($hn[NamaSpc])); 
 ?></div></td>
 <td><div align="left"><?
 $ujuj = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$vv[IdBagian]'");
 $bb = mysql_fetch_array($ujuj);
 echo ucfirst(strtolower($bb[NamaBagian]));
 ?></div></td>
 <td><div align="left"><?
 echo $vv[Telp]; 
 ?></div></td>
 <td><div align="left">
 <?
 echo $vv[Alamat];
 ?></div></td>
 </tr>
 <?
 $nomer++; } ?>
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

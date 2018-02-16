<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
 $id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if($FiLaDim2[UbDr3]==0){
echo "MAAF SDR ";   ?><font color="#990000"><b><i><? echo strtoupper($a[Nama]); ?></i></b></font><? echo "  TIDAK DIIJINKAN AKSES HALAMAN INI, SILAHKAN HUBUNGI ADMIN";
}elseif(!$x[id]){
header("Location:../../keluar2.php");
}else{
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
		$('#suggest').autocomplete('search2.php', 
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
str += '<u>'+data.NamaDokter+'</u><br>Specialist    '+data.NamaSpc;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="sw3.php?id=<? echo $id; ?>&IdDokter=" + Result;
			}
		);
	});
  </script>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCFF00';
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
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#59BA54" class="style24">
<td width="1138" height="65" colspan="3" bgcolor="#59BA54">
  
    <div align="center">
       <img src="../../gambar/depan.png">
    </div></td>
</tr><tr valign="top">
<td colspan="2">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td  colspan="3"><div align="left" class="style1">
HALAMAN TAMBAH DOKTER
</div></td>
</tr>
<tr>
<td colspan="2" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style23">
<tr>
<td width="112">NO RM</td>
<td width="8">:</td>
<td width="252"><div align="left"><? echo $x[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($x[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?></div></td>
</tr>
<tr>
<td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $x[JamMasuk];?></div></td>
</tr>
<tr>
  <td>KELAS</td>
  <td>:</td>
  <td><div align="left">
  <?
  $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaRuangan]);
  ?>
  </div></td>
</tr>
<tr>
  <td>DOKTER UTAMA </td>
  <td>:</td>
  <td><div align="left"><? 
  echo $x[KetDokter]; 
  ?></div></td>
</tr>
<tr>
  <td>TAMBAH DOKTER </td>
  <td>:</td>
  <td><input type="text" class="style23" id="suggest" /></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left"><?
  $kdjd = mysql_query("SELECT * FROM dokter");
  while($v = mysql_fetch_array($kdjd)){
  //
  $jdk = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$v[KodeSpc]'");
  $yg = mysql_fetch_array($jdk);
  //
  $k = mysql_query("UPDATE  `Dokter` SET `NamaSpc` = '$yg[NamaSpc]' WHERE `Dokter`.`id` ='$v[id]'");
  if($k){
  //echo "$v[NamaDokter] -- $v[KodeSpc] + $v[NamaSpc]<br>";
  }else{ //echo "gagal<br>";
  }
  }
  ?>
  <input type="button" name="fgf" value="Kembali" onClick="location.href='../fito_sayangku.php';" class="style23">
  </div></td>
</tr>
</table>
</div>
</td><td width="733" valign="top"> 
<div align="left">
<table width="682" border="0" cellpadding="2" cellspacing="2" class="style23">
<tr>
<td width="49" height="25" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
<td width="98" bgcolor="#59BA54"><strong>TGL</strong></td>
<td width="360" bgcolor="#59BA54"><strong>DOKTER</strong></td>
 <td width="147" bgcolor="#59BA54"><strong>OPR</strong></td>
</tr>
<?
$nomer =1;
$dkjfkdjfd = mysql_query("SELECT * FROM tambahdokter WHERE IdPasien='$id'");
while($cc = mysql_fetch_array($dkjfkdjfd)){
?><? if($FiLaDim2[UbDr4]==0){ ?> 
<tr bgcolor="#FFCC99">
<? }else{ ?>
<tr  onClick="wCompare = window.open('exs.php?id=<? echo $id; ?>&IdDetil=<? echo $cc[id]; ?>', 
  'wCompare', 'width=400,height=100,left=370,Top=120, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
	<? } ?>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $cc[Tgl]; ?></div></td>
  <td><div align="left"><? echo $cc[NamaDokter]; ?></div></td>
   <td><div align="left"><? echo $cc[Opr]; ?></div></td>
</tr> 
<?
$nomer++; } ?>
<tr>
  <td colspan="5" bordercolor="#FFCC00" bgcolor="#59BA54">&nbsp;</td>
  </tr>
<?

?>
</table>
</div>
</td>
</tr>
</table>
</div>
</td>
</tr>
</table>

</div>
</body>
</html>
<? 
} ?>

<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdjdjd = mysql_query("SELECT * FROM rujukan WHERE id='$id'");
$uu = mysql_fetch_array($jdjdjd);
 if($a[Level]==2){?>
<html>
<head> <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('search66d.php', 
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
							value: data[i].NamaRujukan // nama field yang dicari
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
str += '<u>'+data.NamaRujukan+'</u><br />Telp.'+data.Telp+'<br />Hp: '+data.Hp+'  <br> '+data.Alamat;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="3zsx.php?id=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3366';
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
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #003399;
}
-->
</style>
</head>
<body>
<div align="left">
<?
if($uu[id]){
?><form action="eddx2.php">
<? }else{
?>
<form action="exdd.php">
<? } ?>
<table  width="600" height="303" border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#58BB4F"class="style1">
<td colspan="3" >List Data Rujukan</td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style3"><? include "../../kucrit.php"; ?>.</div></td>
</tr>
<tr valign="top">
<td colspan="2"><div align="left">
<table width="421"  border="0" cellpadding="2" cellspacing="2" class="style2">
<tr valign="top">
<td width="114">NAMA RUJUKAN </td>
<td width="8">:</td>
<td width="218"><input name="NamaRujukan" type="text" class="style2" value="<? echo $uu[NamaRujukan]; ?>" size="30">
<input type="hidden" name="mas" value="<? echo $uu[id]; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</td>
</tr>
<tr>
  <td>TELP</td>
  <td>:</td>
  <td><input name="Telp" type="text" class="style2" id="Telp" size="12" maxlength="50" value="<? echo $uu[Telp]; ?>"></td>
</tr>
<tr>
  <td>HP</td>
  <td>:</td>
  <td><div align="left">
  <input name="Hp" type="text" class="style2" size="12" maxlength="50" value="<? echo $uu[Hp]; ?>">
  </div></td>
</tr>
<tr valign="top">
  <td>ALAMAT</td>
  <td>:</td>
  <td><textarea name="Alamat" cols="30" rows="3" class="style2" id="Alamat"><? echo $uu[Alamat]; ?></textarea></td>
</tr>
<?
if($uu[id]){
?>
<tr>
<td colspan="3"><div align="left">UPDATE TERAKHIR OLEH  : <font color="#990000"><b><i><?
echo strtoupper($uu[Opr]);  ?></i></b></font><? echo "TGL/JAM: $uu[TglJam]";
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
  <input type="submit" value="Simpan" name="fgf" class="style1"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <?
  if($uu[id]){
  ?>
  <input type="button" name="dfd" value="Reset" onClick="location.href='3zsx.php';" class="style1"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <?
  }
  ?>
  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="ffgf2" value="Cari "  class="style1"
    onClick="wCompare = window.open('3ss.php?hari=sabar', 
  'wCompare', 'width=400,height=140,left=470,Top=230,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
  <input type="button" name="ffgf" value="Selesai" onClick="location.href='../index.php';" class="style1"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  </div></td>
  </tr>
</table>
</div></td><td width="965"  valign="top"><div align="left">
  <table border="1">
  <tr>
  <td valign="top"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td width="126">NAMA PASIEN</td>
  <td width="8">:</td>
  <td width="313"><div align="left">
    <input name="text" type="text" class="style1" id="suggest" />
  </div></td>
  </tr>
  </table>
  </div></td>
  </tr>
  <tr>
  <td valign="top"><div align="left">
  <table width="596" border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="35"   bgcolor="#58BB4F"><div align="center"><strong>NO</strong></div></td>
 <td width="366" bgcolor="#58BB4F"><strong>NAMA RUJUKAN </strong></td>
  <td width="175" bgcolor="#58BB4F"><strong>ALAMAT</strong></td>
 </tr>
 <?
 $nomer =1;
 $nas = $_GET["nas"];
 $NamaDokter = $_GET["NamaDokter"];
 if($nas>0){
 $jsmsjsm = mysql_query("SELECT * FROM rujukan WHERE NamaRujukan LIKE '$NamaDokter%' ORDER BY id desc LIMIT 0,30");
 }else{
 $jsmsjsm = mysql_query("SELECT * FROM rujukan ORDER BY id desc LIMIT 0,30");
 }
 while($vv = mysql_fetch_array($jsmsjsm)){
$re = $nomer %2;
if($re==1){
$warna ='bgcolor="#B4FAA8"';
}else{
$warna ='';
}
?> 
 <tr <? echo $warna; ?>  onClick="location.href='3zsx.php?id=<? echo $vv[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"> 
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td><div align="left"><? echo $vv[NamaRujukan]; ?></div></td>
  <td><div align="left"><?
  echo strtoupper($vv[Alamat]); 
  ?></div></td>
 </tr>
 <?
 $nomer++; } ?>
 </table>
  </div></td>
  </tr>
  </table>
 </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}
?>

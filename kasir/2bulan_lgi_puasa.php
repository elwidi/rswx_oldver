<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $file='../gambar/keperawatan.gif';
if($a[Level]==9){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest3').autocomplete('../Daftar/cari_aja.php', 
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
str += '<u>'+data.NamaRujukan+'<br>Alamat :'+data.Alamat+'<br>Telp : '+data.Telp;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="2bulan_lgi_puasa.php?id=" + Result;
			}
		);
	});
  </script>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; color: #FFFFFF; }
.style7 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="left">
<table width="962" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="954" colspan="3"><div align="left" class="style4">
LIST DATA RUJUKAN 
 </div></td>
</tr>

<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0"  class="style2" cellpadding="2" cellspacing="2">
<tr>
<td width="265">NAMA PERUJUK</td>
<td width="3">:</td>
<td width="395"><div align="left">
<input type="text" class="style34343434399" id="suggest3" />
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="FGFFG" value="Kembali" onClick="location.href='index.php';" class="style2"><?
if($supran=='hari'){
?><input type="button" name="FGFFG" value="Tampil Global" onClick="location.href='2bulan_lgi_puasa.php';" class="style2" style="background:#FFCCCC">
<? 
}else{
?>
<input type="button" name="FGFFG" value="Tampil Detil" onClick="location.href='2bulan_lgi_puasa.php?supran=hari';"  style="background:#66FF66"class="style2">
<? } ?><? if($id>0){?>
<input type="button" name="fgfgfgf" value="Reset View" onClick="location.href='2bulan_lgi_puasa.php';" class="style2">
<? } ?></div></td>
</tr>
</table>
</div>
</td>
</tr> <tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="24" bgcolor="#000099"><span class="style6">NO</span></td>
<td width="180" bgcolor="#000099"><span class="style6">NAMA <BR>
PERUJUK</span></td>
<td width="206" bgcolor="#000099"><span class="style6">ALAMAT</span></td>
<td width="135" bgcolor="#000099"><span class="style6">TELP</span></td>
<td width="67" bgcolor="#000099"><div align="center" class="style7"><span class="style3">ITEM</span></div></td>
<?
if($supran=='hari'){
?>
<td width="93" bgcolor="#000099"><span class="style6">DI INPUT<br />
  OLEH</span></td><td width="122" bgcolor="#000099"><div align="center" class="style7"><span class="style3">TGL-JAM</span></div></td>
  <? } ?>
</tr>
<?
$nomer=1;
if($id>0){
$kdjfdF_Dfdfd =  mysql_query("SELECT * FROM rujukan where id=$id");
}else{
$kdjfdF_Dfdfd =  mysql_query("SELECT * FROM rujukan ORDER BY NamaRujukan LIMIT 0,120");
} while($bb = mysql_fetch_array($kdjfdF_Dfdfd)){
 $kjdfdf_Dfdfd =  mysql_query("SELECT COUNT(id) AS kk FROM rwtjalan WHERE RujukanDari='$bb[NamaRujukan]'");
 $yg = mysql_fetch_array($kjdfdf_Dfdfd);
$ana = $nomer%2;
if($ana==1){
$warna=' bgcolor="#CFFFB3"';
}else{
$warna='';
} ?>
<tr <? echo $warna; ?> valign="top" <?
if($yg[kk]>0){
?>  onClick="wCompare_eeee = window.open('b03_n.php?id=<? echo $bb[id]; ?>', 
  'wCompare_eeee', 'width=880,height=440,left=100,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_eeee.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($bb[NamaRujukan])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($bb[Alamat])); ?></div></td>
<td><div align="left"><? if($bb[Telp]!=''  && $bb[Hp]!=''){
echo "$bb[Telp] / $bb[Hp]";
}else{ echo "$bb[Telp]   $bb[Hp]"; }
 ?></div></td>
 <td><div align="center"><?
 if($yg[kk]>0){
 echo number_format($yg[kk]);
 }else{
 echo "-"; 
 }
 ?></div></td><?
if($supran=='hari'){
?>
<td><div align="left"><? $par =  ucfirst(strtolower($bb[Opr]));
if($par=='Aceng yusup'){
?><font  color="#3366FF"><i><? echo $par; ?></i></font><?
}elseif($par=='Nur'){
?><font  color="#990000"><i><b><? echo $par; ?></b></i></font><?
}elseif($par=='Putri'){
?><font color="#66CC33"><? echo $par; ?></font><?
}elseif($par=='Puspito'){
?><font color="#FF9999"><? echo $par;?></font><? 
}else{
echo $par; 
} ?></div></td>
<td><div align="center"><? echo $bb[TglJam]; ?></div></td>
<? } ?>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
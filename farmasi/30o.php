<?
session_start();
include "../konek.php";
include "../salaman.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
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
	</script><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('search.php', 
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
							value: data[i].NamaObat // nama field yang dicari
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
str += '<u>'+data.NamaObat+'</u><br />HARGA BELI Rp.'+data.HargaBeli+'<br />Merk: '+data.NamaMerk;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="f_fff.php?IdObat=&iin=bca&id=<? echo $id; ?>&IdBarang=" + Result;
			}
		);
	});
  </script>
</head>
<body>
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="605" colspan="3"><div align="left" class="style1">
LIST DATA OBAT
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<table width="412" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="73">NAMA</td>
<td width="8">:</td>
<td width="262"><div align="left">
<input type="text" class="style2" id="suggest"  name="NamaObat"/>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="ad" value="2">
<input type="hidden" name="iin" value="<? echo $iin; ?>">
</div></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="467" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="23" bgcolor="#000000"><span class="style3">NO</span></td>
<td width="79" bgcolor="#000000"><span class="style3">KODE</span></td>
<td width="287" bgcolor="#000000"><span class="style3">NAMA BARANG</span></td>
<td width="50" bgcolor="#000000"><div align="center" class="style3">STOK</div></td>
<td bgcolor="#000000"><span class="style3">SETT</span></td>
</tr>
<?
$nomer=1;
$nma = mysql_query("SELECT * FROM dataobat WHERE NamaObat LIKE '$NamaObat%' LIMIT 0,30");
while($c = mysql_fetch_array($nma)){
 //
 $nom = $nomer%2;
 if($nom==1){
 $warna=' bgcolor="#CCFDC4"';
 }else{
 $warna='';
 }
 ?><tr valign="top" <? echo $warna; ?>       onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='f_fff.php?IdObat=<?
 echo $IdObat; ?>&iin=<? echo $iin; ?>&id=<? echo $id; 
?>&IdBarang=<? echo $c[id]; ?>';">
 <td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $c[KodeObat]; ?></div></td>
<td><div align="left"><? echo strtoupper($c[NamaObat]); ?></div></td>
<td><div align="center"><?
 include "huting.php";
 ?></div></td>
 <td><div align="center"><? 
 $ksisksik = mysql_query("SELECT count(id) as jh FROM settingsatuan WHERE IdBarang='$c[id]'");
$yb = mysql_fetch_array($ksisksik);
if($yb[jh]>0){
echo "$yb[jh]";
}else{
echo "-";
} 
?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="5" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}
?>

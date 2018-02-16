<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
$NamaBiaya = $_GET["NamaBiaya"];
$DtPsn = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$a21 = mysql_fetch_array($DtPsn);
if($a[Level]==12){
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
		$('#suggest').autocomplete('search8.php', 
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
							value: data[i].NamaBiaya // nama field yang dicari
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
str += '<u>'+data.NamaBiaya+'</u><br />HARGA.'+data.Harga;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="kakus2.php?KodeDokter=<? echo $as21[KodeDokter]; ?>&id=<? echo $id; 
?>&IdBiaya=" + Result;
			}
		) 
	});
  </script>
<style type="text/css">
<!--
.style2 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style5 {font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
.style6 {color: #FFFFFF}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body alink="#000000" link="#000000" vlink="#000000">

<div align="left">
  <table width="500" height="124" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFCC" class="style5">
    <tr bordercolor="#FFCCFF" bgcolor="#000099" class="style2">
      <td colspan="18" bgcolor="#333333"><div align="center" class="style13 style2 style6"><strong>
        LIST BIAYA TRANSAKSI
        <br>
      <?
echo "$a[Level]";
?>   </strong></div></td>
    </tr>
    
    <TR bgcolor="#000099" class="style18">
      <TD width="23" bgcolor="#FFCC66">NO</TD>
	  <td>ID</td>
      <td width="161" bgcolor="#FFCC66">NAMA BIAYA</td>
     <td width="59" bgcolor="#FFCC66"><div align="right">HARGA</div></td>
       
 <td width="162" bgcolor="#FFCC66"><div align="center">ITM LAB</div></td>
      <td width="63" bgcolor="#FFFFFF">SELISIH</td>
    </TR>
    <?
$no=1;
   $datas = mysql_query("SELECT * FROM tabelbiayax WHERE NamaBiaya LIKE '$NamaBiaya%'  LIMIT 0,100");
 while($as = mysql_fetch_array($datas)){
 $pada  = $no%2;
 if($pada==1){
 $warna=' bgcolor="#DEFBB3"';
 }else{
 $warna='';
 }
  
 ?>  <tr <?  echo $warna; ?> 
onClick="location.href='kakus.php?KodeDokter=<? echo $as21[KodeDokter]; ?>&id=<? echo $id; 
?>&IdBiaya=<? echo $as[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
      <td ><div align="center" ><? echo $no; ?></div></td> 
           <td><div align="center">#<? echo $as[id]; ?></div></td>
<td ><div align="left" ><? echo strtoupper($as[NamaBiaya]);   ?></div></td>
      <td ><div align="right" ><?  
  echo number_format($as[Tiga]); ?></div></td>
      <td ><div align="center">
         <?
 $hjp= mysql_query("SELECT COUNT(id) AS jj FROM sublab WHERE IdBiaya='$as[id]'");
 $uio = mysql_fetch_array($hjp);
 echo $uio[jj];
?>
      </div></td>
     <td <? if($sel!=0){?> bgcolor="#CCCC99"<? } ?>><div align="center"><? echo number_format($sel); ?></div></td>
        </tr>
    <? $no++; } ?>
    <tr bgcolor="#000099">
      <td colspan="18" bgcolor="#00FF00">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
<?
}else{
 echo "MAAF ANDA ADALAH USER LEVEL,...$a[Level],...Jadi Tidak memiliki akses ,...KE HALAMAN INI,...<BR>";
?>
<a href="index.php">Kembali</a>
<?
  } 
?> 
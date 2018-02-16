<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 if($FiLaDim[Duabelas]=='on' && $a[Level]==9){
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
		$('#suggest').autocomplete('search9.php', 
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
str += '<u>'+data.NoPasien+'</u>'+'<br>No Kwitansi:KWT'+data.id+'<br />NamaPasien.'+data.NamaPasien+'<br />TGL BAYAR '+data.TglBayar+' / '+data.BlnBayar+' / '+data.ThnBayar+'<br>JENIS : '+data.NamaType;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="n70_v.php?hari=mitra&id=" + Result;
			}
		);
	});
  </script>
  <style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
  </style>
 </head>
 <body alink="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF">
 <div align="left">
 <table width="770" border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="762" colspan="3" valign="top">
 HALAMAN PENGGABUNGAN KWITANSI </td> 
 </tr>
 <tr>
 <td colspan="3" valign="top"><div align="left">
 <table border="1">
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="746" border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="129">NO RM</td>
 <td width="8">:</td>
 <td width="487"><div align="left">
 <input type="text" class="style123" id="suggest" />
 || <input type="button" name="fgf" value="Buat Nomer" onClick="location.href='f00.php';">
 <input type="button" name="gffg" value="Cetak" onClick="location.href='x_0.php';">
 </div></td>
 </tr>

</table>
</div>
</td>
</tr>  <tr>
 <td colspan="3" valign="top">
 <div  align="left">
 <table width="699" border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="17" bgcolor="#0000CC"><span class="style1">NO</span></td>
 <td width="55" bgcolor="#0000CC"><span class="style1">NO RM</span></td>
 <td width="161" bgcolor="#0000CC"><span class="style1">NAMA PASIEN</span></td>
 <td width="140" bgcolor="#0000CC"><span class="style1">POLI</span></td>
 <td width="145" bgcolor="#0000CC"><span class="style1">DOKTER</span></td>
 <td width="81" bgcolor="#0000CC"><div align="right"><span class="style1">NILAI</span></div></td>
 <td width="109" bgcolor="#0000CC" colspan="2"><span class="style1">KWT</span></td>
 </tr>
 <?
 $nomer=1;
 $kdfjkdfjd = mysql_query("SELECT * FROM kwita_gab WHERE IdOpr='$a[id]' AND Stat=0");
 while($hb = mysql_fetch_array($kdfjkdfjd)){
 ?>
 <tr>
   <td><div align="center"><? echo $nomer; ?></div></td>
   <td><div align="center"><? echo $hb[NoPasien]; ?></div></td>
   <td><div align="left"><? echo $hb[NamaPasien]; ?></div></td>
   <td><div align="left"><? echo $hb[NamaBagian]; ?></div></td>
   <td><div align="left"><? echo $hb[NamaDokter]; ?></div></td>
   <td><div align="right"><? echo number_format($hb[Nilai]);
   $tot = $tot + $hb[Nilai]; ?></div></td>
   <td><div align="left"><? echo "KWT:$hb[IdKwitansi]"; ?></div></td>
   <td bgcolor="#000000"><span class="style2"><strong>
   <a href="n70_v.php?hari=ayah&id=<? echo $hb[IdKwitansi]; ?>" style="text-decoration:none">HAPUS</a></strong></span></td>
 </tr>
 <?
 $nomer++; } ?>
 <tr>
   <td colspan="5" bgcolor="#0000CC"><span class="style2">TOTAL</span></td>
   <td bgcolor="#0000CC"><div align="right" class="style2"><?
   echo number_format($tot);
   ?></div></td>
   </tr>
 <?
 $nomer=1;
 $kdjfkdjfd  = mysql_query("");
 ?>
 </table>
 </div>
 </td>
 </tr>
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
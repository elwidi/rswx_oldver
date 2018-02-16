<?php 
session_start();
include "../konek.php";
include "../ceke.php";
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
str += '<u>'+data.NamaObat+'</u><br />TglEd.'+data.Tgl+'-'+data.Bln+'-'+data.Thn;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="7cxs.php?raka=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCC66';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color:#000066
 }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
-->
    </style></head>
<body>
<div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr valign="top">
 <td width="564" colspan="3"><div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td width="137" class="style2">NAMA OBAT</td>
 <td width="3"><strong>:</strong></td>
 <td width="406"><div align="left">
 <input type="text"  id="suggest" autofocus="autofocus"  /><?
 if($raka>0){
 ?>
 <input type="button" name="fgfgf" value="Reset" onClick="location.href='7cxs.php';">
 <? 
 }
 ?>
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="35" bgcolor="#003399"><div align="center"><span class="style3">NO</span></div></td>
<td width="325" bgcolor="#003399"><span class="style3">OBAT/ALKES</span></td>
<td width="32" bgcolor="#003399"><div align="center"><span class="style3">QTY</span></div></td>
 <td width="64" bgcolor="#003399"><div align="right"><span class="style3">NILAI</span></div></td>
 <td width="67" bgcolor="#003399"><div align="right"><span class="style3">TGL ED</span></div></td>
</tr>
<?
$nomer=1;
 if($raka>0){
 $kjsdkdf_fgf = mysql_query("SELECT * FROM stok_opm WHERE id='$raka'");
}else{
 $kjsdkdf_fgf = mysql_query("SELECT * FROM stok_opm WHERE IdUnit='$a[KodeBagian]' AND Stat=0 order by id desc
 limit 0,20");
}
while($vv = mysql_fetch_array($kjsdkdf_fgf)){
$ps =$nomer%2;
if($ps==1){
$warna=' bgcolor="#CCFFCC"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>  onClick="wCompare_c21d12 = window.open('x_09.php?id=<? echo $vv[id]; ?>', 
  'wCompare_c21d12', 'width=580,height=140,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_c21d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $vv[NamaObat]; ?></div></td>
<td><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
 <td><div align="right"><?
echo number_format($vv[Hna]); 
$tot = $tot + $vv[Hna];
?></div></td>
<td><div align="right"><?
echo "$vv[Tgl]-$vv[Bln]-$vv[Thn]";
?></div></td>
 </tr>
<?
$nomer++; } ?><tr>
  <td colspan="3" bgcolor="#003399"><div align="center" class="style3">TOTAL</div></td>
  <td bgcolor="#003399"><div align="right"><span class="style4"><?
  echo number_format($tot); ?></span></div></td>
</tr>

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
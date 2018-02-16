<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jkfgf_fgfgf = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
$ya  =  mysql_fetch_array($jkfgf_fgfgf);
if($a[Level]==11){
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
location.href="eli_adik_hari.php?id=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
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
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
  </style>
</head>
<body>
<div align="left">
<table width="990" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td height="51" colspan="3" bgcolor="#99CCCC"><div align="left" class="style1">
INPUT BARANG RETUR &amp; RUSAK  
</div></td>
</tr>
<tr>
<td colspan="2" valign="top">
<div align="left">
<table width="365" border="0" cellpadding="2" cellspacing="2">
<tr class="style2">
<td width="115">Nama Obat</td>
<td width="21">:</td>
<td width="209"><div align="left">
<?
if($ya[id]){
echo ucfirst(strtolower($ya[NamaObat]));
}else{
?><input type="text" class="style2" id="suggest" />
<? } ?></div></td>
</tr>
 <tr>
<td colspan="3">&nbsp;</td>
</tr> 
<tr>
  <td colspan="3"><input type="button" name="fgfgf" value="Selesai" onClick="location.href='index.php';"></td>
  </tr>
</table>
</div>
</td><td width="609"><div align="left">
<?
if($ya[id]){
?><table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="17" bgcolor="#FFCC99"><strong>No</strong></td>
<td width="113" bgcolor="#FFCC99"><strong>Tgl Faktur</strong></td>
<td width="113" bgcolor="#FFCC99"><strong>Supplier</strong></td>
<td width="111" bgcolor="#FFCC99"><strong>Po</strong></td>
<td width="68" bgcolor="#FFCC99"><strong>Faktur</strong></td>
<td width="20" bgcolor="#FFCC99"><strong>Qty</strong></td>
<td width="45" bgcolor="#FFCC99"><strong>Satuan</strong></td> 
<td width="45" bgcolor="#FFCC99"><strong>Harga</strong></td> 
<td width="45" bgcolor="#FFCC99"><div align="right"><strong>Total</strong></div></td> 
</tr>
<?
$no=1;
$kkdfd_Dfd= mysql_query("SELECT * FROM podetil77 WHERE IdBarang='$ya[id]'");
while($pp = mysql_fetch_array($kkdfd_Dfd)){
$kdf_Df = mysql_query("SELECT NoPo,NamaSupplier,id FROM polog77 WHERE id='$pp[IdPo77]'");
$yap = mysql_fetch_array($kdf_Df);
$poa = $no%2;
 $ldkldlfdl_Dfdfdm = mysql_query("SELECT id FROM returbeli WHERE IdDetil='$pp[id]'");
  $bv = mysql_fetch_array($ldkldlfdl_Dfdfdm);
 if($bv[id]){
$warna='  bgcolor="#FF99CC"';
 }elseif($poa==1){
$warna=' bgcolor="#FFCC66"';
}else{
$warna='';
}
  
 if($bv[id]){
 ?><tr valign="top" bgcolor="#F0CBFE"><? 
 }else{
?> 
<tr <? echo $warna; ?> valign="top"  onClick="wCompare = window.open('xe3.php?id=<? echo $yap[id]; ?>&IdDetil=<? echo $pp[id]; ?>', 
  'wCompare', 'width=399,height=290,left=60,Top=240,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<? } ?>
<td><div align="center"><? echo $no; ?></div></td> 
<td><div align="right"><? 
 $kjdfdf_Dfdfd = mysql_query("SELECT * FROM fakturpo where IdPo='$pp[IdPo77]'");
 $yh = mysql_fetch_array($kjdfdf_Dfdfd);
echo "$yh[TglDtgl]-$yh[BlnDtg]-$yh[ThnDtg]"; 
?></div></td>
<td><div align="left"><?
echo ucfirst(strtolower($yap[NamaSupplier])); ?> 
 </div></td>
 <td><div align="left"><? echo $yap[NoPo]; ?></div></td>
 <td><div align="left"><?
 echo $yh[NoFaktur];
 ?></div></td>
 <td><div align="center"><? echo $pp[Qty]; ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($pp[NamaSatuan])); ?></div></td>
 <td><div align="right"><? echo number_format($pp[Harga]); ?></div></td>
 <td><div align="right"><? echo number_format($pp[Total]);
 $tot  = $tot + $pp[Total];
  ?></div></td>
</tr>
<?
$no++; } ?>
<tr>
  <td colspan="8" bgcolor="#FFCC99"><div align="center">Total</div></td>
  <td bgcolor="#FFCC99"><div align="right"><? echo number_format($tot); ?></div></td>
</tr>
</table>
<? }else{ echo "SILAHKAN TENTUKAN OBAT YANG AKAN DIRETUR"; }  ?>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<? }else{
echo "ANDA TIDAK BERHAK AKSES HALAMAN INI";
}
?>
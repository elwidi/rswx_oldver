<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$IdBiaya  = $_GET["IdBiaya"];
$anak  = $_GET["anak"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
///
$kdjkdjkfd_Fgf = mysql_query("SELECT * FROM kwitansirj WHERE RegId='$ii[RegId]'");
$nn = mysql_fetch_array($kdjkdjkfd_Fgf);
//
//$jujhuh = mysql_query("SELECT * FROM TarifRad WHERE id='$IdBiaya'");
//$bk = mysql_fetch_array($jujhuh);
if($nn[id]){
echo "TRANSAKSI INI SUDAH SELESAI <br>DI BAYAR DI KASIR TGL : $nn[TglBayar]-$nn[BlnBayar]-$nn[ThnBayar]<br>OLEH $nn[Kasir] : JAM: $nn[JamBayar]";
}elseif(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?>
<html>
<head><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("d_231.php?NamaBiaya=<? echo $NamaBiaya; ?>&id=<? echo $id; ?>", "wCompare", "width=580,height=440,left=370,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

 
//--></script> 
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-size: 12px}
-->
</style><script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest').autocomplete('../Kasir/search2.php', 
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
str += '<u>'+data.NamaBiaya+'</u><br />Harga.'+data.Tiga;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="../m12w.php?id=<? echo $id; ?>&IdBiaya=" + Result;
			}
		);
	});
  </script><script language="JavaScript">
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
	</script>
</head>
<body <? if($NamaBiaya!=''){?> onLoad="toCompare()" <? } ?>>
<div align="left">
<?
if($bk[id]){
?>
<form action="../d7s.php">
<?
}else{
?>
<form target="_self">
<? } ?>
<table border="0" cellpadding="0" cellspacing="0"> 
<tr bgcolor="#62BE5B">
<td width="1123" colspan="3" valign="top"><div align="left">
<img src="../gambar/radpng">
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="438"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="133">REG ID</td>
  <td width="8"><strong>:</strong></td>
  <td width="275"><div align="left">
  <?
  echo "$ii[RegId]";
  ?>
  </div></td>
  </tr>
  <tr>
  <td>TGL/JAM MASUK</td><td><strong>:</strong></td>
  <td><div align="left"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk] $ii[JamMasuk]"; ?></div></td>
  </tr>
  <tr>
    <td>NO RM</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo $ii[NoPasien]; ?></div></td>
  </tr>
  <tr>
    <td>NAMA PASIEN </td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
  </tr>
  <tr>
  <td>UMUR</td><td><strong>:</strong></td>
  <td><div align="left"><?  echo "$ii[Umur] Thn ";
  $pc = explode(":",$ii[BlnUmur]); 
  echo "$pc[0] Bln $pc[1] Hr"; 
   ?></div></td>
  </tr>
  <tr>
    <td>DOKTER</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo $ii[NamaDokter]; ?></div></td>
  </tr>
  <tr>
    <td>BAGIAN</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo strtoupper($ii[Bagian]); ?></div></td>
  </tr>
  <tr>
    <td>PENJAMIN</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo strtoupper($ii[NamaPer]); ?></div></td>
  </tr>
  <tr>
    <td>RUJUKAN</td>
    <td><strong>:</strong></td>
    <td><div align="left"><? echo strtoupper($ii[RujukanDari]); ?>
	<input type="hidden" name="id" value="<? echo $id; ?>">
	
	</div></td>
  </tr>
<?
	if($bk[id]){
?>
<tr>
<td>NAMA BIAYA</td><td>:</td><td><div align="left"><?
	echo strtoupper($bk[NamaBiaya]);?></div></td>
</tr>
<tr>
<td>HARGA</td><td>:</td><td><div align="left">
<input type="text" name="Harga" value="<? echo $bk[Total]; ?>" maxlength="14" size="14" class="style1"> </div></td>
</tr>
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<input type="text" name="Qty" maxlength="12" size="12" class="style1">
<input type="hidden" name="IdBiaya" value="<? echo $IdBiaya; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<?
	}else{
	?>  <tr>
    <td>PEMERIKSAAN</td>
    <td><strong>:</strong></td>
    <td>
 	<input type="text" name="NamaBiaya" class="style3"  autofocus="autofocus"  />	<input type="hidden" name="anak" value="3">
	<?
	/*?> 	<input type="text" name="NamaBiaya" class="style3" id="suggest" autofocus="autofocus"  />	<?
	*/ ?>	</td></tr>
  <? } ?><tr>
    <td colspan="3"><div align="left">
	 <?
		   if($belajar_sa_bar[enam]==1){ ?><a onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" href="../Farmasi/wahit.php?id=<? echo $id; ?>" style="text-decoration:none">Input Pengeluaran Alkes Klik disini
</a>	<? } ?></div></td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="submit" value="Submit" name="fgf" class="style1">
	<input    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="button" name="fgf" class="style1" value="Cetak Struk" onClick="wCompare = window.open('E_YUY.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=440,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
	<?
	if($bk[id]){
	?>
	<input type="button" name="dfd" class="style1" value="Reset" onClick="location.href='4e.php?id=<? echo $id; ?>';">
	<? 
	}
	?>
	<input   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  type="button" name="dfd" value="Selesai" onClick="location.href='../Daftar/ed_d.php';" class="style1">
	</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="button" name="fgfgf" value="InputPemeriksaan" onClick="location.href='kik_de.php?id=<? echo $id; ?>';">
	<input name="fggf" type="button" class="style1" onClick="location.href='h_0_8.php?id=<? echo $id; ?>';" value="Cetak Hasil">
    <?
			    $pcd =explode("-",$a[Nik]);
  $Nik=strtoupper($pcd[0]);
if($Nik=='DR'){}else{
			  ?>
    <input type="button" name="fgfgf2" value="AlterProses" onClick="location.href='au.php?id=<? echo $id; ?>';" class="style1">
    <?
			  } 
//			  echo "vv $hh[NoPasien]";
$kdikdidki = mysql_query("SELECT id FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$mox= mysql_fetch_array($kdikdidki);
			  ?>
</div></td>
  </tr>
</table>
</div></td><td width="663" valign="top"><div align="left">
<iframe src="nns.php?id=<? echo $id; ?>" frameborder="0" width="700" height="300"></iframe>
</div></td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
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
}?>


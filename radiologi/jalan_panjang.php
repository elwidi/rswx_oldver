<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$IdPasien = $_GET["IdPasien"];
$IdStruk = $_GET["IdStruk"];
$iin = $_GET["iin"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
$struk = mysql_query("SELECT * FROM datastruk WHERE id='$IdStruk'");
$x = mysql_fetch_array($struk);
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$IdPasien'");
$xss = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:./diono.php");
}
if($xss[TglKeluar]!=0){
header("Location:./ingetin_deh.php");
}
if($x[NoPasien]!=$xss[NoPasien]){
header("Location:./sabar_itu_baik.php?id=$IdPasien");
}
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
str += '<u>'+data.NamaBiaya;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="../Kasir/jalan_panjang0.php?IdStruk=<? echo $IdStruk; ?>&IdPasien=<? echo $IdPasien; ?>&IdDetil=" + Result;
			}
		);
	});
  </script><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("cicit_apa.php?IdPasien=<? echo $IdPasien; ?>&NamaBiaya=<? echo $NamaBiaya; ?>&sandal=jepit&Paket=&IdStruk=<? echo $IdStruk; ?>", "wCompare", "width=580,height=440,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style9 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style10 {
	font-weight: bold;
	color: #000099;
}
.style11 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; font-weight: bold; }
.style12 {color: #000099}
.style13 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; font-weight: bold; color: #000099; }
.style14 {color: #000000}
.style15 {font-weight: bold}
-->
</style>
</head>
<body <? if($lagu=='wali'){ ?> onLoad="toCompare()"<? } ?>>
<div align="center">
<?
if($iin=='ctk'){
?>
<form action="sabar_sabar_sambil_doa2.php">
<?
}else{
?>
<form target="_self">
<!-- <form action="cicit_apa.php"> -->
  <div align="left">
  <? }?>
  <table width="787" height="594" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
    <tr bgcolor="#666666">
      <td colspan="3" bgcolor="#99CC99"><div  align="center" class="style1 style14">INPUT TRANSAKSI RINAP<br>NOMER STRUK <?
$kuku = "#MM-$IdStruk";
echo "$kuku";
?><br>
        SHIFT :    <? if($sif==1){ echo "PAGI"; }elseif($sif==2){ echo "SIANG"; }elseif($sif=="3"){ echo "MALAM"; }else{ echo "?"; }  ?></div></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="249"><span class="style9">NO RM</span></td>
    <td width="5"><div align="center" class="style2 style9 style10 style15 style15">
      <div align="center">:</div>
    </div></td>
    <td width="513"><div align="left" class="style9"><? echo $xss[NoPasien]; ?></div></td>
    </tr>
    <tr>
      <td><span class="style9">NAMA PASIEN</span></td><td><div align="center" class="style11 style12 style15">
        <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style9"><? echo strtoupper($xss[NamaPasien]); ?></div></td>
    </tr>
    <tr class="style9">
      <td>KELAS</td><td><span class="style15">:</span></td>
    <td><div align="left"><?
$splo = explode("-",$xss[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo "LT: "; echo $j[Lantai];  echo "/ KELAS  : "; echo strtoupper($j[NamaKelas]); echo " / BED : $j[NoBed]"; 
?></div></td>
    </tr>
    <?
if($IdBiaya>0){
?>
    <tr class="style9">
      <td>NAMA BIAYA </td><TD><div align="center" class="style10 style15">
        <div align="center">:</div>
    </div></TD>
    <?
$NamBi = mysql_query("SELECT NamaBiaya,Harga,id FROM tabelbiaya WHERE id='$IdBiaya'");
$xa = mysql_fetch_array($NamBi);
?>
      <td><div align="left"><? echo "$xa[NamaBiaya]";
?>
        <input type="hidden" name="IdBiaya" value="<? echo $xa[id]; ?>"></div></td>
    </tr>
    <tr class="style9">
      <td>HARGA</td><td><div align="center" class="style10 style15">
        <div align="center">:</div>
    </div></td>
    <td><div align="left">
      <input name="Harga"  type="text" class="style9" value="<? echo $x[Harga]; ?>" ></div></td>
    </tr>
    <? 
}else{
?>
    <?
if($iin=='ctk'){
?>
    <tr bgcolor="#CCFFFF">
      <? 
}else{
?><tr>
        <? } ?>
        <td><span class="style9">NAMA BIAYA </span></td>
        <td><div align="center" class="style13 style15">
            <div align="center">:</div>
    </div></td>
    <TD><div align="left"><input type="text" name="NamaBiaya" class="style3" id="suggest" autofocus="autofocus"  /></div></TD>
    </tr>
    <!-- 
<tr bgcolor="#FFCCCC" class="style9">
<td>NAMA PAKET</td><td><div align="center" class="style15">:</div></td>
<td><div align="left"><input type="text" name="Paket" maxlength="30" size="30"></div></td>
</tr> -->
    <? } ?>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr bgcolor="#666666">
      <td colspan="3" bgcolor="#99CC99"><div align="center">
        <input name="sdff" type="submit" class="style9" value="Prosess">
        <?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
?><input type="button" name="ffg" value="Input Hsl Periksa Rad" onClick="location.href='d_d.php?IdStruk=<? echo $IdStruk; ?>&IdPasien=<? echo $IdPasien; ?>';" class="style9">
        <? } ?>
        <input name="dfff" type="button" class="style9" onClick="location.href='sabar_itu_baik.php?id=<? echo $IdPasien; ?>';" value="Detil Pasien">
        <input name="fdffd" type="button" class="style9" onClick="location.href='../Daftar/fito_sayangku.php';" value="kembali">
         
	 
        </div></td>
    </tr>
    <tr>
      <td colspan="3">        <iframe src="../Kasir/txn_inap.php?MstKey=<? echo $x[MstKey]; ?>&IdStruk=<? echo $IdStruk; ?>" width="790" frameborder="0" height="300"></iframe></td></tr>
  </table>
  </div>
</form>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>
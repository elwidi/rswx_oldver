<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$dataa = mysql_query("SELECT * FROM labumum WHERE id=$hari");
$z = mysql_fetch_array($dataa);
//
$ads = mysql_query("SELECT * FROM txnjalan2 WHERE id='$IdTx'");
$bx = mysql_fetch_array($ads);
///

$fkkfkf = mysql_query("SELECT * FROM LabRujukan WHERE IdTx='LR.$bx[id]'");
$oi = mysql_fetch_array($fkkfkf);

///
if(!$bx[id]){
header("Location:../keluar2.php");
}else{
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$Rea="$z[id].$z[RegId]";
	$ksjksds = mysql_query("SELECT NoUrut,id FROM urutanlab WHERE RegId='$Rea'");
	$bcx = mysql_fetch_array($ksjksds);
///	echo $bcx[NoUrut];
	//
	 if($bcx[NoUrut]>0 && $hewan=='ayam'){
				/////////
				$ldkfldkfldkfldi0di0fkldkfdlkfldf = mysql_query("SELECT COUNT(id) AS bb FROM ItemCtk WHERE IdUrutLab='$bcx[id]'"); 
				$dap = mysql_fetch_array($ldkfldkfldkfldi0di0fkldkfdlkfldf);
				$djah = $dap[bb]+1;
				/////
				$TglJamEK=date("d.m.Y.H:i:s");
				$ididk = mysql_query("INSERT INTO `ItemCtk` (`id`, `IdUrutLab`, `CtkKe`, `Opr`, `TglJam`, `NoPasien`, `NamaPasien`) 
				VALUES (NULL, '$bcx[id]', '$djah', '$a[Nama]', '$TglJamEK','$z[NoPasien]','$z[NamaPasien]')");
				}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
		$('#suggest').autocomplete('search3.php', 
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
							value: data[i].NamaRujukan  // nama field yang dicari
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
str += '<u>NAMA :'+data.NamaRujukan +'</u>'+'<br />ALAMAT : '+data.Alamat+'<br>SPC : '+data.NamaSpc;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="nuy2.php?id=<? echo $id; ?>&hari=<? echo $hari; ?>&IdTx=<? echo $IdTx; ?>&IdRujukan=" + Result;
			}
		);
	});
  </script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style5 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; color:#003366
}
-->
</style>
</head>
<body>
<?
if(!$bcx[NoUrut]){

}elseif($IdRujukan>0){
?>
<form action="f42.php">
<? } ?>
<table border="1">
<tr class="style2">
<td width="440" colspan="30" bgcolor="#D4D0C8"><div align="left"><em><strong>HALAMAN PROSES rujukan<br />
      <?
echo "$z[RegId]";
?>
</strong></em></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="162">ID</td>
<td width="9"><strong>:</strong></td>
<td width="249"><div align="left"><? echo "#$IdTx"; ?></div></td>
</tr>
<tr>
<td>NOMER URUT</td><td>:</td><td><div align="left"><? 
if(!$bcx[NoUrut]){
?>
<input  type="button" name="fgfg" value="Tutup Halaman Ini" onClick="window.close()"   class="style1" style="background:#FFFF00">
<? 
}else{
	echo $bcx[NoUrut];
	 if($oi[id]){
	?><input  type="button" name="df" value="FIX" onClick="location.href='f4r2.php?hari=<? echo $hari; ?>&IdTx=<? echo $bx[id]; ?>';" class="style1" style="background:#99CC00"> 
<? } 
	}
 ?>
				<input type="hidden" name="Urut" value="<? echo $bcx[NoUrut]; ?>">
				</div></td>
</tr> 
<tr>
<td>REGID</td>
<td><strong>:</strong></td>
<td><div align="left"><? echo $z[RegId]; ?>
<input type="hidden" name="hari" value="<? echo $hari; ?>">
<input type="hidden" name="RegId" value="<? echo $RegId; ?>">
<input type="hidden" name="IdTx" value="<? echo $IdTx; ?>">
<input name="IdRujukan" type="hidden" id="IdRujukan" value="<? echo $IdRujukan; ?>">
</div></td>
</tr>
<tR>
<td>NAMA PASIEN</td><td><strong>:</strong></td>
<td><div align="left"><? echo strtoupper($z[NamaPasien]);?></div></td>
</tR>
<tr>
<td>NAMA PEMERIKSAAN</td><td><strong>:</strong></td>
<td><div align="left"><? echo strtoupper($bx[NamaBiaya]);?></div></td>
</tr>
<tr>
<td>TGL KIRIM</td><td>:</td><td><div align="left"><span class="style15 style2 style8  style3">
  <select name="tgl1" class="style5" id="tgl1">
  <? 
  if($oi[id]){
  ?><option value="<? echo $oi[TglRujuk]; ?>"><? echo $oi[TglRujuk]; ?></option><? 
  }else{
  ?>
    <option value="<? echo date("d")-0; ?>"><? echo date("d")-0;?></option>
	<? } ?>
    <?
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
  <select name="bln1" class="style5" id="select2">
    <?
	if($oi[id]){
	?><option value="<? echo $oi[BlnRujuk]; ?>"><? echo $oi[BlnRujuk];  
	}else{
	?><option value="<? echo date("m")-0;?>"><? echo date("m")-0; ?></option>
	<? } ?>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
-
<select name="thn1" class="style5" id="thn1">
  <option value="<? echo date("Y"); ?>"><? echo date("Y");?></option>
</select>
</span></div></td>
</tr>
<tr>
<td>TGL WARNING</td><td>:</td><td><div align="left"><span class="style15 style2 style8  style3">
  <select name="tgl2" class="style5" id="tgl2">
    <?
	if($oi[id]){
	?>
	<option value="<? echo $oi[TglJt]; ?>"><?  echo $oi[TglJt]; ?></option>
	<? 
	}else{
	?><option value="<? echo date("d")-0; ?>"><? echo date("d")-0;?></option>
	<? } ?>
    <?
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
  <?
  $bule=date("m")+1;
  ?>
  <select name="bln2" class="style5" id="select3">
     <?
	if($oi[id]){
	?>
	<option value="<? echo $oi[BlnJt]; ?>"><? echo $oi[BlnJt]; ?></option>
	<? }else{ ?> <option value="<? echo $bule+2;?>"><? echo $bule+2; ?></option>
	<? } ?>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
-
<select name="thn1" class="style5" id="thn1">
  <option value="<? echo date("Y"); ?>"><? echo date("Y");?></option>
</select>
</span></div></td>
</tr>
<tr>
<td>HARGA</td><td><strong>:</strong></td>
<td><div align="left"><input type="text" name="Harga" maxlength="11" size="11" value="<? echo $bx[Harga]; ?>" /></div></td>
</tr>
<tr>
<td>PILIH rujukan</td><td><strong>:</strong></td>
<td><div align="left"><?
 if($IdRujukan>0){
$query = mysql_query("SELECT * FROM rujukan WHERE id='$IdRujukan'");
$yes = mysql_fetch_array($query);
echo strtoupper($yes[NamaRujukan]);
}else{
?><input type="text" class="style3" id="suggest" />
<? } ?></div></td>
</tr>
<tr valign="top">
<td>KETERANGAN</td><td><strong>:</strong></td>
<td><div align="left">
<textarea rows="2" cols="30" name="Keterangan" class="style1"><? echo $oi[Keterangan]; ?></textarea>
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<?
if(!$bcx[NoUrut]){
?>
<tr>
<td colspan="3"><div align="center">TRANSAKSI INI BELUM PUNYA NOMER URUT</div></td>
</tr>
<? 
}elseif($yes[id]){
 ?><tr>
<td colspan="3" bgcolor="#D4D0C8"><div align="left">
<input name="fggf" style="background:#FFFFFF" type="submit" class="style1" value="Proses" /> 
<input  style="background:#FFFFFF" name="fgfg" type="button" class="style1" onClick="window.close()" value="Selesai" /> 
<span class="style1">.</span></div></td>
</tr>
<? } ?>
</table>
</div>
</td>
</tr>
</table>
</form>
</body>
</html>
<? 
}

}
?>

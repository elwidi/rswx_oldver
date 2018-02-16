<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdPer=$_GET["IdPer"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
 if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000099;
	font-weight: bold;
	font-style: italic;
}
.style222 {
	font-family: Arial, Helvetica, sans-serif; font-size:11px
  }
.style3 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #999999;
	font-style: italic;
}
-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("5tb.php?KodeICD=<? echo $KodeICD; ?>&NamaICD=<? echo $NamaICD; ?>&id=<? echo $id; ?>", "wCompare", "width=880,height=340,left=470,Top=210,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
  
//--></script> <script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<script type='text/javascript' src='txn/js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='txn/js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="txn/css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="txn/css/custom_search.css" />
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
							value: data[i].NamaPer // nama field yang dicari
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
str += '<u>'+data.NamaPer+'</u><br>Alamat    '+data.Alamat;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="0w.php?id=<? echo $id; ?>&IdPer=" + Result;
			}
		);
	});
  </script>
</head>
<body <? if($mas=='mitra'){ ?> onLoad="toCompare()"<? } ?>>
<div align="left">
 <form action="y7.php">
 <table width="1191" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
      <td width="1340" colspan="3" bgcolor="#0066FF" >
       Halaman Update Penjamin / Assuransi </td>
   </tr> <tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="429">
<div align="left">
<table width="428" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="163">REGID</td>
<td width="3"><strong>:</strong></td>
<td width="265"><div align="left">
<? echo "$uu[RegId]"; ?>
</div></td>
</tr>
<tr><?
if(!$NoKartu){
$NoKartu=$uu[Kartu];
}else{
$NoKartu=$NoKartu; 
}
?>
<td>NO KARTU</td><td>:</td><td><div align="left">
<input name="NoKartu" type="text" class="style1" value="<? echo $NoKartu; ?>" size="23" maxlength="100">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
  <td>NO RM </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[NoPasien]; ?></div></td>
</tr>
<tr>
  <td>NAMA PASIEN </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo strtoupper($uu[NamaPasien]); ?></div></td>
</tr>
<tr>
  <td>DOKTER ( <? echo $uu[KodeDokter]; ?> )</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[NamaDokter]; ?> || <input name="fgf" type="button" 
 onClick="wCompare343 = window.open('3ww.php?id=<? echo $id; ?>', 
  'wCompare343', 'width=780,height=500,left=470,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare343.focus();" 
  class="style222" value="&gt;+&lt;"> 
  || <? 
  $dkjfkdjf = mysql_query("SELECT COUNT(id) AS nn FROM gantidokterrj WHERE IdPasien='$id' AND Jenis='Dokter'");
  $ub = mysql_fetch_array($dkjfkdjf);
  if($ub[nn]>0){
    ?>
	<a href="#" style="text-decoration:none"  onClick="wCompare33e43 = window.open('x2w.php?Rujuk=Dokter&id=<? echo $id; ?>', 
  'wCompare33e43', 'width=830,height=400,left=470,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare33e43.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? echo "$ub[nn] X Ganti"; ?></a><? 
  }
  ?></div></td> 
</tr>
<tr>
<td>RUJUKAN</td><td>:</td><td>
<div align="left"><? echo $uu[RujukanDari]; ?> 
  <input name="fgf2" type="button" 
 onClick="wCompare343 = window.open('3ww.php?as=9&id=<? echo $id; ?>', 
  'wCompare343', 'width=780,height=500,left=470,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare343.focus();" 
  class="style222" value="&gt;+&lt;">
||
<? 
  $dkjfkdjf3 = mysql_query("SELECT COUNT(id) AS nn FROM gantidokterrj WHERE IdPasien='$id' AND Jenis='Rujuk'");
  $ub3 = mysql_fetch_array($dkjfkdjf3);
  if($ub3[nn]>0){
   ?><a href="#" style="text-decoration:none"  onClick="wCompare33e43 = window.open('x2w.php?Rujuk=Rujuk&id=<? echo $id; ?>', 
  'wCompare33e43', 'width=830,height=400,left=470,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare33e43.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? 
	echo "$ub3[nn] X Ganti";?></a><? 
  }
  ?>
</div>
</td>
</tr>
<tr>
  <td>BAGIAN</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[Bagian];?></div></td>
</tr>
<tr>
  <td>TGL MASUK </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo "$uu[TglMasuk]-$uu[BlnMasuk]-$uu[ThnMasuk]";  ?></div></td>
</tr>
<tr>
  <td>JAM MASUK </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[JamMasuk]; ?></div></td>
</tr>
<tr>
  <td>OPR</td>
  <td><strong>:</strong></td>
  <td><div align="left"><?  echo strtoupper($uu[Operator]); ?></div></td>
</tr>
<?
$jsmjm = mysql_query("SELECT NamaPer,id FROM dataperusahaan WHERE id='$IdPer'");
$um = mysql_fetch_array($jsmjm);
if($um[id]){
?>
<tr>
<td>PENJAMIN </td><td><strong>:</strong></td>
<td><div align="left"><? echo strtoupper($um[NamaPer]); echo " ($uu[KodePer])"; ?> 
<input type="hidden" name="IdPer" value="<? echo $IdPer; ?>">
</div></td>
</tr>
<tr valign="top">
<td>ALASAN UPDATE</td><td><strong>:</strong></td>
<td><div align="left">
<textarea name="Alasan" cols="40" rows="3" class="style1"></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<?
}else{?>
 <tr>
  <td>PENJAMIN</td>
  <td><strong>:</strong></td>
  <td> <input name="fgf22" type="button" 
 onClick="wCompare343 = window.open('3ww.php?as=10&id=<? echo $id; ?>', 
  'wCompare343', 'width=780,height=500,left=470,Top=90,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare343.focus();" 
  class="style222" value="&gt;+&lt;"> 
  || <a href="index.php" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
   <em><strong>KEMBALI</strong></em></a>  </td>
</tr>
<? } ?>
 <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <?
 if($um[id] || $NoKartu!=''){
 ?>
 <tr>
   <td colspan="3" bgcolor="#0066FF"><div align="left">
   <input type="submit" value="Update" name="fgf" class="style1">
   <input type="button"  value="Reset" name="fgf" class="style1" onClick="location.href='0w.php?id=<? echo $id; ?>';">
   <input type="button" name="fgfgf" class="style1" onClick="location.href='index.php';" value="Kembali">
   </div></td>
   </tr>
   <? } ?>
</table>
</div>
</td>
<td width="722">
<div align="left"><span class="style2">PENJAMIN : <?
echo strtoupper($uu[NamaPer]);
?>
 
</span><br>
<span class="style3">AKAN DI UPDATE OLEH : <? echo strtoupper($a[Nama]); ?>.</span><br>
<table border="0" cellpadding="2" cellspacing="2" class="style222">
<tr>
<td width="17" bgcolor="#0066FF">NO</td>
<td width="146" bgcolor="#0066FF">DT LAMA</td>
<td width="154" bgcolor="#0066FF">DT BARU</td>
<td width="158" bgcolor="#0066FF">ALASAN</td>
<td width="111" bgcolor="#0066FF">TGLJAM</td>
<td width="98" bgcolor="#0066FF">OPR</td>
</tr>
<?
$nomer =1;
$ldkfldkfld = mysql_query("SELECT * FROM alasanupdate WHERE IdJalan='$id' ORDER BY id desc");
while($bb = mysql_fetch_array($ldkfldkfld)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($bb[DtLama]); ?></div></td>
<td><div align="left"><? echo strtoupper($bb[DtBaru]); ?></div></td>
<td><div align="left"><? echo strtoupper($bb[Alasan]); ?></div></td>
<td><div align="left"><? echo $bb[TglJam]; ?></div></td>
<td><div align="left"><? echo strtoupper($bb[Opr]); ?></div></td>
</tr>

<?
$nomer++; } ?><tr>
  <td colspan="6" bgcolor="#0066FF">&nbsp;</td>
  </tr>
</table>
</div>
</td>
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

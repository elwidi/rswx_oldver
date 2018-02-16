<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$xe = $_GET["xe"];
$hari = $_GET["hari"];
$id = $_GET["id"];
$angka = ceil($hari);
if($angka==0){
header("Location:./afif_lucu.php?id=2");
}
 $Bus = mysql_query("SELECT * FROM txnrad WHERE id=$hari");
$x = mysql_fetch_array($Bus);
	$dkjfkdjkdkdj= mysql_query("SELECT * FROM kwitansi_lab_rad WHERE IdTxn='$hari'");
	$ss = mysql_fetch_array($dkjfkdjkdkdj);
if($ss[id]){
header("Location:./s.php?id=$ss[id]");
}elseif($ss[RegId]){
 header("Location:./dr_e1_00_0_0902.php?id=$hari");
}
if(!$x[id]){
header("Location:./permen_karet.php");
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
str += '<u>'+data.NamaBiaya+'</u><br />Harga.'+data.Kelas3;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="../re_dff.php?id=<? echo $hari; ?>&IdBiaya=" + Result;
			}
		);
	});
  </script><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("rft_rt.php?id=<? echo $hari; ?>&NamaBiaya=<? echo $NamaBiayak; ?>", "wCompare", "width=580,height=640,left=700,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 

function toCompare2() { 
    wCompare = window.open("nakal_jelek.php?fito=<? echo $hari; ?>", "wCompare", "width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
//--></script> 
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3333';
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
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
	color: #0000CC;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {font-weight: bold}
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style11 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style12 {color: #990000}
.style13 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #990000; }
.style14 {font-size: 12px}
.style15 {color: #FFFFFF}
-->
</style>
</head>
<body <? if($eda==1){ ?> onLoad="toCompare()"<? } ?>>
<div align="left"> 
<?
if($xe>0){
?>
<form action="sangar_burung.php"> 
<? }else{ ?>
 <form target="_self">	 
   <div align="left">
     <? } ?>
     <table width="675" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
       <tr bgcolor="#C4D2E2">
         <td height="40" colspan="3" bgcolor="#666666"><div align="center" class="style1 style15">
           <img src="../gambar/radpng">
		   </div></td>
    </tr>
	<tr>
	<td colspan="3" valign="top">
	<div align="left">
	<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td>User/Log</td><td>:</td><td><div align="left"><?
echo "$a[User]/$a[Level]";
?></div></td>
</tr>
	       <tr>
         <td width="263"><div align="left"><span class="style4">No Reg </span></div></td><td width="3"><div align="center" class="style2 style5">
           :</div></td><td width="389"><div align="left" class="style4"><? 
echo "$x[RegId]";
?>
             <input type="hidden" value="<? echo $x[RegId]; ?>" name="RegId">
             </div></td>
    </tr>
       <tr>
         <td><div align="left"><span class="style4">Nama Pasien </span></div></td><td><div align="center" class="style4 style9">
           :</div></td>
    <td><div align="left" class="style4"><? echo strtoupper($x[NamaPasien]); ?>
      <input type="hidden" name="NamaPasien" value="<? echo $x[NamaPasien]; ?>"></div></td>
    </tr>
       <tr>
         <td><div align="left" class="style4"><span class="style2">Alamat</span></div></td><td><div align="center" class="style10 style2">
           :</div></td>
    <td><div align="left" class="style4 style2 style14"><? echo strtoupper($x[Alamat]); ?>
      <input type="hidden" name="Alamat" value="<? echo $x[Alamat]; ?>">
      </div></td>
    </tr>
	<tr class="style4">
	<td>Dokter</td>
	<td>:</td><td><div align="left">
	<a href="#"   onClick="wCompare = window.open('80_mn.php?hari=<? echo $hari; ?>&xe=<? echo $xe; ?>', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none"><? 
	if(!$x[KodeDokter]){
	?>TENTUKAN DOKTER ????<? 
	}else{
	echo $x[NamaDokter];
	}
	?></a></div></td>
	</tr>
       <tr>
         <td bgcolor="#DFFEDD"><div align="left" class="style4"><strong>Dokter Rujukan </strong></div></td>
    <td bgcolor="#DFFEDD"><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td bgcolor="#DFFEDD"><div align="left" class="style10"><a href="#"   onClick="wCompare = window.open('40_mn.php?hari=<? echo $hari; ?>&xe=<? echo $xe; ?>', 
  'wCompare', 'width=580,height=500,left=470,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  style="text-decoration:none"><? 
	if(!$x[KdRujukan]){
	?>TENTUKAN DR PERUJUK ???<? 
	}else{
	echo $x[NamaPerujuk]; 
	}?> </a>
      <input type="hidden" name="NamaDokter" value="<? echo $x[NamaDokter]; ?>">
      <input type="hidden" name="KodeDokter" value="<? echo $x[KodeDokter]; ?>">
      <input type="hidden" name="hari" value="<? echo $hari; ?>">
      </div></td>
    </tr>
       <?
if($ss[RegId]){
?>
       <tr>
         <td colspan="3">&nbsp;</td>
    </tr>
       <? 
}else{
?>
       <tr class="style4">
         <td><div align="left" class="style11 style12">
           <div align="left"><span class="style4">Pemeriksaan</span></div>
    </div></td>
    <td><div align="center" class="style13"><span class="style4">:</span></div></td>
    <td><div align="left" class="style13">
      <?
		if($xe>0){
				$mas = mysql_query("SELEcT * FROM  tarif WHERE id=$xe");
		$re = mysql_fetch_array($mas);
		}else{ }
if($xe>0){
		echo strtoupper($re[NamaBiaya]);
		?>
      <? 
		}else{
		?>		<input type="text" name="NamaBiaya" class="style3" id="suggest" autofocus="autofocus"  />
		<input type="hidden" name="eda" value="1">

      <? 
		} 
		?> 
      <input type="hidden" name="hari" value="<? echo $hari; ?>">
      <input type="hidden" name="NamaBiaya"	 value="<? echo $re[NamaBiaya]; ?>">
      <input type="hidden" name="IdLab" value="<? echo $re[id]; ?>">
      <input type="hidden" name="KodeBiaya" value="<? echo $re[KodeBiaya]; ?>">
      <input type="hidden" name="Harga" value="<? echo $re[Harga]; ?>">
      <input type="hidden" name="Satuan" value="<? echo $re[Satuan]; ?>">
      <input type="hidden" name="Grup" value="<? echo $re[Grup]; ?>">
      <input type="hidden"  name="hari" value="<? echo $hari; ?>">
      </div></td>
    </tr>
       <? } ?>
       <?
 if($ss[RegId]){
 ?>
       <tr bgcolor="#000000">
         <td colspan="3"><div align="center">
           <input name="dfjj2" type="button" class="style4" onClick="toCompare2()"  value=" Cetak Struk">
            
           <!--    <input type="button" name="dfdf2" value=" TampilKan Hasil " onClick="location.href='siu.php?RegId=<?// echo $x[RegId]; ?>';"> -->
           <input name="sddff2" type="button" class="style4" onClick="location.href='kadal_merah_manis.php?id=1';" value="Kembali">
          </div></td>
     </tr>
       <? 
 }else{
 ?><tr bgcolor="#C4D2E2">
         <td colspan="3" bgcolor="#666666"><div align="center">
           <?
		   if($xe>0){
		   ?><input name="dfdf" type="submit" class="style4" value="Simpan" style="background:#fffff0"><? 
		   }else{
		   ?> <input name="dfdf" type="submit" class="style4" value="Cari"  <? if(!$x[KodeDokter] ||
		!$x[KdRujukan]){  ?> disabled="disabled"<? } ?>>
		   <? } ?>
           <input name="dfjj" type="button" class="style4" onClick="toCompare2()"  value=" Cetak Struk">
            
           <!-- <input type="button" name="djhdjhjdfd" value="BuatHasilPemeriksaan" onClick="location.href='beberapa_hari_ini_akusakit.php?hari=<? //echo $hari; ?>';"> -->
           
           <?
 if($a[LevelBag]==5){
?>
           <input name="ffgg" type="button" class="style4" onClick="location.href='jaikik_popo.php?id=<?  echo $hari; ?>';" value="Hapus"> 
           <?
 }
  ?>
           <!-- <input type="button" name="dfdf" value=" TampilKan Hasil " onClick="location.href='siu.php?RegId=<? //echo $x[RegId]; ?>';"> -->
           <input name="sddff" type="button" class="style4" onClick="location.href='kadal_merah_manis.php?id=1';" value="Kembali"> 
		  <?
		   $ldkfldkfl = mysql_query("SELECT * FROM noradman WHERE NoTxn='$x[RegId]'");
 $mj = mysql_fetch_array($ldkfldkfl);
// echo " ($mj[NoMan])";
		  ?> 
          </div></td>
    </tr>
       <? } ?>
	   <?
	   if($xe>0){
	   ?>
	   <tr>
	   <td colspan="3" bgcolor="#990000"><div align="center">
	   <input type="button" class="style4" onClick="location.href='nasi_kucing.php?hari=<? echo $hari; ?>';" value="Reset Tampilan">
	   </div></td>
	   </tr>
	   <? 
	   }
	   ?>
       <tr>
         <td colspan="3"><div align="center">
           <iframe src="milimeter.php?RegId=<? echo $x[RegId]; ?>&bapak=<? echo $hari; ?>" width="700" height="230"></iframe>
    </div></td>
     
	</table>
	</div>
	</td>
	</tr>

   </table>
   </div>
 </form>
</div>
</body>
</html>
<? 
}else{
//header("Location:./keluar.php");
}
?>
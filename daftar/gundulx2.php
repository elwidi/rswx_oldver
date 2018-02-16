<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $Alamat = $_GET["Alamat"];
$NoKartu = $_GET["NoKartu"];
$NamaPasien = $_GET["NamaPasien"];
$JenisKelamin = $_GET["JenisKelamin"];
$TempatLhr = $_GET["TempatLhr"];
$tl = $_GET["tl"];
$bl = $_GET["bl"];
$thl = $_GET["thl"];
$Pendidikan = $_GET["Pendidikan"];
$Pekerjaan = $_GET["Pekerjaan"];
$StatusNikah = $_GET["StatusNikah"];
$NamaOrtu = $_GET["NamaOrtu"];
$agama = $_GET["agama"];
$JenisPj = $_GET["JenisPj"];
$AlamatOrtu = $_GET["AlamatOrtu"];
$Telp = $_GET["Telp"];
$GolDar = $_GET["GolDar"];
$tgM = $_GET["tgM"];
$blM = $_GET["blM"];
$thM = $_GET["thM"];
$bas = $_GET["bas"];
$KodePer = $_GET["KodePer"];
 
$tgl = $tl-0;
if($tgl<10){
$tgl="0".$tgl;
}else{
$tgl=$tgl;
}
$bln = $bl-0;
if($bln<10){
$bln="0".$bln;
}else{
$bln=$bln;
}
$thl= $thl-0;
$tgllhr="$tgl-$bln-$thl";
//===========seting tanggal masuk
$tanggal_masuk = $tgM-0;
if($tanggal_masuk<10){
$TglMsk = "0".$tanggal_masuk;
}else{
$TglMsk=$tanggal_masuk;
}
//==================
$BlMsk=$blM-0;
if($BlMsk<10){
$BlMsk="0".$BlMsk;
}else{
$BlMsk=$BlMsk;
}
$TglMasuk = "$TglMsk-$BlMsk-$thM";
//===============
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2  || $a[Level]==77){
$PjNoPasien = strlen($NoPasien);
$PjNamaPasien = strlen($NamaPasien);
if($PjNoPasien=='090'){
echo "NOMER PASIEN TERLALU PENDEK<br>";
?>
  <? 
}elseif($PjNamaPasien<3){
echo "NAMA PASIEN TERTLALU PENDEK,.......<br>";
}else{
$TglJam= date("Y-m-d.H:i:s");
$djhfjddf= mysql_query("SELECT NoPasien FROM datapasien ORDER BY id DESC");
	$jj = mysql_fetch_array($djhfjddf);
	$Nomer = $jj[NoPasien]+1;
	///////////////////////////////
	if($UmurKira>0){
	$ThnKd=date("Y")-$UmurKira;
 $tgllhr="1-1-$ThnKd";	
 		}else{
 $tgllhr=$tgllhr;
		}

	////////////////////////////
  $SIMP = mysql_query("INSERT INTO `datapasien`
 (`id`,`NoPasien`, `NamaPasien`, `TempatLhr`, `tgllhr`, `Alamat`, `Telp`, 
`JenisKelamin`, `GolDarah`, `StatusNikah`, `KodeAgama`, `Pendidikan`, `NamaOrtu`, `AlamatOrtu`, 
`Opr`, `TglJam`, `Pekerjaan`, `TglMasuk`, `JenisPj`, `NoKartu`, `KodePer`)
 VALUES (NULL, '$Nomer', '$NamaPasien', '$TempatLhr', '$tgllhr', '$Alamat', '$Telp', '$JenisKelamin', '$GolDar',
  '$StatusNikah', '$agama', '$Pendidikan', '$NamaOrtu', '$AlamatOrtu', '$a[Nama]', '$TglJam','$Pekerjaan','$TglMasuk',
  '$JenisPj','$NoKartu','$KodePer')");  
  if($SIMP){
  $jfhfkgf  = mysql_query("SELECT id FROM datapasien WHERE NoPasien='$Nomer'");
  $xop = mysql_fetch_array($jfhfkgf);
 // header("Location:./index.php?bas=8&kadal=4&id=$xop[id]");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c109m.php?bas=8&kadal=4&id=<? echo $xop[id]; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>
<? }else{
echo "SIMPAN DATA GAGAL,....<br>";
}
}
}else{
echo "BUKAN HAK AKSES ANDA";
}?><a href="index.php?kadal=6&NoKartu=<? echo $NoKartu;
 ?>&NoPasien=<? echo $NoPasien; ?>&NamaPasien=<? echo $NamaPasien; ?>&Alamat=<? echo $Alamat; ?>&JenisKelamin=<? echo $JenisKelamin; ?>&TempatLhr=<? echo $TempatLhr; ?>&tl=<? echo $tl; ?>&bl=<? echo $bl; ?>&thl=<? echo $thl; ?>&agama=<? echo $agama; ?>&Pendidikan=<? echo $Pendidikan; ?>&Pekerjaan=<? echo $Pekerjaan; ?>&StatusNikah=<? echo $StatusNikah; ?>&NamaOrtu=<? echo $NamaOrtu; ?>&JenisPj=<? echo $JenisPj; ?>&AlamatOrtu=<? echo $AlamatOrtu; ?>&Telp=<? echo $Telp; ?>&GolDar=<? echo $GolDar; ?>&tgM=<? echo $tgM; ?>&blM=<? echo $blM;?>&thM=<? echo $thM; ?>&KodePer=<? echo $KodePer; ?>" style="text-decoration:none">KEMBALI</a>



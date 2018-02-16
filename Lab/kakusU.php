<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id= $_GET["id"];
$KodeDokter=$_GET["KodeDokter"];
$IdBiaya = $_GET["IdBiaya"];
$NoBukti = $_GET["NoBukti"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$DtPsn = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$a2 = mysql_fetch_array($DtPsn);
$namaB = mysql_query("SELECT * FROM bagian WHERE id='$a2[KodeBagian]'");
$w = mysql_fetch_array($namaB);
 $Biaya = mysql_query("SELECT * FROM tabelbiayax WHERE id='$IdBiaya'");
  $z = mysql_fetch_array($Biaya);
//if($z[KodeKelompok]==''){
//header("Location:./ingetin_akun.php");
//}
$ksksk = mysql_query("SELECT NamaDokter,id FROM dokter WHERE id='$KodeDokter'");
$re = mysql_fetch_array($ksksk);
  ///////
  $splo = explode("-",$a2[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
  ///////
  $Jam=date("H:i:s");
  $Tgl=date("d");
  $Bln=date("m");
  $Thn=date("Y");
  $NoBukti2 ="LAB-$NoBukti";
  $simpan = mysql_query("INSERT INTO  `txninap2` 
  (`id`, `MstKey`, `NoBukti`, `Kelas`, `Bed`, `NoPasien`, `NamaPasien`, `JamTran`, `KodeDokter`, `NamaDokter`,  `KodeBiaya`, `NamaBiaya`, `KodeKelompok`, `NamaKelompok`, `Disc`, `Qty`, `Harga`, `JumlahHarga`, `JasaDokter`, 
  `JasaRujukan`, `Reagen`, `Alkes`, `Kontrol`, `Listrik`, `JasaRs`, `Opr`, `Tgl`, `Bln`, `Thn`)
   VALUES (NULL, '$a2[MstKey]', '$NoBukti2', '$j[NamaKelas]', '$j[NoBed]', '$a2[NoPasien]', '$a2[NamaPasien]',
    '$Jam', '$a2[Dokter]', '$a2[KetDokter]',  '$z[id]', '$z[NamaBiaya]','LAB', 'LABORATORIUM','0',  '1',  '$z[Harga]', '$z[Harga]', '$z[JasaDokter]', '$z[JasaRujukan]',
    '$z[Reagen]', '$z[Alkes]', '$z[Kontrol]', '$z[Listrik]', '$z[JasaRs]', '$a[Nama]', '$Tgl', '$Bln',
    '$Thn')");
  if($simpan){
  }else{
 echo "SIMPAN DATA GAGAL,...<br>";   
 }
}else{
//header("Location:./keluar.php");
}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="hdh_d.php?id=<? echo $id; ?>&NoBukti=<? echo $NoBukti; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
<div align="center">

</div>
</body>
</html>

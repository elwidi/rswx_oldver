<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $NamaPasien = $_GET["NamaPasien"];
$mbah = $_GET["mbah"];
$Alamat = $_GET["Alamat"];
$HpTelp = $_GET["HpTelp"];
$JenisKelamin = $_GET["JenisKelamin"];
$BlnLahir  = $_GET["BlnLahir"];
  $bi = date("m")-0;
$hi= date("d");
$ti= date("Y");
//$jikp = $pecah[1]-0;
$mbah = $_GET["mbah"];
if($Umur>0){
$TglLahir=1;
$BlnLahir=1;
$ThnLahir=date("Y")-$Umur;
}elseif($BlnLahir>$bi && $Umur==0){
$umur =  $ti - $ThnLahir-1;
$BlnUmur=12+$bi-$BlnLahir;
}elseif($BlnLahir==$bi  && $Umur==0){
$umur =  $ti - $ThnLahir;
$BlnUmur= 0;
}elseif($Umur==0){
$umur =  $ti - $ThnLahir;
$BlnUmur= $bi-$BlnLahir;
}
 $simpa = mysql_query("INSERT INTO `labumum2` (`id`,`RegId`,`TglLahir`,`BlnLahir`,`ThnLahir`,`JenisKelamin`, `Usia`,`LbhBulan`,`NamaPasien`,`HpTelp`,`Alamat`,`Opr`) 
VALUES (NULL,'$mbah','$TglLahir','$BlnLahir','$ThnLahir',
'$JenisKelamin','$umur','$BlnUmur','$NamaPasien','$HpTelp','$Alamat','$a[Nama]')");
 if($simpa){
header("Location:./mencret_jorok.php?id=1");
}else{
echo "SIMPAN DATA GAGAL,...<br>";
}
}else{
header("Location:./keluar.php");
}
?>
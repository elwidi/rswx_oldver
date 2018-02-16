<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$IdPasien = $_GET["IdPasien"];
$NoStruk = $_GET["NoStruk"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
//$Daat = mysql_query("SELECT KodeDokter,NamaDokter FROM datadokter WHERE KodeDokter='$IdDokter'");
//$sx= mysql_fetch_array($Daat);
$PasieR = mysql_query("SELECT NoPasien,id FROM keluarmasukpasien WHERE id='$IdPasien'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
//header("Location:./diono.php");
}
if($NoStruk==''){
echo "HARAP MASUKAN NOMER STRUK,......................<br>";
?>
<input type="button" name="DSFDF" value="Kembali" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';">
<? 
}else{
//larikaan ke alamatnya
 $cek_struk = mysql_query("SELECT id FROM datastruk WHERE id=$NoStruk");
 $ada = mysql_fetch_array($cek_struk);
 if($ada[id]){
  header("Location:./jalan_panjang.php?IdPasien=$IdPasien&IdStruk=$NoStruk");
 }else{
 echo "DATA TIDAK DIKETEMUKAN,.................SELECT id FROM datastruk WHERE id='$NoStruk'..........<br>";
 ?>
<input type="button" name="DSFDF" value="Kembali" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';">
 <? 
 }
}
//include "latar.php";

}else{
header("Location:./keluar.php");
}
?>
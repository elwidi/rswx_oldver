<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$KodeKelas = $_GET["KodeKelas"];
$NoRuangan = $_GET["NoRuangan"];
$NoBed = $_GET["NoBed"];
$KodeKelas = $_GET["KodeKelas"];
$Lantai = $_GET["Lantai"];
$NamaRuangan = $_GET["NamaRuangan"];
$Keterangan = $_GET["Keterangan"];

 if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
  $Njk = mysql_query("SELECT NamaKelas,KodeKelas FROM kelas WHERE id='$KodeKelas'");
$koi = mysql_fetch_array($Njk);

 //$pj = strlen($pass_ku);
//echo "user : $user_ku <br> pass : $pj $pass_ku";
if($NoRuangan==''){
echo "ANDA BELUM ISIKAN NOMER RUANGAN,.....<br>";
}elseif($NamaRuangan==''){
echo "HARAP ISIKAN NAMA RUANGAN,.....<br>";
}elseif($KodeKelas==''){
echo "HARAP ISIKAN NAMA KELAS,.....<br>";
}elseif($NoBed==''){
echo "HARAP ISIKAN NAMA BED,.....<br>";
}else{
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
  $TglJam = date("d-m-Y.H:i:s");
  
 
 $simpan = mysql_query("INSERT INTO `ruangan` (`id`,`Lantai`,`NoRuangan`,`KodeKelas`,`NoBed`,`NamaKelas`,`NamaRuangan`,`Keterangan`,`stat`,`Opr`,`TglJam`)
 VALUES (NULL,'$Lantai','$NoRuangan','$koi[KodeKelas]','$NoBed','$koi[NamaKelas]','$NamaRuangan','$Keterangan','0','$a[Nama]','$TglJam')");
 if($simpan){
 header("Location:./bisa_saja_ya.php");
 }else{
 echo "SIMPAN DATA GAGAL,....<br>";
 }
 }else{
 header("Location:./keluar.php");
 }
 }
?>
<input type="button" name="Kembali" value="Kembali" onClick="location.href='ek.php';">
<? } ?>
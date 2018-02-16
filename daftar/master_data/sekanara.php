<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$NamaICD = $_GET["NamaICD"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
  $ICD_CODE = $_GET["ICD_CODE"];
  $TERMINAL_CODE = $_GET["TERMINAL_CODE"];
  $DESCRIPTION  = $_GET["DESCRIPTION"];
  $TERJEMAHAN  = $_GET["TERJEMAHAN"];
  $KATEGORI = $_GET["KATEGORI"];
 $tgl=date("d-m-Y");
$jam=date("H:i:s");
$isi = mysql_query("INSERT INTO `icdx` (`id`,`ICD_CODE`,`TERMINAL_CODE`,`DESCRIPTION`,`TERJEMAHAN`,`KATEGORI`,`Opr`,`Tgl`,`Jam`)
VALUES (NULL,'$ICD_CODE','$TERMINAL_CODE','$DESCRIPTION','$TERJEMAHAN','$KATEGORI','$a[Nama]','$tgl','$jam')");
header("Location:./mas_iqbal_baik.php");
 }else{

}
?>vcv
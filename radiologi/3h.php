<?
session_start();
 include "../konek.php";
 include "../ceke.php";
header("Location:./jalan_panjang.php?IdStruk=$IdStruk&IdPasien=$IdPasien");
?>
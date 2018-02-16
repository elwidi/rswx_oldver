<?php
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==16){
header("Location:../Radiologi/jalan_panjang.php?IdStruk=$IdStruk&IdPasien=$IdPasien");
}else{
header("Location:./jalan_panjang.php?IdStruk=$IdStruk&IdPasien=$IdPasien");
}
?>
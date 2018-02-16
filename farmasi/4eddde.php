<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$tgl1 = $_GET["tgl1"];
$tgl2 = $_GET["tgl2"];
$bln1 = $_GET["bln1"];
$bln2 = $_GET["bln2"];
$thn1 = $_GET["thn1"];
$thn2 = $_GET["thn2"];
$mbak = $_GET["mbak"];
$IdAkunt = $_GET["IdAkunt"];
$Bln = $_GET["Bln"];
$Thn = $_GET["Thn"];
 if($tagih=='lama'){
 header("Location:./dagin_kodok_ga_enak_mas.php?id=$id&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
 }else{
 header("Location:./2D.php?id=$id&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
  }
  ?>
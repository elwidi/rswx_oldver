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
$mas = $_GET["mas"];
$IdAkunt = $_GET["IdAkunt"];
if($mas=='bagong'){
 header("Location:./zx.php?mas=miduk&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
}elseif($mas=='miduk'){
 header("Location:laporan/x.php?mas=miduk&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
}elseif($mas=='supran'){
 header("Location:./x09_8.php?mas=miduk&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
}else{
 //header("Location:./2D.php?tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
  header("Location:./ed_d.php?mas=miduk&tgl1=$tgl1&tgl2=$tgl2&bln2=$bln2&thn2=$thn2&thn1=$thn1&bln1=$bln1");
}
 ?>
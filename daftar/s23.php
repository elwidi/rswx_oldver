<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaDokter  = $_GET["NamaDokter"];
$IdPenjamin = $_GET["IdPenjamin"];
 $NamaPenjamin = $_GET["NamaPenjamin"];
$id = $_GET["id"];
$NamaPoli = $_GET["NamaPoli"];
$IdDokter = $_GET["IdDokter"];
$NamaRujukan = $_GET["NamaRujukan"];
$IdRujukan = $_GET["IdRujukan"];

$IdDept = $_GET["IdDept"];

if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
header("Location:./w2_909.php?NamaRujukan=%&IdDokter=$IdDokter&IdPenjamin=$IdPenjamin&NamaDokter=$NamaDokter&id=$id&IdDept=$IdDept");
}
?>

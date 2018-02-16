<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RegId = $_GET["RegId"];
$id  = $_GET["id"];
$JmlRacik  = $_GET["JmlRacik"];
$IdDepo  = $_GET["IdDepo"];
$Rc = $_GET["Rc"];
$NamaPasien = $_GET["NamaPasien"];
$NoResep = $_GET["NoResep"];

if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
  if($JmlRacik==''){
 echo "HARAP ISIKAN NILAI JML RACIKAN,..........<br>";
  }else{
  $Tgl =date("d-m-y");
  $isi = mysql_query("INSERT INTO `racik_rl` (`id`, `Tgl`, `NoResep`, `JmlRacik`, `Opr`)
   VALUES (NULL, '$Tgl', '$RegId', '$JmlRacik', '$a[Nama]')");
     if($isi){
	 header("Location:./Bptalkah.php?Rc=$Rc&IdDepo=$IdDepo&RegId=$RegId&NoResep=$NoResep&NamaPasien=$NamaPasien");
	 }else{
	 echo "simpan data gagal,....<BR>INSERT INTO `racik_rl` (`id`, `Tgl`, `NoResep`, `JmlRacik`, `Opr`)
   VALUES (NULL, '$Tgl', '$RegId', '$JmlRacik', '$a[Nama]')";
	 }   
  }
}else{
header("Location:./keluar.php");
}
?>
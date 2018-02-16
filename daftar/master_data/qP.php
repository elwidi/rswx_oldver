<?
session_start();
include "../../konek.php";
include "../../ceke.php";
  $NamaPer = $_GET["NamaPer"];
$KodePer = $_GET["KodePer"];
$Alamat = $_GET["Alamat"];
$Contact  = $_GET["Contact"];
$Telp = $_GET["Telp"];
$Fax = $_GET["Fax"];
$Hp = $_GET["Hp"];
$TglJam =date("dmY.H:i:s");
if($NamaPer==''){
echo "HARAP ISIKAN NAMA PERUSAHAAN,....<br>";
}elseif($Alamat==''){
echo "ALAMAT,.....<br>";
}elseif($a[Level]==2 || $a[Level]==24){
$iis = mysql_query("INSERT INTO  `dataperusahaan` (`id`, `NamaPer`, `Alamat`, `Contact`, `Telp`, `Fax`, `Hp`, `Opr`, `TglJam`)
 VALUES (NULL,'$NamaPer', '$Alamat', '$Contact', '$Telp', '$Fax', '$Hp', '$a[Nama]', '$TglJam')");
if($iis){
 header("Location:./xx2.php");
}else{
echo "SIPAN DATA GAGAL,...<br> ";
}

}else{
  }
 ?>
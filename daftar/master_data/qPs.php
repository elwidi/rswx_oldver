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
$iis = mysql_query("UPDATE `dataperusahaan` SET `NamaPer` = '$NamaPer',
`Alamat` = '$Alamat',
`Contact` = '$Contact',
`Telp` = '$Telp',
`Fax` = '$Fax',
`Hp` = '$Hp',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`email` = '$email',
`Kode` = '$Kode' WHERE `dataperusahaan`.`id` ='$id'");
if($iis){
 header("Location:./xx2.php");
}else{
echo "SIPAN DATA GAGAL,...<br> ";
}

}else{
  }
 ?>
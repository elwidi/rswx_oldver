<?
session_start();
include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
if($a[Level]==12){
$Tgl=date("d.m.Y");
$Jam=date("H:i:s");
  $gatr = mysql_query("UPDATE `tabelbiayax` SET `NamaBiaya` = '$NamaBiaya',
`Svip` = '$Svip',
`Vip` = '$Vip',
`Satu` = '$Satu',
`Dua` = '$Dua',
`Tiga` = '$Tiga',
`Icu` = '$Icu',
`Nicu` = '$Nicu',
`Picu` = '$Picu',
`Hcu` = '$Hcu',
`Isolasi` = '$Isolasi',
`Perina` = '$Perina',
`Neonatologi` = '$Neonatologi',
`Rujuk` = '$Rujukan',
`Opr` = '$a[id]',
`Tgl` = '$Tgl',
`Jam` = '$Jam' WHERE `id` ='$id'");
 if($gatr){
 header("Location:./makan_gemblong.php?NamaBiaya=$NamaBiaya");
 }else{
 echo "SIMPAN DATA GAGAL,....<br>";
 }
 }

?>
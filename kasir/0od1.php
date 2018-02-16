<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdikkdfd_Dffd =  mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$dapa =  mysql_fetch_array($kdikkdfd_Dffd);
if(!$dapa[id]){
echo "RECORD SET TIDAK LENGKAP";
 }elseif($a[Level]==9){
 $TglJam=date("d.m.Y-H:i:s"); 
$iman = mysql_query("INSERT INTO `akti_perawat` 
(`id`, `Tgl`, `Bln`, `Thn`, `IdPasien`, `NoPasien`, `NamaPasien`, `Keterangan`, `IdOpr`, `Nama`, `TglJam`, `Jenis`) VALUES
 (NULL, '$Tgl', '$Bln', '$Thn', '$id', '$dapa[NoPasien]', '$dapa[NamaPasien]', '$Keterangan', '$a[id]', '$a[User]', '$TglJam', '$Jenis')");
 header("Location:./ahu.php");
}?>
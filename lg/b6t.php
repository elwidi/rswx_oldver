<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
if($IdObat>0){
$dyhhd_Dfd = mysql_query("SELECT * FROM dataobat WHERE id=$IdObat");
$uf = mysql_fetch_array($dyhhd_Dfd);
}
$idk_kdf = mysql_query("SELECT * FROM settingsatuan WHERE IdBarang='$uf[id]'");
$ub = mysql_fetch_array($idk_kdf);
$TotalQty=$Qty*$ub[Pengali];
$TotBeli=$Qty*$uf[HargaBeli];
$TotJual=$Qty*$uf[HargaJual];

$Tgl=date("d");$Bln=date("m"); $Thn=date("Y");
$Jam=date("H:i:s");
$sim = mysql_query("INSERT INTO  `oder_1detil` 
(`id`, `IdTxn`, `IdOpr`, `Opr`, `IdObat`, `NamaObat`, `Qty`, `IdSatuan`, `NamaSatuan`, `TotalQty`, `Tgl`, `Bln`, `Thn`, `Jam`, 
`HargaBeli`, `HargaJual`, `TotBeli`, `TotJual`, `Stat`, `IdUnit`, `Keterangan`) VALUES 
(NULL, '$id', '$a[id]', '$a[Nama]', '$IdObat', '$uf[NamaObat]', '$Qty', '$ub[IdSatuan]', '$ub[NamaSatuan]',
 '$TotalQty', '$Tgl', '$Bln', '$Thn', '$Jam', '$uf[HargaBeli]', '$uf[HargaJual]', '$TotBeli', '$TotJual', '0','$ok[IdUnit]','$Keterangan')");
}
header("Location:./index.php?ukur=$ukur&id=$id");
?>
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
 $dyhhd_Dfd = mysql_query("SELECT * FROM barang_logistik WHERE id=$IdBarang");
$uf = mysql_fetch_array($dyhhd_Dfd);
 $TotalQty=$Qty*1;
$TotBeli=$Qty*$uf[HargaBeli];
$TotJual=$Qty*$uf[HargaJual];

$Tgl=date("d");$Bln=date("m"); $Thn=date("Y");
$Jam=date("H:i:s");
 
$sim = mysql_query("INSERT INTO  `oder_2detil` 
(`id`, `IdTxn`, `IdOpr`, `Opr`, `IdBarang`, `NamaBarang`, `Qty`, `IdSatuan`, `NamaSatuan`, `TotalQty`, `Tgl`, `Bln`, `Thn`, `Jam`, 
`HargaBeli`, `HargaJual`, `TotBeli`, `TotJual`, `Stat`, `IdUnit`, `Keterangan`,`QtyBeri`,`Stak`) VALUES 
(NULL, '$id', '$a[id]', '$a[Nama]', '$IdBarang', '$uf[NamaBarang]', '$Qty', '$uf[IdSatuan]', '$uf[NamaSatuan]',
 '$TotalQty', '$Tgl', '$Bln', '$Thn', '$Jam', '$uf[HargaBeli]', '$uf[HargaJual]', '$TotBeli', '$TotJual', '0','$ok[IdUnit]','$Keterangan','0','$ok[Stak]')");
}
header("Location:./index.php?ukur=$ukur&id=$id");
 ?>
<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$kdkjfkdfd_Fgfgf = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$uk= mysql_fetch_array($kdkjfkdfd_Fgfgf);
//
//$kdjfkdjf= mysql_query("SELECT  * FROM settingsatuan WHERE id='$IdSatuan'");
//$gg = mysql_fetch_array($kdjfkdjf);
$pao=strlen($uk[NamaBagian]);
if($pao<1){
echo "BIODATA USER ANDA TIDAK LENGKAP....";
}else{
$ldfkldfld = mysql_query("SELECT * FROM barang_logistik WHERE id='$IdBarang'");
$hh = mysql_fetch_array($ldfkldfld);
//
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$Jam=date("H:i:s");
  $TotQty = $Qty;;
 $KeyID="$a[KodeBagian]-$hh[id]";
$TotBeli  = $TotQty*$hh[HargaBeli];
$TotJual  = $TotQty*$hh[HargaJual];
$sim= mysql_query("INSERT INTO  
`stok_opm2` 
(`id`, `KeyID`, `IdBarang`, `NamaBarang`, `IdUnit`, `NamaUnit`, `IdOpr`, `Opr`, `Tgl`, `Bln`, `Thn`, `Jam`, `Qty`, `IdSatuan`, `NamaSatuan`, `TotQty`, `HargaBeli`, `HargaJual`, `TotJual`, `TotBeli`, `Pengali`) VALUES 
(NULL, '$KeyID', '$hh[id]', '$hh[NamaBarang]', '$a[KodeBagian]', 
'$uk[NamaBagian]', '$a[id]', '$a[Nama]', '$Tgl', '$Bln', '$Thn', '$Jam', '$Qty', '$hh[IdSatuan]', '$hh[NamaSatuan]', 
'$TotQty', '$hh[HargaBeli]', '$hh[HargaJual]', '$TotJual', '$TotBeli','$TotQty')");
if($sim){
header("Location:./ela_adik_fito.php");
}else{
echo "SIMPAN DATA GAGAL,...<br>";
}
}
?>
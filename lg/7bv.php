<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$kdkjfkdfd_Fgfgf = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$uk= mysql_fetch_array($kdkjfkdfd_Fgfgf);
//
$kdjfkdjf= mysql_query("SELECT  * FROM settingsatuan WHERE id='$IdSatuan'");
$gg = mysql_fetch_array($kdjfkdjf);
$pao=strlen($uk[NamaBagian]);

if($pao<1){
echo "BIODATA USER ANDA TIDAK LENGKAP....";
}else{
$ldfkldfld = mysql_query("SELECT * FROM dataobat WHERE id='$IdObat'");
$hh = mysql_fetch_array($ldfkldfld);
//
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$Jam=date("H:i:s");
////
 $KeyID="$hh[id]-$Tgl-$Bln-$Thn";
$isik = mysql_query("INSERT INTO  `catat_obat` (`id`, `KeyID`, `Tgl`, `Bln`, `Thn`, `IdObat`, `NamaObat`, `Sumber`) VALUES
 (NULL, '$KeyID', '$Tgl', '$Bln', '$Thn', '$hh[id]', '$hh[NamaObat]','ST')");
//
if($gg[Pengali]>0){
$TotQty = $Qty*$gg[Pengali];
}else{
$TotQty = $Qty;;
}
$KeyID="$a[KodeBagian]-$hh[id]";
$TotBeli  = $TotQty*$hh[HargaBeli];
$TotJual  = $TotQty*$hh[HargaJual];
//
 $Exp="$TglExp-$BlnExp-$ThnExp";
//
$sim= mysql_query("INSERT INTO `stok_opm` 
(`id`, `KeyID`, `IdObat`, `NamaObat`, `IdUnit`, `IdOpr`, `Opr`, `Tgl`, `Bln`, `Thn`, `Jam`, `Qty`, `Hna`, `Exp`)
 VALUES (NULL,'$KeyID', '$IdObat', '$hh[NamaObat]', '$a[KodeBagian]',  '$a[id]','$a[User]',
  '$TglExp', '$BlnExp', '$ThnExp', '$Jam', '$Qty', '$Hna', '$Exp')");
if($sim){
header("Location:./p9.php");
}else{
echo "SIMPAN DATA GAGAL,...<br>";
}
}
?>
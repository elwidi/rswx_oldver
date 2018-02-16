<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$NoTxn="$a[User]-".date("dmy.His");
$Jam=date("H:i:s");
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$kdkdjfkd = mysql_query("SELECT NamaBagian,id FROM Bagian WHERE id='$a[KodeBagian]'");
$aa = mysql_fetch_array($kdkdjfkd);
if(!$aa[id]){
echo "MAAF DATA BAGIAN PADA USER ACCOUNT ADA BELUM DISETTING ADMIN,...<br>SILAHKAN KONTAK ADMIN";
}else{
 $isikan = mysql_query("INSERT INTO  
`oder_2` 
(`id`, `NoTxn`, `Jam`, `Tgl`, `Bln`, `Thn`, `IdOpr`, `Opr`, `IdUnit`, `NamaUnit`, `NamaHari`) VALUES 
(NULL, '$NoTxn', '$Jam', '$Tgl', '$Bln', '$Thn', '$a[id]', '$a[Nama]', '$a[KodeBagian]', '$aa[NamaBagian]','$hari')");
$dhfd = mysql_query("SELECT * FROM  oder_2 WHERE NoTxn='$NoTxn'");
$dapa = mysql_fetch_array($dhfd);
if($dapa[id]){
header("Location:./index.php?ukur=xes3&id=$dapa[id]");
}else{
echo "PROSES DATA GAGAL";
}
}
?>
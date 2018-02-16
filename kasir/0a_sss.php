<?
session_start();
include "../konek.php";
include "../hari.php";
include "../ceke.php";
if($Type==1){
 $PasieR = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
}else{
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
}
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
echo "RECORD SET TIDAK BENAR.....";
}elseif($FiLaDim[EmpatBelas]!='on'){ 
$Jam=date("H:i:s");
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
if($Type==1){
$isi = mysql_query("INSERT INTO  
`diet` (`id`, `IdPasien`, `Tgl`, `Bln`, `Thn`, `Keterangan`, `Opr`, `Jam`, `Type`) VALUES
 (NULL, 'X.$id', '$Tgl', '$Bln', '$Thn', '$Diet', '$a[Nama]', '$Jam','$Type')");
 }else{
$isi = mysql_query("INSERT INTO  
`diet` (`id`, `IdPasien`, `Tgl`, `Bln`, `Thn`, `Keterangan`, `Opr`, `Jam`, `Type`) VALUES
 (NULL, '$id', '$Tgl', '$Bln', '$Thn', '$Diet', '$a[Nama]', '$Jam','$Type')");
 }
 //
 if($Type==1){

 $iiiiii = mysql_query("UPDATE  `diet` SET `Tgl` = '$Tgl',
`Bln` = '$Bln',
`Thn` = '$Thn',
`Keterangan` = '$Diet',
`Opr` = '$a[Nama]',
`Jam` = '$Jam' WHERE  `IdPasien` ='X.$id'");
}else{
 $iiiiii = mysql_query("UPDATE  `diet` SET `Tgl` = '$Tgl',
`Bln` = '$Bln',
`Thn` = '$Thn',
`Keterangan` = '$Diet',
`Opr` = '$a[Nama]',
`Jam` = '$Jam' WHERE  `IdPasien` ='$id'");
}
}else{
 header("Location:../keluar2.php");
}
 header("Location:../keluar2.php");

?>
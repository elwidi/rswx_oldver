<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$datat = mysql_query("SELECT * FROM supplier WHERE id='$id'");
$xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:./kompor.php");
}
$dfldkfld = mysql_query("SELECT NamaObat FROM dataobat WHERE id='$IdObat'");
$hs = mysql_fetch_array($dfldkfld);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
$KeyID="$IdObat-$id";
$TglJam=date("d.m.Y-H:i:s");
if($aku=='iki'){
$dj = mysql_query("DELETE FROM obatsupplier WHERE KeyID='$KeyID'");
}else{
$sim = mysql_query("INSERT INTO  `obatsupplier`
 (`id`, `KeyID`, `IdSupplier`, `NamaSupplier`, `IdObat`, `NamaObat`, `Opr`, `TglJam`) VALUES
  (NULL, '$KeyID', '$id', '$xs[NamaSuplier]', '$IdObat', '$hs[NamaObat]', '$a[Nama]', '$TglJam')");
  }
header("Location:./u123_123.php?ispa=$ispa&NamaObat=$NamaObat&IdObat=$IdObat&id=$id");
}else{

}?>

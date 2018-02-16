<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

//
$ksk_D = mysql_query("SELECT NamaSuplier,id FROM supplier WHERE id='$IdSupplier'");
$bv = mysql_fetch_array($ksk_D);
//
if($bv[id]<=1000 && $bv[id]>100){
$param="0".$bv[id];
}elseif($bv[id]<=100 && $bv[id]>10){
$param="00".$bv[id];
}elseif($bv[id]>9 && $bv[id]<10){
$param="000".$bv[id];
}else{
$param=$bv[id];
}
$pcd = explode("/",$kk[NoPo]); 
$NoP="$pcd[0]/F$param/$pcd[2]/$pcd[3]";
 $sda = mysql_query("UPDATE `polog77` SET 
`NoPo` = '$NoP',
`Tgl` = '$Tgl',
`Bln` = '$Bln',
`Thn` = '$Thn',
`IdSupplier` = '$IdSupplier',
`NamaSupplier` = '$bv[NamaSuplier]',
`Jenis`='$Jenis' WHERE  `id` =$id");
 //
$KSIKS= mysql_query("UPDATE podetil77 set Jenis='$kk[Jenis]' WHERE IdPo77='$id'");
//
  // if($sda){
 header("Location:./x23.php?id=$id");
//}
}
?>

<?
session_start();
include "../konek.php";
include "../ceke.php";
$juj = mysql_query("SELECT * FROM masterakunt WHERE id='$id'");
$ii = mysql_fetch_array($juj);
if(!$a[id]){
echo "RECORD SET TIDAK DIKENAL";
}elseif($a[Level]==7){
$TglJam=date("d.m.Y-H:i:s");
 $usk = mysql_query("UPDATE `intergrasi1` SET `IdAkunt` = '$id',
`NamaAkunt` = '$ii[NamaAkunt]',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`DK` = 'K' WHERE  `id` ='$Kon'");
if($Kon>=12){
header("Location:../Akuntansi/fito_kakak_ela.php");
}else{
header("Location:../Akuntansi/iin_hari.php");
}
 }else{

}
?>
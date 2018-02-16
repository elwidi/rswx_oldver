<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 $dudddd = mysql_query("SELECT *  FROM  jual_ob_rl_tmp  WHERE id=$id");
$as = mysql_fetch_array($dudddd);
$JumlahHarga=$Qty*$as[Harga];
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
  if($hari=='sabar'){
$dul = mysql_query("UPDATE   jual_ob_rl_tmp SET  Qty='$Qty',Harga='$as[Harga]',
JumlahHarga='$JumlahHarga' WHERE id=$id");
echo "UPDATE   jual_ob_rl_tmp SET  Qty='$Qty',Harga='$as[Harga]',
JumlahHarga='$JumlahHarga' WHERE id=$id<br>";
  }else{
$dul = mysql_query("DELETE FROM  jual_ob_rl_tmp  WHERE id=$id");
}
 if($dul){
 header("Location:./tampil_obrl.php?RegId=$RegId");
 }else{
 echo "PROSES HAPUS DATA GAGAL,....<br>";
 }

}else{
header("Location:./keluar.php");
}
?>
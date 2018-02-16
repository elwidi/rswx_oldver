<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ksjdkds = mysql_query("SELECT * FROM norad WHERE id='$id'");
$ada= mysql_fetch_array($ksjdkds);
$pecah = explode("-",$ada[NoTxn]);
if($pecah[0]=='MM'){

}elseif($pecah[0]=='RL'){
$Reg = "$pecah[1]-$pecah[2]";
$ksji989 = mysql_query("SELECT * FROM txnrad WHERE RegId='$Reg'");
$mb = mysql_fetch_array($ksji989);
header("Location:./dr_e1_00_0_0902.php?id=$mb[id]");
}elseif(!$ada[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$dkjfdkjk = mysql_query("SELECT id FROM rwtjalan WHERE RegId='$ada[NoTxn]'");
$dapat = mysql_fetch_array($dkjfdkjk);
header("Location:./kik_de.php?id=$dapat[id]");
}else{

}
?>

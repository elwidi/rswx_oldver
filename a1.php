<?php 
if(!isset($_SESSION))
{
session_start();
}
$UserID = $_POST["UserID"];
$PasW = $_POST["PasW"];
include "konek.php";
 $Pj_pas  = strlen($PasW);
 $awal=0;
$pj = strlen($PasW);
 
while($awal<$pj){
// $ambil .=ord(substr($PasW,$awal,1));
$ambil = $PasW;
$awal++; } 
  $passe = mysql_query("SELECT * FROM konco WHERE   User='$UserID' AND Pass='$ambil'");
$dap = mysql_fetch_array($passe);
$bel=date("Hsi");
$Tangg=date("d-m-Y");
$JamR = date("H:i:s");
if($dap[id]){
 $_SESSION['used']= "$UserID";
$_SESSION['pas']="$ambil";
$_SESSION['IdOpppppppp']=$dap[id];
 $bare=date("dmyHis");
 $_SESSION['waktu']="$bare";
  header("Location:./3w.php");  
 }else{
  header("Location:./index.php?as=3");
 }
 
?>
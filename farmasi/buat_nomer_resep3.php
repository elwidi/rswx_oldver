<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RL = $_GET["RL"];
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
  $ada_nor = mysql_query("SELECT NoResep,id FROM  rl_resep ORDER BY  id DESC");
$dapat = mysql_fetch_array($ada_nor);
$pokoki = explode("-",$dapat[NoResep]);
//---------------------
$teg = date("d")-0;
$wul=date("m").date("y");
$kIj = mysql_query("SELECT NoResep FROM rl_resep WHERE NoResep='$RL-$teg-$wul-1' ORDER BY  id DESC");
$ii = mysql_fetch_array($kIj);
if(!$ii[NoResep]){
   $num = 1;    
 }else{
   $num = $pokoki[3]+1;   
}
//---------------------

$NoResep="$RL-$teg-$wul-$num";
   $JamKI = date("H:i:s");
   $Tgto= date("d/m/y");
   $Tg=date("d");
      $Bl=date("m");
	     $Th=date("Y");
   $isikan = mysql_query("INSERT INTO `rl_resep` (`id`, `NoResep`, `Jam`, `Tgl`, `Opr`, `TglTx`, `BlnTx`, `ThnTX`) VALUES
   (NULL, '$NoResep', '$JamKI', '$Tgto', '$a[Nama]','$Tg','$Bl','$Th')");
	
  if($isikan){
 header("Location:./Bpkrifai.php?RegId=$NoResep");
 }else{
 
 }
}else{
header("Location:./keluar.php");
}
?>
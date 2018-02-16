<?
session_start();
include "../konek.php";
include "../ceke.php";
 $id = $_GET["id"];
$aku = $_GET["aku"];
$Rc = $_GET["Rc"];
$NoResep = $_GET["NoResep"];
   $ada_nor = mysql_query("SELECT NoResep,id FROM  rj_resep WHERE NoResep like 'RL%' ORDER BY  id DESC");
$dapat = mysql_fetch_array($ada_nor);
$pokoki = explode("-",$dapat[NoResep]);
//---------------------
$teg = date("d")-0;
$tah=date("y");
      $wul=date("m");
$kIj = mysql_query("SELECT NoResep FROM rj_resep WHERE NoResep='RL-$teg-$wul$tah-1'");
$ii = mysql_fetch_array($kIj);
if(!$ii[NoResep]){
   $num = 1;   
}else{
   $num = $pokoki[3]+1; 
}
//---------------------
$NoResep="RL-$teg-$wul$tah-$num";
    $JamKI = date("H:i:s");
   $Tgto= date("d/m/y");
   $BlK=date("m"); $TgK=date("d"); $ThK=date("Y");
    $isikan = mysql_query("INSERT INTO `rj_resep` (`id`, `NoResep`, `Jam`, `Tgl`, `Opr`, `Tg`, `Bl`, `Th`, `IdPasien`, `Resep`) VALUES
   ('', '$NoResep', '$JamKI', '$Tgto', '$a[Nama]','$TgK','$BlK','$ThK','$ii[id]','$a[KodeBagian]')");
    
   if($isikan){
   //
   echo "SELECT id FROM rj_resep WHERE NoResep='$NoResep'";
   
   $kdidkdidk= mysql_query("SELECT id FROM rj_resep WHERE NoResep='$NoResep'");
   $nb = mysql_fetch_array($kdidkdidk);
   //
 header("Location:./adik_dhimas.php?id=$nb[id]&aku=$aku&Rc=$Rc");
  }else{
  echo "INSERT INTO `rj_resep` (`id`, `NoResep`, `Jam`, `Tgl`, `Opr`, `Tg`, `Bl`, `Th`, `IdPasien`) VALUES
   ('', '$NoResep', '$JamKI', '$Tgto', '$a[Nama]','$TgK','$BlK','$ThK','$id')</b>";  
   }  
 ?>
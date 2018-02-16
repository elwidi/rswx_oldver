<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$h = $_GET["h"];
$NoResep = $_GET["NoResep"];
$id = $_GET["id"];
 $umbu = mysql_query("SELECT * FROM rl_resep WHERE NoResep='$f[NoResep]'");
$ii = mysql_fetch_array($umbu);
  $JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
 $juyX = 1; $nomX=1;
$ddtx = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=1"); 
while($ssx = mysql_fetch_array($ddtx)){
  if($ssx[TypeJual]==1){ 
}else{    } 
$sayangx = $sayangx + $ssx[JumlahHarga];//+$gu[Racikan];
   $nomX++; } 

 
 $ddtz = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=2");
while($ssz = mysql_fetch_array($ddtz)){
  if($ssz[TypeJual]==1){ 
}else{  } 
$sayangz = $sayangz + $ssz[JumlahHarga];//+$gu[Racikan];
   $nomZ++; } 
 
 $ddtz2 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=3");
while($ssz2 = mysql_fetch_array($ddtz2)){
  if($ssz2[TypeJual]==1){ echo "<i>";  //echo number_format($ss[JumlahHarga]);  echo "</i>"; 
}else{ echo number_format($ssz2[JumlahHarga]); } 
$sayangz2 = $sayangz2 + $ssz2[JumlahHarga];//+$gu[Racikan];
 $nomZ2++; }


$juyZ3 = 4; $nomZ3=1;
$ddtz3 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=4");
while($ssz3 = mysql_fetch_array($ddtz3)){
  if($ssz3[TypeJual]==1){ 
}else{  } 
$sayangz3 = $sayangz3 + $ssz3[JumlahHarga];//+$gu[Racikan];
  $nomZ3++; }

  $ddtz5 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual=1 AND stat=5");
while($ssz5 = mysql_fetch_array($ddtz5)){
 if($ssz5[TypeJual]==1){  
}else{  } 
$sayangz5 = $sayangz5 + $ssz5[JumlahHarga];  $nomZ5++; }
  
 
 if($sayangz5>0){
 $sayangz5= $sayangz5+$gu[Racikan];
 }
  if($sayangx>0){
 $sayangx= $sayangx+$gu[Racikan];
 }
   if($sayangz>0){
 $sayangz= $sayangz+$gu[Racikan];
 }
    if($sayangz2>0){
 $sayangz2= $sayangz2+$gu[Racikan];
 }
     if($sayangz3>0){
 $sayangz3= $sayangz3+$gu[Racikan];
 }
$sub_rac = $sayangx+$sayangz+$sayangz2+$sayangz3+$sayangz5;
   $juy2=1;
  
$ddt2 = mysql_query("SELECT * FROM jual_ob_rl WHERE RegId='$ii[NoResep]' AND TypeJual!=1");
while($ss2 = mysql_fetch_array($ddt2)){
  if($ss2[TypeJual]==1){ 
}else{  } 
$sayang2 = $sayang2 + $ss2[JumlahHarga];
  $juy2++; } 
  $Bay =   $Ppn+$sub_rac+$sayang2;
   
  ?>
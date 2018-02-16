<?
session_start();
include "../konek.php";
include "../salaman.php";
 $umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);

$NoResep=$nn[NoResep];
  $JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
  $ddt = mysql_query("SELECT * FROM jualobat WHERE  JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=1 ORDER BY apa_r DESC");
while($ss = mysql_fetch_array($ddt)){
 $sayang = $sayang + $ss[JmlHargaBeli];//+$gu[Racikan];
  }
  // racikan 2
  $ddt2 = mysql_query("SELECT * FROM jualobat WHERE     JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=2 ORDER BY apa_r DESC");
while($ss2 = mysql_fetch_array($ddt2)){
 $sayang2 = $sayang2 + $ss2[JmlHargaBeli];//+$gu[Racikan];
  }
  // racikan 3
  $ddt3 = mysql_query("SELECT * FROM jualobat WHERE    JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=3 ORDER BY apa_r DESC");
while($ss3 = mysql_fetch_array($ddt3)){
 $sayang3 = $sayang3 + $ss3[JmlHargaBeli];//+$gu[Racikan];
  }
  // racikan 4
  $ddt4 = mysql_query("SELECT * FROM jualobat WHERE    JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=4 ORDER BY apa_r DESC");
while($ss4 = mysql_fetch_array($ddt4)){
 $sayang4 = $sayang4 + $ss4[JmlHargaBeli];//+$gu[Racikan];
  }
 // racikan 5
  $ddt5 = mysql_query("SELECT * FROM jualobat WHERE    JamTran='$NoResep' AND Qty>0 AND apa_r=1 AND stat=5 ORDER BY apa_r DESC");
while($ss5 = mysql_fetch_array($ddt5)){
 $sayang5 = $sayang5 + $ss5[JmlHargaBeli];//+$gu[Racikan];
  } 

  $ddt6 = mysql_query("SELECT * FROM jualobat WHERE    JamTran='$NoResep' AND Qty>0 AND apa_r!=1 ORDER BY apa_r DESC");
while($ss6 = mysql_fetch_array($ddt6)){
	if($hh[KodePer]==83){
	 $sayang6 = $sayang6 + $ss6[RevKary]; ; 
 	}else{
	 $sayang6 = $sayang6 + $ss6[JmlHargaBeli]; 
  }
  } 
   if($sayang>0){
  $sayang = $sayang + $gu[Racikan];
  }
   if($sayang2>0){
  $sayang2 = $sayang2 + $gu[Racikan]; 
  }
   if($sayang3>0){
  $sayang3 = $sayang3 + $gu[Racikan];
  }
    if($sayang4>0){
  $sayang4 = $sayang4 + $gu[Racikan];
  }
   if($sayang5>0){
  $sayang5 = $sayang5 + $gu[Racikan];
  } $totK =ceil($sayang+$sayang2+$sayang3+$sayang4+$sayang5+$sayang6);
	 if($baks==2){   }else{
	 echo number_format($totK);   
  } $ta_s = $ta_s + $totK;
  $totK =0;
  $sayang=0;
  $sayang2=0;
  $sayang3=0;
  $sayang4=0;
  $sayang5=0;
  $sayang6=0;//  
   ?> 
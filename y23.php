<?php 
session_start();
include "konek.php";
include "ceke.php";
$hajahn_0098sdsndjnsnsjd = mysql_query("SELECT * FROM vasa where id='271275'");
$banbs = mysql_fetch_array($hajahn_0098sdsndjnsnsjd);
$cs=explode(".",$banbs[Vsk]);
 $sdsdsddsdsdss=$cs[0]; 
 
 $pend_124555=0;
 $vgafagafa_ojjnnn = strlen($sdsdsddsdsdss);
while($pend_124555<10){
$bag89988_0998hnnmn = (ord(substr($sdsdsddsdsdss,$pend_124555,1))+9);
 
if($bag89988_0998hnnmn>=120){
$bag89988_0998hnnmn=97;
}else{
$bag89988_0998hnnmn=$bag89988_0998hnnmn;
}
$nama_dapa.=chr($bag89988_0998hnnmn);
  $pend_124555++;
 $bag89988_0998hnnmn='';}  
 $c7uy = mysql_select_db("$nama_dapa");
if($c7uy){
  
}else{
header("Location:./keluar.php");
} 
 
?>
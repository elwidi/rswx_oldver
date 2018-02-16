<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$dataa = mysql_query("SELECT * FROM labumum WHERE id=$id");
$z = mysql_fetch_array($dataa);
   if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){ 
  $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$z[RegId]'  ORDER BY IdBiaya,id");
while($xx = mysql_fetch_array($kju)){

$Hasil="Hasil_$xx[id]";
  
  $Hasil = $$Hasil; 
  				$mkm = mysql_query("UPDATE cetak_hasil_lab SET Hasil='$Hasil'  WHERE id='$xx[id]'");
  				}// end of while
}else{
 }?>
 <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="d12.php?fito=<? echo $id; ?>&ak=1";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</html>
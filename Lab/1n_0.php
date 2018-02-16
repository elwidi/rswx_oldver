<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
 $dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
 $kaylaIsnaAkmalian = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$z[RegId]'");
 $h3 = mysql_fetch_array($kaylaIsnaAkmalian);
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){ 
  $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$z[RegId]'  ORDER BY IdBiaya,id");
while($xx = mysql_fetch_array($kju)){

$Hasil=$_GET["Hasil_$xx[id]"];
echo "$Hasil c<br>";
 $Satuan=$_GET["Satuan_$xx[id]"];
$NilaiNormal=$_GET["NilaiNormal_$xx[id]"];
  $Keterangan=$_GET["Keterangan_$xx[id]"];
 
 				$mkm = mysql_query("UPDATE cetak_hasil_lab SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
				MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan' WHERE id='$xx[id]'");
				 
 				}// end of while
}else{
 }?>
 <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="hsl_lab.php?fito=<? echo $id; ?>&ak=1";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</html>
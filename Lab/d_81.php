<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$z = mysql_fetch_array($dataa);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 && $z[TglKeluar]==0){
//
 
 if($Yara=='meter'){
 $kju = mysql_query("SELECT * FROM cetak_hasil_sub_labinap WHERE  RegId='$z[MstKey]' AND NoBukti='LAB-$NoBukti'  ORDER BY IdBiaya,id");
 }else{
   $kju = mysql_query("SELECT * FROM cetak_hasil_labinap  WHERE RegId='$z[MstKey]' AND NoBukti='LAB-$NoBukti'  ORDER BY IdBiaya,id");
   }
while($xx = mysql_fetch_array($kju)){

$Hasil=$_GET["Hasil_$xx[id]"];
$Satuan=$_GET["Satuan_$xx[id]"];
$NilaiNormal=$_GET["NilaiNormal_$xx[id]"];
  $Keterangan=$_GET["Keterangan_$xx[id]"];

 $Satuan=$_GET["Satuan_$xx[id]"];
$NilaiNormal=$_GET["NilaiNormal_$xx[id]"];
  $Keterangan=$_GET["Keterangan_$xx[id]"];
 
				 if($Yara=='meter'){
  $mkm = mysql_query("UPDATE cetak_hasil_sub_labinap SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
				MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan' WHERE id='$xx[id]'");
				 }else{
 				$mkm = mysql_query("UPDATE cetak_hasil_labinap SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
				MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan' WHERE id='$xx[id]'");
 
				  
				}
				  
 				}// end of while
}else{
  }
   
  ?>
  <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c_c1.php?NoBukti=<? echo $NoBukti; ?>&id=<? echo $id;?>";
 self.close();
-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</html>
 
 
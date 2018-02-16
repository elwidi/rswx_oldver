<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$z = mysql_fetch_array($dataa);
 if($a[Level]==12 ){
//
 
 $kju = mysql_query("SELECT * FROM cetak_hasil_sub_labinap WHERE RegId='$z[MstKey]' AND NoBukti ='LAB-$NoBukti'");
while($xx = mysql_fetch_array($kju)){

$Hasil="Hasil_$xx[id]";
$Satuan="Satuan_$xx[id]";
$NilaiNormal="NilaiNormal_$xx[id]";
  $Keterangan="Keterangan_$xx[id]";

 $Keterangan = $$Keterangan; 
 $Hasil = $$Hasil; 
 $NilaiNormal = $$NilaiNormal; 
 $Satuan = $$Satuan; 
 
  $mkm = mysql_query("UPDATE cetak_hasil_sub_labinap SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
				MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan' WHERE id='$xx[id]'");
				
				  
 				}// end of while
}else{
  }
   
  ?>
  <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cx_c12.php?NoBukti=<? echo $NoBukti; ?>&id=<? echo $id;?>";
self.close();
-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</html>
 
 
<?
session_start();
include "../konek.php";
include "../ceke.php";
 $dataa = mysql_query("SELECT * FROM labumum WHERE id=$id");
$z = mysql_fetch_array($dataa);

if($a[Level]==12){
 //
  $jkop = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$IdCucu'");
  while($sp =  mysql_fetch_array($jkop)){
 $jdjdd = mysql_query("SELECT * FROM hasilcuculab3 WHERE Dimas='$sp[id]'");
  $wp = mysql_fetch_array($jdjdd);
  $pcrt = explode("-",$sp[IdBiaya]);
  $Hasil="Hasil_$sp[id]";
$Satuan="Satuan_$sp[id]";
$NilaiNormal="NilaiNormal_$sp[id]";
  $Keterangan="Keterangan_$sp[id]";

 $Keterangan = $$Keterangan; 
 $Hasil = $$Hasil; 
 $NilaiNormal = $$NilaiNormal; 
 $Satuan = $$Satuan; 
 //
 $TglJam=date("d.m.Y-H:i:s");
     $Dimas="$z[id]-$pcrt[1].$sp[id]";
 $isis = mysql_query("INSERT INTO  `hasilcuculab3`
  (`id`, `IdPasien`, `NamaBiaya`, `Hasil`, `NilaiNormal`, `Satuan`, `Keterangan`, `Dimas`, `Opr`, `TglJam`, `RegId`) 
  VALUES (NULL, '$z[id]','$sp[NamaBiaya]','$Hasil', '$NilaiNormal', '$Satuan','$Keterangan', '$Dimas',
  '$a[Nama]','$TglJam','$z[RegId]')");
   echo "INSERT INTO  `hasilcuculab3`
  (`id`, `IdPasien`, `NamaBiaya`, `Hasil`, `NilaiNormal`, `Satuan`, `Keterangan`, `Dimas`, `Opr`, `TglJam`, `RegId`) 
  VALUES (NULL, '$z[id]','$sp[NamaBiaya]','$Hasil', '$NilaiNormal', '$Satuan','$Keterangan', '$Dimas',
  '$a[Nama]','$TglJam','$z[RegId]')<br>";
  if(!$isis){
  $k= mysql_query("UPDATE hasilcuculab3 SET Hasil='$Hasil',RegId='$z[RegId]' where Dimas='$Dimas'");
  ?>
 
  <?
  }  }
	}else{
	
	}	 ?>   <html>
  <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
 window.opener.location.href="12_0k.php?id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
  <body onLoad="win44()">
   </body>
  </html>
 
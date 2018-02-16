<?
session_start();
include "../konek.php";
include "../ceke.php";
 $ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
//
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE IdSubLab='$ceka'");
$mm = mysql_fetch_array($kju);
//
 $jkop = mysql_query("SELECT COUNT(id) AS kk FROM sublab_2 WHERE IdBiaya='$mm[IdBiaya]-$mm[IdSubLab]'");
$ada = mysql_fetch_array($jkop);
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 && $ada[kk]>0){
$FDFDDDF = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$mm[IdBiaya]-$mm[IdSubLab]'");
while($xx = mysql_fetch_array($FDFDDDF)){
				
				 $kunci="$ela-$xx[id]";
				
$Hasil="Hasil_$xx[id]";
$Satuan="Satuan_$xx[id]";
$NilaiNormal="NilaiNormal_$xx[id]";
  $Keterangan="Keterangan_$xx[id]";

 $Keterangan = $$Keterangan; 
 $Hasil = $$Hasil; 
 $NilaiNormal = $$NilaiNormal; 
 $Satuan = $$Satuan; 
  				$TglJam=date("d.m.Y-H:i:s");
 			$mkn = mysql_query("INSERT INTO  `cetak_hasil_sublab` 
			(`id`, `RegId`, `IdBiaya`, `level`, `IdSubLab`, `NamaBiaya`, `Hasil`, `Satuan`, `NilaiNormal`,
			 `MaxP`, `MinP`, `MinW`, `MaxW`, `Keterangan`, `Opr`, `TglJam`) 
			 VALUES (NULL, '$kp[id]', '$ceka', '$xx[level]', 
			 '$kunci', '$xx[NamaBiaya]', '$Hasil', '$Satuan', '$NilaiNormal', '$xx[MaxP]', '$xx[MinP]', '$xx[MinW]',
			  '$xx[MaxW]', '$Keterangan', '$a[Nama]', '$TglJam')");
 				 if(!$mkn){
				$mkm = mysql_query("UPDATE cetak_hasil_sublab SET Hasil='$Hasil',Satuan='$Satuan',NilaiNormal='$NilaiNormal',
				MaxP='$MaxP',MinP='$MinP',MinW='$MinW',MaxW='$MaxW',Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdSubLab='$kunci'");
  				}
				 
 
 				
			 
}				 
} ?> 
 <html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ff1s_0.php?fito=<? echo $fito; ?>&ak=1";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>

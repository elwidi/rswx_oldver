<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($NamaBiaya==''){
echo "HARAP ISIKAN NAMA BIAYA / PEMERIKSAAN ";
}elseif($a[Level]==12){
$Tgl=date("d.m.Y");
$Jam=date("H:i:s");
	$IMPN = mysql_query("INSERT INTO `tabelbiayax` (`id`, `NamaBiaya`, `Svip`, `Vip`, `Satu`, `Dua`, `Tiga`, `Icu`, `Nicu`, `Picu`, `Hcu`, `Isolasi`, `Perina`, `Neonatologi`, `Rajal`, `Rujuk`, `Opr`, `Tgl`, `Jam`, `Kelompok1`, `Kelompok2`, `Kelompok3`) VALUES
	 (NULL,'$NamaBiaya','$Svip','$Vip','$Satu','$Dua','$Tiga','$Icu','$Nicu','$Picu','$Hcu','$Isolasi','$Perina','$Neonatologi',
	 '$Rajal','$Rujukan','$a[Nama]','$Tgl','$Jam',' ',' ',' ')");
 header("Location:./makan_gemblong.php");
}else{

}  ?>
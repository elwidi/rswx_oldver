<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
 if(!$ii[id]){
 header("Location:./obat.php");
 }
 $NamaSat = mysql_query("SELECT NamaSatuan FROM satuan WHERE id='$IdSatuan'");
$bx = mysql_fetch_array($NamaSat);

 $KeyId=$IdSatuan."-".$id;
if($IdSatuan=='-'){
echo "HARAP TENTUKAN satuan,.....<br>";
}else{
$TglJam =date("d.m.Y-H:i:s");
if($IdSatuan==35){
$Pengali=1;
}else{
$Pengali=$Pengali;
}
     $isi = mysql_query("INSERT INTO 
	 `settingsatuan` (`id`, `IdBarang`, `KeyID`, `IdSatuan`, `NamaSatuan`, `Pengali`, `Opr`, `TglJam`)
	  VALUES (NULL, '$id', '$KeyId', '$IdSatuan', '$bx[NamaSatuan]', '$Pengali', '$a[Nama]', '$TglJam')");
	 if($isi){
	 header("Location:./bhg.php?id=$id");
	 }else{
	 echo "SIMPAN DATA GAGAL,....<br>INSERT INTO 
	 `SettingSatuan` (`id`, `IdBarang`, `KeyID`, `IdSatuan`, `NamaSatuan`, `Pengali`, `Opr`, `TglJam`)
	  VALUES (NULL, '$id', '$KeyId', '$IdSatuan', '$bx[NamaSatuan]', '$Pengali', '$a[Nama]', '$TglJam')";
	 }
}
}else{
header("Location:../keluar.php");
}?>

<?
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdPer=$_GET["IdPer"];
$Alasan = $_GET["Alasan"];
	$upda = mysql_query("UPDATE rwtjalan SET  Kartu='$NoKartu' WHERE id='$id'");
 
 $jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$jsmjm = mysql_query("SELECT NamaPer,id FROM dataperusahaan WHERE id='$IdPer'");
$um = mysql_fetch_array($jsmjm);

$Paj = strlen($Alasan);
if(!$um[id]){
header("Location:./index.php");
}elseif($Paj<4){
echo "ALASAN KURANG MINIMAL 5 KARAKTER,... ALASAN YANG ANDA KETIK : $Alasan";
}elseif(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d-m-Y:H:i:s");
	$sim = mysql_query("INSERT INTO  
	`alasanupdate` (`id`, `IdJalan`, `DtLama`, `DtBaru`, `Opr`, `TglJam`, `Alasan`) 
	VALUES (NULL, '$id', '$uu[NamaPer]', '$um[NamaPer]', '$a[Nama]', '$TglJam','$Alasan')");
	if($sim){
	$upda = mysql_query("UPDATE rwtjalan SET KodePer='$IdPer',NamaPer='$um[NamaPer]',Kartu='$NoKartu' WHERE id='$id'");
	}
	 header("Location:./0w.php?id=$id");
}
?>